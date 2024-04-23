<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pemesanan Kue</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Pemesanan Kue</h2>
    <form id="orderForm" action="process_order.php" method="POST">
      <div class="form-group">
        <label for="cakeType">Jenis Kue:</label>
        <select id="cakeType" name="cakeType" required>
          <option value="cromboloni">Cromboloni</option>
          <option value="tart">Tart</option>
          <option value="milles crepe">Milles Crepe</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tableNumber">Nomor Meja:</label>
        <select id="tableNumber" name="tableNumber" required>
          <?php
          for ($i = 1; $i <= 10; $i++) {
            echo "<option value='$i'>$i</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="topping">Topping:</label>
        <select id="topping" name="topping">
          <option value="coklat">Coklat</option>
       