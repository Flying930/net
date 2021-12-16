<html>
<body>
<?php
    include('connect.php');//連結資料庫
    $link = new mysqli_connect( 
        'us-cdbr-east-05.cleardb.net',  // MySQL主機名稱 
        'b184b9cfe884e3',       // 使用者名稱 
        '53020e02',  // 密碼 
        'heroku_d320a3179e97ee9');   
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("錯誤執行");
    }//判斷是否有submit操作
    $name=$_POST['name'];//post獲取表單裡的name
    $account=$_POST['account'];//post獲取表單裡的accountnumber
    $password=$_POST['password'];//post獲取表單裡的password
    echo "AAA=$name,$account,$password";
    $q="insert into `user`(`user_id`,`user_account`,`user_password`) values ('$name','$account','$password')";//向資料庫插入表單傳來的值的sql
    echo "Q=$q";
    echo "LINK=$link";

    if ($link->query($q) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $q . "<br>" . $link->error;
    }

?> 
</body>
</html>