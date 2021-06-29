<!doctype html>
<html lang="en">

<head>
    <title>Product Category</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- Bootstrap CSS -->
</head>

<body>
    <?php include 'header.php'?>
    <!---Side bar-->
    <section class="category">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div>
                        <aside class="side-area product-side side-shadow mt-5">
                            <div class="side-title ">
                                <h3>Product-title</h3>
                            </div>
                            <div class="side-content">
                                <ul class="list">
                                    <p>Categories</p>
                                    <li>
                                        <input type="radio" aria-label="radio button" name="category">
                                        <a href="">T-shirts</a></li>
                                    <li>
                                        <input type="radio" aria-label="radio button" name="category">
                                        <a href="">Shirts</a></li>
                                    <li>
                                        <input type="radio" aria-label="radio button" name="category">
                                        <a href="">Shorts</a></li>
                                    <li>
                                        <input type="radio" aria-label="radio button" name="category">
                                        <a href="">Trousers</a></li>
                                </ul>
                                <ul class="list">
                                    <p>Color</p>
                                    <li>
                                        <input type="radio" aria-label="radio button">
                                        <a href="">Black</a></li>
                                    <li>
                                        <input type="radio" aria-label="radio button">
                                        <a href="">Black Leather</a></li>
                                    <li>
                                        <input type="radio" aria-l <a href="">Black with Red</a></li>
                                    <li>
                                        <input type="radio" aria-label="radio button">
                                        <a href="">Gold</a></li>
                                    <li>
                                        <input type="radio" aria-label="radio button">
                                        <a href="">Space grey</a></li>
                                </ul>
                                <ul class="list">
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="Price">Price</label><br />
                                            <input class="custom-range" min="500" max="2500" step="50" value="500" type="range">
                                        </div>
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
                                    <h2 class="my-5">Men's T-Shirts</h2>
                                </div>
                            </div>
                        </div>
                        <?php include 'db.php';?>

                       
                        <?php

    $category=$_GET['cat'];
    $subcategory=$_GET['subcat'];

    
    $sql="SELECT * from product where category_id=$category AND product_sub_category_id=$subcategory;";
    
    
    $result=mysqli_query($con,$sql);
    $resultCheck=0;
    if($result){
    $resultCheck=mysqli_num_rows($result);
}
    
   
    if($resultCheck >0){
        while($row = mysqli_fetch_assoc($result))
        {

    ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-cate">
                                <div>
                                    <?php echo '<img src="data:image;base64,'.base64_encode($row['product_image']).'">'; ?>
                                    <div class="product-icon">
                                        <ul>
                                            <li><a href=""><i class="fas fa-shopping-cart"></i></a> </li>
                                        </ul>
                                    </div>
                                    <!------>
                                    <div class="product-des">
                                        <h5>
                                            <?php echo $row['product_name'] ?>
                                        </h5>
                                        <p>
                                            <?php echo $row['product_price'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <?php   

        }
    }

    ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--End of Sidebar-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>