<?php
include("connect.php");
if(isset($_POST['insert_product'])){
  $product_name=$_POST['product_name'];
  $product_description=$_POST['product_description'];
  $product_Keywords=$_POST['product_Keywords'];
  $category=$_POST['category'];
  $brand=$_POST['brand'];
  $product_price=$_POST['product_price'];
   echo "<script>alert('hello')</script>";
  // inserting images
  $product_image1=$_FILES['product_image1']['name'];
  $product_image2=$_FILES['product_image2']['name'];

  // creating temp for images
  $temp_image1=$_FILES['product_image1']['tmp_name'];
  $temp_image2=$_FILES['product_image2']['tmp_name'];
  
  if($product_name=='' or $product_description=='' or $product_Keywords=='' or $category=='' or $brand=='' or $product_price=='' or $product_image1=='' or $product_image2==''){
    echo "<script>alert('Enter all the fields of the products')</script>";
  }else{
    move_uploaded_file($temp_image1,"./products_images/$product_image1");
    move_uploaded_file($temp_image2,"./products_images/$product_image2");

    $insert_products="insert into `products` (product_name,product_description,product_keywords,category,brand,product_img_1,product_img_2,product_price) values ('$product_name','$product_description','$product_Keywords','$category','$brand','$product_image1','$product_image2',$product_price)";
    $result_query=mysqli_query($con,$insert_products);
    if($result_query){
      echo "<script>alert('Product inserted successfully!')</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css" class="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Rajdhani:wght@500&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="text-center text-primary mt-4">Insert the Product Details</h1>
      </div>
      <div class="form-outline mt-4">
        <form action="" method="POST" class="form-controls text-center" enctype="multipart/form-data" autocomplete="off">
          <label for="product_name">Product Name:</label><br>
          <input type="text" class="w-50 mb-3 p-1" required="required" name="product_name" id="product_name" placeholder="Enter_Product_name" autocomplete="off"><br>
          <label for="product_description">Product Description:</label><br>
          <input type="text" class="w-50 mb-3 p-1" required="required" name="product_description" id="product_description" placeholder="Enter_product_description" autocomplete="off"><br>
          <label for="product_name">Product Name:</label><br>
          <input type="text" class="w-50 mb-3 p-1" required="required" name="product_Keywords" id="product_Keywords" placeholder="Enter_Product_Keywords" autocomplete="off"><br>
          <label for="category">Select category:</label><br>
          <select class="w-50 mb-3 p-1" required="required" autocomplete="off" name="category" id="category">
            <option>select</option>
            <ul><?php
                $select = "SELECT * FROM categories";
                $select_query = mysqli_query($con, $select);
                while ($rows = mysqli_fetch_assoc($select_query)) {
                  $category_name = $rows['category_name'];
                  echo "<option><li> $category_name</li></option>";
                }
                ?>
            </ul>
          </select><br>
          <label for="brand">Select Brand:</label><br>
          <select class="w-50 mb-3 p-1" required="required" name="brand" value="brand">
            <option>select</option>
            <ul>
              <?php
              $select = "SELECT * FROM brands";
              $select_query = mysqli_query($con, $select);
              while ($rows = mysqli_fetch_assoc($select_query)) {
                $brand_name = $rows['brand_name'];
                echo "<option><li> $brand_name</li></option>";
              }
              ?>
            </ul>
          </select><br>
          <label for="product_image-1">Product image-1:</label><br>
          <input type="file" class="w-50 mb-3 p-1 bg-info" name="product_image1" id="product_image1" required="required"><br>
          <label for="product_image-2">Product image-2:</label><br>
          <input type="file" class="w-50 mb-3 p-1 bg-info" name="product_image2" id="product_image2" required="required"><br>
          <label for="product_price">Product price:</label><br>
          <input type="text" class="w-50 mb-3 p-1" name="product_price" id="product_price" placeholder="Enter_Product_price" autocomplete="off" required="required"><br>
          <input type="submit" name="inserting_product" value="insert_product" class="btn btn-outline-info text-dark p-1 ms-0">
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php



?>