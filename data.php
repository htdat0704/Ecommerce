
<html>
  <head>
    <meta charset="UTF-8">
    <title>DEMO GỬI EMAIL</title>
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <style>
   </style>
  </head>

  <body>
    <br />
    <div class="inner contact">
      <div class="contact-form">
      
        <form id="mail-form" >
          <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
            <h3>Gửi phản hồi</h3>
            
            <input type="text" pattern="[a-z]{1,15}" name="subject" required class="form"  required="required" />
            <textarea name="message" pattern="[a-z]{1,15}" class="form textarea" required="required"></textarea>
          </div>
          <input type="submit" id="submit" name="send" class="form-btn semibold" value="Gửi Mail">
          <div class="clear"></div>
        </form>
      </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function()
  { 
    var submit = $("input[type='submit']");
    submit.click(function()
    {
    	var message = $('#message')
      var data = $('form#mail-form').serialize();
      $.ajax({
          type : 'POST', 
          url : 'mailphp.php',
          
          data : data,
          success : function(data)
          {
          	alert('Gửi mail thành công')
          }
     
  });
  return false;
 });
});
</script>
  </body>

</html>
