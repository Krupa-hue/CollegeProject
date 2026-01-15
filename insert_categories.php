<?php   
  include("connect.php");

  if(isset($_POST["add"]))
  {
    $cat_name=$_POST['new_category'];
    $select="SELECT * FROM categories WHERE category_name='$cat_name'";
    $select_query=mysqli_query($con,$select);
    $checking=mysqli_num_rows($select_query);
    if($checking>0)
    {
      echo "<script>alert('This category is alredy Existed')</script>";
    }
    else
    {
      $insert="INSERT INTO categories (category_name) VALUES ('$cat_name')";
      $insert_query=mysqli_query($con,$insert);
      if($insert_query)
      {
      echo "<script>alert('Category inserted succesfully')</script>";
      }
    }
  }

?>


<form action="" method="post">
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class=" fa fa-strong fa fa-receipt bg-info"></i></span>
    <input type="text" class="form-control" name="new_category" placeholder="Insert_category" aria-label="category" aria-describedby="basic-addon1">
    
  </div>
  <div class="input-group my-3 p-2">
    <input type="submit" class="bg-info border-0 p-2 my-3" name="add" value="add">
  </div>
</form>