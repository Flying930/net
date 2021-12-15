<html>
<body>
<?php
// 建立MySQL的資料庫連接 
$link = @mysqli_connect( 
            'us-cdbr-east-05.cleardb.net',  // MySQL主機名稱 
            'b184b9cfe884e3',       // 使用者名稱 
            '53020e02',  // 密碼 
            'heroku_d320a3179e97ee9');  
if ( !$link ) {
   echo "MySQL資料庫連接錯誤!<br/>";
   exit();
}
else {
   echo "MySQL資料庫test連接成功!<br/>";
}
mysqli_close($link);  // 關閉資料庫連接
?>
<?php 
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("錯誤執行");
    }//判斷是否有submit操作
    $name=$_POST['user_id'];//post獲取表單裡的name
    $account=$_POST['user_account'];//post獲取表單裡的accountnumber
    $password=$_POST['user_password'];//post獲取表單裡的password
    
?> 
</body>
</html>