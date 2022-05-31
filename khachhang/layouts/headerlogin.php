 <nav class="navbar navbar-expand-md navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-branch" href="">
      <img src="images/DDaH.png" alt="Drink   Finder" title="DDaH "width="110" height="80">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarResponsive ">
      <span class="navbar-toggler-icon bg-light"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link " href="demo.php">Home</a>
        </li>
        <div class="dropdown">
  				<button class="btn btn-secondary dropdown-toggle " style="background-color: #10a3cd !important;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   				 Products
 				 </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="Product.php">All</a>
    			<a class="dropdown-item" href="banchay.php">Hot</a>
   				<a class="dropdown-item" href="spmoi.php">New</a>
  		</div>
 	 	</div>
        <li class="nav-item">
          <a class="nav-link" href="mail.php">Contacts</a>
        </li>
        <div class="dropdown">
  				<button class="btn btn-secondary dropdown-toggle" type="button"  style="background-color: #10a3cd !important;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   				 <?php echo $_SESSION['hoten']?>
 				 </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    			<a class="dropdown-item" href="../admin/giaodienkhachhang.php">Thông tin</a>
    			<a class="dropdown-item" href="../admin/khsuakh.php">Sửa thông tin</a>
   				<a class="dropdown-item" href="../admin/dangxuat.php">Đăng xuất</a>
  		</div>
  	</div>
      </ul>
    </div>
  </div>
</nav>

			