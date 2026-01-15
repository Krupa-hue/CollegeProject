<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./adstyle.css" class="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Rajdhani:wght@500&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid p-0">
      <a class="navbar-brand" href="#">
        <h1 class="text-primary ps-5">Manna<span class="logo"> Grocery Store</span></h1>
      </a>

      <h2 class="text-primary admin pe-5">Admin Dashboard</h2>
  </nav>
  <div class="container-fluid p-0 m-0">
    <div class="row d-flex bg-secondary">
      <div class="col col-2 ms-4 mt-5" style="height:25rem;border-radius:1rem;background-color:lightpink;">
        <div class="profile-img p-4"><img src="https://www.zdnet.com/a/img/resize/598c8f0296e0e94586938fa791dcd2c9372b2d69/2016/04/29/6f5863fa-7f35-41bb-8d8f-3e54479dc3da/sundar-pichai.jpg?auto=webp&fit=crop&height=1200&width=1200" style="width:150px;height:150px; border-radius:50px;" class="bg-light" alt=""></div>
        <div class="profile-options ">
          <button class="btn btn-outline-light"><a href="#" style="text-decoration:none;color:black">Edit</a></button>
          <button class="btn btn-outline-light"><a href="#" style="text-decoration:none;color:black">edit</a></button>
          <button class="btn btn-outline-light"><a href="index.php" style="text-decoration:none;color:black">Log out</a></button>

        </div>
      </div>
      <div class="col ms-3" style="background-color:lightgreen;height:150vh">
        <div class="row p-3 bg-info " style="border-radius:1rem">
          <div class="col col-2 mt-1"><button class="btn btn-outline-light"><a href="adindex.php?insert_products" class="text-decoration-none text-dark">insert product</a></button></div>
          <div class="col col-2 mt-1"><button class="btn btn-outline-light"><a href="adindex.php?insert_products" class="text-decoration-none text-dark">view product</a></button></div>
          <div class="col col-2 mt-1"><button class="btn btn-outline-light"><a href="adindex.php?insert_category" class="text-decoration-none text-dark">insert catageory</a></button></div>
          <div class="col col-2 mt-1"><button class="btn btn-outline-light"><a href="adindex.php?insert_products" class="text-decoration-none text-dark">view categories</a></button></div>
          <div class="col col-2 mt-1"><button class="btn btn-outline-light"><a href="adindex.php?insert_brand" class="text-decoration-none text-dark">insert brands</a></button></div>
          <div class="col col-2 mt-1"><button class="btn btn-outline-light"><a href="adindex.php?insert_products" class="text-decoration-none text-dark">view brands</a></button></div>
          <div class="col col-2 mt-1"><button class="btn btn-outline-light"><a href="adinsert_products.php" class="text-decoration-none text-dark">Products list</a></button></div>
          <div class="col col-2 mt-1"><button class="btn btn-outline-light"><a href="adinsert_products.php" class="text-decoration-none text-dark">orders placed</a></button></div>
          <div class="col col-2 mt-1"><button class="btn btn-outline-light"><a href="adinsert_products.php" class="text-decoration-none text-dark">payments</a></button></div>
        </div>
        <div class="row mt-3 p-3">
          <div class="container">
            <!--  php code for to access the respective pages-->
            <?php
            if (isset($_GET['insert_products'])) {
              include('insert_products.php');
            }
            if (isset($_GET['insert_category'])) {
              include('insert_categories.php');
            }
            if (isset($_GET['insert_brand'])) {
              include('insert_brands.php');
            }

            ?>
          </div>
        </div>
      </div>




    </div>

  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>