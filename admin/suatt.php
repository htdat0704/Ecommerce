<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
$_SESSION['hoadon']=$_GET['id'];
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
            <li><a href="giaodienadmin.php" class="active" ><i class="fa fa-home fa-fw"></i>Qu???n l?? h??a ????n</a></li>
            <li><a href="qlkh.php"><i class="fa fa-users fa-fw"></i>Qu???n L?? kh??ch h??ng</a></li>
            <li><a href="qlsp.php"><i class="fa fa-sliders fa-fw"></i>Qu???n l?? s???n ph???m </a></li>
            <li><a href="qlqg.php"><i class="fa fa-map-marker fa-fw"></i>Ph??n theo qu???c gia</a></li>
            <li><a href="qldm.php"><i class="fa fa-database fa-fw"></i>Ph??n theo danh m???c</a></li>
            <li><a href="qlha.php"><i class="fa fa-bar-chart fa-fw"></i>Ph??n theo h??ng</a></li>
            <li><a href="dangxuat.php"><i class="fa fa-eject fa-fw"></i>????ng xu???t </a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="giaodienadmin.php" class="active">Qu???n l??</a></li>
                <li><a href="doanhthu.php" >Doanh thu</a></li>
                <li><a href="../khachhang/demo.php">Shop</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
 <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <br>
              <div class="text-center"><h1>S???a th??ng tin s???n ph???m</h1></div>
            <br>
          	<div class="container">
              <form class="form-horizontal" action="xulysuatt.php" method="get">
                <div class="form-group">
                <label class="control-label col-sm-2" >Tr???ng th??i:</label>
             <div class="col-sm-7" >
                <select name="tt"  class="form-control">
                    <?php 
                    $ad = "SELECT * FROM hoadon where id=".$_SESSION['hoadon'];
                    $xz = mysqli_query($con,$ad);
                    $axz= mysqli_fetch_array($xz);
                    if($axz['trangthai']==0){
                        echo '<option value="0" selected=selected>??ang x??? l??</option>';
                    }
                    else echo '<option value="0" >??ang x??? l??</option>';
                    if($axz['trangthai']==1){
                        echo '<option value="1" selected=selected>??ang giao</option>';
                    }
                    else echo '<option value="1" >??ang giao</option>';
                    
                    if($axz['trangthai']==2){
                        echo '<option value="2" selected=selected>???? giao</option>';
                    }
                    else echo '<option value="2" >???? giao</option>';
                    
                    if($axz['trangthai']==3){
                        echo '<option value="3" selected=selected>H???y ????n</option>';
                    }
                    else echo '<option value="3" >H???y ????n</option>';
                    
                    
                    ?>
           
        </select><input onclick= "alert('S???a th??nh c??ng');" type="submit" value="Thay ?????i">      
        </div>
        </div>
        </form>
    </div>
    	
          	
 </div>
</div>
</div>

</body>
</html>