<?php
session_start();
?>
<html >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	   	<link rel="stylesheet" href="cssa/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="cssa/mobile.css">
	<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
<style >
  	
	body{
	width: 100%;
	height: 100%;
	font-family: 'Alata', sans-serif;
	background-color: #E6E6E6;
	}
	
	.hue{
	font-size:30px;
	color: white;
	}
	.navbar li a{
	color: white !important;
	padding-top:10px;
	border: 0 solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
  outline-color: rgba(255, 255, 255, 0.5);
  outline-offset: 0px;
  text-shadow: none;
  transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);

	}
	.navbar li a:hover{
	border: 1px solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0.5), 0 0 20px rgba(255, 255, 255, 0.2);
  outline-color: rgba(255, 255, 255, 0);
  outline-offset: 15px;
  text-shadow: 1px 1px 2px #427388;
  padding: 5px;
	}
    body {
		font-family: 'Varela Round', sans-serif;
		background-color: #10a3cd;
	}
	.modal-login {
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 1px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;
        position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
    .modal-login .form-group {
        margin-bottom: 20px;
    }
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 30px; 
        font-size: 15px;
        transition: all 0.5s;
	}
    .modal-login .form-control {
        font-size: 13px;
    }
    .modal-login .form-control:focus {
        border-color: #a177ff;
    }
	.modal-login .hint-text {
		text-align: center;
		padding-top: 10px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
	.modal-login .btn {
		background: #10a3cd;
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: blue;
	}
	.modal-login .hint-text a {
		color: #999;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
	.navbar
{
  background-color: #10a3cd !important;
   
}
.navbar li a {
    color: white !important;
}
</style>
</head>
<body>
<?php @include('layouts/header.php') ?>
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Đăng kí</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form action="xulydangki.php" method="get">
					<div class="form-group">
						Username:
						<input type="text" name="user" class="form-control"  required="required">
					</div>
					<div class="form-group">
						Password:
						<input type="password" name="mk" class="form-control" required="required">
					</div>
					<div class="form-group">
						Họ và Tên:
						<input type="text" name="ten" class="form-control"  required="required">
					</div>
					<div class="form-group">
						Ngày sinh:
						<input type="date" name="date" class="form-control"  required="required">
					</div>
					<div class="form-group">
						Điện thoại:
						<input type="number" name="dt" class="form-control" required="required">
					</div>
					<div class="form-group">
						Địa chỉ:
						<input type="text" name="diachi" class="form-control" required="required">
					</div>
					<div class="form-group">
						Email:
						<input type="email" name="email" class="form-control"  required="required">
					</div>
					<div class="form-group">
						<input type="submit"  class="btn btn-primary btn-block btn-lg" value="Đăng kí">
					</div>
				</form>				
			</di>
		</div>
	</div>   
</body>
</html>               