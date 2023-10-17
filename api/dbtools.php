<?php
header("Access-Control-Allow-Origin: https://kizuna01.github.io");
$dbname = "id21313266_sample02";
    function create_connect(){
        $link=mysqli_connect("localhost","id21313266_ms0728707","@Fbid8361")or die("連線失敗".mysqli_connect_error());
        return $link;
    }

    function execute_sql($link,$dbname,$sql){
        mysqli_select_db($link,$dbname)or die("連線資料庫失敗".mysqli_error($link));
        $result=mysqli_query($link,$sql);
        return $result;
    }
?>