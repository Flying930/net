<?php 
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("錯誤執行");
    }//判斷是否有submit操作
    $name=$_POST['user_id'];//post獲取表單裡的name
    $account=$_POST['user_account']//post獲取表單裡的accountnumber
    $password=$_POST['user_password'];//post獲取表單裡的password
    include('connect.php');//連結資料庫
    $q="insert into user(id,user_id,user_account,user_password) values (null,'$name','$account','$password')";//向資料庫插入表單傳來的值的sql
    $reslut=mysql_query($q,$con);//執行sql
    if (!$reslut){
        die('Error: ' . mysql_error());//如果sql執行失敗輸出錯誤
    }
    else{
        echo "註冊成功";//成功輸出註冊成功
        echo ?>"
        <script>
        setTimeout(function(){window.location.href='index.html';},1000);
        </script>";<?php
    }
    mysql_close($con);//關閉資料庫
?>