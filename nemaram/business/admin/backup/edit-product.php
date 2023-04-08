<?php 
include 'header.php'; 
$id = $_GET['id'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from products where id='$id'"));

?>

<!-- MAIN CONTENT-->
<style>
#preview1 img{width: 100px;height: 100px;}
#preview2 img{width: 100px;height: 100px;}
#preview3 img{width: 100px;height: 100px;}
#preview4 img{width: 100px;height: 100px;}
#preview5 img{width: 100px;height: 100px;}
</style>
<style>.image-upload>input {display: none;}</style>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h3 class="title-5 m-b-35">Edit Products</h3>
        
        <div class="">
                    <div class="card">
                        <div class="card-header">
                            <strong>Products Form</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="update-form-query.php?update_id=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                                <div class="row form-group">
                                    <div class="col-12 col-md-3">
                                        <label for="text-input" class=" form-control-label">Product</label>
                                        <input type="text" id="text-input" value="<?php echo $row['product'] ?>" name="name_product" placeholder="Product" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Price</label>
                                    <input type="text" id="text-input" value="<?php echo $row['price'] ?>" name="price" placeholder="Price" class="form-control" required>
                                    </div>
                                    
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Price</label>
                                    <input type="text" id="text-input" value="<?php echo $row['discount'] ?>" name="discount" placeholder="Discount" class="form-control" required>
                                    </div>
                                   
                                    <div class="col-12 col-md-3">
                                    <label for="select" class=" form-control-label">Category</label>
                                    <select id="select" name="catagery" class="form-control" required>
                                            <option value="<?php echo $row['catagery'] ?>"><?php echo $row['catagery'] ?></option>
                                                <?php
                                                $sql3 =  "select * from cat_product where adminuser_id='$adminuser_id'";
                                                $res3 = mysqli_query($db, $sql3);
                                                while ($row3 = mysqli_fetch_assoc($res3)) {
                                                ?>
                                                <option value="<?php echo $row3['product_category'] ?>"><?php echo $row3['product_category'] ?></option>
                                                <?php
                                                }
                                                ?>
                                    </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    
                                    <div class="col-6 col-md-2">
                                    <div class="image-upload text-center card m-2">       
                                    <label for="file-input" class=" form-control-label"><div id="preview1"><img src="<?php if(!empty($row['product_image'])) { ?>images/products/<?php echo $row['product_image'] ?> <?php } else { ?> https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png <?php } ?>" width="150px" height="150px" alt="" /></div><p class="text-center m-0">Choose image</p></label>
                                    <input type="file" id="file-input" value="<?php echo $row['product_image'] ?>" name="product_image" class="form-control-file" onchange="getImagePreview1(event)">
                                    <input type="hidden" id="text-input" value="<?php echo $row['product_image'] ?>" name="product_image_old" placeholder="" class="form-control">
                                    </div>
                                    </div>

                                    <div class="col-6 col-md-2">
                                    <div class="image-upload text-center card m-2">      
                                    <label for="file-input2" class=" form-control-label"><div id="preview2"><img src="<?php if(!empty($row['product_image2'])) { ?>images/products2/<?php echo $row['product_image2'] ?> <?php } else { ?> https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png <?php } ?>" width="150px" height="150px" alt="" /></div><p class="text-center m-0">Choose image</p></label>
                                    <input type="file" id="file-input2" value="<?php echo $row['product_image2'] ?>" name="product_image2" class="form-control-file" onchange="getImagePreview2(event)">
                                    <input type="hidden" id="text-input2" value="<?php echo $row['product_image2'] ?>" name="product_image_old2" placeholder="" class="form-control">
                                    </div>
                                    </div>

                                    <div class="col-6 col-md-2">
                                    <div class="image-upload text-center card m-2">       
                                    <label for="file-input3" class=" form-control-label"><div id="preview3"><img src="<?php if(!empty($row['product_image3'])) { ?>images/products3/<?php echo $row['product_image3'] ?> <?php } else { ?> https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png <?php } ?>" width="150px" height="150px" alt="" /></div><p class="text-center m-0">Choose image</p></label>
                                    <input type="file" id="file-input3" value="<?php echo $row['product_image3'] ?>" name="product_image3" class="form-control-file" onchange="getImagePreview3(event)">
                                    <input type="hidden" id="text-input3" value="<?php echo $row['product_image3'] ?>" name="product_image_old3" placeholder="" class="form-control">
                                    </div>
                                    </div>

                                    <div class="col-6 col-md-2">
                                    <div class="image-upload text-center card m-2">       
                                    <label for="file-input4" class=" form-control-label"><div id="preview4"><img src="<?php if(!empty($row['product_image4'])) { ?>images/products4/<?php echo $row['product_image4'] ?> <?php } else { ?> https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png <?php } ?>" width="150px" height="150px" alt="" /></div><p class="text-center m-0">Choose image</p></label>
                                    <input type="file" id="file-input4" value="<?php echo $row['product_image4'] ?>" name="product_image4" class="form-control-file" onchange="getImagePreview4(event)">
                                    <input type="hidden" id="text-input4" value="<?php echo $row['product_image4'] ?>" name="product_image_old4" placeholder="" class="form-control">
                                    </div>
                                    </div>

                                    <div class="col-6 col-md-2">
                                    <div class="image-upload text-center card m-2">       
                                    <label for="file-input5" class=" form-control-label"><div id="preview5"><img src="<?php if(!empty($row['product_image5'])) { ?>images/products5/<?php echo $row['product_image5'] ?> <?php } else { ?> https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png <?php } ?>" width="150px" height="150px" alt="" /></div><p class="text-center m-0">Choose image</p></label>
                                    <input type="file" id="file-input5" value="<?php echo $row['product_image5'] ?>" name="product_image5" class="form-control-file" onchange="getImagePreview5(event)">
                                    <input type="hidden" id="text-input5" value="<?php echo $row['product_image5'] ?>" name="product_image_old5" placeholder="" class="form-control">
                                    </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-12">
                                        <label for="textarea-input" class=" form-control-label">Description</label>
                                        <textarea name="description" value="<?php echo $row['description'] ?>" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required><?php echo $row['description'] ?></textarea>
                                    </div>
                                </div>
                                
                                <?php
                                $attributes =  "select * from product_attributes where product_tokan='".$row['product_tokan']."'";
                                $att_nr = mysqli_query($db, $attributes);
                                if (mysqli_num_rows($att_nr) > 0) {
                                ?>
                                <p class="text-center"><b>Product Attributes</b></p>
                                <table class="table table-bordered" id="item_table">
                                            <tbody>
								            <tr>
									        <td>Attributes Title</td>
									        <td>Attributes Name</td>
									        </tr>
									        <?php
                                            while ($att = mysqli_fetch_assoc($att_nr)) {
                                            ?>
							                <tr>
							                <td>
							                <input type="hidden" value="<?php echo $att['id'] ?>" name="attributes_title_id[]" class="form-control item_name" fdprocessedid="pbj9w8">       
							                <select name="attributes_title[]" class="form-control" data-live-search="true" fdprocessedid="d7cwj">
							                <option value="<?php echo $att['attributes_title'] ?>"><?php echo $att['attributes_title'] ?></option>       
							                <?php       
							                $query_att = "SELECT * FROM product_attributes_title";
                                            $result_att = mysqli_query($db, $query_att);  
                                            while ($row_att = mysqli_fetch_assoc($result_att)) {
                                            ?>
							                <option value="<?php echo $row_att['attributes_title'] ?>"><?php echo $row_att['attributes_title'] ?></option>
							                <?php
                                            }
							                ?>
							                </select>
							                </td>
							                <td>
							                <input type="text" value="<?php echo $att['attributes_name'] ?>" name="attributes_name" class="form-control item_name" fdprocessedid="pbj9w8">
							                <input type="hidden" value="<?php echo $att['id'] ?>" name="attributes_name_id[]" class="form-control item_name" fdprocessedid="pbj9w8">
							                </td>
							                </tr>
							                <?php
                                            }
                                            ?>
							        </tbody>
							    </table>
							    <?php
                                }
                                ?>
							    
							     <?php
                                $qusan_anser =  "select * from products_qusan_anser where product_tokan='".$row['product_tokan']."'";
                                $anser_nr = mysqli_query($db, $qusan_anser);
                                if (mysqli_num_rows($anser_nr) > 0) {
                                ?>
							    <p class="text-center"><b>Product Policy</b></p>
                                 <table class="table table-bordered" id="item_table">
                                            <tbody>
								            <tr>
									         <td>Policy Title</td>
									        <td>Policy Name</td>
									        </tr>
									        <?php
                                            while ($qa = mysqli_fetch_assoc($anser_nr)) {
                                            ?>
							                <tr>
							                <td>
							                <input type="hidden" value="<?php echo $qa['id'] ?>" name="policy_qu_id[]" class="form-control item_name" fdprocessedid="pbj9w8">    
							                <select name="policy_qu[]" class="form-control" data-live-search="true" fdprocessedid="d7cwj">
							                <option value="<?php echo $qa['policy_qu'] ?>"><?php echo $qa['policy_qu'] ?></option>       
							                <?php       
							                $query_qusan = "SELECT * FROM products_qusan";
                                            $result_qusan = mysqli_query($db, $query_qusan);  
                                            while ($row_qusan = mysqli_fetch_assoc($result_qusan)) {
                                            ?>
							                <option value="<?php echo $row_qusan['policy_qu'] ?>"><?php echo $row_qusan['policy_qu'] ?></option>
							                <?php
                                            }
							                ?>
							                </select>
							                </td>
							                <td>
							                <input type="text" value="<?php echo $qa['policy_an'] ?>" name="policy_an[]" class="form-control item_name" fdprocessedid="pbj9w8">
							                <input type="hidden" value="<?php echo $qa['id'] ?>" name="policy_an_id[]" class="form-control item_name" fdprocessedid="pbj9w8">
							                </td>
							                </tr>
							                <?php
                                            }
                                            ?>
							        </tbody>
							    </table>
							    <?php
                                }
                                ?>
  
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="product">Submit</button>
                                    </button>
                                </div>


                            </form>
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
<script>
 function getImagePreview2(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview2');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>
<script>
 function getImagePreview3(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview3');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>
<script>
 function getImagePreview4(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview4');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>
<script>
 function getImagePreview5(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview5');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>

<?php include 'footer.php' ?>
