<?php
header("Access-Control-Allow-Origin: https://kizuna01.github.io");
require_once "dbtools.php";
$conn = create_connect();
// $dbname = "sample01"; 

if($_POST['table']=="mage"){
    if (isset($_POST['name']) && isset($_POST['AP']) && isset($_POST['price'])&& isset($_POST['table'])) {

        $p_name = $_POST['name'];
        $p_price = $_POST['price'];
        $p_AP = $_POST['AP'];
        $p_table = $_POST['table'];
    
        if ($p_name != "" && $p_price != "" && $p_AP != "") {
                
            $sql="INSERT INTO $p_table (`name`,`AP`,`price`) VALUES ('$p_name','$p_AP','$p_price')";
                
            if (execute_sql($conn, $dbname, $sql)){
                echo ('{"state":true,"message":"新增成功"}');
            } else {
                echo ('{"state":false,"message":"新增失敗"}');
            }
            
            mysqli_close($conn);
                
            
        } else {
            echo ('{"state":true,"message":"法師欄位不允許空白"}');
        }
    } else {
        echo ('{"state":true,"message":"法師欄位錯誤"}');
    }

}else{
    if (isset($_POST['name']) && isset($_POST['side']) && isset($_POST['main']) && isset($_POST['AD']) && isset($_POST['price'])&& isset($_POST['table'])) {

        $p_name = $_POST['name'];
        $p_price = $_POST['price'];
        $p_side = $_POST['side'];
        $p_main = $_POST['main'];
        $p_AD = $_POST['AD'];
        $p_table = $_POST['table'];
    
        if ($p_name != "" && $p_price != "" && $p_side != "" && $p_main != "" && $p_AD != "") {
                
               
            $sql="INSERT INTO $p_table (`name`, `side`,`main`, `AD`,`price`) VALUES ('$p_name','$p_side','$p_main', '$p_AD','$p_price')";
                
                
            if (execute_sql($conn, $dbname, $sql)){
                echo ('{"state":true,"message":"新增成功"}');
            } else {
                echo ('{"state":false,"message":"新增失敗"}');
            }
            
            mysqli_close($conn);
                
            
        } else {
            echo ('{"state":true,"message":"欄位不允許空白"}');
        }
    } else {
        echo ('{"state":true,"message":"欄位錯誤"}');
    }
}

