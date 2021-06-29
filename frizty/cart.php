<!--cart</!-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/style.css">
<?php
    include 'header.php';

    



if(isset($_POST['add'])){
  //print_r($_POST['product_id']);

  if(isset($_SESSION['cart'])){
    
    $item_array_id=array_column($_SESSION['cart'], "product_id");

    if(in_array($_POST['product_id'],$item_array_id)){
      echo "<script>alert('Product is already added in the cart...!')</script>";
    }else{
      $count=count($_SESSION['cart']);

      $item_array=array(
       'product_id'=>$_POST['product_id']
    );

      $_SESSION['cart'][$count]=$item_array;
      
    }






  }else{
    
    $item_array=array(
       'product_id'=>$_POST['product_id']
    );

    //create new session variable
    $_SESSION['cart'][0]=$item_array;
    print_r($_SESSION['cart']);
  }

}





















    if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}

  ?>
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping_cart">
                <h5>My Cart</h5>
                <hr>
                <?php 
         if(isset($_SESSION['cart'])){
         $product_id=array_column($_SESSION['cart'], 'product_id');
         
         include 'cartitem.php';
         
      }



         ?>