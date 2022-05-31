<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
$_SESSION['id']='0';
?>
<!DOCTYPE html>
<html lang="en">
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
            <div class="panel panel-default table-responsive">
           	<br>
           	<div class="text-center"><a href="giaodienkhachhang.php" class="templatemo-edit-btn">Thông tin </a>
              <a href="khsuakh.php" class="templatemo-edit-btn">Sửa thông tin</a></div>
            <br>
            <br>
              <div class="text-center"><h1>Thông tin cá nhân <?php echo $_SESSION['hoten']?></h1></div>
              <br>
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td class="text-center">Họ và Tên</td>
                    <td class="text-center">Username</td>
                    <td class="text-center">Điện thoại</td>
                    <td class="text-center">Địa chỉ</td>
                    <td class="text-center">Ngày sinh <br>(yy-mm-dd) </td>
                    <td class="text-center">Email</td>
                  </tr>
                </thead>
                <tbody>
                 
                                  
                  <?php 
                 $sqaa= "SELECT * FROM khachhang where username='".$_SESSION['user']."'";
                 $ds= mysqli_query($con,$sqaa);
                


                      while ($row1=mysqli_fetch_array($ds))
                      {
                          
                          echo"<tr>";
                           echo'<td class="text-center">' . $row1["hoten"] .'</td>';
                           echo'<td class="text-center">' . $row1["username"] .'</td>';
                           echo'<td class="text-center">' . $row1["dt"] .'</td>';
                           echo'<td class="text-center">' . $row1["diachi"] .'</td>';
                           echo'<td class="text-center">' . $row1["ngaysinh"] .'</td>';
                           echo'<td class="text-center">' . $row1["Email"] ."</td>";
                            echo"</tr>";
                      }
                        
                  ?>

                </tbody>
              </table> 
			 
            </div>                          
          </div>     
          </div>     
        
    <!-- JS -->
    <script type="text/javascript" src="jss/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="jss/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>