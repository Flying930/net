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