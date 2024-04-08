<?php
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");
$input = mysqli_query($con, "INSERT INTO `user` (`id`, `username
password) VALUES ('1', 'admin', MD5('123'));");
