<?phpinclude '../Database/Connect.php';global $conn;if($_SERVER['REQUEST_METHOD'] === 'POST'){    session_start();    $Password = trim($_POST['Password']);    $UserName = trim($_POST['UserName']);    //validation    if(empty($Password) || empty($UserName)){        echo "<span class='alert alert-danger' >Please Complete the filed</span>";    }else{        $sql_query = "SELECT * FROM customer WHERE UserName = '$UserName' AND  Password = md5('$Password')";        $Result = mysqli_query($conn,$sql_query);        if(mysqli_num_rows($Result) > 0){            $Row = mysqli_fetch_assoc($Result);            $_SESSION['status'] = $Row['customerid'];            echo "<span class='alert alert-success' >Successfully Login</span>";        }else{            echo "You are not Registered";        }    }}