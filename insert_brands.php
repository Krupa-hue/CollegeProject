<?php   
  include("server.php");

  if(isset($_POST["add"]))
  {
    $speciality=$_POST['new_speciality'];
    $select="SELECT * FROM specialities WHERE speciality='$specilaity'";
    $select_query=mysqli_query($db,$select);
    $checking=mysqli_num_rows($select_query);
    if($checking>0)
    {
      echo "<script>alert('This brand is alredy Existed')</script>";
    }
    else
    {
      $insert="INSERT INTO specialities (speciality) VALUES ('$speciality')";
      $insert_query=mysqli_query($db,$insert);
      if($insert_query)
      {
      echo "<script>alert('brand inserted succesfully')</script>";
      }
    }
  }

?>


<form action="" method="post">
  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class=" fa fa-strong fa fa-receipt bg-info"></i></span>
    <input type="text" class="form-control" name="new_speciality" placeholder="Insert_Speciality" aria-label="brand" aria-describedby="basic-addon1">
    
  </div>
  <div class="input-group my-3 p-2">
    <input type="submit" class="bg-info border-0 p-2 my-3" name="add" value="add">
  </div>
</form>