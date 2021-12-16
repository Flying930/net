<html>
<body>
<?php
    include('connect.php');//連結資料庫
echo "AA";
    
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("錯誤執行");
    }//判斷是否有submit操作
    echo "adf";
    $name=$_POST['name'];//post獲取表單裡的name
    $account=$_POST['account'];//post獲取表單裡的accountnumber
    $password=$_POST['password'];//post獲取表單裡的password
    echo "AAA=$name,$account,$password";
    $q="insert into `user`(`user_id`,`user_account`,`user_password`) values ('$name','$account','$password')";//向資料庫插入表單傳來的值的sql
    echo "Q=$q";
    echo "LINK=$link";
    return;
    if ($link->query($q) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $q . "<br>" . $link->error;
    }

?> 
</body>
</html>