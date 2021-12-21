<html>
<body>
<?php
    include('connect.php');//連結資料庫
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("錯誤執行");
    }//判斷是否有submit操作
    $name=$_POST['name'];//post獲取表單裡的name
    $password=$_POST['password'];//post獲取表單裡的password
    echo "AAA=$name,$account,$password";
    $q="use `heroku_d320a3179e97ee9`; insert into `user`(`user_id`,`user_password`) values ('$name','$password')";//向資料庫插入表單傳來的值的sql
    echo "Q=$q";return;
    echo "LINK=$link";
    //return;
    $reslut=mysql_query($link,$q);//執行sql
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
    //try{
    /*if ($link->query($q) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $q . "<br>" . $link->error;
    }*/
?> 
</body>
</html>