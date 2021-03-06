<?php
/**
 * ClickHeat : Fichier principal / Main file
 * 
 * @author Yvan Taviaud - LabsMedia - www.labsmedia.com
 * @since 27/10/2006
**/

$__languages = array('bg', 'cz', /*'de',*/ 'en', 'es', 'fr', 'it', 'ja', 'pl', 'ro', 'ru', 'tr', 'uk', 'zh');
$__action = isset($_GET['action']) && $_GET['action'] !== '' ? $_GET['action'] : 'view';

if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] !== '')
{
	$realPath = &$_SERVER['REQUEST_URI'];
}
elseif (isset($_SERVER['SCRIPT_NAME']) && $_SERVER['SCRIPT_NAME'] !== '')
{
	$realPath = &$_SERVER['SCRIPT_NAME'];
}
else
{
	exit(LANG_UNKNOWN_DIR);
}
if (substr($realPath, -1) === '/')
{
	header('Location: '.$realPath.'index.php');
	exit;
}

$dirName = dirname($realPath);
if ($dirName === '/')
{
	$dirName = '';
}
define('CLICKHEAT_PATH', $dirName.'/');
define('CLICKHEAT_INDEX_PATH', 'index.php?');
define('CLICKHEAT_ROOT', str_replace('\\', '/', dirname(__FILE__)).'/');
define('CLICKHEAT_CONFIG', CLICKHEAT_ROOT.'config/config.php');
define('IS_PIWIK_MODULE', false);

/** Improve buffer usage and compression */
if (function_exists('ob_start'))
{
	if (function_exists('ob_gzhandler'))
	{
		ob_start('ob_gzhandler');
	}
	else
	{
		ob_start();
	}
}

/** Loading language according to browser's Accept-Language or cookie «language» */
if (isset($_GET['language']))
{
	$lang = $_GET['language'];
}
elseif (isset($_COOKIE['language']))
{
	$lang = $_COOKIE['language'];
}
elseif (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
{
	$lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
}
if (!isset($lang) || !in_array($lang, $__languages))
{
	$lang = 'en';
}
if (!isset($_COOKIE['language']) || $_COOKIE['language'] !== $lang)
{
	setcookie('language', $lang, time() + 365 * 86400, '/');
}
define('CLICKHEAT_LANGUAGE', $lang);
unset($lang);
include CLICKHEAT_ROOT.'languages/'.CLICKHEAT_LANGUAGE.'.php';

/** If there's no config file, run check script */
if (!file_exists(CLICKHEAT_CONFIG))
{
	if ($__action !== 'check' && $__action !== 'config')
	{
		$__action = 'check';
	}
}
else
{
	include CLICKHEAT_CONFIG;

	if (isset($_COOKIE['clickheat']))
	{
		if ($_COOKIE['clickheat'] === $clickheatConf['adminLogin'].'||'.$clickheatConf['adminPass'])
		{
			/** Everything is fine, admin logged */
			define('CLICKHEAT_ADMIN', true);
		}
		elseif ($_COOKIE['clickheat'] === $clickheatConf['viewerLogin'].'||'.$clickheatConf['viewerPass'])
		{
			/** Viewer logged, force it to 'view' action if not view|generate|png */
			if ($__action !== 'generate' && $__action !== 'png' && $__action !== 'iframe' && $__action !== 'cleaner' && $__action !== 'logout')
			{
				$__action = 'view';
			}
		}
		else
		{
			/** Not logged, send him to login form */
			$__action = 'logout';
		}
	}
	else
	{
		if (isset($_POST['login']) && isset($_POST['pass']))
		{
			if ($_POST['login'] === $clickheatConf['adminLogin'] && md5($_POST['pass']) === $clickheatConf['adminPass'])
			{
				/** Set a session cookie */
				setcookie('clickheat', $clickheatConf['adminLogin'].'||'.$clickheatConf['adminPass'], 0, '/');
				/** Redirect to index.php */
				header('Content-Type: text/html');

				/** Upgrade needed ? */
				include CLICKHEAT_ROOT.'version.php';
				if (!isset($clickheatConf['version']) || $clickheatConf['version'] !== CLICKHEAT_VERSION)
				{
					header('Location: '.CLICKHEAT_INDEX_PATH.'action=config');
				}
				else
				{
					header('Location: '.CLICKHEAT_INDEX_PATH.'action=view');
				}
				exit;
			}
			elseif ($clickheatConf['viewerLogin'] !== '' && $_POST['login'] === $clickheatConf['viewerLogin'] && md5($_POST['pass']) === $clickheatConf['viewerPass'])
			{
				/** Set a session cookie */
				setcookie('clickheat', $clickheatConf['viewerLogin'].'||'.$clickheatConf['viewerPass'], 0, '/');
				/** Redirect to index.php */
				header('Content-Type: text/html');
				header('Location: '.CLICKHEAT_INDEX_PATH.'action=view');
				exit;
			}
		}
		$__action = 'login';
	}
}
if (!defined('CLICKHEAT_ADMIN'))
{
	define('CLICKHEAT_ADMIN', false);
}

/** Specific definitions */
$__screenSizes = array(0 /** Must start with 0 */, 640, 800, 1024, 1280, 1440, 1600, 1800);
$__browsersList = array('all' => '', 'firefox' => 'Firefox', 'msie' => 'Internet Explorer', 'safari' => 'Safari', 'opera' => 'Opera', 'kmeleon' => 'K-meleon', 'unknown' => '');

switch ($__action)
{
	case 'check':
	case 'config':
	case 'view':
	case 'login':
		{
			header('Content-Type: text/html; charset=utf-8');
			include CLICKHEAT_ROOT.'header.php';
			include CLICKHEAT_ROOT.$__action.'.php';
			include CLICKHEAT_ROOT.'footer.php';
			break;
		}
	case 'generate':
	case 'layout':
	case 'javascript':
	case 'latest':
	case 'cleaner':
		{
			header('Content-Type: text/html; charset=utf-8');
			include CLICKHEAT_ROOT.$__action.'.php';
			break;
		}
	case 'iframe':
		{
			$group = isset($_GET['group']) ? str_replace('/', '', $_GET['group']) : '';
			if (is_dir($clickheatConf['logPath'].$group))
			{
				$webPage = array('/');
				if (file_exists($clickheatConf['logPath'].$group.'/url.txt'))
				{
					$f = fopen($clickheatConf['logPath'].$group.'/url.txt', 'r');
					if ($f !== false)
					{
						$webPage = explode('>', trim(fgets($f, 1024)));
						fclose($f);
					}
				}
				echo $webPage[0];
			}
			break;
		}
	case 'png':
		{
			$imagePath = $clickheatConf['cachePath'].(isset($_GET['file']) ? str_replace('/', '', $_GET['file']) : '**unknown**');

			header('Content-Type: image/png');
			if (file_exists($imagePath))
			{
				readfile($imagePath);
			}
			else
			{
				readfile(CLICKHEAT_ROOT.'images/warning.png');
			}
			break;
		}
	case 'layoutupdate':
		{
			$group = isset($_GET['group']) ? str_replace('/', '', $_GET['group']) : '';
			$url = isset($_GET['url']) ? $_GET['url'] : '';
			$left = isset($_GET['left']) ? (int) $_GET['left'] : 0;
			$center = isset($_GET['center']) ? (int) $_GET['center'] : 0;
			$right = isset($_GET['right']) ? (int) $_GET['right'] : 0;

			if (!is_dir($clickheatConf['logPath'].$group) || $url === '')
			{
				exit('Error');
			}

			$f = fopen($clickheatConf['logPath'].$group.'/url.txt', 'w');
			fputs($f, $url.'>'.$left.'>'.$center.'>'.$right);
			fclose($f);

			echo 'OK';
			break;
		}
	case 'logout':
		{
			setcookie('clickheat', '', time() - 30 * 86400, '/');
			header('Location: index.php');
			exit;
			break;
		}
	default:
		{
			header('HTTP/1.0 404 Not Found');
			exit('Error, page not found');
			break;
		}
}
?>
