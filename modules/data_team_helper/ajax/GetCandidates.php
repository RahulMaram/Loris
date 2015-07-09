<?php
header("content-type:application/json");
ini_set('default_charset', 'utf-8');

require_once "Database.class.inc";
require_once "NDB_Client.class.inc";

//TODO: create different querys for instrument and visit set

$db =& Database::singleton();


if ((!isset($_REQUEST['instrument'])
    || (!empty($_REQUEST['instrument'])
        && $_REQUEST['instrument'] == 'All Instruments'))
){
    $query = "SELECT DISTINCT ses.candID FROM session AS ses JOIN test_battery
                AS tst ON ses.Visit_label = tst.Visit_label WHERE ses.candID LIKE '%{:data}%'";
    $result = $db->pselect($query, array('data' => $_REQUEST["query"]));
}

else {
    $query = "SELECT DISTINCT ses.candID FROM session AS ses JOIN test_battery AS tst ON ses.Visit_label = tst.Visit_label WHERE tst.Test_Name = :NAM";
    $testname = Utility::getTestNameUsingFullName($_REQUEST['instrument']);
    $result = $db->pselect($query, array('NAM' => $testname, 'data' => $_REQUEST["query"]));

}
foreach($result as $k=>$v) {
     $flattened_result[$k] = $v['candID'];
}

$response = array();
//$response["query"] = "2788";     
$response["suggestions"] = $flattened_result;
    print json_encode($response);


?>