<?PHP
    header("Content-Type: text/html; charset=utf8");
    include('connect.php');//連結資料庫
    $name=$_POST['name']//post獲取表單裡的name
    $passowrd = $_POST['password'];//post獲得使用者密碼單值

    if ($name && $passowrd){//如果使用者名稱、帳號和密碼都不為空
        $sql = "select * from `user` where user_name = '$name'and user_password='$passowrd'";//檢測資料庫是否有對應的username和password的sql
        $result = mysql_query($link,$sql);//執行sql
        
    }
    else{//如果使用者名稱或密碼有空
        echo "表單填寫不完整";
        echo ?>" 
        <script>
        setTimeout(function(){window.location.href='index.html';},1000);
        </script>";<?php
        //如果錯誤使用js 1秒後跳轉到登入頁面重試;
    }
    mysql_close();//關閉資料庫
?>