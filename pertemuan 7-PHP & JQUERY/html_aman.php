<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>

<body>
    <h2>Form Input PHP</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input:</label>
        <input type="text" name="input" id="input" value="<?php if (isset($_POST['input'])) {
                                                                echo htmlspecialchars($_POST['input']);
                                                            } ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) {
                                                                echo htmlspecialchars($_POST['email']);
                                                            } ?>">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Memeriksa apakah data 'input' telah dikirim
        if (isset($_POST['input'])) {
            // Ambil data 'input' dan lakukan sanitasi
            $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');

            // Langkah 2 dapat dijalankan dengan normal di sini
            // Misalnya:
            echo "<script>";
            echo "alert('Data yang diinputkan adalah: " . $input . "');";
            echo "</script>";
        } else {
            // Jika data 'input' tidak ada
            echo "<script>";
            echo "alert('Data input tidak tersedia.');";
            echo "</script>";
        }

        // Memeriksa apakah data 'email' telah dikirim
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Lanjutkan dengan pengolahan email yang aman
            } else {
                // Tangani input yang tidak valid
            }
        }
    }
    ?>
</body>

</html>