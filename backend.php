<?php
    require 'users.php';
    $conn = connect_db();
    if(isset($_POST['signup']) ){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password1 = $_POST['pass1'];
        $password2 = $_POST['pass2'];
        $password;
        if($password1==$password2){
            $password=$password1;
        }
        else{
            echo "パスワードが一致していません。再確認お願いします！";
            exit;
        }
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
        //sanitize your input
        $username = mysqli_real_escape_string($conn, $username);
        $email = mysqli_real_escape_string($conn, $email);
        $passwordHashed = mysqli_real_escape_string($conn, $passwordHashed);
        //check for existing record
        $sql = "SELECT user_info.username FROM user_info WHERE username = '$username'";
        $sql = $conn->query($sql) or die($conn->error);
        $sql = $sql->fetch_assoc();
        if($sql){
            header('location: signup.php');
            exit();
        }else{
            $sql = "INSERT INTO user_info (username, email, password) VALUES ('$username', '$email', '$passwordHashed')";
            $sql = $conn->query($sql);
            if($sql){
                echo "Registration succesful. You may <a href= 'login.php'>login</a> now";
                //header('location: index.php');
                }
                //$sql = $sql->fetch_assoc();
                //echo $username.$email.$password;
                }
            }else if(isset($_POST['login']) ){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
                $sql = "SELECT * FROM user_info WHERE username = '$username'";
                $sql = $conn->query($sql);
                if($sql){
                    $sql = $sql->fetch_assoc();
                    if(password_verify($password, $sql['password'])){
                        session_start();
                        $_SESSION['username'] = $username;
                        echo 'You have successfully logged-in';
                        header('location: account.php');
                    }
                }else{
                    header('location: check.php');
                    exit();
                    }
            }else{
                header('location: check.php');
                 exit();
            }
?>