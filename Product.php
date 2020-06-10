<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
// Run a select query to get my letest 6 items
// Connect to the MySQL database  
include "storescripts/connect_to_mysql.php"; 
$dynamicList = "";
$category =  $_GET['category'];
$sql = mysqli_query($conn,"SELECT * FROM products WHERE subcategory='$category' ORDER BY date_added DESC LIMIT 6");
$productCount = mysqli_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysqli_fetch_array($sql)){ 
             $id = $row["id"];
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
			 $dynamicList .= '	
	<div class="content">
    <div class="grid">
       <figure class="effect-zoe">
        <img src="inventory_images/'.$price.'.jpg" alt="img25" />
        <figcaption>
          <h2>'.$date_added.' <span></span></h2>
          <p class="icon-links">
            <a href="product.php?id=' . $id . '"><span>Add To Cart</span></a>
          </p>
		  <h3><p class="description">'.$product_name.'</br>R'.$price.'</p></h3>        </figcaption>
      </figure>
	   <figure class="effect-zoe">
        <img src="inventory_images/'.$price.'.jpg" alt="img25" />
        <figcaption>
          <h2>'.$date_added.' <span></span></h2>
          <p class="icon-links">
            <a href="product.php?id=' . $id . '"><span>Add To Cart</span></a>
          </p>
          <h3><p class="description">'.$product_name.'</br>R'.$price.'</p></h3>
        </figcaption>
      </figure>
      </figure>
    </div>
  </div>
';
    }
} else {
	$dynamicList = "We have no products listed in our store yet";
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UniSPLASH</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="index.php"><span>UniSPLASH</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="services.html">Services</a></li>
            <li role="presentation"><a href="cart.php">Cart</a></li>
            <li role="presentation"><a href="portfolio.html">Portfolio</a></li>
            <li role="presentation"><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <div class="slider">
        <div class="img-responsive">
          <ul class="bxslider">
            <li><img src="img/01.jpg" alt="" /></li>
            <li><img src="img/01.jpg" alt="" /></li>
            <li><img src="img/01.jpg" alt="" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="text-center">
          <h2>UniSPLASH Products and Services</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br> lorem sit amet scelerisque justo</p>
        </div>
        <hr>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="box">
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
            <h4>Stationery</h4>
            <div class="icon">
              <img width="260px" height="260px" src="img/stationery.jpg" alt="" />
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
            <div class="ficon">
              <a href="stationery.html" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
            <h4>Cleaning Material</h4>
            <div class="icon">
              <img width="260px" height="260px" src="img/cleaning.jpg" alt="" />
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
            <h4>School Uniform</h4>
            <div class="icon">
              <img width="260px" height="260px" src="img/uniform.jpg" alt="" />
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
            <div class="ficon">
              <a href="uniform.html" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="text-center">
          <h2><?php echo $category; ?></h2>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
          </p>
        </div>
        <hr>
      </div>
    </div>
  </div>
<?php echo $dynamicList; ?><br /><br /><br /><br />
<footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-about">
            <a href="index.php"><h1><span></span>UniSPLASH</h1></a>
            <p>UniSPLASH is one of South Africa’s largest and most trusted stationery brands that offers a comprehensive, top quality range of school, office and household stationery items that are as durable as they are affordable
			</p>
          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Latest Posts</h3>
            <ul>
              <li><a href="#">This is awesome post title</a></li>
              <li><a href="#">Awesome features are awesome</a></li>
              <li><a href="#">Create your own awesome website</a></li>
              <li><a href="#">Wow, this is fourth post title</a></li>
            </ul>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Stay in touch</h3>
            <a href="#">
              <p><i class="fa fa-envelope"></i> info@unisplash.co.za</p>
            </a>
            <p><i class="fa fa-phone"></i> +27 61 927 3340</p>
            <p><i class="fa fa-home"></i> UniSPLASH pty | 3500 Adam Kok St, Johannesburg <br> Eden Park 1452 Alberton</p>
          </div>
        </div>
      </div>
    </div>

    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
            &copy; UniSPLASH. All Rights Reserved
            <div class="credits">
             
              Designed by <a href="storeadmin/index.php">phaks323</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <ul class="social-network">
            <li><a href="https://facebook.com/Unisplash" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="https://twitter.com/unisplash" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="https://linkedin.com/unisplash" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
         </ul>
        </div>
      </div>
      <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>

</html>
