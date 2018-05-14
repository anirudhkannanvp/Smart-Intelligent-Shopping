<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
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
                
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							
						</div>                  
					</div>	
				</li>
			</ul>
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
				<h1><a href="index.html"><span>Grocery</span> Store</a></h1>
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
			  <div class="navbar-header nav_2">
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
						<li><a href="#products_edit">Products Database</a></li>
						<li><a href="#All_transactions">All Transactions</a></li>
						<li><a href="#Add_users">Add users</a></li>
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
									<a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<h3>Make your <span>food</span> with Spicy.</h3>
								<div class="more">
									<a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<h3>upto <i>50%</i> off.</h3>
								<div class="more">
									<a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
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
<!-- banner -->

	
<!-- //top-brands -->

	<!--div id="products_edit">
		<!--?php
  /* $db="id5216540_grocery";
   $connect = mysqli_connect('localhost','id5216540_vdmask','vdmask',$db);
   $query = mysqli_query($connect,"SELECT * FROM products");
   
   
      echo "<center>";*/
      ?--><!--table cellpadding="5" cellspacing="5"-->
      	<!--?php
     /* echo "<tr>";
      echo "<th>"; echo "Product ID"; echo "</th>";
      echo "<th>"; echo "catogery"; echo "</th>";
      echo "<th>"; echo "Item_name"; echo "</th>";
      echo "<th>"; echo "cost of each item"; echo "</th>";
      echo "<th>"; echo "no_of_items"; echo "</th>";
      echo "<th>"; echo "Update table"; echo "</th>";
      
      echo "</td>";
      echo "</tr>";
 while ($row = mysqli_fetch_array ($query)) {
      echo "<tr>";
      echo "<td>"; echo $row["ID"]; echo "</td>";
      echo "<td>"; echo $row["catogery"]; echo "</td>";
      echo "<td>"; echo $row["Item_name"]; echo "</td>";
      echo "<td>"; echo $row["cost"]; echo "</td>";
      
      echo "<td>"; echo $row["no_of_items"]; echo "</td>";
      echo "<td>";*/
      ?--><!--form action="update_products.php" method="post">
      	<input type="number" placeholder="--><!--?php echo $row["cost"];?-->" <!--name="cost_of_item"/>
 		<input type="number" placeholder="--><!--?php echo $row["no_of_items"];?>" name="current_no_of_items"/>
		<input type="hidden" name="cpid" value=--><!--?php echo $row["ID"];?>'/>
      	<input type="submit" name="submit" value="Update"/>
    </form-->
      <!--?php echo "</td>";
      
      
      echo "</tr>";
  }

  echo "</table>";
  echo "</center>";
?>*/
	<!--/div-->
	<div id="All_transactions">
		<?php
   $db="id5216540_grocery";
   $connect = mysqli_connect('localhost','id5216540_vdmask','vdmask',$db);
   $query = mysqli_query($connect,"SELECT * FROM Transactions");
   
   $Cart_total=0;
      echo "<center>";
      ?><table cellpadding="45" cellspacing="45">
         <?php
      echo "<tr>";
      echo "<th>"; echo "Customer ID "; echo "&nbsp&nbsp";echo "</th>";
      echo "<th>"; echo "Product ID"; echo "&nbsp&nbsp";echo "</th>";
      echo "<th>"; echo "Name of items"; echo "&nbsp&nbsp";echo "</th>";
      echo "<th>"; echo "cost of items";echo "&nbsp&nbsp"; echo "</th>";
      echo "<th>"; echo "Date of transaction";echo "&nbsp&nbsp"; echo "</th>";
      echo "</tr>";
 while ($row = mysqli_fetch_array ($query)) {
      echo "<tr>";
      echo "<td>"; echo $row["uid"]; echo "&nbsp&nbsp";echo "</td>";
      echo "<td>"; echo $row["pid"]; echo "&nbsp&nbsp";echo "</td>";
      echo "<td>"; echo $row["product"]; echo "&nbsp&nbsp";echo "</td>";
      echo "<td>"; echo $row["price"]; echo "&nbsp&nbsp";echo "</td>";
      echo "<td>"; echo $row["TS"]; echo "&nbsp&nbsp";echo "</td>";
      echo "</tr>";
  }
  echo "<tr>";
  
  echo "</table>";
  echo "</center>";

?>
	</div>
	
	
	<div id="Add_users">
		<?php
   $db="id5216540_grocery";
   $connect = mysqli_connect('localhost','id5216540_vdmask','vdmask',$db);
   //$query = mysqli_query($connect,"SELECT * FROM products");
   
   ?> <center><h1>ADD USER</h1> </center>
       <?php
      echo "<center>";
      ?><table cellpadding="5" cellspacing="5">
      	<!--?php
      /*echo "<tr>";
      echo "<th>"; echo "RFID value"; echo "</th>";
      echo "<th>"; echo "user ID"; echo "</th>";
      echo "<th>"; echo "Add user"; echo "</th>";
      echo "</tr>";*/
      ?--><form action="Add_user.php" method="post">
      	<input type="number" placeholder="Enter RFID number" name="RFID"/>
 		<input type="number" placeholder="Enter user ID" name="uid"/>
      	<input type="submit" name="submit" value="ADD"/>
    </form><br><br>
      <?php echo "</td>";
      
      
      echo "</tr>";
  

  echo "</table>";
  echo "</center>";
?>
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
