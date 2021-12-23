<html>
<body>
<?php
    include('connect.php');//連結資料庫
    //header("Content-Type: text/html; charset=utf8");
    /*if(!isset($_POST['submit'])){
        exit("錯誤執行");
    }//判斷是否有submit操作*/
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST['name'];//post獲取表單裡的name
        $password=$_POST['password'];//post獲取表單裡的password
        $q="INSERT INTO user (user_name,user_password) VALUES ('$name','$password')";//向資料庫插入表單傳來的值的sql
        if ($link->query($q) === TRUE) {
            echo "註冊成功";//成功輸出註冊成功
            echo "<a href='index.html'>未成功跳轉頁面請點擊此</a>";
                header("refresh:3;url=index.html");
                exit;
        } else {
            echo "Error ";
        }
    }
?> 
</body>
</html>