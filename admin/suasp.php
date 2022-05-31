<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
$_SESSION["id"] = $_GET['id'] ;
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
            <li><a href="qlsp.php"><i class="fa fa-sliders fa-fw"></i>Quản lí sản phẩm </a></li>
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
              <div class="text-center"><h1>Sửa thông tin sản phẩm</h1></div>
            <br>
          	<?php 
          	$qlkhs="select * from sanpham where id=".$_SESSION['id']; 
          	$roa= mysqli_query($con,$qlkhs);
          	$row= mysqli_fetch_array($roa);
          	?>
          	<div class="container">
        	<form class="form-horizontal" action="xulysuasp.php" method="get">
        	<div class="form-group">
       		<label class="control-label col-sm-2" >Tên sản phẩm:</label>
        	<div class="col-sm-7">
        	<input  type="text" class="form-control" name="sp" placeholder="<?php echo $row["tensp"]; ?>"><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
        	</div>
        	</div>
        	</form>
    	</div>
        <div class="container">
            <form class="form-horizontal" action="xulysuasp.php" method="get">
            <div class="form-group">
            <label class="control-label col-sm-2" >Mô tả sản phẩm:</label>
            <div class="col-sm-7">
            <input  type="text" class="form-control" name="mtsp" placeholder="<?php echo $row["mtsp"]; ?>"><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
            </div>
            </div>
            </form>
        </div>
    	<div class="container">
        	<form class="form-horizontal" action="xulysuasp.php" method="get">
        	<div class="form-group">
       		<label class="control-label col-sm-2" >Giá:</label>
        	<div class="col-sm-7">
        	<input  type="number" class="form-control" name="gia" placeholder="<?php echo $row["gia"]; ?>"><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
        	</div>
        	</div>
        	</form>
    	</div>
    	<div class="container">
        	<form class="form-horizontal" action="xulysuasp.php" method="get">
        	<div class="form-group">
       		<label class="control-label col-sm-2" >Số lượng:</label>
        	<div class="col-sm-7">
        	<input  type="number" class="form-control" name="sl" placeholder="<?php echo $row["soluong"]; ?>"><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
        	</div> 
        	</div>
        	</form>
    	</div>
    	       <div class="container">
        <form class="form-horizontal" action="xulysuasp.php" method="get">
        <div class="form-group">
        <label class="control-label col-sm-2" >Danh mục:</label>
        <div class="col-sm-7" >
        <select name="dm"  class="form-control">
           <?php
            $danhmuc="select * from danhmuc";
            $condanhmuc= mysqli_query($con,$danhmuc);
            while ($row12= mysqli_fetch_array($condanhmuc))
            { 
                if($row["iddm"]==$row12["id"])
                {
                    echo '<option value ="'.$row12["id"].'" selected="selected" >'.$row12["tendm"].'</option>';
                }
            else echo '<option value ="'.$row12["id"].'" >'.$row12["tendm"].'</option>';
            }
            ?>
        </select><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
        </div>
        </div>
        </form>
    </div>
    <div class="container">
        <form class="form-horizontal" action="xulysuasp.php" method="get">
        <div class="form-group">
        <label class="control-label col-sm-2" >Thương Hiệu:</label>
        <div class="col-sm-7" >
        <select name="th"  class="form-control">
           <?php
            $thuonghieu="select * from thuonghieu ";
            $conthuonghieu= mysqli_query($con,$thuonghieu);
            while ($row123= mysqli_fetch_array($conthuonghieu))
            { 
                if($row["idth"]==$row123["id"])
                {
                    echo '<option value ="'.$row123["id"].'" selected="selected" >'.$row123["tenth"].'</option>';
                }
            else echo '<option value ="'.$row123["id"].'" >'.$row123["tenth"].'</option>';
            }
            ?>
        </select><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
        </div>
        </div>
        </form>
    </div>
    <div class="container">
        <form class="form-horizontal" action="xulysuasp.php" method="get">
        <div class="form-group">
        <label class="control-label col-sm-2" >Quốc Gia:</label>
        <div class="col-sm-7" >
        <select name="nuoc"  class="form-control">
           <?php
            $nuoc="select * from nuoc"; 
            $connuoc= mysqli_query($con,$nuoc);
            while ($row124= mysqli_fetch_array($connuoc))
            { 
                if($row["idnuoc"]==$row124["id"])
                {
                    echo '<option value ="'.$row124["id"].'" selected="selected" >'.$row124["tennuoc"].'</option>';
                }
            else echo '<option value ="'.$row124["id"].'" >'.$row124["tennuoc"].'</option>';
            }
            ?>
        </select><input onclick= "alert('Sửa thành công');" type="submit" value="Thay đổi">      
        </div>
        </div>
        </form>
    </div>
    <div class="container">
            <form class="form-horizontal" action="suaanhsp.php" method="post" >
            <div class="form-group">
            <label class="control-label col-sm-7" >Tải ảnh mới >>></label>
            <div class="col-sm-2">
            <input class="templatemo-edit-btn"  type="submit" value="Tải ảnh">      
            </div>
            </div>
            </form>
        </div>


          	
 </div>
</div>
</div>

</body>
</html>