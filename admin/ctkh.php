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
            <li><a href="giaodienkhachhang.php" ><i class="fa fa-home fa-fw"></i>Thông tin</a></li>
            <li><a href="luachongiohangkh.php" class="active"><i class="fa fa-bar-chart fa-fw"></i>Giỏ hàng</a></li>
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
            <a href="../khachhang/product.php"  class=" templatemo-edit-btn">⇈ Quay về cửa hàng</a>
          
            
            <a href="thanhtoanhoadon.php?id=<?php echo $_SESSION['idgh'] ?>" style="float:right;" class="templatemo-edit-btn">Thanh Toán ✔</a>
            <br><br>
             <a href="luachongiohangkh.php" class="templatemo-edit-btn">⇦ Lựa chọn giỏ hàng khác</a><br>
              <div class="text-center"><h1>Chi tiết hóa đơn</h1></div>
              <br>
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                  	
                    <td class="text-center">STT </td>
                    <td class="text-center">Tên sản phẩm </td>
                    <td class="text-center">Số lượng </td>
                    <td class="text-center">Giá tiền (VNĐ) </td>
                    <td class="text-center">Xóa  </td>

                  </tr>
                </thead>
                <tbody>
                 
                                  
                  <?php 
                  $_SESSION['hoadonkh']=$_GET["id"];
                  $dir="images/";
                    $azza = "SELECT * from hoadon where id=".$_GET['id'];
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
                           if($row['trangthai']=='4')
                           {
                           echo'<td class="text-center">' . $row['soluong1'] .'<br><br>
                           Số lượng 
                           <form method="get"  action="capnhapslgh.php">
                           <input type="number" min="1" max="100" step="1" name="sl1"  class="form-control" value="'.$row['soluong1'].'" placeholder="'.$row['soluong1'].'">
                           <input type="submit" value="Cập nhập">                                                  
                           </form>
                           </td>';
                       		}
                       		else
                       		{
                       			echo'<td class="text-center">' . $row['soluong1'] .'</td>';
                       		}
                           $msp1 = $row1['gia']*$row['soluong1'];
                           echo'<td class="text-center">' . number_format($msp1) .'</td>';
                           if($row['trangthai']=='4')
                           {
                           echo'<td class="text-center"><a href="deletespkh.php?idsp1='.$row['idsp1'].'" class="templatemo-edit-btn" >Delete</a></td>';
							}
							else
							{
								echo '<td></td>';
							}                           
                         echo "</tr>";
                       }
                         if( empty($row['idsp2']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
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
                           if($row['trangthai']=='4')
                           {
                           echo'<td class="text-center">' . $row['soluong2'] .'<br><br>
                           Số lượng 
                           <form method="get"  action="capnhapslgh.php">
                           <input type="number" min="1" max="100" step="1" name="sl2"  class="form-control" value="'.$row['soluong2'].'" placeholder="'.$row['soluong2'].'">
                           <input type="submit" value="Cập nhập">                                                  
                           </form>
                           </td>';
                       		}
                       		else echo'<td class="text-center">' . $row['soluong2'] .'</td>';
                           $msp2 = $row1['gia']*$row['soluong2'];
                           echo'<td class="text-center">' . number_format($msp2) .'</td>';
                           if($row['trangthai']=='4')
                           {
                           echo'<td class="text-center"><a href="deletespkh.php?idsp2='.$row['idsp2'].'" class="templatemo-edit-btn" >Delete</a></td>';
                       		}
                       		else echo '<td></td>';
                         echo "</tr>";
                          }
                          if( empty($row['idsp3']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
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
                           if($row['trangthai']=='4')
                           {
                           echo'<td class="text-center">' . $row['soluong3'] .'<br><br>
                           Số lượng 
                           <form method="get"  action="capnhapslgh.php">
                           <input type="number" min="1" max="100" step="1" name="sl3"  class="form-control" value="'.$row['soluong3'].'" placeholder="'.$row['soluong3'].'">
                           <input type="submit" value="Cập nhập">                                                  
                           </form>
                           </td>';
                       		}
                       		else echo'<td class="text-center">' . $row['soluong3'] .'</td>';
                           $msp3 = $row1['gia']*$row['soluong3'];
                           echo'<td class="text-center">' . number_format($msp3) .'</td>';
                           if($row['trangthai']=='4')
                           echo'<td class="text-center"><a href="deletespkh.php?idsp3='.$row['idsp3'].'" class="templatemo-edit-btn" >Delete</a></td>';
                       		else '<td></td>';
                         echo "</tr>";
                          }
                          if( empty($row['idsp4']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "<td></td>";
                         echo "</tr>";
                          }
                          else
                          {
                          echo"<tr>";
                           echo'<td class="text-center">4</td>';
                           $sql1= "SELECT * from sanpham where id=".$row['idsp4'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                           echo'<td class="text-center"><div class="text-center"><img src="'.$dir.$row1["id"].'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row1["tensp"].'</div></td>';
                           if($row['trangthai']=='4')
                           echo'<td class="text-center">' . $row['soluong4'] .'<br><br>
                           Số lượng 
                           <form method="get"  action="capnhapslgh.php">
                           <input type="number" min="1" max="100" step="1" name="sl4"  class="form-control" value="'.$row['soluong4'].'" placeholder="'.$row['soluong4'].'">
                           <input type="submit" value="Cập nhập">                                                  
                           </form>
                           </td>';
                           else echo'<td class="text-center">' . $row['soluong4'] .'</td>';
                           $msp4 = $row1['gia']*$row['soluong4'];
                           echo'<td class="text-center">' . number_format($msp4) .'</td>';
                           if($row['trangthai']=='4')
                           echo'<td class="text-center"><a href="deletespkh.php?idsp4='.$row['idsp4'].'" class="templatemo-edit-btn" >Delete</a></td>';
                       else echo "<td></td>";
                         echo "</tr>";
                          }
                          if( empty($row['idsp5']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
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
                           if($row['trangthai']=='4')
                           echo'<td class="text-center">' . $row['soluong5'] .'<br><br>
                           Số lượng 
                           <form method="get"  action="capnhapslgh.php">
                           <input type="number" min="1" max="100" step="1" name="sl5"  class="form-control" value="'.$row['soluong5'].'" placeholder="'.$row['soluong5'].'">
                           <input type="submit" value="Cập nhập">                                                  
                           </form>
                           </td>';
                           else echo'<td class="text-center">' . $row['soluong5'] .'</td>';
                           $msp5 = $row1['gia']*$row['soluong5'];
                           echo'<td class="text-center">' . number_format($msp5) .'</td>';
                           if($row['trangthai']=='4')
                           echo'<td class="text-center"><a href="deletespkh.php?idsp5='.$row['idsp5'].'" class="templatemo-edit-btn" >Delete</a></td>';
                       else  echo "<td></td>";
                         echo "</tr>";
                          }
                          if( empty($row['idsp6']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
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
                           if($row['trangthai']=='4')
                           echo'<td class="text-center">' . $row['soluong6'] .'<br><br>
                           Số lượng 
                           <form method="get"  action="capnhapslgh.php">
                           <input type="number" min="1" max="100" step="1" name="sl6"  class="form-control" value="'.$row['soluong6'].'" placeholder="'.$row['soluong6'].'">
                           <input type="submit" value="Cập nhập">                                                  
                           </form>
                           </td>';
                           else echo'<td class="text-center">' . $row['soluong6'] .'</td>';
                           $msp6 = $row1['gia']*$row['soluong6'];
                           echo'<td class="text-center">' . number_format($msp6) .'</td>';
                           if($row['trangthai']=='4')
                           echo'<td class="text-center"><a href="deletespkh.php?idsp6='.$row['idsp6'].'" class="templatemo-edit-btn" >Delete</a></td>';
                       else echo "<td></td>";
                         echo "</tr>";
                          }
                          if( empty($row['idsp7']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
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
                           if($row['trangthai']=='4')
                           echo'<td class="text-center">' . $row['soluong7'] .'<br><br>
                           Số lượng 
                           <form method="get"  action="capnhapslgh.php">
                           <input type="number" min="1" max="100" step="1" name="sl7"  class="form-control" value="'.$row['soluong7'].'" placeholder="'.$row['soluong7'].'">
                           <input type="submit" value="Cập nhập">                                                  
                           </form>
                           </td>';
                           else
                           	echo'<td class="text-center">' . $row['soluong7'] .'</td>';
                           $msp7 = $row1['gia']*$row['soluong7'];
                           echo'<td class="text-center">' . number_format($msp7) .'</td>';
                           if($row['trangthai']=='4')
                           echo'<td class="text-center"><a href="deletespkh.php?idsp7='.$row['idsp7'].'" class="templatemo-edit-btn" >Delete</a></td>';
                       else echo "<td></td>";
                         echo "</tr>";
                          }
                          if( empty($row['idsp8']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
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
                           if($row['trangthai']=='4')
                           echo'<td class="text-center">' . $row['soluong8'] .'<br><br>
                           Số lượng 
                           <form method="get"  action="capnhapslgh.php">
                           <input type="number" min="1" max="100" step="1" name="sl8"  class="form-control" value="'.$row['soluong8'].'" placeholder="'.$row['soluong8'].'">
                           <input type="submit" value="Cập nhập">                                                  
                           </form>
                           </td>';
                           else echo'<td class="text-center">' . $row['soluong8'] .'</td>';
                           $msp8 = $row1['gia']*$row['soluong8'];
                           echo'<td class="text-center">' . number_format($msp8) .'</td>';
                           if($row['trangthai']=='4')
                           echo'<td class="text-center"><a href="deletespkh.php?idsp8='.$row['idsp8'].'" class="templatemo-edit-btn" >Delete</a></td>';
                       else echo "<td></td>";
                         echo "</tr>";
                          }
                          if( empty($row['idsp9']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
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
                           if($row['trangthai']=='4')
                           echo'<td class="text-center">' . $row['soluong9'] .'<br><br>
                           Số lượng 
                           <form method="get"  action="capnhapslgh.php">
                           <input type="number" min="1" max="100" step="1" name="sl9"  class="form-control" value="'.$row['soluong9'].'" placeholder="'.$row['soluong9'].'">
                           <input type="submit" value="Cập nhập">                                                  
                           </form>
                           </td>';
                           else echo'<td class="text-center">' . $row['soluong9'] .'</td>';
                           $msp9 = $row1['gia']*$row['soluong9'];
                           echo'<td class="text-center">' . number_format($msp9) .'</td>';
                           if($row['trangthai']=='4')
                           echo'<td class="text-center"><a href="deletespkh.php?idsp9='.$row['idsp9'].'" class="templatemo-edit-btn" >Delete</a></td>';
                       else  echo "<td></td>";
                         echo "</tr>";
                          }
                          if( empty($row['idsp10']))
                         {
                         echo "<tr>";
                         echo "<td></td>";
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
                           if($row['trangthai']=='4')
                           echo'<td class="text-center">' . $row['soluong10'] .'<br><br>
                           Số lượng 
                           <form method="get"  action="capnhapslgh.php">
                           <input type="number" min="1" max="100" step="1" name="sl10"  class="form-control" value="'.$row['soluong10'].'" placeholder="'.$row['soluong10'].'">
                           <input type="submit" value="Cập nhập">                                                  
                           </form>
                           </td>';
                           else echo'<td class="text-center">' . $row['soluong10'] .'</td>';
                           $msp10 = $row1['gia']*$row['soluong10'];
                           echo'<td class="text-center">' . number_format($msp10) .'</td>';
                           if($row['trangthai']=='4')
                           echo'<td class="text-center"><a href="deletespkh.php?idsp10='.$row['idsp10'].'" class="templatemo-edit-btn" >Delete</a></td>';
                       		else echo "<td></td>";
                         echo "</tr>";
                          }
                          echo "<tr>";
                          $tongtien = $msp1 + $msp2 +$msp3 + $msp4 + $msp5 + $msp6 +$msp7 + $msp8 + $msp9 + $msp10;
                          echo '<td colspan="3" class="text-center"><strong>Tổng tiền</strong></td>';
                          echo '<td colspan="2" class="text-center">'.number_format($tongtien).' VNĐ</td>';
                          $adds2= "UPDATE hoadon set tongtien='".$tongtien."' where id='".$_GET['id']."'";
							$addda2= mysqli_query($con,$adds2);
                          echo '</tr>';


                      
                      
                        
                  ?>

                </tbody>
              </table>  
            </div>                          
          </div>     
          </div>     
        <?php 
       

        ?>
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