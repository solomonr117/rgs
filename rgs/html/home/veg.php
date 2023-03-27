<?php
  // Connectivity to DB 
  include '../php/conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page </title>
    <link rel="stylesheet" href="../../dist/styles.css">
</head>
<body>

    <div class="home_page_container">
    <header class="home_page__header">
        <nav class="home_page__nav">
          <span class="home_page__logo"><a href="home.php" class="seller_page__logo">Rex Grocery Store</a> </span>
          <ul class="home_page__ul">
          <li class="home_page__list"><form action="<?php $_SERVER['PHP_SELF'];?> " method="POST"><button class="home_page_signout_button" name="signout_btn" type="submit"><a href="home.php"    onclick="signout()" id="signoutid"  class="home_page__anchor">Sign Out</a></button></form></li>

          <li class="home_page__list"> <div class="home_page_clear_cart"> <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" class="home_page_clear_cart_form"> <button type="submit" name="pp_remove_button" class="home_page_clear_cart_btn">Clear Cart</button></form></div></li>
          

          <!-- <li class="home_page__list"><a href="home.php"      id="signoutid"   class="home_page__anchor">Hi 
            <?php  if(isset($_SESSION['buyer_name'])){echo $_SESSION['buyer_name'];} ?> </a></li> -->
          <li class="home_page__list"><a href="../cart.php"       id="bag_number"  class="bag_number"> </a></li> 
          <li class="home_page__list"><a href="../cart.php"         class="seller_page__anchor"><img class="purchase_page_add_to_bag" src="../../images/bag.png" alt="Bag"></a></li>
            <li class="home_page__list"><a href="home.php"        class="home_page__anchor">Home</a></li>
            <li class="home_page__list"><a href="#purchase_page_product_list"         class="home_page__anchor">Purchase</a></li>
            <li class="home_page__list"><a href="../account/login_option.php"       class="home_page__anchor">Sign In</a></li>
            <li class="home_page__list"><a href="#"       class="home_page__anchor">Contact</a></li>
            <li class="home_page__list"><a href="#"       class="home_page__anchor">About</a></li>
          </ul>
        </nav>
       </header>

      <?php
        session_start();
        if(isset($_POST['signout_btn'])){
          session_destroy();
        }
        
      ?> 

      <script>
        function signout(){
          alert(" Successfully signed out !");
          sessionStorage.removeItem('buyer_name');
        }
      </script> 
      
      <div class="purchase_page_product_list" id="purchase_page_product_list">
  
      <?php
       
      
         // Display Insturment Details 
         include '../php/veg_disp.php';

        // Clear Cart 
         include '../php/clear_cart.php'; 

        ?>


      </div>


     </div>






    </div>


</body>
</html>