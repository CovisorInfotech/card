<?php
include("config.php"); 



if (isset($_POST['$search']))
{
    $search = $_POST['search'];
    
    
}


        
        
        $search = $_POST['search'];
        $sql =  "SELECT * FROM products WHERE product LIKE '{$search}%'";
        $res = mysqli_query($db, $sql);
        while ($row= mysqli_fetch_assoc($res)) {
        ?>
       <div class="col-6 col-md-3 col-lg-3 pb-2">
            <div class="text-center img-box">
                <a href="product-details.php?id=<?php echo $row['id'] ?>">
                    <img class="" src="admin/images/products/<?php echo $row['product_image'] ?>" width="100%">
                    <p class="m-0"><span style="margin-top: 1%; font-size: 26px;"><?php echo $row['product'] ?></span> </p>
                    <p class="m-0"><span style="font-size: 20px;">₹ <?php echo $row['price'] ?></span></p>
               </a>
            </div>
        </div>
       <?php 
      }
     ?>