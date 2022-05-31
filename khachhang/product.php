<?php 
	session_start();
	$con= mysqli_connect("localhost","root","","doan2");
	mysqli_set_charset($con, 'UTF8');
	if(isset($_GET["trang"]))
{
	$trang =$_GET["trang"];
	settype($trang, "int");

}else{
	$trang = 1;
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>product - Frozen Yogurt Shop</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
body{
	width: 100%;
	height: 100%;
	font-family: 'Alata', sans-serif;
	background-color: #E6E6E6;
	}
.navbar
{
  background-color: #10a3cd !important;
   
}
.navbar li a {
    color: white !important;
}
.phanba .row
{
	text-align: center;
}
.phanba .row .gia
{
	font-size: 18px;
	font-weight: bold;
}
.phanba .row .giax
{
	font-size: 16px;
	

}
.phanba .row .nut
{
	background-color: #009fe3;
	font-size: 20px;
	color: white;
}
footer {
  background-color: #10a3cd ;
  color: #d5d5d5;

}
.row #psau
{
  margin-left:40px;
}
 span.button
{
  background-color: blue;
  color: white;
}
.row #psau #name
{
  margin-left: 40px;
}
.phantam
{
  margin-top:30px;
  font-size:15px;
}
ul
{
  list-style-type: none;
}
.phantam .row ul li a
{
  text-decoration: none;
  color:white;
}
.title
{
  color: black;
  font-weight: bold;
  font-size:15px;
}
#mot a:hover
{
  color: #3cc9c9;
}
.phanchinh .row ul li img
{
  list-style-type: none;
  float: right;
  padding: 3px; 
}
@media screen and (max-width: 576px)
{
  .phanchinh .row #hinhanh
  {
    display: none;
  }
}
@media screen and (max-width: 768px)
{
  .phanchinh .row #hinhanh
  {
    display: none;
  }
}
.navbar li a:hover{
	border: 1px solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0.5), 0 0 20px rgba(255, 255, 255, 0.2);
  outline-color: rgba(255, 255, 255, 0);
  outline-offset: 15px;
  text-shadow: 1px 1px 2px #427388;
  padding: 5px;
	}
	input[type=text] {
  border: 1px solid white;
  border-radius: 4px;
}
input[type=submit]{
  background-color: white;
  border: 2px solid white;
  color: black;
  border-radius: 4px;
  text-decoration: none;
  cursor: pointer;
}

	</style>
<body>
	
		<?php
		if(isset($_SESSION['user'])) 
		{
		$als= "SELECT * from khachhang where username='".$_SESSION['user']."'";
		$ax= mysqli_query($con,$als);
		$row= mysqli_fetch_array($ax);
		}
		if((isset($_SESSION['user']))&&(isset($_SESSION['pass']))&&(isset($_SESSION['admin'])))
		{

		if(($_SESSION['user']==$row['username'])&&($_SESSION['pass']==$row['password'])&&($_SESSION['admin']=='0'))
		{	
		include('layouts/headerlogin.php');
		}
		if(($_SESSION['user']==$row['username'])&&($_SESSION['pass']==$row['password'])&&($_SESSION['admin']=='1'))
		{	
		include('layouts/headerloginadmin.php');
		}
	}
	else include('layouts/header.php');

		?>
		
		<div class=" text-center " style="background-color: #10a3cd; color: white;  ">

            <form action="#" method="POST">
               <i style="font-weight: Bold;"> SEARCH:</i> <input  type="text" name="search" />
                <input  type="submit" name="ok" value="Find" />
            </form>
            </div>
		<div class="container-fluid" >
		<div class="row"  >
		<div class="col-1 col-sm-1 col-md-1 col-lg-1" >
			<img src='images/abc.png'  class="img-thumbnail img-responsiv " style="width:auto; height:auto; margin-top:100px">
		</div>
		<div class="col-10 col-sm-10 col-md-10 col-lg-10">
 		
            <?php
        // Nếu người dùng submit form thì thực hiện
        if (isset($_POST['ok'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_POST['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
               
                ?>
                <div class="alert alert-primary text-center" role="alert">
    			Yêu cầu nhập dữ liệu vào ô trống
				</div>
			</div>
				<?php
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
           
           		
                $query = " SELECT * FROM sanpham where tensp like '%$search%'";
 
                // Kết nối sql
                
                // Thực thi câu truy vấn
                $sql = mysqli_query($con,$query);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                	
           			
                  ?>  
                   
                   <h1 class="text-center">Sản phẩm Dành Cho Bạn</h1>
				<br>
				<div class="phanba">
				<div class="container-fluid">
				<div class="row">	
				<?php 
			
           		 
				$dir="../admin/images/";
			
				while($rowsp= mysqli_fetch_array($sql))
				{
				?>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3">
					<a href="pages.php?id=<?php echo $rowsp['id'] ?>"><img style="width:200px; height:180px;" class="img-fluid img-thumbnail img-responsive" src="<?php echo $dir.$rowsp['id']?>.png"/></a><br>
					<span class="giax"><?php echo $rowsp['tensp']?></span><br>
					<span class="gia"><?php echo number_format($rowsp['gia'])?> VNĐ</span>
					<p><a href="xulythemvaogiohang.php?id=<?php echo $rowsp['id'] ?>"><button type="button" class="nut"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm vào giỏ hàng</button></a></p><br>
				</div>

				<?php 
				}			 
                    ?>
                  </div>  
                   
				<?php

				?>
							
						
		
	</div>
		</div>	
</div>
<?php 
                }
                else {
                    
                    ?>
                     <div class="alert alert-primary text-center" role="alert">
    			Không có kết quả tìm kiếm
				</div>
				
                    
                    
		</div>
				<?php
                }
            }
        }
        else{
        ?>   
        
	<h1 class="text-center">Sản phẩm Dành Cho Bạn</h1>
	<br>
<div class="phanba">
	<div class="container-fluid">
		<div class="row">	
			<?php 
			$sotin1trang = 16;
            $from = ($trang - 1  ) * $sotin1trang;
            if($from<0) $from=0;
            $qr = "SELECT * FROM sanpham LIMIT $from, $sotin1trang";
            $ds=mysqli_query($con,$qr);
			$dir="../admin/images/";
			//$cx= "SELECT * from sanpham ORDER BY id desc Limit 1,4";
			//$alz= mysqli_query($con,$cx);
			while($rowsp= mysqli_fetch_array($ds))
			{
			?>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3">
					<a href="pages.php?id=<?php echo $rowsp['id'] ?>"><img style="width:200px; height:180px;" class="img-fluid img-thumbnail img-responsive" src="<?php echo $dir.$rowsp['id']?>.png"/></a><br>
					<span class="giax"><?php echo $rowsp['tensp']?></span><br>
					<span class="gia"><?php echo number_format($rowsp['gia'])?> VNĐ</span>
					<p><a href="xulythemvaogiohang.php?id=<?php echo $rowsp['id'] ?>"><button type="button" class="nut"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Thêm vào giỏ hàng</button></a></p><br>
				</div>
				<?php 
			}
				?>
							
						
		</div>
	</div>
		<div style="float:right;" >
			<nav aria-label="Page navigation example">
             <ul class="pagination">
            	<?php
				$x = mysqli_query($con,"SELECT id FROM sanpham");
				$tongsotin = mysqli_num_rows($x);
				$sotrang = ceil($tongsotin / $sotin1trang);
				for($t=1; $t<=$sotrang; $t++){	
					if($t==$trang){

					?>
					<li class="page-item active"><a class="page-link" href="product.php?trang=<?php echo $t ?>"><?php echo $t ?></a></li>
   					<?php
					}
					else
					{
						?>
						<li class="page-item "><a class="page-link" href="product.php?trang=<?php echo $t ?>"><?php echo $t ?></a></li>
						<?php
					}
					}
					?>
            </ul>
          </nav> 
      </div>
</div>
</div>
			<?php }
?>
<div class="col-1 col-sm-1 col-md-1 col-lg-1">
	
	<img src='images/bcd.png'  class="img-thumbnail img-responsiv " style="width:auto; height:auto; margin-top:100px">
	
		</div>
	</div class="row" >
<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12" >
        
      </div>
    </div>
    <div class="phantam">
    <div class="row">
      <div class="col-12 col-sm-4 col-md-4 col-lg-4" id="mot">
        <ul>
          <li class="title">Company</li>
          <li><a href="">About Us</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Trade Registration</a></li>
          <li><a href="">Contacts</a></li>
          <li><a href="">Sitemap</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-4 col-md-4 col-lg-4" id="mot">
        <ul>
          <li class="title">Customer Service</li>
          <li><a href="">Delivery Information</a></li>
          <li><a href="">Terms & Conditions</a></li>
          <li><a href="">Privacy Policy</a></li>
        </ul>
      </div>
      
      <div class="col-12 col-sm-4 col-md-4 col-lg-4" id="mot">
        <ul>
          <li class="title">Constantine Stores Ltd</li>
          <li><i class="fa fa-map" aria-hidden="true"></i>133 Nguyễn Minh Châu, Quận Ngũ Hành Sơn, Đà Nẵng</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i>(+44) 096 41 99 811 </li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="">ddah@gmail.com</a></li>
        </ul>
      </div>
    </div>
</div>
    <div class="phanchinh">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <small>© Copyright DDaH Buy Online – 01326 340226</small>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6" id="hinhanh">
          <ul>
            <li><img src="https://www.drinkfinder.co.uk/media/theme/logo-paypal.svg"width="70px" height="50px"></li>
            <li><img src="https://www.drinkfinder.co.uk/media/theme/logo-visa.svg"width="70px" height="50px"></li>
            <li><img src="https://www.drinkfinder.co.uk/media/theme/logo-discover.svg"width="70px" height="50px"></li>
            <li><img src="https://www.drinkfinder.co.uk/media/theme/logo-mastercard.svg"width="70px" height="50px"></li>
            <li><img src="https://www.drinkfinder.co.uk/media/theme/logo-maestro.svg"width="70px" height="50px"></li>
          </ul> 
        </div>
      </div>
    </div>
  </div>  
  </div>
</footer>


</body>
</html>
