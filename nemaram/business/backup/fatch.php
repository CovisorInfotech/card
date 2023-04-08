<?php
include("config.php"); 


if (isset($_POST['sort']))
{
    $flter_sort = $_POST['sort'];
}

if (isset($_POST['category']))
{
   $flter_value = $_POST['category'];
}

if (isset($_POST['filter']))
{
    $flter_value = $_POST['filter'];
}

if (isset($_POST['$search']))
{
    $search = $_POST['search'];
    
    
}


       
        if(isset($flter_value)){
        $sqlt =  "SELECT * FROM products where catagery = '$flter_value'";
        $rest = mysqli_query($db, $sqlt);
        while ($rowt= mysqli_fetch_assoc($rest)) {
        ?>
       <div class="col-6 col-md-3 col-lg-3 pb-2">
            <div class="text-center img-box">
                <a href="product-details.php?id=<?php echo $rowt['id'] ?>">
                    <img class="" src="admin/images/products/<?php echo $rowt['product_image'] ?>" width="100%">
                    <p class="m-0"><span style="margin-top: 1%; font-size: 26px;"><?php echo $rowt['product'] ?></span> </p>
                    <p class="m-0"><span style="font-size: 20px;">₹ <?php echo $rowt['price'] ?></span></p>
               </a>
            </div>
        </div>
        <?php
        }
       }
     ?>
     
     
     
      <?php
       if(isset($flter_sort)){
       if($flter_sort=='az'){
        $sqlt =  "SELECT * FROM products ORDER BY id DESC";
       }elseif($flter_sort=='za'){
        $sqlt =  "SELECT * FROM products ORDER BY id ASC";   
       }elseif($flter_sort=='lh'){
        $sqlt =  "SELECT * FROM products ORDER BY price ASC";   
       }elseif($flter_sort=='hl'){
        $sqlt =  "SELECT * FROM products ORDER BY price DESC ";   
       }elseif($flter_sort=='0'){
        $sqlt =  "SELECT * FROM products";   
       }
       
        $rest = mysqli_query($db, $sqlt);
        while ($rowt= mysqli_fetch_assoc($rest)) {
        ?>
       <div class="col-6 col-md-3 col-lg-3 pb-2">
            <div class="text-center img-box">
                <a href="product-details.php?id=<?php echo $rowt['id'] ?>">
                    <img class="" src="admin/images/products/<?php echo $rowt['product_image'] ?>" width="100%">
                    <p class="m-0"><span style="margin-top: 1%; font-size: 26px;"><?php echo $rowt['product'] ?></span> </p>
                    <p class="m-0"><span style="font-size: 20px;">₹ <?php echo $rowt['price'] ?></span></p>
               </a>
            </div>
        </div>
        <?php
        }
       }
     ?>