<?php
header("Access-Control-Allow-Origin: https://kizuna01.github.io");
require_once "dbtools.php";
$link = create_connect();
//$dbname = "sample01";
if($_POST['table']=="mage"){
    if (isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['AP']) &&isset($_POST['price'])&&isset($_POST['table']) ) {

        $p_id = $_POST['id'];
        $p_name = $_POST['name'];
        $p_AP = $_POST['AP'];
        $p_price = $_POST['price'];
        $p_table = $_POST['table'];
        
        
        
        if ($p_id != "" && $p_name != ""&& $p_AP != ""&& $p_price != "") {
            
            $sql = "UPDATE $p_table SET `name` = '$p_name',  `AP` = '$p_AP', `price` = '$p_price' WHERE `$p_table`.`id` = $p_id;";
            
            if (execute_sql($link, $dbname, $sql)) {
                echo ('{"state":true,"message":"更改成功"}');
            } else {
                echo ('{"state":false,"message":"更改失敗"}');
            }
            mysqli_close($link);
        } else {
            echo ('{"state":true,"message":"法師欄位不允許空白"}');
        }
    } else {
        echo ('{"state":true,"message":"法師欄位錯誤"}');
    }
}else{
    if (isset($_POST['id'])&&isset($_POST['name'])&&isset($_POST['side'])&&isset($_POST['main'])&&isset($_POST['AD']) &&isset($_POST['price'])&&isset($_POST['table']) ) {

        $p_id = $_POST['id'];
        $p_name = $_POST['name'];
        $p_side = $_POST['side'];
        $p_main = $_POST['main'];
        $p_AD = $_POST['AD'];
        $p_price = $_POST['price'];
        $p_table = $_POST['table'];
        
        
        
        if ($p_id != "" && $p_name != ""&& $p_side != ""&& $p_main != "" && $p_AD != ""&& $p_price != "") {
            
            $sql = "UPDATE $p_table SET `name` = '$p_name', `side` = '$p_side', `main` = '$p_main', `AD` = '$p_AD', `price` = '$p_price' WHERE `$p_table`.`id` = $p_id;";
            
            if (execute_sql($link, $dbname, $sql)) {
                echo ('{"state":true,"message":"更改成功"}');
            } else {
                echo ('{"state":false,"message":"更改失敗"}');
            }
            mysqli_close($link);
        } else {
            echo ('{"state":true,"message":"欄位不允許空白"}');
        }
    } else {
        echo ('{"state":true,"message":"欄位錯誤"}');
    }
}



