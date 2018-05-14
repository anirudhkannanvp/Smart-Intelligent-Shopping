<?php session_start();?>
<html>
<head>
<title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		
		
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <a href="show_cart.php"><input type="button" value="View your cart" class="button" /></a>
                </fieldset>
            </form>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
			    <?php
			     $db="id5216540_grocery";
                 $connect = mysqli_connect('localhost','id5216540_vdmask','vdmask',$db);
                 $id = $_SESSION["cid12"];
                 $query = mysqli_query($connect,"SELECT user FROM customer where ID=$id");
                 $result = mysqli_fetch_assoc($query);
                 $query2 = mysqli_query($connect,"SELECT rfid FROM RFID_USER where uid=$id");
                 $result2 = mysqli_fetch_assoc($query2);
                 $rfid = $result2['rfid'];
                 $status = "Not logged";
                 $query3 = mysqli_query($connect,"SELECT count(*) as count FROM CurrentlyLogged where uid=$rfid");
                 $result3 = mysqli_fetch_assoc($query3);
                 if($result3['count']==1){
                     $status="You are logged in Trolley";
                 }
                
                ?>
				<h5><a href="#"><span>Signed in as&nbsp;</span><h3><?php echo $result["user"]; ?></a></h5><br>
				<h5><a href="#"><span>With ID:&nbsp;</span><h3></h3><?php echo $id; ?></a></h5>
				<h5><a href="#"><span>Status&nbsp;</span><h3></h3><?php echo $status; ?></a></h5>
			</div>
			
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">s
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="products.php">All products</a></li>
						<li><a href="select_products.php">Select Products For Navigation</a></li>
						<li><a href="show_cart.php">My Cart</a></li>
						<li><a href="cos_transaction.php">
						Transation History</a></li>
						<li><a href="#search_products">Search for Products</a></li>
						<li><a href="#notifications">Notifications</a></li>
						
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
								<h3>Make your <span>food</span> with Spicy.</h3>
								<div class="more">
									<a href="products.php" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<h3>Make your <span>food</span> with Spicy.</h3>
								<div class="more">
									<a href="products.php" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<h3>upto <i>50%</i> off.</h3>
								<div class="more">
									<a href="products.php" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
					</ul>
				</div>

			</section>
			<div id="search_products">
		<?php
   $db="id5216540_grocery";
   $connect = mysqli_connect('localhost','id5216540_vdmask','vdmask',$db);
   $query = mysqli_query($connect,"SELECT * FROM products");
   
   
      echo "<center>";
      ?><h2>Enter product name</h2><table cellpadding="5" cellspacing="5">
      	<?php
      ?><form action="cus_search.php" method="post">
 		<input type="text"   name="sitem_name"/>
      	c<input type="submit" name="submit" value="Search For product"/>
    </form>
      <?php echo "</td>";
      echo "</tr>";

  echo "<tr>";
      echo "<td colspan='4'>";
      ?>
      <?php echo "</td>";
      
      echo "</tr>";
  echo "</table>";
  echo "</center>";
?>
	</div>
<br><br><br><center><h1>Notifications</h1></center>
			<div id="notifications">
		<?php
   $db="id5216540_grocery";
   $connect = mysqli_connect('localhost','id5216540_vdmask','vdmask',$db);
   $query = mysqli_query($connect,"SELECT * FROM notifications");
   
   
      echo "<center>";
      ?><table cellpadding="5" cellspacing="5">
      	<?php
      echo "<tr>";
      
      echo "<th>"; echo "&nbsp"; echo "&nbsp";echo "Item"; echo "&nbsp"; echo "&nbsp";echo "</th>";
      echo "<th>"; echo "&nbsp"; echo "&nbsp";echo "cost"; echo "&nbsp"; echo "&nbsp";echo "</th>";
      
      
      //echo "<th>";echo "&nbsp"; echo "&nbsp"; echo "cart"; echo "&nbsp"; echo "&nbsp";echo "</th>";
      echo "</td>";
      echo "</tr>";
 while ($row = mysqli_fetch_array ($query)) {
      echo "<tr>";
      echo "<td>"; echo "&nbsp"; echo "&nbsp";echo "&nbsp"; echo "&nbsp";echo $row["ItemName"];echo "&nbsp"; echo "&nbsp"; echo "</td>";
      echo "<td>"; echo "&nbsp"; echo "&nbsp";echo "&nbsp"; echo "&nbsp";echo $row["ItemCost"]; echo "&nbsp"; echo "&nbsp";echo "</td>";
      
     
      echo "<td>"; ?>
      
      
      <?php echo "</td>";
      
      echo "</tr>";
  }

  echo "</table>";
  echo "</center>";
?>
	</div>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

</body>
</html>