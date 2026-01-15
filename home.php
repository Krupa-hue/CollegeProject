<?php
  include("../include/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style1.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Rajdhani:wght@500&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="height:60px">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h1 class="text-primary">Manna<span class="logo"> Grocery Store</span></h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  bg-dark text-light" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 px-3 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Reviews">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#about us">About Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
    <div class="icons d-flex">
      <a href="#"><i class=" fa fa-shopping-cart px-3 text-success"></i></a>
      <a href="#"><i class=" fa fa-user pe-3 ps-3 text-success"></i></a>
      <a href="index.php"><i class=" fa fa-sign-out pe-3 ps-3 text-success"></i></a>
    </div>
    <!-- <button class="btn btn-outline-info p-2"><a href="index.php" class="text-decoration-none text-white">log out</a></button> -->
  
  </nav>
  <!-- <div class="login" style="display:flex;z-index:3;">
         <?php
          if(isset($_GET['login']))
          {
          include("login.php");
          }
        ?>
        </div> -->
 
  <!-- Store Slides below the navbar -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="z-index:1">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://i.pinimg.com/originals/37/12/e4/3712e4921086beef88529eccdd522a0a.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://bigbfreshstore.com/wp-content/uploads/2019/07/banner_12-1294x372.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://i.pinimg.com/originals/01/68/4b/01684b75641aa17bd23461451d9c199d.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- products area -->
  <div class="container-fluid mt-5" id="products">
    <h2 class="text-center text-primary mb-5"> Our Products</h2>
    <div class="row row-cols-lg-6 row-cols-md-3 row-cols-sm-2 row-cols-xs-1 " style="justify-content: space-between;">
      <div class="col col-2 bg-info p-0 border-dark border-2">
        <!-- brandgories , brands and price accordins -->
        <div class="accordion accordion-flush pt-2 px-1" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                category
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              <?php
                  $select="SELECT * FROM categories";
                  $select_query=mysqli_query($con,$select);
                  while($rows=mysqli_fetch_assoc($select_query)){
                    $category_id=$rows['id'];
                    $category_name=$rows['category_name'];
                    echo "<form><input type='checkbox' name='$category_name'> $category_name</form>";

                  }
                ?>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Brand
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              <?php
                  $select="SELECT * FROM brands";
                  $select_query=mysqli_query($con,$select);
                  while($rows=mysqli_fetch_assoc($select_query)){
                    $brand_name=$rows['brand_name'];
                    echo "<form><input type='checkbox' name='$brand_name'> $brand_name</form>";

                  }
                ?>
                </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Price
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
              Krupanand
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col col-10 pe-5">
        <div class="row row-cols-lg-6 row-cols-md-3 row-cols-sm-2 row-cols-xs-1 px-3 w-auto" style="justify-content: space-between;">
          <div class="pcol col">
            <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
              <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/oreo.jpg" class="card-img-top" style="height:6rem" alt="...">
              <div class="card-body">
                <h5 class="card-title">Oreo</h5>
                <p class="card-text">Some quick</p>
                <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                <a href="#" class="btn btn-outline-primary">Buy</a>
              </div>
            </div>
          </div>
          <div class="pcol col">
            <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
              <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/hershey-kisses.jpg" class="card-img-top" style="height:6rem" alt="...">
              <div class="card-body">
                <h5 class="card-title">Kisses</h5>
                <p class="card-text">Some quick</p>
                <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                <a href="#" class="btn btn-outline-primary">Buy</a>
              </div>
            </div>
          </div>
          <div class="pcol col">
            <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
              <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/quaker-oats.jpg" class="card-img-top" style="height:6rem" alt="...">
              <div class="card-body">
                <h5 class="card-title">Quicker oats</h5>
                <p class="card-text">Some quick</p>
                <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                <a href="#" class="btn btn-outline-primary">Buy</a>
              </div>
            </div>
          </div>
          <div class="pcol col">
            <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
              <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/mms.jpg" class="card-img-top" style="height:6rem" alt="...">
              <div class="card-body">
                <h5 class="card-title">M&M's</h5>
                <p class="card-text">Some quick</p>
                <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                <a href="#" class="btn btn-outline-primary">Buy</a>
              </div>
            </div>
          </div>
          <div class="pcol col">
            <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
              <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/eggo-waffles.jpg" class="card-img-top" style="height:6rem" alt="...">
              <div class="card-body">
                <h5 class="card-title">Eggos</h5>
                <p class="card-text">Some quick</p>
                <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                <a href="#" class="btn btn-outline-primary">Buy</a>
              </div>
            </div>
          </div>
          <!-- <div class="pcol col">
            <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
              <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/i-cant-believe-its-not-butter.jpg" class="card-img-top w-75" alt="...">
              <div class="card-body">
                <h5 class="card-title">Butter</h5>
                <p class="card-text">Some quick</p>
                <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                <a href="#" class="btn btn-outline-primary">Buy</a>
              </div>
            </div>
          </div> -->
        </div>
        <!-- products line 2 -->
        <div class="row row-cols-lg-6 row-cols-md-3 row-cols-sm-2 row-cols-xs-1 mt-4 px-3 w-auto" style="justify-content: space-between;">
          <div class="pcol col">
            <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
              <img src="https://projecteagle.s3.ap-south-1.amazonaws.com/images/70563277-c709-4dd0-af42-e29a2983f54f.jpg" class="card-img-top" style="height:6rem" alt="...">
              <div class="card-body">
                <h5 class="card-title">Fortune oil</h5>
                <p class="card-text">Some quick</p>
                <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                <a href="#" class="btn btn-outline-primary">Buy</a>
              </div>
            </div>
          </div>
          <div class="pcol col">
            <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
              <img src="https://www.netmeds.com/images/product-v1/600x600/898834/easum_baby_cereal_6_months_powder_rice_moong_dal_400_gm_refill_pack_0_1.jpg" style="height:6rem" class="card-img-top w-75" alt="...">
              <div class="card-body">
                <h5 class="card-title">Easum</h5>
                <p class="card-text">Some quick</p>
                <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                <a href="#" class="btn btn-outline-primary">Buy</a>
              </div>
            </div>
          </div>
          <div class="pcol col">
            <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
              <img src="https://cdn.shopify.com/s/files/1/0269/7805/8303/products/5grainfront_2.png?v=1659342219" style="height:6rem" class="card-img-top w-75" alt="...">
              <div class="card-body">
                <h5 class="card-title">One run</h5>
                <p class="card-text">Some quick</p>
                <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                <a href="#" class="btn btn-outline-primary">Buy</a>
              </div>
            </div>
          </div>
          <div class="pcol col">
            <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
              <img src="https://www.eatrightbasket.com/wp-content/uploads/2019/09/Gahat-Daal-Image.png" class="card-img-top w-75" style="height:6rem" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gahat daal</h5>
                <p class="card-text">Some quick</p>
                <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                <a href="#" class="btn btn-outline-primary">Buy</a>
              </div>
            </div>
          </div>
          <div class="pcol col">
            <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
              <img src="https://www.eatrightbasket.com/wp-content/uploads/2023/02/Arhar-Daal-Image.png" class="card-img-top w-75" style="height:6rem" alt="...">
              <div class="card-body">
                <h5 class="card-title">Arhar daal</h5>
                <p class="card-text">Some quick</p>
                <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                <a href="#" class="btn btn-outline-primary">Buy</a>
              </div>
            </div>
          </div>
          <!-- <div class="pcol col">
              <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
                <img src="https://www.eatrightbasket.com/wp-content/uploads/2021/08/Bengal-Roasted-Gram-Image.png" class="card-img-top w-50" style="height:5rem" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Bengal rpasted gram</h5>
                  <p class="card-text">Some quick</p>
                  <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                  <a href="#" class="btn btn-outline-primary">Buy</a>
                </div>
              </div>
            </div> -->
        </div>
      </div>
    </div>
  </div>

  <!-- New Offer ad display area -->
  <div class="container mt-5">
    <div class="row "> <img src="https://couponksa.com/ramadan/assets/images/grocery-images/grocery-banner01.png" style="height:12rem;" alt=""> </div>
  </div>
  <!-- side section -->
  <div class="container-fluid mt-2 ">
    <div class="row px-3 w-auto">
      <div class="col col-2 mt-5  " style=" max-width: fit-content;"><img src="https://gourmetads.com/wp-content/uploads/2019/02/walmart-300x600.jpg" style="height:30rem;padding-top: 3rem;" alt="">
      </div>
      <div class="col col-10">
        <!-- products area -->
        <div class="container mt-5 px-5 border-dark">
          <div class="row row-cols-lg-6 row-cols-md-3 row-cols-sm-2 row-cols-xs-1" style="justify-content: space-between;">
            <div class="pcol col">
              <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
                <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/oreo.jpg" class="card-img-top" style="height:6rem" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Oreo</h5>
                  <p class="card-text">Some quick</p>
                  <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                  <a href="#" class="btn btn-outline-primary">Buy</a>
                </div>
              </div>
            </div>
            <div class="pcol col">
              <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
                <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/hershey-kisses.jpg" class="card-img-top" style="height:6rem" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Kisses</h5>
                  <p class="card-text">Some quick</p>
                  <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                  <a href="#" class="btn btn-outline-primary">Buy</a>
                </div>
              </div>
            </div>
            <div class="pcol col">
              <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
                <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/quaker-oats.jpg" class="card-img-top" style="height:6rem" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Quicker oats</h5>
                  <p class="card-text">Some quick</p>
                  <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                  <a href="#" class="btn btn-outline-primary">Buy</a>
                </div>
              </div>
            </div>
            <div class="pcol col">
              <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
                <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/mms.jpg" class="card-img-top" style="height:6rem" alt="...">
                <div class="card-body">
                  <h5 class="card-title">M&M's</h5>
                  <p class="card-text">Some quick</p>
                  <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                  <a href="#" class="btn btn-outline-primary">Buy</a>
                </div>
              </div>
            </div>
            <div class="pcol col">
              <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
                <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/eggo-waffles.jpg" class="card-img-top" style="height:6rem" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Eggos</h5>
                  <p class="card-text">Some quick</p>
                  <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                  <a href="#" class="btn btn-outline-primary">Buy</a>
                </div>
              </div>
            </div>
            <!-- <div class="pcol col">
        <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
          <img src="https://www.eatthis.com/wp-content/uploads/sites/4/2019/10/i-cant-believe-its-not-butter.jpg"
            class="card-img-top w-75" alt="...">
          <div class="card-body">
            <h5 class="card-title">Butter</h5>
            <p class="card-text">Some quick</p>
            <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
            <a href="#" class="btn btn-outline-primary">Buy</a>
          </div>
        </div>
      </div> -->
          </div>
          <!-- products line 2 -->
          <div class="row row-cols-lg-6 row-cols-md-3 row-cols-sm-2 row-cols-xs-1 mt-5" style="justify-content: space-between;">
            <div class="pcol col">
              <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
                <img src="https://projecteagle.s3.ap-south-1.amazonaws.com/images/70563277-c709-4dd0-af42-e29a2983f54f.jpg" class="card-img-top" style="height:6rem" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Fortune oil</h5>
                  <p class="card-text">Some quick</p>
                  <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                  <a href="#" class="btn btn-outline-primary">Buy</a>
                </div>
              </div>
            </div>
            <div class="pcol col">
              <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
                <img src="https://www.netmeds.com/images/product-v1/600x600/898834/easum_baby_cereal_6_months_powder_rice_moong_dal_400_gm_refill_pack_0_1.jpg" style="height:6rem" class="card-img-top w-75" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Easum</h5>
                  <p class="card-text">Some quick</p>
                  <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                  <a href="#" class="btn btn-outline-primary">Buy</a>
                </div>
              </div>
            </div>
            <div class="pcol col">
              <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
                <img src="https://cdn.shopify.com/s/files/1/0269/7805/8303/products/5grainfront_2.png?v=1659342219" style="height:6rem" class="card-img-top w-75" alt="...">
                <div class="card-body">
                  <h5 class="card-title">One run</h5>
                  <p class="card-text">Some quick</p>
                  <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                  <a href="#" class="btn btn-outline-primary">Buy</a>
                </div>
              </div>
            </div>
            <div class="pcol col">
              <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
                <img src="https://www.eatrightbasket.com/wp-content/uploads/2019/09/Gahat-Daal-Image.png" class="card-img-top w-75" style="height:6rem" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Gahat daal</h5>
                  <p class="card-text">Some quick</p>
                  <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                  <a href="#" class="btn btn-outline-primary">Buy</a>
                </div>
              </div>
            </div>
            <div class="pcol col">
              <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
                <img src="https://www.eatrightbasket.com/wp-content/uploads/2023/02/Arhar-Daal-Image.png" class="card-img-top w-75" style="height:6rem" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Arhar daal</h5>
                  <p class="card-text">Some quick</p>
                  <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
                  <a href="#" class="btn btn-outline-primary">Buy</a>
                </div>
              </div>
            </div>
            <!-- <div class="pcol col">
        <div class="card pt-sm-2 pt-xs-2" style="width: 11rem;">
          <img src="https://www.eatrightbasket.com/wp-content/uploads/2021/08/Bengal-Roasted-Gram-Image.png"
            class="card-img-top w-50" style="height:5rem" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bengal rpasted gram</h5>
            <p class="card-text">Some quick</p>
            <a href="#" class="btn btn-outline-primary">Add <i class=" fa fa-shopping-cart pe-1"></i></a>
            <a href="#" class="btn btn-outline-primary">Buy</a>
          </div>
        </div>
      </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- --------------- Coustermers reviews ------------------------->
  <div class="container mt-5" id="Reviews">
    <h2 class="text-center">Coustemeres Reviews</h2>
    <div class=" reviews row mt-5 p-4">
      <div class="col">
        <div class="card  justify-content-center " style="width: 11rem;">
          <img src="https://www.zdnet.com/a/img/resize/598c8f0296e0e94586938fa791dcd2c9372b2d69/2016/04/29/6f5863fa-7f35-41bb-8d8f-3e54479dc3da/sundar-pichai.jpg?auto=webp&fit=crop&height=1200&width=1200" class="card-img-top" style="border-radius: 6rem;padding: 1rem;" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-white text-center">Sundar Pichai</h5>
            <p class="card-text text-center"><span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star text-light"></span>
            </p>
            <a href="#" class="btn btn-outline-info mx-4">Review</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="col">
          <div class="card  justify-content-center " style="width: 11rem;">
            <img src="https://imageio.forbes.com/specials-images/imageserve/62d599ede3ff49f348f9b9b4/0x0.jpg?format=jpg&crop=821,821,x155,y340,safe&height=416&width=416&fit=bounds" class="card-img-top" style="border-radius: 6rem;padding: 1rem;" alt="...">
            <div class="card-body bg-dark">
              <h5 class="card-title text-white text-center">Bill Gates</h5>
              <p class="card-text text-center"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star text-light"></span>
              </p>
              <a href="#" class="btn btn-outline-info mx-4">Review</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="col">
          <div class="card  justify-content-center " style="width: 11rem;">
            <img src="https://imageio.forbes.com/specials-images/imageserve/5c7d7829a7ea434b351ba0b6/0x0.jpg?format=jpg&crop=1837,1839,x206,y250,safe&height=416&width=416&fit=bounds" class="card-img-top" style="border-radius: 6rem;padding: 1rem;" alt="...">
            <div class="card-body bg-dark">
              <h5 class="card-title text-white text-center">Mukesh Ambani</h5>
              <p class="card-text text-center"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </p>
              <a href="#" class="btn btn-outline-info mx-4">Review</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="col">
          <div class="card  justify-content-center " style="width: 11rem;">
            <img src="https://worktheater.com/wp-content/uploads/2023/04/entrepreneur-stories-ratan-tata.jpg" class="card-img-top" style="border-radius: 6rem;padding: 1rem;" alt="...">
            <div class="card-body bg-dark">
              <h5 class="card-title text-white text-center">Ratan TATA</h5>
              <p class="card-text text-center"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star text-light"></span>
              </p>
              <a href="#" class="btn btn-outline-info mx-4">Review</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  about section    -->
  <div class="container mt-4" id="about us">
  <h2 class="text-center mt-5 text-info"><u>About Us</u></h2>
    <div class="row pt-5">
      <div class="col pt-4"><span class="priority">Customurs satisfaction is our<h1 class=" first text-primary">First Priority</h1></span>
      </div>
      <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ex minus repudiandae non consectetur debitis cum pariatur consequuntur, quisquam quia error eligendi hic delectus vel, ducimus exercitationem incidunt neque laborum iure earum! Cumque non doloremque dolor obcaecati incidunt? Dolore beatae doloribus quas cum aspernatur saepe fuga perspiciatis corrupti itaque unde!
        <br><br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, voluptatibus.
        <div class="sign text-primary"><b> - Krupanand</b></div>
      </div>
    </div>
  </div>
  <!-- ----------- Footer ---------- -->
  <footer class="footer pt-3 mt-5">
    <div class="container mt-5">
      <div class="row ">
        <div class="col col-2">Home
          <ul class="list-items text-center d-inline-block">
            <a href="#">home</a>
            <a href="#">home</a>
            <a href="#">home</a>
            <a href="#">home</a>
          </ul>
        </div>
        <div class="col col-2">Products</div>
        <div class="col col-2">Services</div>
        <div class="col col-2">About</div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>