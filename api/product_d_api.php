<?php
header("Access-Control-Allow-Origin: https://kizuna01.github.io");
require_once "dbtools.php";
$link = create_connect();
// $dbname = "sample01";

if (isset($_POST['id'])&&isset($_POST['table'])) {

    $p_id = $_POST['id'];
    $p_table = $_POST['table'];
    if ($p_id!="" && $p_table!="") {
        $sql = "DELETE FROM $p_table WHERE id=' $p_id'";
        
        if (execute_sql($link, $dbname, $sql)) {
            echo ('{"state":true,"message":"刪除成功"}');
        } else {
            echo ('{"state":false,"message":"刪除失敗"}');
        }
        mysqli_close($link);
    } else {
        echo ('{"state":true,"message":"欄位不允許空白"}');
    }
} else {
    echo ('{"state":true,"message":"欄位錯誤"}');
}
