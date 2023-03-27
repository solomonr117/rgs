<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyerLogin  </title>
    <link rel="stylesheet" href="../../dist/styles.css">
</head>
<body>
      <?php $msg=""; ?>
      <div class="login_container">

        <header class="login_header">
          <nav class="login_navbar">
             <span class="login_logo"><a href="../home/home.php" class="login_anchor">Rex Grocery Store</a></span>
          </nav>
        </header>

        <main class="login_main">
          <div class ="login_form">
  
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
              <div class="login_formholder">    
               <span class="login_signin">Sign In</span>
              <div class="login_section">
                <input type="text" class="login_input" name="buyer_username" placeholder="Enter your Username" required>
              <input type="password" class="login_input" name="buyer_password" placeholder="Enter your Password" required>
              <button type="submit" name="buyer_login_submit" class="login_btn">Login</button>

              <div class="login_register">Not a member?  <a href="buyer_register.php">  Sign Up here..</a></div>
              <div class="buyer_login_message" id='buyer_login_message' style="margin-left:auto;margin-right:auto;">  </div>
              </div>
              </div>   
            </form>  
          </div>
      
        </main>
    
    <footer class="login_footer">
      <div class="login_copyright">
          &copy; 2023 - Rex Grocery Store, All rights reserved
      </div>
    </footer>
    <?php
    session_start();

    if(isset($_POST['buyer_login_submit'])){
      //connect to db 
    include_once "../php/conn.php";

    $buyer_username = trim($_POST['buyer_username']);
    $buyer_password = trim($_POST['buyer_password']);

    $check_user_query= "SELECT Name,Username,Password FROM buyer_details;";
    $brc = $conn->query($check_user_query);

    if($brc->num_rows>0){
      while($brarray = $brc->fetch_assoc()){
           if(trim($brarray['Username'])==$buyer_username && trim($brarray['Password'])==$buyer_password ){
                   header("Location: ../home/home.php#purchase_page_product_list");
                    $_SESSION['buyer_name']= $brarray['Name'];
           }else{
               echo "<script> document.getElementById('buyer_login_message').innerHTML='Incorrect Username or Password..🥲'; </script>";
            
           }
            
      }

    }
    }
    
    ?>
   
      </div>

</body>
</html>