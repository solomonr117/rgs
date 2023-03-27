<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller registration</title>
    <link rel="stylesheet" href="../../dist/styles.css">

</head>
<body>
<div class="buyer_register_container">

<header class="buyer_register_header">
  <nav class="buyer_register_navbar">
     <span class="buyer_register_logo"><a href="../home/home.php" class="buyer_register_anchor">Rex Grocery Store</a></span>
  </nav>
</header>

<main class="buyer_register_main">
  <div class ="buyer_register_form">

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
      <div class="buyer_register_formholder">    
       <span class="buyer_register_heading">Register </span>
      <div class="buyer_register_section">
      <label for="name">Name</label>
      <input type="text" class="buyer_register_input" name="usr_name" placeholder="Enter your Name"> 
      <label for="name">Username</label>
      <input type="text" class="buyer_register_input" name="usr_username" placeholder="Enter Username">
      <label for="name">Password</label>
      <input type="text" class="buyer_register_input" name="usr_pwd" placeholder="Enter Password">
      <label for="name">Contact </label>
      <input type="text" class="buyer_register_input" name="usr_contact" placeholder="Enter your Phone Number">
      <button type="submit" name="buyer_register_submit" class="buyer_register_btn">Create</button>
      </div>
      </div>   
    </form>  
  </div>

</main>

<footer class="buyer_register_footer">
<div class="buyer_register_copyright">
  &copy; 2023 - Rex Grocery Store, All rights reserved.
</div>
</footer>

<?php



if(isset($_POST['buyer_register_submit'])){

   // connect to db 
 include '../php/conn.php';
 echo "<script> console.log('Connected Successfull.. !'); </scirpt>";


 // Inserting values to db
$user_name=$_POST['usr_name'];
$user_username=$_POST['usr_username'];
$user_password=$_POST['usr_pwd'];
$user_contact=$_POST['usr_contact'];

$buyer_details_insert = "INSERT INTO seller_details(Name,Username,Password,Contact) VALUES('$user_name','$user_username','$user_password','$user_contact');";

$conn->query($buyer_details_insert);

header("Location: seller_login.php");


}

?>

</div>
</body>
</html>