<?php 
 include("config.php");
 
session_start();
if(!isset($_SESSION['login_user'])){
	header("Location:index.php");
}

$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));



?>


<?php include 'header.php' ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h3 class="title-5 m-b-35">Add Blog</h3>
                    
                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Basic Form</strong> Elements
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col-12 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Product</label>
                                                    <input type="text" id="text-input" name="product" placeholder="Product" class="form-control">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <label for="select" class=" form-control-label">Catagery</label>
                                                <select name="select" id="select" name="catagery" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-12 col-md-6">
                                                <label for="text-input" class=" form-control-label">Price</label>
                                                <input type="text" id="text-input" name="price" placeholder="Price" class="form-control">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <label for="file-input" class=" form-control-label">Image</label>
                                                <input type="file" id="file-input" name="product_image" class="form-control-file">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-12 col-md-12">
                                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>


                                           
                                             
                                           <hr>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-sm" value="product-add">
                                                   <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <!-- <button type="reset" class="btn btn-danger btn-sm">
                                                   <i class="fa fa-ban"></i> Reset
                                                </button> -->
                                            </div>


                                        </form>
                                    </div>
                                    
                                </div>
                               
                            </div>
                    
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2022 Sirvi. All rights reserved. Template by <a href="#">sirvi</a>.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
<?php include 'footer.php' ?>
