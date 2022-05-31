<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$year ="Y";
$year1 = date($year, time());
mysqli_set_charset($con, 'UTF8');
$lol = mysqli_query($con,"SELECT * from nam");
$add = 0;
while($rlol = mysqli_fetch_array($lol))
{	
	settype($rlol['nam'], "int");
	if($rlol['nam']==$year1)
	$add = $add + 1;

}
if($add == 0)
{
	$ula = "insert into nam(nam) values ('$year1')";
	$llll = mysqli_query($con,$ula);
}

if(isset($_GET["trang"]))
{
  $trang =$_GET["trang"];
  settype($trang, "int");

}else{
  $trang = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Admin Dashboard - Home</title>
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
            <li><a href="doanhthu.php" class="active"><i class="fa fa-bar-chart fa-fw" ></i>Theo Năm</a></li>
            <li><a href="doanhthum.php"><i class="fa fa-bar-chart fa-fw"></i>Theo Tháng</a></li>
            <li><a href="doanhthuw.php"><i class="fa fa-bar-chart fa-fw"></i>Theo Tuần</a></li>
            <li><a href="doanhthud.php"><i class="fa fa-bar-chart fa-fw"></i>Theo Ngày</a></li>
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
                <li><a href="giaodienadmin.php" >Quản lí</a></li>
                <li><a href="doanhthu.php" class="active" >Doanh thu</a></li>
                <li><a href="../khachhang/demo.php">Shop</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
          <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
            <br>
            <br>
              <div class="text-center"><h1>Danh thu theo Năm</h1></div>
              <br>
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    
                    <td class="text-center">Năm</td>
                    <td class="text-center">Doanh thu (VNĐ)</td>
                    <td class="text-center">Lợi nhuận (7%)</td>

                  </tr>
                </thead>
                <tbody>
                 
                                  
                  <?php 
                  $sotin1trang = 10;
                  $from = ($trang - 1  ) * $sotin1trang;
                  if($from<0) $from=0;
                  $qr = "SELECT * FROM nam ORDER BY nam DESC LIMIT $from, $sotin1trang";
                  $ds= mysqli_query($con,$qr);
                  $tong= 0;

                      while ($row=mysqli_fetch_array($ds))
                      {
                      	echo "<tr>";
                      	$tien=0;
                      	echo '<td class="text-center">'.$row['nam'].'</td>';
                      $danhmuc="select * from hoadon where trangthai='2' and nam='".$row['nam']."'";
                      $condanhmuc= mysqli_query($con,$danhmuc);
                  
                      while($rowkh=mysqli_fetch_array($condanhmuc))
                      { $tien= $tien + $rowkh['tongtien'];
                                                                            
                      }
                      echo '<td class="text-center">'.number_format($tien).'</td>';
                      $tong= $tong + $tien;
                      echo '<td class="text-center">'.number_format($tien*0.07).'</td>';
                      echo"</tr>";
                      }
                      echo "<tr>";
                      echo '<td  class="text-center">Tổng tiền</td>';
                      echo '<td  class="text-center">'.number_format($tong).'</td>';
                      echo '<td  class="text-center">'.number_format($tong*0.07).' ( Lợi )</td>';
                      echo"</tr>";
                  ?>

                </tbody>
              </table> 
        <div class="pagination-wrap">
            <ul class="pagination">
              <?php
        $x = mysqli_query($con,"SELECT id FROM nam");
        $tongsotin = mysqli_num_rows($x);
        $sotrang = ceil($tongsotin / $sotin1trang);
        for($t=1; $t<=$sotrang; $t++){
        echo "<li><a href='doanhthu.php?trang=$t'>$t</a></li>";
        }
          ?>
            </ul>
          </div>   
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