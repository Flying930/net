<html>
<body>
<?php
    include('connect.php');//連結資料庫 
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("錯誤執行");
    }//判斷是否有submit操作
    $name=$_POST['name'];//post獲取表單裡的name
    $account=$_POST['account'];//post獲取表單裡的accountnumber
    $password=$_POST['password'];//post獲取表單裡的password
    $q="insert into `user`(`user_id`,`user_account`,`user_password`) values ('$name','$account','$password')";//向資料庫插入表單傳來的值的sql
    $reslut=mysql_query($q,$link);//執行sql
    if(!$reslut){
        echo "註冊失敗"
    }
    else  {echo "註冊成功";}

?> 
</body>
</html>