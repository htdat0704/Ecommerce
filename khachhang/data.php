<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
   
   $field = $_POST['mtsp'];
   $value = $_POST['value'];
   $editid = $_POST['id'];
   $query = "UPDATE sanpham SET ".$field."='".$value."' WHERE id=".$editid;
   mysqli_query($con,$query);
   echo 1;