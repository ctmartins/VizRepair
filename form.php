<?php
ini_set('session.save_path', '/tmp');
     error_reporting(E_ALL);
ini_set("display_errors",1);
ini_set("memory_limit","1024M");
session_start();

    include('openDB.php');
	$erro="";
	$alignID="";

	$alignID = $_POST['align'];

if(.$alignID.'= 1') {
	$queryOnto1 = 'SELECT classID FROM classOntoInfo WHERE ontologyID = 1';
	$resultOnto1 = mysql_query($queryOnto1);
   	$rowOnto1 = mysql_fetch_array($resultOnto1);
	$ontoID1 = $rowOnto1['classID'];

	$queryClass1 = 'SELECT primary_label FROM classInfo WHERE classID = '.$ontoID1;
	$resultClass1 = mysql_query($queryClass1);
   	$rowClass1 = mysql_fetch_array($resultClass1);
	$classID1 = $rowClass1['primary_label'];

	$queryOnto2 = 'SELECT classID FROM classOntoInfo WHERE ontologyID = 7';
	$resultOnto2 = mysql_query($queryOnto2);
   	$rowOnto2 = mysql_fetch_array($resultOnto2);
	$ontoID2 = $rowOnto2['classID'];

	$queryClass2 = 'SELECT primary_label FROM classInfo WHERE classID = '.$ontoID2;
	$resultClass2 = mysql_query($queryClass2);
   	$rowClass2 = mysql_fetch_array($resultClass2);
	$classID2 = $rowClass2['primary_label'];
}
	
    include('closeDB.php');

?>
