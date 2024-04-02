<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br> <!-- Tambahkan elemen span untuk pesan error password -->
        <input type="submit" value="Submit">
    </form>
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Menghentikan pengiriman form

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val(); // Ambil nilai password
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password === "") { // Validasi password harus diisi
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if (password.length < 8) { // Validasi minimal 8 karakter
                    $("#password-error").text("Password minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    $.ajax({
                        type: "POST",
                        url: "proses_validasi.php",
                        data: $("#myForm").serialize(),
                        success: function(response) {
                            // Menangani respons dari server (proses_validasi.php)
                            alert(response);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>