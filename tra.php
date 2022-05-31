<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WHISKY</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <style>
      
 body {
  width: 100%;
  height: 100%;
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  color: #222;
}

.navbar
{
  background-color: black !important;
   
}
.navbar li a {
    color: white !important;
}
.phanmot .phanphu1
{
  background-color: #009fe3;
  display:block;
  color: #ffffff;
  text-align: center;
}
.phanhai span#left
{
  font-size: 20px;
  position: absolute;
  left:35px;
  margin-top:40px;
  display: inline-block;
}
.phanhai span#right
{
  position: absolute;
  right:35px;
  margin-top:40px;
  display: block;
}
.phanba
{
  margin: 100px 30px;
}
.phanba .row
{
  text-align: center;
}
.phanba .row .gia
{
  font-size: 30px;
  color:  #009fe3;
  font-weight: bold;
}
.phanba .row .nut
{
  background-color: #009fe3;
  font-size: 20px;
  color: white;
}
.phanbon
{
  margin-left:50px;
  margin-right:40px;
}

footer {
  background-color: #3f3f3f;
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
  color:#35a3a3;
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
   </style>
</head>
<body>
 
  <!--navigation-->
  <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-branch" href="http://localhost:81/CuoiKi/web.php">
      <img src="http://goodwine.axiomthemes.com/wp-content/uploads/2016/08/logo.png" alt="Drink   Finder" title="Drink Finder "width="300" height="80">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarResponsive ">
      <span class="navbar-toggler-icon bg-light"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost:81/CuoiKi/web1.php">WHISKY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:81/CuoiKi/web2.php">WINE & CHAMPAGNE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SPIRITS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">GIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">RUM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SALE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">NEW ARRIVALS</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="phanmot">
  <span class="phanphu1">
    Spend £100.00 or more for Free Shipping<br> 
    *Mainland Only, Excluding Highlands and Islands<br>
    £4.95 3-4 Working Days £6.95 Next Working Day*<br>
    *Orders Placed By 2PM
  </span>
</div>

<div class="phanhai">
  <span id="left">WHISKY</span>
  <span id="right">Items 1 to 48 of 1607 total</span>
</div>

<div class="phanba">
  <div class="container-fluid">
    <div class="row">
      // ss 
    </div>
  </div>
</div>

<div class="phanbon">
<div>
  <p><h3>Scotch Whisky</h3></p>
  <span>As the name suggests, Scotch Whisky originates from Scotland and has been produced since the late 18th century. The fantastic thing about Scotch is that there are so many different flavours and characteristics to choose from. Whether you prefer a smooth blend, a single malt with hints of vanilla or something peaty that packs a punch, Scotland’s various distilling regions are home to an abundance of distilleries that accommodate the needs of every scotch drinker.</span>

  <p><h3>American Whiskey</h3></p>
  <span>Much like Scotch, the various types of whiskey made in America differ a lot when it comes to both taste and style. Although Bourbon is the most popular and well-known American Whiskey, this isn’t to say that others, such as Rye and Tennessee whiskey, should be ignored. Have you ever heard of Jack Daniels? Thought so! JD is a Tennessee whiskey and is among the most popular bottlings in the world.</span>

  <p><h3>Irish Whiskey</h3></p>
  <span>It’s commonly assumed that the sweet, sweet nectar that is whiskey was invented in Scotland, but history suggests that its birthplace was actually Ireland — legend has it that Irish monks took it upon themselves to teach the Scottish how to distil their own whisky. Of course, this is and will always be debated by both parties. Traditionally, Irish whiskey is triple distilled with no peat. This creates whiskies that are fruitier and lighter-bodied, and they’re considered easier to drink than the heavy smokey drams of the Scottish Islands and Highlands. If you’re looking for a nice smooth whiskey to sip at home or are looking to buy whisky online for the first time, you can’t go wrong with a bottle of Irish.</span>

  <p><h3>Japanese Whisky</h3></p>
  <span>When it comes to the distillation of whisky, countries such as Scotland, Ireland and America tend to be the first regions that spring to mind. However, over the last decade or so, Japan has enjoyed great success by introducing a whisky that’s reminiscent of scotch but has the unique flair of Japanese innovation. Japan is home to several whisky distilleries, which produce both single malt and blended bottlings. Japanese Whisky is a favourite among both casual drinks as well as whisky connoisseurs, so next time you buy whisky online, why not see what Japan has to offer?</span><br><br>
</div>
</div>
<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12" >
        <span id="psau">
          <i class="fa fa-envelope" aria-hidden="true"></i> Subscribe to our Newsletter<br>
          <input type="text" id="name" placeholder="Enter your email" style="width:250px;height:40px ">
          <span class="button"><input type="submit" name="Subscribe" value="Subscribe"></span>
        </span>
      </div>
    </div>
    <div class="phantam">
    <div class="row">
      <div class="col-12 col-sm-3 col-md-3 col-lg-3" id="mot">
        <ul>
          <li class="title">Company</li>
          <li><a href="">About Us</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Trade Registration</a></li>
          <li><a href="">Virtual Tour</a></li>
          <li><a href="">Contacts</a></li>
          <li><a href="">Sitemap</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-3 col-md-3 col-lg-3" id="mot">
        <ul>
          <li class="title">Customer Service</li>
          <li><a href="">Delivery Information</a></li>
          <li><a href="">Terms & Conditions</a></li>
          <li><a href="">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-3 col-md-3 col-lg-3" id="mot">
        <ul>
          <li class="title">Your Account</li>
          <li><a href="">Your Orders</a></li>
          <li><a href="">Your Wishlist</a></li>
          <li><a href="">Cart</a></li>
          <li><a href="">Your Account</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-3 col-md-3 col-lg-3" id="mot">
        <ul>
          <li class="title">Constantine Stores Ltd</li>
          <li><i class="fa fa-map" aria-hidden="true"></i> 30 Fore Street, Constantine, Falmouth, Cornwall, TR11 5AB</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i>(+44) 01326 340226</li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="">sales@drinkfinder.co.uk</a></li>
        </ul>
      </div>
    </div>
    <div class="phanchinh">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <small>© Copyright Drink Finder – Over 3000 Alcoholic Drinks to Buy Online – 01326 340226</small>
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