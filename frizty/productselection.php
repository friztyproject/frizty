  <?php include 'config/db.php';?>
                  
<section class="category px-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div>
                       

                        <aside class="side-area product-side side-shadow mt-5">

                            <div class="side-title ">
                               <!-- <h3>Product-Filter</h3>-->
                               <h3>Price Filter</h3>
                            </div>
                            <div class="side-content">
                                <ul class="list">
                                   
                                <ul class="list">
                                    <div class="container">
                                        <form action="" method="get">
                                        <div class="form-group">
                                            <label for="Price">Price</label><br />
                                            <input type="number" name="start" value=<?php if(isset($_GET['start'])){
                       echo $_GET['start'];





                        
                   }else echo 500 ?> min="100" class="form-control mt-3">
                                            <input type="number" name="end" value="<?php if(isset($_GET['end'])){
                       echo $_GET['end'];           
                        
                   }else echo 5000 ?>" class="form-control mt-3">

                   <input type="hidden" name="cat" value="<?php if(isset($_GET['cat'])){
                       echo $_GET['cat'];           
                        
                   }else echo 5000 ?>" class="form-control mt-3">
                   <input type="hidden" name="subcat" value="<?php if(isset($_GET['subcat'])){
                       echo $_GET['subcat'];           
                        
                   }else echo 5000 ?>" class="form-control mt-3">
                                            <button type="submit" class="btn btn-primary px-4 mt-3">Filter</button>
                                            
                                        </div>
                                        </form>
                                    </div>
                                </ul>



                                
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-top d-flex justify-content-between align-items-center">
                                <div class="product-sec product-item">
                                    <!-- <h2 class="my-5">Men's T-Shirts</h2> -->
                                    
                                </div>
                            </div>
                        </div>


     <?php

     //    $start=$_GET['start'];
     //   $end=$_GET['end'];
     //   $category=$_GET['cat'];
     // $subcategory=$_GET['subcat'];

     // echo $start;
     // echo $end;
     // echo $category;
     // echo $subcategory;
    
    //$sql="SELECT * from product where category_id=$category AND product_sub_category_id=$subcategory;";


      $category=$_GET['cat'];
    $subcategory=$_GET['subcat'];
     $start=$_GET['start'];
        $end=$_GET['end'];
    
    $sql="SELECT * from product where category_id=$category AND product_sub_category_id=$subcategory AND product_price BETWEEN $start AND $end";


    $result=mysqli_query($con,$sql);
    $resultCheck=0;
    if($result){
    $resultCheck=mysqli_num_rows($result);
}
    
   
    if($resultCheck >0){
        while($row = mysqli_fetch_assoc($result))
        { $id=$row['product_id']

    ?>                  







                        <div class="col-lg-3 col-sm-6">
                            <form action="cart.php" method="post">
                            <div class="product-cate">
                                <div>
                                   <a href="<?php echo 'productdetails.php?id='.$id; ?>"><?php echo '<img src="data:image;base64,'.base64_encode($row['product_image']).'">'; ?></a>
                                    <div class="product-icon">
                                        <ul>
                                            <!-- <?php// echo 'cart.php?id='.$id; ?>"><i class="fas fa-shopping-cart"></i></a> </li> -->
                                            <button type="submit" class="btn btn-warning my-3" name="add">Add to cart <i class="fas fa-shopping-cart"></i></button>
                                            <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                                        </ul>
                                    </div>
                                    <!------>
                                    <div class="product-des">
                                        <h5>
                                            <?php echo $row['product_name']; ?>
                                        </h5>
                                        <p>
                                            <?php echo $row['product_price'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </form>
                    <?php   

        }
    }


    ?>