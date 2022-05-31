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
          <h1>Visual Admin</h1>
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
            <li><a href="giaodienadmin.php" ><i class="fa fa-home fa-fw"></i>Quản lí hóa đơn</a></li>
            <li><a href="qlkh.php"><i class="fa fa-users fa-fw"></i>Quản Lí khách hàng</a></li>
            <li><a href="qlsp.php" class="active"><i class="fa fa-sliders fa-fw"></i>Quản lí sản phẩm </a></li>
            <li><a href="qlqg.php"><i class="fa fa-map-marker fa-fw"></i>Phân theo quốc gia</a></li>
            <li><a href="qldm.php"><i class="fa fa-database fa-fw"></i>Phân theo danh mục</a></li>
            <li><a href="qlha.php"><i class="fa fa-bar-chart fa-fw"></i>Phân theo hãng</a></li>
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
                <li><a href="giaodienadmin.php" class="active">Quản lí</a></li>
                <li><a href="doanhthu.php" >Doanh thu</a></li>
                <li><a href="../khachhang/demo.php">Shop</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
 <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
          	<br>
              <div class="text-center"><h1>Thêm ảnh</h1></div>
            <br>
          	<div class="container">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label class="control-label col-sm-2" >Tải ảnh :</label>
            <div class="col-sm-7">
            <input  type="file" class="form-control" name="filename" value=""><br><input  name="submit" type="submit" value="Thay đổi">    <a href="qlsp.php" class="templatemo-edit-btn">Bỏ qua</a>  
            </div>
            </div>
            </form>
        </div>
<?php
      	function get_file_extension($filename)
      	{
      		return PATHINFO($filename, PATHINFO_EXTENSION);
      	}
      
	$dir='images/';

	if (isset($_POST['submit'])){	
		$filenames= $_FILES['filename']['tmp_name'];
		$duoi= get_file_extension($_FILES['filename']['name']);
		$name = $_SESSION['id'];
		$destination= $dir.$name."."."png";
		if(($duoi=='jpg')||($duoi=='png')||($duoi=='jpeg')||($duoi=='gif'))
		{
			if(file_exists($dir.$name."."."jpg"))
			{
				unlink($dir.$name."."."jpg");
			}
			if(file_exists($dir.$name."."."png"))
			{
				unlink($dir.$name."."."png");
			}
			if(file_exists($dir.$name."."."jpeg"))
			{
				unlink($dir.$name."."."jpeg");
			}
			if(file_exists($dir.$name."."."gif"))
			{
				unlink($dir.$name."."."gif");
			}	
			move_uploaded_file($filenames, $destination);
			echo "<script type='text/javascript'>alert('Sửa ảnh thành công');</script>";
			echo '<div class="text-center" style="color:blue " >Upfile thành công</div>';
			echo '<br><div class="text-center"><a href="qlsp.php" class="templatemo-edit-btn">Hoàn thành</a></div><br>';
		}
		else{
			echo '<div class="text-center" style="color:red " >file không chấp nhận chỉ chấp nhận đuôi file |jpg|png|jpeg|gif| </div>';
		}
	}
?>


          	
 </div>
</div>
</div>

</body>
</html>