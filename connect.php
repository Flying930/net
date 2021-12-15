<?php
    $server="us-cdbr-east-05.cleardb.net";//主機
    $db_username="b184b9cfe884e3";//資料庫使用者名稱
    $db_password="53020e02";//資料庫使用者密碼
    $db_database="heroku_d320a3179e97ee9";
    $con = mysql_connect($server,$db_username,$db_password,$db_database);//連結資料庫
    if(!$con){
        die("can't connect".mysql_error());//如果連結失敗輸出錯誤
    }
    mysql_select_db('test',$con);//選擇資料庫（我的是test）
?>