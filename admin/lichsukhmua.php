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
            <li><a href="giaodienkhachhang.php" ><i class="fa fa-home fa-fw"></i>Th??ng tin</a></li>
            <li><a href="luachongiohangkh.php"><i class="fa fa-bar-chart fa-fw"></i>Gi??? h??ng</a></li>
            <li><a href="lichsukhmua.php" class="active"><i class="fa fa-sliders fa-fw"></i>L???ch s???</a></li>
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
            <br>
              <div class="text-center"><h1>L???ch s??? giao d???ch </h1></div>
              <br>
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    
                    <td class="text-center">Gi??? h??ng</td>
                    <td class="text-center">S??? l?????ng s???n ph???m (Max=10) </td>
                    <td class="text-center">T???ng ti???n</td>
                    <td class="text-center">Tr???ng th??i</td>
                    <td class="text-center">Ng??y nh???n h??ng</td>
                    <td class="text-center">Chi ti???t</td>

                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                    $sqla= "SELECT * from hoadon where iduser='".$_SESSION['idkh']."' and trangthai = '2' ";
                    $assz = mysqli_query($con,$sqla);
                    if (empty($assz))
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
                    while( $roww=mysqli_fetch_array($assz))
                    {
                      echo '<tr>';
                      echo '<td class="text-center"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></td>';
                      $slsp = 10;
                      if (empty($roww['idsp10']))
                      {
                        $slsp=$slsp-1 ;
                      }
                      if (empty($roww['idsp9']))
                      {
                        $slsp=$slsp-1 ;
                      }                   
                      if (empty($roww['idsp8']))
                      {
                        $slsp=$slsp-1 ;
                      } 
                      if (empty($roww['idsp7']))
                      {
                        $slsp=$slsp-1 ;
                      } 
                      if (empty($roww['idsp6']))
                      {
                        $slsp=$slsp-1 ;
                      } 
                      if (empty($roww['idsp5']))
                      {
                        $slsp=$slsp-1 ;
                      } 

                      if (empty($roww['idsp4']))
                      {
                        $slsp=$slsp-1 ;
                      } 
                      if (empty($roww['idsp3']))
                      {
                        $slsp=$slsp-1 ;
                      } 
                      if (empty($roww['idsp2']))
                      {
                        $slsp=$slsp-1 ;
                      } 
                       if (empty($roww['idsp1']))
                      {
                        $slsp=$slsp-1 ;
                      } 
                      if($slsp==10)
                      {
                        echo '<td class="text-center" >'.$slsp.'  </td>';
                      }
                      else{
                            echo '<td class="text-center" >'.$slsp.'</td>';                 
                          }
                  echo '<td class="text-center">'.number_format($roww['tongtien']).'</td>';
                  
                            echo'<td class="text-center">???? thanh to??n</td>';
                           echo '<td class="text-center">'.$roww['ngay'].'-'.$roww['thang'].'-'.$roww['nam'].'</td>';  
                       echo'<td class="text-center"><a href="ctkh.php?id='.$roww['id'].'" class="templatemo-edit-btn">Chi ti???t</a></td>';
                            echo"</tr>";                   

                                  
                    }
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