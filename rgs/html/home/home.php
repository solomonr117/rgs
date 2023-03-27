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
            <li class="home_page__list"><a href="#home_page_contact_id"       class="home_page__anchor">Contact</a></li>
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


          

       <main class="home_page_main">
       <div class="home_page_left"><h3 >Want to buy some Groceries?</h3>
       <h1>Rex Grocery Store </h1></div>

       <div class="home_page_right"><a herf= "#purchase_page_product_list" class="home_link"> Get 50% off on purchasing over RS.200 your cart, Order NOW!</a></div>
       </main>



     <div class="h_p_filter">
     <div class="home_page_filter">
        <form action="veg.php" target="_blank"><button class="div">Vegetables</button></form>
        <form action="#"><button class="div">Fruits</button></form>
        <form action="#"><button class="div">Spices</button></form>
        <form action="#"><button class="div">Dairy Products</button></form>
        <form action="#"><button class="div">Snacks</button></form>
       </div>
     </div>
      
      <div class="purchase_page_product_list" id="purchase_page_product_list">
  
      <?php
       
      
         // Display Insturment Details 
         include '../php/user_disp.php';

        // Clear Cart 
         include '../php/clear_cart.php'; 

        ?>


      </div>


      
      <div class="home_page_contact" id="home_page_contact_id">
      <section class="contact-sec sec-pad">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-detail">
          <h1 class="section-title">Contact us</h1>

          <ul class="contact-ul">
            <li><i class="fa fa-location-dot"></i> 4th William Josephs Colony, Los Angels, Dindugal </li>

            <li>
              <i class="fa fa-phone"></i>
              <a href="tel:6382826910"><b>+91 9843698487</b></a>,
              <a href="tel:9626026005"><b>+91 9626026005</b></a>
            </li>

            <li>
              <i class="fa-solid fa-envelope"></i>
              <a href="mailto:pardeepkumar4bjp@gmail.com"><b> rexgrocery@gmail.com</b></a>
            </li>
          </ul>

          <span>
            <a href="#" class="fb"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="insta"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
          </span>
        </div>
      </div>

      <div class="col-md-6" id="formstyling">
        <form action="#" class="contFrm" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <input type="text" name="name" placeholder="Your Name" class="inptFld" required /> 
            </div>

            <div class="col-sm-6">
              <input type="email" name="email" placeholder="Email Address" class="inptFld" required /> 
            </div>

            <div class="col-12">
              <textarea class="inptFld" rows="" cols="" placeholder="Enter your Query..." required></textarea>
            </div>

            <div class="col-12">
              <input type="submit" name="submit" value="SUBMIT" class="inptBtn" />
            </div>
          </div>
        </form>
      </div>
    </div>

    <div style="text-align: center; margin-top: 20px;">
      <p> Copyright &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>
        All rights reserved | Rex Grocery Store
      </p>
    </div>

  </div>
</section>
      </div>

     </div>


</body>
</html>