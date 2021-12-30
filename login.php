<?PHP
    //header("Content-Type: text/html; charset=utf8");
    include('connect.php');//連結資料庫
    $name=$_POST['name'];//post獲取表單裡的name
    $password = $_POST['password'];//post獲得使用者密碼單值
    $password_hash=password_hash($password,PASSWORD_DEFAULT);//hash加密
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = "SELECT * FROM user WHERE user_name ='".$username."'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1 && $password==mysqli_fetch_assoc($result)["password"]){
            session_start();
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            //這些是之後可以用到的變數
            $_SESSION["id"] = mysqli_fetch_assoc($result)["id"];
            $_SESSION["username"] = mysqli_fetch_assoc($result)["username"];
            header("location:首頁.html");
        }else{
                function_alert("帳號或密碼錯誤"); 
            }
    }
        else{
            function_alert("Something wrong"); 
        }
    
        // Close connection
        mysqli_close($link);
    
    function function_alert($message) { 
          
        // Display the alert box  
        echo "<script>alert('$message');
         window.location.href='index.php';
        </script>"; 
        return false;
    } 
?>