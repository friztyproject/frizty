<?php 
 include 'config/db.php';

$total=0;
$discount;

if(isset($_SESSION['cart'])){

$product_id=array_column($_SESSION['cart'],'product_id');


 $sql = "SELECT * FROM product";

 $result=mysqli_query($con,$sql);
    $resultCheck=0;
    if($result){
    $resultCheck=mysqli_num_rows($result);
}




if($resultCheck > 0){
while($row=mysqli_fetch_assoc($result)){

  foreach ($product_id as $id ) {
    if($row['product_id']==$id){
      $quantity=1;
   
      
     ?>
<form action="cart.php?action=remove&id=<?php echo $id ?>" method="post" class="cart-items">
    <div class="border rounded">
        <div class="row bg-white">
            <div class="col-md-3 pl-0">
                <?php echo '<img class="img-fluid" src="data:image;base64,'.base64_encode($row['product_image']).'">'; ?>
            </div>
            <div class="col-md-6">
                <h5 class="pt-2">
                    <?php echo $row['product_name'] ?>
                </h5>
                <h5 class="pt-2">Rs
                    <?php echo $row['product_price'] ?>
                </h5>
                <h6 class="pt-2">Discount :
                    <?php echo $row['discount'] ?>%</h6>
                <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
            </div>
            <div class="col-md-3 py-5">
                <div>
                    <form action="" method="post">
                        <input class="btn btn-secondary mx-2" name="quantity" type="number" value=<?php if(isset($_POST['quantity'])){ $quantity=$_POST['quantity']; echo $_POST["quantity"]; }else echo 1 ?> min=1 class="form-control w-15 d-inline">
                        <input class="btn btn-success mx-5 py-2 px-4 mt-2" type="submit" value="Confirm">
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
<?php  
$discount=(double)$row['discount'];
      $id=$row['product_id'];
      $product_price=(double)$row['product_price'];
      $itemprice=$product_price-$product_price*($discount/100);
      $totalitemprice=$itemprice*$quantity;
      $total=$total+$totalitemprice;
 

    }
  }

}
}



}else{

  echo '<h5>Cart is Empty</h5>';
}




 ?>
</div>
</div>
<div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
    <div class="pt-4">
        <h6>PRICE DETAILS</h6>
        <hr>
        <div class="row price-details">
            <div class="col-md-6">
                <?php 
              if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
                echo '<h6>Price ('.$count .' items)</h6>';
              }else{
                echo '<h6>Price (0 items)</h6>';
              }

            ?>
                <h6>Dilevery Charges</h6>
                <hr>
                <h6>Total Amount</h6>
            </div>
            <div class="col-md-6">
                <h6>
                    Rs
                    <?php echo $total;  ?>
                </h6>
                <h6 class="text-success">FREE</h6>
                <hr>
                <h6>
                    Rs
                    <?php echo $total;  ?>
                </h6>
            </div>
        </div>
    </div>
</div>
</div>
</div>