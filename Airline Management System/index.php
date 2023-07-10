<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
        session_start();
        $_SESSION['username'] = 'Admin';
        $_SESSION['password'] = 'Admin123';    
    ?>
    <div class = "wrapper">
    <h1>Flight Management System</h1>
    <h2>Admin Login</h2>
    <form action="" method ="post">
        <label for="username">Username: </label>
        <input type="text" id= "username" name ="username"> <br> <br>
        <label for="password">Password: </label>
        <input type="password" id= "password" name ="password"> <br> <br>
        <input type="submit" class = "btn" value ="Submit">

    </form>
    </div>

    <?php
    if(isset($_POST['username'])){
       if( $_SESSION['username']== $_POST['username'] && $_SESSION['password']== $_POST['password']){
            header("location: home.php");
     }
     else
            header("location: index.php");
}
    ?>

</body>

</html>