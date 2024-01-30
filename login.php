<?php
include 'config.php';
?>

<?php
$username = $pass = ''; 

if(isset($_POST['login'])){
   if(!empty($_POST['user-name']) && !empty($_POST['pass'])){
    $username = $_POST['user-name'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password ='$pass' ";
    $result = mysqli_query($conn,$sql);

    if($result){
        if(mysqli_num_rows($result) > 0){
            header("location:home.php");
            session_start();
            $_SESSION['username'] = $username;
    }else{
        echo "incorrect username or password";
    };  
    };

   };
}

?>