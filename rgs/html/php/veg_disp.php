<?php
   // Display Instruments
   $disp_query = "SELECT * FROM inst_details WHERE Type='vegetables';";

   $result = $conn->query($disp_query);



   if($result->num_rows>0){
    while($row = $result->fetch_assoc()){

   echo "<div class='purchase_page_card'>"." <img class='pp_card_image' src='../uploads/".$row['Pic']."'>"."<div class='pp_card_content'>"."<div class='pp_card_name'>".$row['Name']."</div>"."<div class='pp_card_type'>"."".$row['Type']."</div>"."<div class='pp_card_price'>"."₹ ".$row['Price']."</div>"."<form method='POST' class='pp_form' action='".$_SERVER['PHP_SELF']."'> <input type='hidden' value='".$row['Id']."' name='inst_id'><button class='pp_atb_btn' type='submit' id='".$row['Id']."' name ='add_to_bag' onclick='remove_onclick' >Add to basket</button> </form>"."</div>"."</div></br>";

}
}






 
if(isset($_POST['add_to_bag'])){

   if(isset($_SESSION['buyer_name'])){
      
   $byr_nme = $_SESSION['buyer_name']."_table";
   strtolower($byr_nme);


   $instrument_id = $_POST['inst_id'];
   $cart_query = "INSERT INTO $byr_nme(Name,Price,Type,Pic,Seller_name) SELECT Name, Price, Type, Pic, Seller_name FROM inst_details WHERE Id='$instrument_id';";
   $conn->query($cart_query);

   $check="SELECT COUNT(*) FROM $byr_nme;";
   $c = $conn->query($check);
   if($c ->num_rows > 0){
         while( $r = $c->fetch_assoc()){
            $total_cart_items =$r['COUNT(*)'];
         }
   }
   echo "<script> document.getElementById('bag_number').innerHTML = '$total_cart_items';
   </script>";
   } // checking Buyer is there or not 
   else{
      // header("Location: ../account/login_option.php");
      echo "<script> window.location.href='../account/login_option.php'; </script>";
   }


}

// $check="SELECT COUNT(*) FROM $byr_nme;";
// $c = $conn->query($check);
// if($c ->num_rows > 0){
//       while( $r = $c->fetch_assoc()){
//          $total_cart_items =$r['COUNT(*)'];
//       }
// }

// echo "<script> document.getElementById('bag_number').innerHTML = '$total_cart_items';</script>";

?>