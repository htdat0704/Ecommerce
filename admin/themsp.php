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
            <li><a href="giaodienadmin.php" ><i class="fa fa-home fa-fw"></i>Qu???n l?? h??a ????n</a></li>
            <li><a href="qlkh.php"><i class="fa fa-users fa-fw"></i>Qu???n L?? kh??ch h??ng</a></li>
            <li><a href="qlsp.php" class="active"><i class="fa fa-sliders fa-fw"></i>Qu???n l?? s???n ph???m </a></li>
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
            <div class="text-center"><a href="qlsp.php" class="templatemo-edit-btn">Danh s??ch</a>
              <a href="themsp.php" class="templatemo-edit-btn">Th??m s???n ph???m</a>
            <br>
            <br>
              <div class="text-center"><h1>Th??m s???n ph???m</h1></div>
            <br>
          	<?php 
            $danhmuc="select * from danhmuc "; 
            $danhmuc1= mysqli_query($con,$danhmuc);
            $thuonghieu="select * from thuonghieu "; 
            $thuonghieu1= mysqli_query($con,$thuonghieu);
            $nuoc="select * from nuoc "; 
            $nuoc1= mysqli_query($con,$nuoc);
            ?>
            <div class="container">
        <form class="form-horizontal" action="xulyvathemanhsp.php" method="get">
        <div class="form-group">
        <label class="control-label col-sm-2" >T??n s???n ph???m:</label>
        <div class="col-sm-7">
        <input type="text" class="form-control" name="ten">      
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >M?? t??? s???n ph???m:</label>
        <div class="col-sm-7">
        <input type="type" class="form-control" name="mtsp">      
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >Gi??:</label>
        <div class="col-sm-7">
        <input type="number" class="form-control" name="gia">      
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >S??? l?????ng:</label>
        <div class="col-sm-7">
        <input type="number" class="form-control" name="soluong">      
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >Danh m???c:</label>
        <div class="col-sm-7" >
        <select name="dm"  class="form-control">
           <?php
           echo '<option value ="0" selected="selected"></option>';
            while ($rowdm= mysqli_fetch_array($danhmuc1))
            { 
            echo '<option value ="'.$rowdm["id"].'" >'.$rowdm["tendm"].'</option>';
            }
            ?>
        </select>     
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >H??ng:</label>
        <div class="col-sm-7" >
        <select name="th"  class="form-control">
           <?php
           echo '<option value ="0" selected="selected"></option>';
            while ($rowth= mysqli_fetch_array($thuonghieu1))
            { 
            echo '<option value ="'.$rowth["id"].'" >'.$rowth["tenth"].'</option>';
            }
            ?>
        </select>     
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" >Qu???c gia:</label>
        <div class="col-sm-7" >
        <select name="qg"  class="form-control">
           <?php
           echo '<option value ="0" selected="selected"></option>';
            while ($rownc= mysqli_fetch_array($nuoc1))
            { 
            echo '<option value ="'.$rownc["id"].'" >'.$rownc["tennuoc"].'</option>';
            }
            ?>
        </select>     
        </div>
        </div>
        <br>
            <div class="form-group">        
      <div class="col-sm-offset-7 col-sm-3">
        <input type="submit" value="Ti???p theo"> 
      </div>
    </div>
        </form>
    </div>


            
 </div>
</div>
</div>

</body>
</html>