<?php
session_start();
//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=doan2', 'root', '');
$spppp = $_SESSION['sppcm'];
$query = "
SELECT * FROM tbl_comment 
WHERE parent_comment_id = '0' and idsp = '$spppp'
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
  $con=mysqli_connect("localhost","root","","doan2");
  mysqli_set_charset($con, 'UTF8');
  $az = " SELECT * FROM khachhang where id=".$row['comment_sender_name'];
  $lo = mysqli_query($con , $az);
  $dong = mysqli_fetch_array($lo);
   if($dong['idadmin']=='1'){
      $ten = '<b style="color:red">ADMIN</b>';
    }
    else $ten=$dong['hoten'];
  if(isset($_SESSION['admin'])){
  if(($dong['id']==$_SESSION['idkh'])||($_SESSION['admin']=='1'))
  {
 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading"><b style="color:blue">'.$ten.'</b> ( <i>'.$row["date"].'</i> )<a href="abc.php?id='.$row['comment_id'].'"><i style="float:right" class="fa fa-close"></i></a></div>
  <div class="panel-body">'.$row["comment"].' <br><br></div>
  <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
 </div>
 ';
}
else{
  $output .= '
 <div class="panel panel-default">
  <div class="panel-heading"><b style="color:blue">'.$ten.'</b> ( <i>'.$row["date"].'</i> )</i></div>
  <div class="panel-body">'.$row["comment"].'<br><br></div>
  <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
 </div>
 ';
  }}else{
    $output .= '
 <div class="panel panel-default">
  <div class="panel-heading"><b style="color:blue">'.$ten.'</b> ( <i>'.$row["date"].'</i> )</i></div>
  <div class="panel-body">'.$row["comment"].' <br><br><br></div>
  
 </div>
 ';
  }
 $output .= get_reply_comment($connect, $row["comment_id"]);
}


echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
    $con=mysqli_connect("localhost","root","","doan2");
    mysqli_set_charset($con, 'UTF8');
    $az1 = " SELECT * FROM khachhang where id=".$row['comment_sender_name'];
    $lo1 = mysqli_query($con , $az1);
    $dong1 = mysqli_fetch_array($lo1);
    if($dong1['idadmin']=='1'){
      $ten = '<b style="color:red">ADMIN</b>';
    }
    else $ten=$dong1['hoten'];
    if(isset($_SESSION['admin'])){
    if(($dong1['id']==$_SESSION['idkh'])||($_SESSION['admin']=='1'))
  {
     $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading"><b style="color:blue">'.$ten.'</b> ( <i>'.$row["date"].'</i> )<a href="abc.php?id='.$row['comment_id'].'"><i style="float:right" class="fa fa-close"></i></a></div>
    <div class="panel-body">'.$row["comment"].'<br><br></div>
    <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
   </div>
   ';
  }else 
  {
    $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading"><b style="color:blue">'.$ten.'</b> ( <i>'.$row["date"].'</i> )</div>
    <div class="panel-body">'.$row["comment"].'<br><br></div>
    <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
   </div>
   ';
  }}else
  {
    $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading"><b style="color:blue">'.$ten.'</b> ( <i>'.$row["date"].'</i> )</div>
    <div class="panel-body">'.$row["comment"].'<br><br><br></div>
   
   </div>
   ';
  }
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  
  }
 }
 return $output;
}

?>
