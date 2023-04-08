<?php 
include 'header.php'; 
$id = $_GET['id'];
$rowcat=mysqli_fetch_assoc(mysqli_query($db, "select * from cat_product where id='$id'"));
?>


            <!-- MAIN CONTENT-->
           
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h3 class="title-5 m-b-35">Edit Category</h3>
                    
                    <div class="">
                                <div class="card">
                                   
                                    <div class="card-body card-block">
                                        <form action="update-form-query.php?updatecat_id=<?php echo $rowcat['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                        <div class="row form-group">
                                
                                                <div class="col-12 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Category</label>
                                                    <input type="text" id="text-input" name="product_category" value="<?php echo $rowcat['product_category'] ?>" placeholder="" class="form-control" required>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Category Backgroung Color</label><br>
                                                    <input type="color" name="color" value="<?php echo $rowcat['color'] ?>" id="colorInputColor" style="height: 37px;">
                                                </div>
                                            </div>

                                            <div class="text-center pt-4">
                                                <button type="submit" class="btn btn-primary" name="cat_product">Submit </button>
                                            </div>


                                        </form>
                                  </div>    


                                </div>
                               
                            </div>

                        
                    </div>
                </div>
            </div>

<?php include 'footer.php' ?>
