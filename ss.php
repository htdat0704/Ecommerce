<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$con= mysqli_connect("localhost","root","","doan2");
mysqli_set_charset($con, 'UTF8');
//$abc = "d";
//$abc = "Y";
//echo date($abc, time());
//$az = date($abc, time());


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="http://ajax.googleapis.com/
	ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.form.js"></script>
	<script src="jquery-3.4.1.js" ></script>
</head>
<body>
<?php 
 $azza = "SELECT * from hoadon where id='2'";
	                    $ds = mysqli_query ($con,$azza);
	                     $row=mysqli_fetch_array($ds);
                   		$id = $row['id'];
                           
                           $sql1= "SELECT * from sanpham where id=".$row['idsp1'];
                           $axz= mysqli_query($con,$sql1);
                           $row1=mysqli_fetch_array($axz);
                           ?>
                           <td>
                           <div contentEditable='true' class='edit' id='soluong1_2'> 
                		 	<?php echo $row['soluong1']; ?>
              				 </div>
              				 <td>
              				 tổng tiền: <?php echo $row['soluong1']*500?>
              				</td>
              				</td>
                        

                       		

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
  $(document).ready(function(){
    $('.edit').click(function(){
      $(this).addClass('editMode');
    });

    $(".edit").focusout(function(){
      $(this).removeClass("editMode");
      var id = this.id;
      var split_id = id.split("_");
      var field_name = split_id[0];
      var edit_id = split_id[1];
      var value = $(this).text();

      $.ajax({
         url: 'data.php',
         type: 'post',
         data: { sl1:field_name, value:value, id:edit_id },
         success:function(response){
            console.log('Save successfully');
         }
       });

    });
  });
</script>
</body>
</html>
