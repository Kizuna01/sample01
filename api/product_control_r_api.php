<?php
header("Access-Control-Allow-Origin: https://kizuna01.github.io");
require_once "dbtools.php";
$conn = create_connect();


$Type=$_POST['table'];
if($Type=="mage"){
    $sql = "SELECT * FROM $Type ORDER BY AP";
}else{
    $sql = "SELECT * FROM $Type ORDER BY AD,main,side";
}

$result = execute_sql($conn, $dbname, $sql);
if (mysqli_num_rows($result) >0) {
    $data=array();
    while($row=mysqli_fetch_assoc($result)){
        $data[]=$row;
    }
    
   echo('{"state":true,"message":"資料取得成功","data":'.json_encode($data).'}');
 
} else {
    echo('{"state":false,"message":"查無資料"}');
}
mysqli_close($conn);
?>
