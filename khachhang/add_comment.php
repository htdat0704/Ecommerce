<?php
session_start();

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=doan2', 'root', '');

$error = '';
$comment_content = '';

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];

}

if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment, comment_sender_name, idsp) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name, :id_sp)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $_SESSION['idkh'],
   ':id_sp' => $_SESSION['sppcm']
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>