<?php
session_start();
include("../db.php");
$user_id=$_REQUEST['user_id'];

$result=mysqli_query($con,"select id, name, product_type, instrument, sector, country, currency, minimum from investment where id='$user_id'")or die ("query 1 incorrect.......");

list($id, $name, $product_type, $instrument, $sector, $country,  $currency, $minimum)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{

    $name=$_POST['name'];
    $product_type=$_POST['product_type'];
    $sector=$_POST['sector'];
    $instrument=$_POST['instrument'];
    $country=$_POST['country'];
    $currency=$_POST['currency'];
    $minimum=$_POST['minimum'];

mysqli_query($con,"update investment set name='$name', product_type='$product_type', sector='$sector', instrument='$instrument', country='$country', currency='$currency', minimum='$minimum' where id='$user_id'")or die("Query 2 is inncorrect..........");

header("location: investment.php");
mysqli_close($con);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <div class="col-md-5 mx-auto">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Edit investment</h5>
              </div>
              <form action="editinvest.php" name="form" method="post" enctype="multipart/form-data">
              <div class="card-body">
                
                  <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>" />
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name" name="name"  class="form-control" value="<?php echo $name; ?>" >
                      </div>
                    </div>

                    <div class="col-md-12 ">
                      <div class="form-group">
                      <label>Product Type</label>
                          <input type="text" name="product_type" id="product_type"  class="form-control" value="<?php echo $product_type; ?>">
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                      <label>Sector</label>
                          <input type="text" name="sector" id="sector" class="form-control" value="<?php echo $sector; ?>">
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                      <label>Instruments</label>
                          <input type="text" name="instrument" id="instrument" class="form-control" value="<?php echo $instrument; ?>">
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                      <label>Country</label>
                          <input type="text" name="country" id="country" class="form-control" value="<?php echo $country; ?>">
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                      <label>Currency</label>
                          <input type="text" id="currency" name="currency" class="form-control" value="<?php echo $currency; ?>">
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                      <label>Minimum Investment</label>
                          <input type="text" id="minimum" name="minimum" class="form-control" value="<?php echo $minimum; ?>">
                      </div>
                    </div>                  
              </div>
              <div class="card-footer">
                <button type="submit" id="btn_save" name="btn_save" class="btn btn-fill btn-primary">Update</button>
              </div>
              </form>    
            </div>
          </div>
         
          
        </div>
      </div>