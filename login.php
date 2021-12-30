<?PHP
    //header("Content-Type: text/html; charset=utf8");
    include('connect.php');//連結資料庫
    //$conn=require_once("connect.php");
    $name=$_POST['name'];//post獲取表單裡的name
    $password = $_POST['password'];//post獲得使用者密碼單值
    $password_hash=password_hash($password,PASSWORD_DEFAULT);//hash加密
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $q = "SELECT * FROM user WHERE user_name = '".$name."'";//檢測資料庫是否有對應的username的sql
        //$aa = mysql_query($q,$conn);echo "aa";
        /*if($link->query($q) === TRUE){
            if(mysqli_num_rows($result)==1 && $password==mysqli_fetch_assoc($result)["password"]){
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["name"] = mysqli_fetch_assoc($result)["name"];
                header("url=首頁.html");
            }
            else{function_alert("帳號或密碼錯誤"); }
        }
        else{function_alert("Something wrong");}*/
        //echo mysql_query($q,$conn);
        echo query($q);
    }
    else{//如果使用者名稱或密碼有空
        echo "表單填寫不完整! 2秒後將跳至登入頁面~";
        echo "<a href='index.html'>未成功跳轉頁面請點擊此</a>";
                header("refresh:2;url=index.html");
                exit;
        //如果錯誤 2秒後跳轉到登入頁面重試;
    }
    function function_alert($message) { 
      
        // Display the alert box  
        echo "<script>alert('$message');
         window.location.href='index.html';
        </script>"; 
        return false;
    } 
    mysql_close();//關閉資料庫
?>