<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
$_SESSION['id']='0';
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
            <div class="panel panel-default table-responsive">
           	<br>
           	<div class="text-center"><a href="qlsp.php" class="templatemo-edit-btn">Danh sách</a>
           		<a href="themsp.php" class="templatemo-edit-btn">Thêm sản phẩm</a></div>
            <br>
            <br>
              <div class="text-center"><h1>Danh sách sản phẩm </h1></div>
              <br>
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                  	
                    <td class="text-center">ID </td>
                    <td class="text-center">Tên sản phẩm </td>
                    <td class="text-center">Giá tiền (VNĐ) </td>
                    <td class="text-center">Số lượng </td>
                    <td class="text-center">Hãng </td>
                    <td class="text-center">Loại </td>
                    <td class="text-center">Quốc gia</td>
                    <td class="text-center">Edit</td>
                    <td class="text-center">Delete</td>

                  </tr>
                </thead>
                <tbody>
                 
                                  
                  <?php 
                  $sotin1trang = 9;
                  $from = ($trang - 1  ) * $sotin1trang;
                  if($from<0) $from=0;
                  $qr = "SELECT * FROM sanpham LIMIT $from, $sotin1trang";
                  $ds=mysqli_query($con,$qr);
                  $dir="images/";
                  $xoa="Xóa Thành công";
                      while ($row=mysqli_fetch_array($ds))
                      {
                        $from++;
                      $danhmuc="select * from danhmuc where id=".$row["iddm"];
                      $condanhmuc= mysqli_query($con,$danhmuc);
                      $rowdm=mysqli_fetch_array($condanhmuc);
                      $thuonghieu="select * from thuonghieu where id=".$row["idth"];
                      $conthuonghieu= mysqli_query($con,$thuonghieu);
                      $rowth=mysqli_fetch_array($conthuonghieu);
                      $nuoc="select * from nuoc where id=".$row["idnuoc"];
                      $connuoc= mysqli_query($con,$nuoc);
                      $rownuoc=mysqli_fetch_array($connuoc);
                      $name= $row["id"];
                          echo"<tr>";
                           echo'<td class="text-center">'.$from.'</td>';
                           echo'<td class="text-center"><a href="../khachhang/pages.php?id='.$row['id'].'><div class="text-center"><img src="'.$dir.$name.'.png" class="img-fluid img-thumbnail img-responsive" style="width:auto; height:100px;"><br>
                           '.$row["tensp"].'</a></div></td>';
                           echo'<td class="text-center">' . $row["gia"] .'</td>';
                           echo'<td class="text-center">' . $row["soluong"] .'</td>';
                           echo'<td class="text-center">' . $rowth["tenth"] .'</td>';
                           echo'<td class="text-center">' . $rowdm["tendm"] .'</td>';
                           echo'<td class="text-center">' . $rownuoc["tennuoc"] ."</td>";
                           echo'<td class="text-center"><a href="suasp.php?id='.$row['id'].'" class="templatemo-edit-btn">Edit</a></td>';
                           echo'<td class="text-center"><a href="deletesp.php?id='.$row['id'].'" class="templatemo-edit-btn" onclick= "alert('.$xoa.');">Delete</a></td>';
                            echo"</tr>";
                      }
                        
                  ?>

                </tbody>
              </table> 
				<div class="pagination-wrap">
            <ul class="pagination">
            	<?php
				$x = mysqli_query($con,"SELECT id FROM sanpham");
				$tongsotin = mysqli_num_rows($x);
				$sotrang = ceil($tongsotin / $sotin1trang);
				for($t=1; $t<=$sotrang; $t++){
				echo "<li><a href='qlsp.php?trang=$t'>$t</a></li>";
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