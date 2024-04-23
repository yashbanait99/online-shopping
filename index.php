<!Doctype>
<?php
session_start();
include("functions/functions.php");

?>



<html>
<head>
<title>ONLINE SHOPPING...!</title>

	<!--<link rel="stylesheet" href ="styles/style.css" media="all" />-->
  <style><?php include 'styles/style.css'; ?></style>
</head>
<body>
     <!-- MAIN CONTAINER STARTS FROM HERE--> 
    <div class="main">
    
        <!-- HEADER STARTS HERE -->    
         <div class="header">
            
              <a href="index.php"><img id="logo_image" src="images/logo"/></a>
              <img id="logo_image" src="images/logo1" style="width: 60%" /> 


         </div>  
        <!-- HEADER ENDS HERE -->
        
       <!-- NAVIGATION BAR STARTS HERE --> 
        <div class="menubar">
            <ul id="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="all_products.php">ALL PRODUCTS</a></li>
                <li><a href="customer/my_account.php">MY ACCOUNTS</a></li>
                <li><a href="">SIGN UP</a></li>
                <li><a href="cart.php">SHOPPING CART</a></li>
                <li><a href="#">CONTACT US</a></li>
           </ul>

                <div id="form">
		            <form method="get" action="results.php" enctype="multipart/form-data">
		                <input type="text" name="user_query" placeholder="Feel Free To Search" />
		                <input  type="submit" name="search" value="search" />
		            </form>
                </div>


       </div>
     	 <!-- NAVIGATION BAR ENDS HERE --> 
         
     		
     
     <!-- CONTENTS SECTION START HERE -->
              <div class="content">
                                     
			            <div id="sidebar">
			                <div id="sidebar_title">Categories</div>
			                 
			                    <ul id="cats">
			                             <?php  getCats();  ?> 

			                     </ul>

			                <div id="sidebar_title">Brands</div>
			                      <ul id="cats">
			                             <?php  getBrands();  ?>

			                      </ul> 
			                </div>




          <div id="content_area">
                                     <?php cart(); ?>
             <div id="shopping_cart">
               
                  <span style="float: center; font-size: 18px; padding: 5px; line-height: 40px">

                    <?php
                            if(isset($_SESSION['customer_email']))
                            {
                               echo "<b>Welcome &emsp;</b>".$_SESSION['customer_email'];

                            }

                            else
                            {

                              echo "<b>Welcome Guest!</b>";
                            }
 


                    ?>


                        
                   &emsp;<i>Total Items:<?php total_items(); ?> </i> &emsp;<b>Total Price:</b><?php total_price(); ?>&emsp;
                  <a href="cart.php" style="color: yellow; text-decoration: none"><i>Go to Cart &emsp;</i></a>   <!--   &emsp;   used for creating space -->
                
             

                 <?php

                   if(!isset($_SESSION['customer_email']))
                   {
                     
                     echo "<a href='checkout.php' style='color:red; text-decoration:none;'>Login</a>";
                   }

                   else
                   {
                      
                       echo "<a href='logout.php' style='color:red; text-decoration:none'>Logout</a>";
                   }
               ?>

             


                </span>

             </div> 

             
			              <div id="products_box">
			                  <?php
			                       getpro();
                           getcatpro();
                           getbrandpro();  
			                  ?>
			              </div>
          </div>


     
    </div>
     <!-- CONTENTS SECTION ENDS HERE -->

        

         <div id="footer">
                          <h2 style="text-align: center;padding-top: 10px ">&copy By ASHUTOSH RAJ</h2>
         </div>




</div>
<!-- MAIN CONTAINER ENDS HERE-->







</body>
</html>
