<?php
session_start();
include("../db.php");

include "sidenav.php";
include "topheader.php";
?>

<!-- End Navbar -->
<div class="content">
        <div class="container-fluid">
           <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Investments</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                    <tr><th>Name</th>
                      <th>Product Type</th>
                      <th>Sector</th>
                      <th>Instruments</th>
                      <th>Country</th>
                      <th>Currency</th>
                      <th>Minimum Investment</th>
                    </tr></thead>
                    <tbody>
                    <?php 
                        $result=mysqli_query($con,"select id, name, product_type, instrument, sector, country, currency, minimum from investment")or die ("query 2 incorrect.......");

                        while(list($user_id, $user_name, $user_product_type, $user_instrument, $user_sector, $user_country,  $user_currency, $user_minimum)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$user_name</td><td>$user_product_type</td><td>$user_instrument</td><td>$user_sector</td><td>$user_country</td><td>$user_currency</td><td>$user_minimum</td>";

                        echo"<td>
                        <a href='editinvest.php?user_id=$user_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Edit User'>
                                <i class='material-icons'>edit</i>
                              <div class='ripple-container'></div></a>
                        <a href='manageinvestment.php?user_id=$user_id&action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete User'>
                                <i class='material-icons'>close</i>
                              <div class='ripple-container'></div></a>
                        </td></tr>";
                        }
                        mysqli_close($con);
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
