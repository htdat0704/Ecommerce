<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Visual Admin Dashboard - Manage Users</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="csss/font-awesome.min.css" rel="stylesheet">
    <link href="csss/bootstrap.min.css" rel="stylesheet">
    <link href="csss/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
<body>
     <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1><?php $_SESSION['hoten']; ?></h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="giaodienkhachhang.php" class="active"><i class="fa fa-home fa-fw"></i>Thông tin</a></li>
            <li><a href="luachongiohangkh.php"><i class="fa fa-bar-chart fa-fw"></i>Giỏ hàng</a></li>
            <li><a href="lichsukhmua.php"><i class="fa fa-sliders fa-fw"></i>Lịch sử</a></li>
            <li><a href="dangxuat.php"><i class="fa fa-eject fa-fw"></i>Đăng xuất </a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="#" class="active">Information</a></li>
                <li><a href="../khachhang/demo.php" >SHOP</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
 <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <br>
            <div class="text-center"><a href="giaodienkhachhang.php" class="templatemo-edit-btn">Thông tin </a>
              <a href="khsuakh.php" class="templatemo-edit-btn">Sửa thông tin</a></div>
            <br>

              <div class="text-center"><h1>Sửa thông tin </h1></div>
            <br>
          	<?php 

          	$qlkhs="select * from khachhang where username='".$_SESSION['user']."'"; 
          	$roa= mysqli_query($con,$qlkhs);
          	$row= mysqli_fetch_array($roa);
          	?>
          	<div class="container">
        	<form class="form-horizontal" action="xulykhsuakh.php" method="get">
        	<div class="form-group">
       		<label class="control-label col-sm-2" >Họ và Tên:</label>
        	<div class="col-sm-7">
        	<input  type="text" class="form-control" name="ten" placeholder="<?php echo $row["hoten"]; ?>"><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
        	</div>
        	</div>
        	</form>
    	</div>
    	<div class="container">
        	<form class="form-horizontal" action="xulykhsuakh.php" method="get">
        	<div class="form-group">
       		<label class="control-label col-sm-2" >password:</label>
        	<div class="col-sm-7">
        	<input  type="password" class="form-control" name="pass" placeholder="<?php echo $row["password"]; ?>"><input onclick= "alert('Sửa thành công >> 9Đăng nhập lại');" type="submit" value="Thay đổi">      
        	</div>
        	</div>
        	</form>
    	</div>
    	<div class="container">
        	<form class="form-horizontal" action="xulykhsuakh.php" method="get">
        	<div class="form-group">
       		<label class="control-label col-sm-2" >Điện thoại:</label>
        	<div class="col-sm-7">
        	<input  type="number" class="form-control" name="dt" placeholder="<?php echo $row["dt"]; ?>"><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
        	</div> 
        	</div>
        	</form>
    	</div>
    	 <div class="container">
        	<form class="form-horizontal" action="xulykhsuakh.php" method="get">
        	<div class="form-group">
       		<label class="control-label col-sm-2" >Địa chỉ:</label>
        	<div class="col-sm-7">
        	<input  type="text" class="form-control" name="diachi" placeholder="<?php echo $row["diachi"]; ?>"><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
        	</div> 
        	</div>
        	</form>
    	</div>
    	<div class="container">
        	<form class="form-horizontal" action="xulykhsuakh.php" method="get">
        	<div class="form-group">
       		<label class="control-label col-sm-2" >Email:</label>
        	<div class="col-sm-7">
        	<input  type="email" class="form-control" name="email" placeholder="<?php echo $row["Email"]; ?>"><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
        	</div> 
        	</div>
        	</form>
    	</div>
    	<div class="container">
        	<form class="form-horizontal" action="xulykhsuakh.php" method="get">
        	<div class="form-group">
       		<label class="control-label col-sm-2" >Ngày sinh :</label>
        	<div class="col-sm-7">
        	<input  type="date" class="form-control" name="date"><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
        	</div> 
        	</div>
        	</form>
    	</div>


          	
 </div>
</div>
</div>

</body>
</html>