<?php 
	session_start();
	$con= mysqli_connect("localhost","root","","doan2");
	mysqli_set_charset($con, 'UTF8');
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>product - Frozen Yogurt Shop</title>
	
</head>
<style>

.phanba .row
{
	text-align: center;
}
.phanba .row .gia
{
	font-size: 20px;
	color:  #009fe3;
	font-weight: bold;
}
.phanba .row .giax
{
	font-size: 20px;
	font-weight: bold;
}
.phanba .row .nut
{
	background-color: #009fe3;
	font-size: 20px;
	color: white;
}
	</style>
<body>
	<div id="page">
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

		<div align="center">
            <form action="#" method="POST">
                Search: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>
        </div>
        <?php
        // Nếu người dùng submit form thì thực hiện
        if (isset($_POST['ok'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_POST['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
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
				<div class="col-6 col-sm-6 col-md-3 col-lg-3">
					<a href="pages.php?id=<?php echo $rowsp['id'] ?>"><img style="width:200px; height:180px;" class="img-fluid img-thumbnail img-responsive" src="<?php echo $dir.$rowsp['id']?>.png"/></a><br>
					<span class="giax"><?php echo $rowsp['tensp']?></span><br>
					<span class="gia"><?php echo $rowsp['gia']?> VNĐ</span>
					<p><a href="xulythemvaogiohang.php?id=<?php echo $rowsp['id'] ?>"><button type="button" class="nut"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> ADD TO BASKET</button></a></p><br>
				</div>
				<?php 
				}
				?>
							
						
		</div>
	</div>
			
</div>
<?php 
                }
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>   
		<br>
	
</div>
<footer>
<div id="footer">
			<div>
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
					<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
					<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
					<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
				</div>
				<p>&copy; 2023 Freeeze. All Rights Reserved.</p>
			</div>
		</div>
</footer>

</body>
</html>
