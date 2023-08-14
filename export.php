<?php
require_once 'SimpleXLSX.php';
include_once("xlsxwriter.class.php");

ini_set('memory_limit', '-1');
ini_set('display_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

$filename = "Kalpataru_SEO.xlsx";
header('Content-disposition: attachment; filename="'.XLSXWriter::sanitize_filename($filename).'"');
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate');
header('Pragma: public');

$header = array("TITLE"=>'string',"LOCATION"=>'string',"META TITLE"=>'string',"META DESCRIPTION"=>'string',"META KEYWORDS"=>'string',"H1 TAG"=>'string',"H2 TAG"=>'string',"GOOGLE PIXEL"=>'string',"FACEBOOK PIXEL"=>'string');

$writer = new XLSXWriter();
$writer->writeSheetHeader('Sheet1', $header);
$rows = array();

$result = array("5","7","8");
foreach ($result as $key => $value) {
    $title = "sdfsdfsdgdsgs";
    $location = "sdfsdfsdgdsgs";
    $meta_title = "sdfsdfsdgdsgs";
    $meta_description = "sdfsdfsdgdsgs";
    $meta_tags = "sdfsdfsdgdsgs";
    $h1_tag = "sdfsdfsdgdsgs";
    $h2_tag = "sdfsdfsdgdsgs";
    $google_pixel = "sdfsdfsdgdsgs";
    $facebook_pixel = "sdfsdfsdgdsgs";

    $data1 = array($title,$location,$meta_title,$meta_description,$meta_tags,$h1_tag,$h2_tag,$google_pixel,$facebook_pixel);
    array_push($rows, $data1);
}
$writer->setAuthor('KALPATARU'); 
foreach($rows as $row)
    $writer->writeSheetRow('Sheet1', $row);
$writer->writeToStdOut();
exit(0);

?>