<?php
session_start();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <style>
    	html, body {
	width: 100%;
	height: 100%;
	font-family: 'Alata', sans-serif;
	font-size: 18px;
	color: #222;
}
.navbar
{
	background-color:  #10a3cd !important;
	 
}
.navbar li a {
    color: white !important;
}
.phanmot
{
	background-color: #009fe3;
	display:block;
	color: #ffffff;
	text-align: center;
}
ul
{
	list-style-type: none;
}
.phanhai li a
{
	float: left;
	text-decoration: none;
	color: black;
	margin-top:0;
	padding: 5px;
}
.phanhai a:hover
{
	color: #009fe3;
}
.phanba div a
{
	text-decoration: none;
	color: black;
	position: absolute;
	left:44px;
	margin-top:15px;
	border: 1px solid black;
	background-color: #f4f4f4 ! important;
}
.phanba a:hover
{
	background-color: #009fe3 ! important;
}

.phanbon .row span.hop
{
	border: 1px solid black;
}

.phanbon .row .giamgia
{
	text-align: center;
	border: 1px solid black;
	border-radius: 20px;
	background-color: #b2b2b2 !important
}
.view a:hover
{
	background-color: #009fe3;
}

footer {
  background-color: #10a3cd ;
  color: #d5d5d5;

}
.row #psau
{
  margin-left:40px;
}
 span.button
{
  background-color: blue;
  color: white;
}
.row #psau #name
{
  margin-left: 40px;
}
.phantam
{
  margin-top:30px;
  font-size:15px;
}
ul
{
  list-style-type: none;
}
.phantam .row ul li a
{
  text-decoration: none;
  color:white;
}
.title
{
  color: black;
  font-weight: bold;
  font-size:15px;
}
#mot a:hover
{
  color: #3cc9c9;
}
.phanchinh .row ul li img
{
  list-style-type: none;
  float: right;
  padding: 3px; 
}
@media screen and (max-width: 576px)
{
  .phanchinh .row #hinhanh
  {
    display: none;
  }
}
@media screen and (max-width: 768px)
{
  .phanchinh .row #hinhanh
  {
    display: none;
  }
}
.nut
{
	background-color: #009fe3;
	font-size: 20px;
	color: white;
}
.navbar li a:hover{
	border: 1px solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0.5), 0 0 20px rgba(255, 255, 255, 0.2);
  outline-color: rgba(255, 255, 255, 0);
  outline-offset: 15px;
  text-shadow: 1px 1px 2px #427388;
  padding: 5px;
	}
	body{
	width: 100%;
	height: 100%;
	
	background-color: #E6E6E6;
	}

.panel{
	margin-bottom:20px;
	background-color:#fff;
	border:1px solid transparent;
	border-radius:4px;
	-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);
	box-shadow:0 1px 1px rgba(0,0,0,.05)
}
.panel-body{
	padding:15px
}
.panel-heading{
	padding:10px 15px;
	border-bottom:1px solid transparent;
	border-top-left-radius:3px;
	border-top-right-radius:3px}
.panel-footer{
	padding:10px 12px;
	background-color:#f5f5f5;
	border-top:1px solid #ddd;
	border-bottom-right-radius:3px;
	border-bottom-left-radius:3px
}
.panel-default{
	border-color:#ddd
	}
.panel-default>.panel-heading{
	color:#333;
	background-color:#f5f5f5;
	border-color:#ddd
	}
.panel-default>.panel-heading+.panel-collapse>.panel-body{
	border-top-color:#ddd
	}
.panel-default>.panel-heading .badge{
	color:#f5f5f5;
	background-color:#333
	}
.panel-default>.panel-footer+.panel-collapse>.panel-body{
		border-bottom-color:#ddd
	}
    </style>
</head>
<body>
	<?php 
		$_SESSION['sppcm']=$_GET['id'];
		$id=$_GET['id'];
		$con=mysqli_connect("localhost","root","","doan2");
		mysqli_set_charset($con, 'UTF8');
		if(isset($_SESSION['user'])) 
		{
		$als= "SELECT * from khachhang where username='".$_SESSION['user']."'";
		$ax= mysqli_query($con,$als);
		$row= mysqli_fetch_array($ax);
		}
		if((isset($_SESSION['user']))&&(isset($_SESSION['pass']))&&(isset($_SESSION['admin'])))
		{

		if(($_SESSION['user']==$row['username'])&&($_SESSION['pass']==$row['password'])&&($_SESSION['admin']=='0'))
		{	
		include('layouts/headerlogin.php');
		}
		if(($_SESSION['user']==$row['username'])&&($_SESSION['pass']==$row['password'])&&($_SESSION['admin']=='1'))
		{	
		include('layouts/headerloginadmin.php');
		}
	}
	else include('layouts/header.php');

		$sql ="SELECT * from sanpham where id='$id'";
	 	mysqli_set_charset($con, 'UTF8');
	 	$ketqua=mysqli_query($con,$sql);
	 	$dong=mysqli_fetch_array($ketqua);
		?>
		<div class="container-fluid">
		<div class="row" style="background-color: #E6E6E6">
			<div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xs-1">
	<img src='images/abc.png'  class="img-thumbnail img-responsiv sticky-top" style="width:auto; height:auto; margin-top:100px; margin-bottom:100px">
		</div>
		<div class="col-10 col-sm-10 col-md-10 col-lg-10">
				<a   href="product.php"><button type="button" class="btn btn-link" style="border-color:black!important"><i  class="fa fa-mail-reply-all"></i> Back </button></a>
			
<!--content-->
<div class="phanbon">
	<br><br>
		<div class="row">
			<div class="col-12 col-sx-12 col-sm-12 col-md-12 col-lg-4">
				<img class="img-fluid img-thumbnail img-responsive" style="width:380px; height:300px" src="../admin/images/<?php echo $dong['id']?>.png"/>
			</div>
			<div class="col-12 col-sx-12 col-sm-12 col-md-12 col-lg-4">
				<br>
				<p ><span style="font-size: 22px; font-weight: bold;"><?php echo $dong['tensp'] ?></span><br></p>
				<p ><span style="font-size: 20px; font-weight: bold;"><?php echo number_format($dong['gia']) ?> VNĐ</span></p>
				<?php
				if($dong['soluong']==0)
				{
					echo '<p ><span style="font-size: 18px; font-weight: bold; color:red"> Hết hàng</span></p>';
				}
				else 
				{
					echo '<p ><span style="font-size: 18px; font-weight: bold; color:blue"> Còn hàng</span></p>';
				}
				?> 
				<?php
					if(isset($_SESSION['admin']))
					{
					if($_SESSION['admin']==1)
					{ 
				?> <span style="font-size: 20px;font-weight: bold;font-style: italic">Mô tả sản phẩm:</span>
				 <div contentEditable='true' class='edit' id='mtsp_<?php echo $dong['id'] ?>'> 
				<p > <span style="font-size: 18px;"><?php echo $dong['mtsp'] ?></span></p>
					</div>
				<?php
					}
					else
					{
				?>
					<p > <span style="font-size: 20px;font-style: italic ;font-weight: bold;">Mô tả sản phẩm:</span><br><span style="font-size: 18px;"><?php echo $dong['mtsp'] ?></span></p>
					<?php
					} }
					else
						{
				?>
					<p > <span style="font-size: 20px;font-style: italic ;font-weight: bold;">Mô tả sản phẩm:</span><br><span style="font-size: 18px;"><?php echo $dong['mtsp'] ?></span></p>
					<?php
					} 
					?>
				
			</div>
				<div class="col-12 col-sx-12 col-sm-12 col-md-12 col-lg-4">
				<br>
				<br>
				<table style="width:100%; font-size:17px;" class="table table-bordered">
					<?php 
						$id=$_GET['id'];
						$con=mysqli_connect("localhost","root","","doan2");
					 	$sql ="SELECT * from sanpham where id='$id'";
					 	mysqli_set_charset($con, 'UTF8');
					 	$ketqua=mysqli_query($con,$sql);
					 	$dong=mysqli_fetch_array($ketqua);
					?>
				
					<tr>
						<td style="font-weight: bold;">Made in</td>
						<?php $sql1 = "SELECT * from nuoc where id=".$dong['idnuoc'];
						$ketqua1=mysqli_query($con,$sql1);
						$dong1=mysqli_fetch_array($ketqua1)
						?>
						<td><?php echo $dong1['tennuoc'] ?></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Thể loại</td>
						<?php $sql2 = "SELECT * from danhmuc where id=".$dong['iddm'];
						$ketqua2=mysqli_query($con,$sql2);
						$dong2=mysqli_fetch_array($ketqua2)
						?>
						<td><?php echo $dong2['tendm'] ?></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Hãng </td>
						<?php $sql3 = "SELECT * from thuonghieu where id=".$dong['idth'];
						$ketqua3=mysqli_query($con,$sql3);
						$dong3=mysqli_fetch_array($ketqua3)
						?>
						<td><?php echo $dong3['tenth'] ?></td>
					</tr>
				</table>
				<br>
				<br>
				<p class="text-center"><a href="xulythemvaogiohang.php?id=<?php echo $dong['id'] ?>"><button type="button" class="nut"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm vào giỏ hàng</button></a></p>
				
			</div>
					
	</div>
</div>
<div class="container-fluid row">
<h2 align="center"><a href="#">Bình luận</a></h2>
  <br />
  <div class="container">
  	<?php 
  	if(isset($_SESSION['admin'])){
     
     ?>
   <form method="POST" id="comment_form">
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Gửi" />
    </div>
   </form>
   <?php
 	}else{
     ?><br>
     <div class="text-center" ><a style="color:Black; font-size:25px" href="dangnhap.php" >(Đăng nhập để bình luận và phản hồi <i class="fa fa-refresh"></i>)</a></div><br>
     <?php
 		}
     ?>
 	
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
</div>
</div>
<div class="col-1 col-sm-1 col-md-1 col-lg-1">
	<img src='images/bcd.png'  class="img-thumbnail img-responsiv sticky-top" style="width:auto; height:auto; margin-top:100px; margin-bottom:100px">
		</div>
		</div class="row" >
<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12" >
        
      </div>
    </div>
    <div class="phantam">
    <div class="row">
      <div class="col-12 col-sm-4 col-md-4 col-lg-4" id="mot">
        <ul>
          <li class="title">Company</li>
          <li><a href="">About Us</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Trade Registration</a></li>
          <li><a href="">Contacts</a></li>
          <li><a href="">Sitemap</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-4 col-md-4 col-lg-4" id="mot">
        <ul>
          <li class="title">Customer Service</li>
          <li><a href="">Delivery Information</a></li>
          <li><a href="">Terms & Conditions</a></li>
          <li><a href="">Privacy Policy</a></li>
        </ul>
      </div>
      
      <div class="col-12 col-sm-4 col-md-4 col-lg-4" id="mot">
        <ul>
          <li class="title">Constantine Stores Ltd</li>
          <li><i class="fa fa-map" aria-hidden="true"></i>133 Nguyễn Minh Châu, Quận Ngũ Hành Sơn, Đà Nẵng</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i>(+44) 096 41 99 811 </li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="">ddah@gmail.com</a></li>
        </ul>
      </div>
    </div>
</div>

    <div class="phanchinh">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <small>© Copyright DDaH Buy Online – 01326 340226</small>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6" id="hinhanh">
          <ul>
            <li><img src="https://www.drinkfinder.co.uk/media/theme/logo-paypal.svg"width="70px" height="50px"></li>
            <li><img src="https://www.drinkfinder.co.uk/media/theme/logo-visa.svg"width="70px" height="50px"></li>
            <li><img src="https://www.drinkfinder.co.uk/media/theme/logo-discover.svg"width="70px" height="50px"></li>
            <li><img src="https://www.drinkfinder.co.uk/media/theme/logo-mastercard.svg"width="70px" height="50px"></li>
            <li><img src="https://www.drinkfinder.co.uk/media/theme/logo-maestro.svg"width="70px" height="50px"></li>
          </ul> 
        </div>
      </div>
    </div>
  </div>  
  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
  $(document).ready(function(){
  	<?php if(isset($_SESSION['admin'])){
  		if($_SESSION['admin']=='1'){ ?>
    $('.edit').click(function(){
      $(this).addClass('editMode');
    });

    $(".edit").focusout(function(){
      $(this).removeClass("editMode");
      var id = this.id;
      var split_id = id.split("_");
      var field_name = split_id[0];
      var edit_id = split_id[1];
      var value = $(this).text();

      $.ajax({
         url: 'data.php',
         type: 'post',
         data: { mtsp:field_name, value:value, id:edit_id },
         success:function(response){
            console.log('Save successfully');
         }
       });

    });
   <?php }} ?> 
	 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();
 
 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
 });

  });
</script>
</body>
</html>
