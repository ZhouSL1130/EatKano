<?php
// Change this to your own configuration
$link = new mysqli('localhost','root','1ke2ZCAYQzP0','kano');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "kano_rank";
