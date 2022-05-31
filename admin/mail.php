<?php
session_start();
?>
<html >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
<style >
	body{
	width: 100%;
	height: 100%;
	font-family: 'Alata', sans-serif;
	background-color: #E6E6E6;
	}
  	.navbar
{
	background-color:  #10a3cd !important;
	 
}
.navbar li a {
    color: white !important;
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
</style>
</head>
<body>
<?php @include('layouts/header.php') ?>
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form id="mail-form" >
					<div class="form-group">
						<input type="text" class="form-control" name="subject" required class="form"  required="required">
					</div>
					<div class="form-group">
					 <textarea name="message"  class="form textarea" required="required"></textarea>
					 </div>        			  
					<div class="form-group">
						<input type="submit" id="submit" name="send" class="form-btn semibold" value="Gửi Mail">
					</div>
				</form>				
			</div>
			
		</div>
	</div>   
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function()
  { 
    var submit = $("input[type='submit']");
    submit.click(function()
    {
    	var message = $('#message')
      var data = $('form#mail-form').serialize();
      $.ajax({
          type : 'POST', 
          url : 'mailphp.php',
          
          data : data,
          success : function(data)
          {
          	alert('Gửi mail thành công')
          }
     
  });
  return false;
 });
});
</script>
  </body>

</html>
                           