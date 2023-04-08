<?php 
include 'header.php';
$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
$adminuser_id = $row['id'];

$sql =  "select * from cat_product where adminuser_id='$adminuser_id'";
$res = mysqli_query($db, $sql);
 ?>

            <!-- MAIN CONTENT-->
            <style>#preview1 img{width: 100px;height: 100px;}</style>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h3 class="title-5 m-b-35">Add Products</h3>
                    
                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="pill" href="#home">Add Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="pill" href="#menu1">Add Catagery</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="pill" href="#menu2">Menu 2</a>
                                        </li> -->
                                    </ul>
                                    </div>






                                    <div class="tab-content">

<div class="tab-pane container active" id="home">
                                    <div class="card-body card-block">
                                        <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col-12 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Product</label>
                                                    <input type="text" id="text-input" name="name_product" placeholder="Product" class="form-control" required>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <label for="select" class=" form-control-label">Catagery</label>
                                                <select id="select" name="catagery" class="form-control" required>

                                                    <?php
                                                    while ($row = mysqli_fetch_assoc($res)) {
                                                    ?>
                                                    <option value="<?php echo $row['product_category'] ?>"><?php echo $row['product_category'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-12 col-md-6">
                                                <label for="text-input" class=" form-control-label">Price</label>
                                                <input type="text" id="text-input" name="price" placeholder="Price" class="form-control" required>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <label for="file-input" class=" form-control-label">Image</label>
                                                 <div id="preview1"></div>
                                                <input type="file" id="file-input" name="product_image" class="form-control-file" required>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-12 col-md-12">
                                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required></textarea>
                                                </div>
                                            </div>



                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary" name="product">Submit</button>
                                                </button>
                                            </div>


                                        </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane container fade" id="menu1">
                                    <div class="card-body card-block">
                                        <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                        <div class="row form-group">
                                            <div class="col-12 col-md-12">
                                
                                                <div class="col-12 col-md-12">
                                                    <label for="text-input" class=" form-control-label">Category</label>
                                                    <input type="text" id="text-input" name="product_category" placeholder="" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="text-center pt-4">
                                                <button type="submit" class="btn btn-primary" name="cat_product">Submit </button>
                                            </div>


                                        </form>
                                    </div>
                                    </div>

                                    <!-- <div class="tab-pane container fade" id="menu2">..l.</div> -->

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
            
            <script>
 function getImagePreview1(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview1');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>
            <!-- END MAIN CONTENT-->
<?php include 'footer.php' ?>
