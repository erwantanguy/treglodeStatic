<?php
/**
 * 
 * 
 * @author Thomas Brodmann
 * @since 12/06/2008
**/

define('LANG_USER', 'Benutzer');
define('LANG_PASSWORD', 'Passwort');
define('LANG_LOGIN', 'Anmeldung');
define('LANG_LOGIN_ERROR', 'Anmeldefehler, falscher Benutzer oder Passwort');
define('LANG_LOGOUT', 'Logout');
define('LANG_UNKNOWN_DIR', 'Kann das aktuellen Verzeichnis nicht definieren, wenden Sie sich bitte an uns');
define('LANG_DAYS', 'M,D,M,D,F,S,S');
define('LANG_RANGE', 'Tag,Woche,Monat');
define('LANG_MONTHS', '0,Januar,Februar,M&auml;rz,April,Mai,Juni,July,August,September,Oktober,November,Dezember');
define('LANG_SITE', 'Webseite');
define('LANG_GROUP', 'Gruppe');
define('LANG_BROWSER', 'Browser');
define('LANG_ALL', 'Alle');
define('LANG_UNKNOWN', 'Andere/unbekannt');
define('LANG_EXAMPLE_URL', 'Webseite');
define('LANG_LAYOUT', 'Gruppen Layout');
define('LANG_LAYOUT_FIXED', 'Fixed content/menu');
define('LANG_LAYOUT_LIQUID', 'Liquid content/menu (automatic adjusting to available space)');
define('LANG_LAYOUT_NONE', 'Margin (no content), liquid');
define('LANG_LAYOUT_0', 'Liquid content and menu');
define('LANG_LAYOUT_1', 'Fixed left menu, liquid content');
define('LANG_LAYOUT_2', 'Fixed centered content (automatic left and right margins)');
define('LANG_LAYOUT_3', 'Fixed content stuck to the left (automatic right margin)');
define('LANG_LAYOUT_4', 'Fixed right menu, liquid content');
define('LANG_LAYOUT_5', 'Fixed left and right menus, liquid content');
define('LANG_LAYOUT_6', 'Fixed content stuck to the right (automatic left margin)');
define('LANG_LAYOUT_LEFT', 'Fixed left width (pixels)');
define('LANG_LAYOUT_CENTER', 'Fixed central width (pixels)');
define('LANG_LAYOUT_RIGHT', 'Fixed right width (pixels)');
define('LANG_SCREENSIZE', 'Bildschirmgr&ouml;&szlig;e');
define('LANG_HEATMAP', 'Zeige als W&auml;rmekarte');
define('LANG_LATEST_CHECK', 'Update');
define('LANG_LATEST_KO', 'Can\'t find dynamically the latest available version, yours is %s, the latest one read directly from Labsmedia\'s website is');
define('LANG_LATEST_OK', 'Sie haben die neueste verf&uuml;gbare Version (%s)');
define('LANG_LATEST_NO', 'Your version (%s) isn\'t the latest available one (%s). You can download the latest one on our website:');
define('LANG_LOG_MY_CLICKS', 'Eigene Klicks speichern?');
define('LANG_JAVASCRIPT_ADMIN_COOKIE', 'Um die Statistik nicht zu manipulieren,\nsollten Sie Ihre eigenen Klicks nicht speichern\n\nOK = Eigene Klicks speichern\nAbbrechen = Eigene Klicks nicht speichern');
define('LANG_JAVASCRIPT', 'F&uuml;r die Seite die Sie studieren wollen, f&uuml;gen Sie bitte den unten aufgef&uuml;rten Javascript-Code in Ihrer Website ein');
define('LANG_JAVASCRIPT_IMAGE', 'Zeigt das ClickHead-Logo auf der Seite die untersucht wird: ');
define('LANG_JAVASCRIPT_SHORT', 'Kompakter Code (3 Zeilen)');
define('LANG_JAVASCRIPT_QUOTA', 'Max. Klicks pro Seite und Besucher, neben Klicks werden nicht gespeichert (0 = kein Limit, 3 ist eine gute Wahl)');
define('LANG_JAVASCRIPT_SITE', 'Website-Name (erlaubte Zeichen: A-Z, a-z, 0-9, Unterstrich, Bindestrich, Punkt)');
define('LANG_JAVASCRIPT_GROUP', 'Gruppenname, zur Gruppe &auml;hnliche Seiten f&uuml;r eine einfachere Analyse');
define('LANG_JAVASCRIPT_GROUP0', 'Stichwort');
define('LANG_JAVASCRIPT_GROUP1', 'erlaubte Zeichen: A-Z, a-z, 0-9, Unterstrich, Bindestrich, Punkt');
define('LANG_JAVASCRIPT_GROUP2', 'Verwendung des Titels der Webseite (<a href="http://www.labsmedia.com/clickheat/performance.html" target="_blank">not recommended</a>)');
define('LANG_JAVASCRIPT_GROUP3', 'Verwendung der Internetadresse der Webseite (<a href="http://www.labsmedia.com/clickheat/performance.html" target="_blank">not recommended</a>)');
define('LANG_JAVASCRIPT_PASTE', 'Kopieren und f&uuml;gen Sie den Code unten auf Ihren Seiten ein, kurz vor Ende der Seite (vor dem &lt;/body&gt; tag):');
define('LANG_JAVASCRIPT_DEBUG', 'Sobald der Code auf Ihren Seiten eingef&uuml;gt ist, vergessen Sie nicht zu testen ob der Code korrekt funktioniert. Sie testen Ihre Seite mit dem <span class="error">debugclickheat</span>  Parameter. Zum Beispiel f&uuml;r http://www.site.com/index.html geben Sie http://www.site.com/index.html <span class="error">?debugclickheat</span> ein. Wenn Sie auf ein Problem sto&szlig;en sollten, kontaktieren Sie mich.');
define('LANG_NO_CLICK_BELOW', 'keine Klicks aufgezeichnet unterhalb dieser Linie'); // Leave this line in English please
define('LANG_ERROR_GROUP', 'Unknown group. _JAVASCRIPT_');
define('LANG_ERROR_DATA', 'No logs for the selected period (first think removing filters: browser, screensize). _JAVASCRIPT_');
define('LANG_ERROR_JAVASCRIPT', 'Did you correctly installed Javascript code on your webpages?');
define('LANG_ERROR_FILE', 'Can\'t open log file');
define('LANG_ERROR_SCREEN', 'Non-standard screen size');
define('LANG_ERROR_LOADING', 'Erzeuge Grafik, bitte warten...');
define('LANG_ERROR_FIXED', 'All widths are fixed, that is not possible. Please change one of your layout width above.');
define('LANG_DEFAULT', 'Vorgabe');
define('LANG_CHECKS', 'Preliminary checks');
define('LANG_CHECK_WRITABLE', 'Write permissions in configuration directory');
define('LANG_CHECK_NOT_WRITABLE', 'PHP hasn\'t got write permission in the configuration directory');
define('LANG_CHECK_GD', 'GD graphic library');
define('LANG_CHECK_GD_IMG', 'imagecreatetruecolor() unavailable, can\'t create images (with good quality), check that GD is installed');
define('LANG_CHECK_GD_ALPHA', 'imagecolorallocatealpha() unavailable, can\'t create transparent images (you can ignore this, but transparency is really recommended)');
define('LANG_CHECK_GD_PNG', 'imagepng() unavailable, can\'t create PNG images, sorry');
define('LANG_CHECKS_OK', 'Next step: configuration');
define('LANG_CHECKS_KO', 'One or more tests have failed. Please correct problems and refresh this page.');
define('LANG_CONFIG', 'Konfiguration');
define('LANG_CONFIG_HEADER_HEATMAP', 'W&auml;rme-Karte Einstellungen');
define('LANG_CONFIG_HEADER_DISPLAY', 'Gro&szlig;es Display');
define('LANG_CONFIG_HEADER_SECURITY', 'Sicherheit');
define('LANG_CONFIG_HEADER_LOGIN', 'Zugangs Daten');
define('LANG_CONFIG_LOGPATH', 'Log-Dateien-Verzeichnis');
define('LANG_CONFIG_LOGPATH_DIR', 'Logfiles directory doesn\'t exist. Please create it');
define('LANG_CONFIG_LOGPATH_KO', 'Logfiles directory doesn\'t have write permissions, please give it write permission for PHP user');
define('LANG_CONFIG_CACHEPATH', 'Tempor&auml;re Dateien-Verzeichnis');
define('LANG_CONFIG_CACHEPATH_DIR', 'Temporary files directory doesn\'t exist. Please create it');
define('LANG_CONFIG_CACHEPATH_KO', 'Temporary files directory doesn\'t have write permissions, please give it write permission for PHP user');
define('LANG_CONFIG_REFERERS', 'Domain-Namen (getrennt durch Komma) erlaubt, sich anzumelden Klicks auf diesem Server');
define('LANG_CONFIG_GROUPS', 'Gruppen Namen (getrennt durch Komma) erlaubt, sich anzumelden Klicks auf diesem Server');
define('LANG_CONFIG_FILESIZE', 'Maximale Gr&ouml;&szlig;e der Sicherungsdateien in KB (1000 Klicks sind etwa 25KB, 0 = keine Gr&ouml;&szlig;enbeschr&auml;nkung)');
define('LANG_CONFIG_CHECK', 'Konfiguration Pr&uuml;fen');
define('LANG_CONFIG_MEMORY', 'Speicher Limit (Vorgabe php.ini Wert: %dMB, Grenzen: von %d bis %dMB, aber <a href="http://www.labsmedia.com/clickheat/performance.html" target="_blank">seien Sie vorsichtig mit hohen Werten</a>)');
define('LANG_CONFIG_MEMORY_KO', 'please stay in the specified range');
define('LANG_CONFIG_STEP', 'Klicks Gruppierung von X*X Pixel Zonen (beschleunigt das anzeigen der w&auml;rme Karte)');
define('LANG_CONFIG_STEP_KO', 'zones can\'t be under 1x1 pixels');
define('LANG_CONFIG_DOT', 'W&auml;rme Karte punkt gr&ouml;&szlig;e (Pixel)');
define('LANG_CONFIG_DOT_KO', 'dot size can\'t be zero');
define('LANG_CONFIG_PALETTE', 'Wenn Sie rote Quadrate in der w&auml;rme Karte sehen m&ouml;chten aktivieren Sie dieses Kontrollk&auml;stchen');
define('LANG_CONFIG_HEATMAP', 'Als W&auml;rme-Karte anzeigen (und nicht als X Klicks anzeigen)');
define('LANG_CONFIG_FLASHES', 'Objekte ausblenden'); 
define('LANG_CONFIG_IFRAMES', 'Bilder ausblenden'); 
define('LANG_CONFIG_YESTERDAY', 'Statistiken zeigen, mit gestern beginnen (und nicht als heute)');
define('LANG_CONFIG_ALPHA', 'Transparenz Ebene (0 => 100)');
define('LANG_CONFIG_FLUSH', 'Automatisches l&ouml;schen der Statistik die &auml;lter als x Tage sind (0 = alle Dateien behalten, nicht empfohlen)');
define('LANG_CONFIG_START', 'Erster Tag der Woche');
define('LANG_CONFIG_START_M', 'Montag');
define('LANG_CONFIG_START_S', 'Sonntag');
define('LANG_CONFIG_ADMIN_LOGIN', 'Administrator-Kennung');
define('LANG_CONFIG_ADMIN_PASS', 'Administrator-Passwort (geben Sie es zweimal ein)');
define('LANG_CONFIG_VIEWER_LOGIN', 'Besucher-Kennung (falls leer, ist das Konto deaktiviert)');
define('LANG_CONFIG_VIEWER_PASS', 'Besucher-Passwort (geben Sie es zweimal ein)');
define('LANG_CONFIG_LOGIN', 'identifier must be at least 4 characters');
define('LANG_CONFIG_PASS', 'password is empty');
define('LANG_CONFIG_MATCH', 'passwords don\'t match');
define('LANG_CONFIG_SAVE', 'Konfiguration Speichern');
define('LANG_CLEANER_RUNNING', 'Cleaning in progress...');
define('LANG_CLEANER_RUN', 'Cleaning finished: %d files and %d directories have been deleted');
define('LANG_CANCEL', 'Abbrechen');
define('LANG_UPGRADE', 'Upgrade');
define('LANG_UPGRADE_NEXT', 'Check your configuration, then save it to finish upgrade');
?>
