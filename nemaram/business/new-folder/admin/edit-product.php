<?php 
include 'header.php'; 
$id = $_GET['id'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from products where id='$id'"));
?>

<!-- MAIN CONTENT-->
<style>
#preview1 img{width: 100px;height: 100px;}
</style>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h3 class="title-5 m-b-35">Add Products</h3>
        
        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Basic Form</strong> Elements
                        </div>
                        <div class="card-body card-block">
                            <form action="update-form-query.php?update_id=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                                <div class="row form-group">
                                    <div class="col-12 col-md-6">
                                        <label for="text-input" class=" form-control-label">Product</label>
                                        <input type="text" id="text-input" value="<?php echo $row['product'] ?>" name="name_product" placeholder="Product" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <label for="select" class=" form-control-label">Catagery</label>
                                    <select id="select" name="catagery" class="form-control" required>
                                            <option value="<?php echo $row['catagery'] ?>"><?php echo $row['catagery'] ?></option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-6">
                                    <label for="text-input" class=" form-control-label">Price</label>
                                    <input type="text" id="text-input" value="<?php echo $row['price'] ?>" name="price" placeholder="Price" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                    <label for="file-input" class=" form-control-label">Image</label>
                                     <div id="preview1"><img src="images/products/<?php echo $row['product_image'] ?>" width="150px" height="150px" alt="" /></div>
                                    <input type="file" id="file-input" value="<?php echo $row['product_image'] ?>" name="product_image" class="form-control-file" onchange="getImagePreview1(event)">
                                    <input type="hidden" id="text-input" value="<?php echo $row['product_image'] ?>" name="product_image_old" placeholder="" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-12">
                                        <label for="textarea-input" class=" form-control-label">Description</label>
                                        <textarea name="description" value="<?php echo $row['description'] ?>" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required><?php echo $row['description'] ?></textarea>
                                    </div>
                                </div>



                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="product">Submit</button>
                                    </button>
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

<?php include 'footer.php' ?>
