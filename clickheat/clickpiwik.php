<?php
/**
 * ClickHeat : Enregistrement d'un clic pour PMV / Logging of a tracked click for PMV
 * 
 * @author Yvan Taviaud - LabsMedia - www.labsmedia.com
 * @since 16/05/2007
**/

define('PIWIK_INCLUDE_PATH', str_replace('/plugins/ClickHeat/libs', '', str_replace('\\', '/', dirname(__FILE__))));

/** Include click file */
include './click.php';
?>