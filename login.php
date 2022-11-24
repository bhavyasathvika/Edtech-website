<?php
    $host="localhost";
    $user="root";
    $password="";
    $db='javatpoint';
    $cred='login';
    $conn=mysqli_connect($host,$user,$password,$db);
    // mysql_select_db();

    if (isset($_POST['submit'])){
        $user=$_POST['user'];
        $pass=($_POST['pass']);
        $query="select * from login where username='$user' and password='$pass'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){
echo "You have sucessfully logged in";
header("location: intro.html");
                exit();
        }
else{
echo "Invalid Credentials";
                exit();
}
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    

</head>
<body>

    <div class="alert-box">
        <p class="alert"></p>
    </div>
<div class="card-body">
<form action="#" method="post" align="center">
    <div class="form">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <label><b>USERNAME</b></label>
        &nbsp&nbsp<input name="user" type="username" placeholder="username" autocomplete="off" class="username" required><br><br>
        <label><b>PASSWORD<b></label>
        &nbsp&nbsp<input name="pass" type="password" placeholder="password" autocomplete="off" class="password" required><br><br>
        &nbsp&nbsp&nbsp<input type="submit" name="submit" value="LOGIN"/>
    </div>
</form>
</div>
    
</body>
</html>