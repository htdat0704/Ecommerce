<?php
session_start();
$con= mysqli_connect("localhost","root","","doan2");
date_default_timezone_set('Asia/Ho_Chi_Minh');
mysqli_set_charset($con, 'UTF8');
$_SESSION['dt']='2';
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
            <li><a href="doanhthu.php" ><i class="fa fa-bar-chart fa-fw" ></i>Theo Năm</a></li>
            <li><a href="doanhthum.php" class="active"><i class="fa fa-bar-chart fa-fw"></i>Theo Tháng</a></li>
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
              <form class="form-horizontal" action="" method="post">
       				 <label class="control-label col-sm-2" >Chọn năm:</label>
        			<div class="col-sm-9	form-group" >
       		 		<select name="nuoc"  class="form-control">
          	 <?php
           		 $nuoc="select * from nam"; 
           			 $connuoc= mysqli_query($con,$nuoc);
           	 	while ($row124= mysqli_fetch_array($connuoc))
            {  
            		if($row124["id"]==1){
            		echo '<option value ="'.$row124["id"].'" selected="selected" >'.$row124["nam"].'</option>';
            		}
            		else
			           echo '<option value ="'.$row124["id"].'" >'.$row124["nam"].'</option>';
            }
        	
            ?>
        		</select><br><div class="text-center"><input name="submit" type="submit" value="Chọn">  </div>    
       			 </div>
        		</form>
        		<?php

  			  if(isset($_POST['submit']))
    			{
    			$_SESSION['dt']=$_POST['nuoc'];
   				 }

				$qr1 = "SELECT * FROM nam where id=".$_SESSION['dt'];
                  $ds1 = mysqli_query($con,$qr1);
                  $row1 = mysqli_fetch_array($ds1);
    			?>
    			<br>
    			<br>
    			<h1 class="text-center">Doanh thu (tháng) Năm: <?php echo $row1['nam']?></h1>
    			<br>
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    
                    <td class="text-center">Tháng</td>
                    <td class="text-center">Doanh thu (VNĐ)</td>
                    <td class="text-center">Lợi nhuận (7%)</td>

                  </tr>
                </thead>
                <tbody>
                 
                                  
                  <?php 	
                 
                  
                   $qr = "SELECT * FROM hoadon where trangthai='2' and nam=".$row1['nam'];
                  $ds= mysqli_query($con,$qr);
                  $tong= 0;
                  $thang[1] =0;
                  $thang[2] =0;
                  $thang[3] =0;
                  $thang[4] =0;
                  $thang[5] =0;
                  $thang[6] =0;
                  $thang[7] =0;
                  $thang[8] =0;
                  $thang[9] =0;
                  $thang[10] =0;
                  $thang[11] =0;
                  $thang[12] =0;
                      while ($row=mysqli_fetch_array($ds))
                      {
                      	if($row['thang']=='1')
                      	{
                      		$thang[1] = $thang[1] +$row['tongtien'];
                      		
                      	}
                      	if($row['thang']==2)
                      	{
                      		$thang[2] = $thang[2] +$row['tongtien'];
                      	}
                      	if($row['thang']==3)
                      	{
                      		$thang[3] = $thang[3] +$row['tongtien'];
                      	}
                      	if($row['thang']==4)
                      	{
                      		$thang[4] = $thang[4] +$row['tongtien'];
                      	}
                      	if($row['thang']==5)
                      	{
                      		$thang[5] = $thang[5] +$row['tongtien'];
                      	}
                      	if($row['thang']==6)
                      	{
                      		$thang[6] = $thang[6] +$row['tongtien'];
                      	}
                      	if($row['thang']==7)
                      	{
                      		$thang[7] = $thang[7] +$row['tongtien'];
                      	}
                      	if($row['thang']==8)
                      	{
                      		$thang[8] = $thang[8] +$row['tongtien'];
                      	}
                      	if($row['thang']==9)
                      	{
                      		$thang[9] = $thang[9] +$row['tongtien'];
                      	}
                      	if($row['thang']==10)
                      	{
                      		$thang[10] = $thang[10] + $row['tongtien'];
                      	}
                      	if($row['thang']==11)
                      	{
                      		$thang[11] = $thang[11] + $row['tongtien'];
                      	}
                      	if($row['thang']==12)
                      	{
                      		$thang[12] = $thang[12] + $row['tongtien'];
                      	}
                      }
                      for ($i=1;$i<=12;$i++)
                      {
                      	echo "<tr>";
                      	echo '<td  class="text-center">Tháng '.$i.'</td>';
                      	echo '<td  class="text-center">'.number_format($thang[$i]).'</td>';
                      	echo '<td  class="text-center">'.number_format($thang[$i]*0.07).'</td>';
                      	echo"</tr>";
                      }
                      foreach( $thang as $value )
   						 {
      					 $tong= $tong + $value;
   						 }
                      echo "<tr>";
                      echo '<td  class="text-center">Tổng tiền</td>';
                      echo '<td  class="text-center">'.number_format($tong).'</td>';
                      echo '<td  class="text-center">'.number_format($tong*0.07).' ( Lời )</td>';
                      echo"</tr>";
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