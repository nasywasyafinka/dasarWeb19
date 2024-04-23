<?php
require_once "Crud.php";
$crud = new Crud();

$id = $_GET['id'];

$tampil = $crud->readById($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jabatan = $_POST['jabatan'];
    $keterangan = $_POST['keterangan'];
    $crud->update($id, $jabatan, $keterangan);
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jabatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-5">
        <form action="" method="post">
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" required
                    value="<?= $tampil['jabatan']; ?>">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"
                    required><?= $tampil['keterangan'] ?></textarea>
            </div>
            <input type="hidden" name="id" value="<?= $tampil['id']; ?>">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>