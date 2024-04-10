<html>

<head>

</head>

<body>
    <?php
    session_start();
    if ($_SESSION['status'] == 'login') {
        echo "selamat datang " . $_SESSION['username'];
    ?>
        <br><a href="sessionLogout.php">Log Out</a>
    <?php
    } else {
        echo "anda belum login. silahkan" ?>
        <a href="sessionLoginForm.html">Log In</a>
    <?php
    }
    ?>
</body>

</html>