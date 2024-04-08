<?php
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");
$result = mysqli_query($con, "CREATE TABLE `prakwebdb`.`user
(`id` INT NOT NULL,
username VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
PRIMARY KEY (`id`)) ENGINE = InnoDB;");
