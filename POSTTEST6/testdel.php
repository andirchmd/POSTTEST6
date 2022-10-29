<?php
require "config.php";

$id = $_GET["id"];
$query = mysqli_query($db, "SELECT * FROM file_member WHERE id=$id");
$hasil = mysqli_fetch_array($query);
$filename = $hasil['nama_file']; 
// unlink("img/".$filename); 

echo $filename;

// $result = mysqli_query($db, "DELETE FROM member WHERE id = $id");
// $resultfile = mysqli_query($db, "DELETE FROM file_member WHERE id = $id");

// if($result && $resultfile){
//   header('Location: tampil.php');
// } else{
//   header('Location: tampil.php');
// }