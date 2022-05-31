<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
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
            <li><a href="giaodienadmin.php" class="active"><i class="fa fa-home fa-fw"></i>Quản lí hóa đơn</a></li>
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
            <div class="panel panel-default table-responsive">    
            <br>
              <div class="text-center"><h1>Chi tiết hóa đơn</h1></div>
              <br>
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                  	
                    <td class="text-center">STT </td>
                    <td class="text-center">Tên sản phẩm </td>
                    <td class="text-center">Số lượng </td>
                    <td class="text-center">Giá tiền (VNĐ) </td>

                  </tr>
                </thead>
                <tbody>
                 
                                  
                  <?php 
                  $_SESSION['hoadon']=$_GET["id"];
                  $dir="images/";
                    $azza = "SELECT * from hoadon where id=".$_SESSION['hoadon'];
                    $ds = mysqli_query ($con,$azza);
                     $row=mysqli_fetch_array($ds);
                    $msp1 = 0;
                    $msp2 = 0;
                    $msp3 = 0;
                    $msp4 = 0;
                    $msp5 = 0;
                    $msp6 = 0;
                    $msp7 = 0;
                    $msp8 = 0;
                    $msp9 = 0;
                    $msp10 = 0;
                    if( empty($row['idsp1']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "</tr>";
                          }
                          else{
                       echo"<tr>";
                           echo'<td class="text-center">1</td>';
                           $sql1= "SELECT * from sanpham where id=".$row['idsp1'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                             echo'<td class="text-center"><div class="text-center"><img src="'.$dir.$row1["id"].'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row1["tensp"].'</div></td>';
                           echo'<td class="text-center">' . $row['soluong1'] .'</td>';
                           $msp1 = $row1['gia']*$row['soluong1'];
                           echo'<td class="text-center">' .number_format( $msp1) .'</td>';
                         echo "</tr>";
                       }
                         if( empty($row['idsp2']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "</tr>";
                          }
                          else
                          {
                          echo"<tr>";
                           echo'<td class="text-center">2</td>';
                           $sql1= "SELECT * from sanpham where id=".$row['idsp2'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                           echo'<td class="text-center"><div class="text-center"><img src="'.$dir.$row1["id"].'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row1["tensp"].'</div></td>';
                           echo'<td class="text-center">' . $row['soluong2'] .'</td>';
                           $msp2 = $row1['gia']*$row['soluong2'];
                           echo'<td class="text-center">' . number_format($msp2) .'</td>';
                         echo "</tr>";
                          }
                          if( empty($row['idsp3']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "</tr>";
                          }
                          else
                          {
                          echo"<tr>";
                           echo'<td class="text-center">3</td>';
                           $sql1= "SELECT * from sanpham where id=".$row['idsp3'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                           echo'<td class="text-center"><div class="text-center"><img src="'.$dir.$row1["id"].'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row1["tensp"].'</div></td>';
                           echo'<td class="text-center">' . $row['soluong3'] .'</td>';
                           $msp3 = $row1['gia']*$row['soluong3'];
                           echo'<td class="text-center">' . number_format($msp3) .'</td>';
                         echo "</tr>";
                          }
                          if( empty($row['idsp4']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "</tr>";
                          }
                          else
                          {
                          echo"<tr>";
                           echo'<td class="text-center">2</td>';
                           $sql1= "SELECT * from sanpham where id=".$row['idsp4'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                           echo'<td class="text-center"><div class="text-center"><img src="'.$dir.$row1["id"].'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row1["tensp"].'</div></td>';
                           echo'<td class="text-center">' . $row['soluong4'] .'</td>';
                           $msp4 = $row1['gia']*$row['soluong4'];
                           echo'<td class="text-center">' . number_format($msp4) .'</td>';
                         echo "</tr>";
                          }
                          if( empty($row['idsp5']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "</tr>";
                          }
                          else
                          {
                          echo"<tr>";
                           echo'<td class="text-center">5</td>';
                           $sql1= "SELECT * from sanpham where id=".$row['idsp5'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                           echo'<td class="text-center"><div class="text-center"><img src="'.$dir.$row1["id"].'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row1["tensp"].'</div></td>';
                           echo'<td class="text-center">' . $row['soluong5'] .'</td>';
                           $msp5 = $row1['gia']*$row['soluong5'];
                           echo'<td class="text-center">' . number_format($msp5) .'</td>';
                         echo "</tr>";
                          }
                          if( empty($row['idsp6']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "</tr>";
                          }
                          else
                          {
                          echo"<tr>";
                           echo'<td class="text-center">6</td>';
                           $sql1= "SELECT * from sanpham where id=".$row['idsp6'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                           echo'<td class="text-center"><div class="text-center"><img src="'.$dir.$row1["id"].'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row1["tensp"].'</div></td>';
                           echo'<td class="text-center">' . $row['soluong6'] .'</td>';
                           $msp6 = $row1['gia']*$row['soluong6'];
                           echo'<td class="text-center">' . number_format($msp6) .'</td>';
                         echo "</tr>";
                          }
                          if( empty($row['idsp7']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "</tr>";
                          }
                          else
                          {
                          echo"<tr>";
                           echo'<td class="text-center">7</td>';
                           $sql1= "SELECT * from sanpham where id=".$row['idsp7'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                           echo'<td class="text-center"><div class="text-center"><img src="'.$dir.$row1["id"].'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row1["tensp"].'</div></td>';
                           echo'<td class="text-center">' . $row['soluong7'] .'</td>';
                           $msp7 = $row1['gia']*$row['soluong7'];
                           echo'<td class="text-center">' . number_format($msp7) .'</td>';
                         echo "</tr>";
                          }
                          if( empty($row['idsp8']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "</tr>";
                          }
                          else
                          {
                          echo"<tr>";
                           echo'<td class="text-center">8</td>';
                           $sql1= "SELECT * from sanpham where id=".$row['idsp8'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                           echo'<td class="text-center"><div class="text-center"><img src="'.$dir.$row1["id"].'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row1["tensp"].'</div></td>';
                           echo'<td class="text-center">' . $row['soluong8'] .'</td>';
                           $msp8 = $row1['gia']*$row['soluong8'];
                           echo'<td class="text-center">' . number_format($msp8) .'</td>';
                         echo "</tr>";
                          }
                          if( empty($row['idsp9']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "</tr>";
                          }
                          else
                          {
                          echo"<tr>";
                           echo'<td class="text-center">9</td>';
                           $sql1= "SELECT * from sanpham where id=".$row['idsp9'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                           echo'<td class="text-center"><div class="text-center"><img src="'.$dir.$row1["id"].'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row1["tensp"].'</div></td>';
                           echo'<td class="text-center">' . $row['soluong9'] .'</td>';
                           $msp9 = $row1['gia']*$row['soluong9'];
                           echo'<td class="text-center">' . number_format($msp9) .'</td>';
                         echo "</tr>";
                          }
                          if( empty($row['idsp10']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "</tr>";
                          }
                          else
                          {
                          echo"<tr>";
                           echo'<td class="text-center">10</td>';
                           $sql1= "SELECT * from sanpham where id=".$row['idsp10'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                           echo'<td class="text-center"><div class="text-center"><img src="'.$dir.$row1["id"].'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row1["tensp"].'</div></td>';
                           echo'<td class="text-center">' . $row['soluong10'] .'</td>';
                           $msp10 = $row1['gia']*$row['soluong10'];
                           echo'<td class="text-center">' . number_format($msp10) .'</td>';
                         echo "</tr>";
                          }
                          echo "<tr>";
                          $tongtien = $msp1 + $msp2 +$msp3 + $msp4 + $msp5 + $msp6 +$msp7 + $msp8 + $msp9 + $msp10;
                          echo '<td colspan="3" class="text-center"><strong>Tổng tiền</strong></td>';
                          echo '<td class="text-center">'.number_format($tongtien).'</td>';
                          echo '</tr>';
                      
                      
                        
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