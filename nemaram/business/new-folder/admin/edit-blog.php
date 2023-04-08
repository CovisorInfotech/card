<?php 
include 'header.php'; 
$id = $_GET['id'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from blog where id='$id'"));
?>

            <!-- MAIN CONTENT-->
            
<style>
#preview1 img{width: 100px;height: 100px;}
</style> 
            
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
                                        <form action="update-form-query.php?update_id=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                           
                                             <div class="row form-group">
                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="text-input" class=" form-control-label">Name of the Client</label>
                                                <input type="text" id="text-input" value="<?php echo $row['name_client'] ?>" name="name_client" placeholder="" class="form-control" required>
                                                </div>
                                                
                                                                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="text-input" class=" form-control-label">Link of the Client Profile</label>
                                                <input type="text" id="text-input" value="<?php echo $row['link_client_profile'] ?>" name="link_client_profile" placeholder="" class="form-control" required>
                                                </div>
                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="text-input" class=" form-control-label">Work Title Name</label>
                                                <input type="text" id="text-input" value="<?php echo $row['blog_title'] ?>" name="blog_title" placeholder="" class="form-control" required>
                                                </div>
                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="text-input" class=" form-control-label">Work Short Discription</label>
                                                <input type="text" id="text-input" value="<?php echo $row['work_short_discription'] ?>" name="work_short_discription" placeholder="" class="form-control" required>
                                                </div>
                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="text-input" class=" form-control-label">Ratings by the client</label>
                                                <input type="text" id="text-input" value="<?php echo $row['ratings_client'] ?>" name="ratings_client" placeholder="" class="form-control" required>
                                                </div>
                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="file-input" class=" form-control-label">Choose Image</label>
                                                <div id="preview1"></div>
                                                <div id="preview1"><img src="images/blog/<?php echo $row['blog_image'] ?>" width="150px" height="150px" alt="" /></div>
                                                <input type="file" id="file-input" value="<?php echo $row['blog_image'] ?>" name="blog_image" class="form-control-file" onchange="getImagePreview1(event)">
                                                <input type="hidden" id="text-input" value="<?php echo $row['blog_image'] ?>" name="blog_image_old" placeholder="" class="form-control">
                                                </div>

                                                <div class="col-12 col-md-12 p-2">
                                                <label for="textarea-input" class=" form-control-label">Description</label>
                                                <textarea name="blog_description" value="<?php echo $row['blog_description'] ?>" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required><?php echo $row['blog_description'] ?></textarea>
                                                </div>
                                                
                                                <div class="col-12 col-md-8 p-2">
                                                <label for="text-input" class=" form-control-label">Place of Work</label>
                                                 <div class="row">
                                                  <div class="col-6 col-md-3"><input type="text" id="text-input" value="<?php echo $row['pincode'] ?>" name="pincode" placeholder="Pincode" class="form-control" required></div>
                                                  <div class="col-6 col-md-3"><input type="text" id="text-input" value="<?php echo $row['city'] ?>" name="city" placeholder="City" class="form-control" required></div>
                                                  <div class="col-6 col-md-3"><input type="text" id="text-input" value="<?php echo $row['state'] ?>" name="state" placeholder="State" class="form-control" required></div>
                                                  <div class="col-6 col-md-3"><input type="text" id="text-input" value="<?php echo $row['country'] ?>" name="country" placeholder="Country " class="form-control" required></div>
                                                 </div>
                                                </div>
                                                
                                                <div class="col-12 col-md-4 p-2">
                                                <label for="text-input" class=" form-control-label">Amount of Work</label>
                                                <input type="text" id="text-input" value="<?php echo $row['amount_work'] ?>" name="amount_work" placeholder="" class="form-control" required>
                                                </div>
                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="text-input" class=" form-control-label">Time Taken of Work</label>
                                                <input type="text" id="text-input" value="<?php echo $row['time_taken_work'] ?>" name="time_taken_work" placeholder="" class="form-control" required>
                                                </div>
                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="text-input" class=" form-control-label">Select Tags</label>
                                                <input type="text" id="text-input" value="<?php echo $row['tags'] ?>" name="tags" placeholder="" class="form-control" required>
                                                </div>
                                                
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary" value="blog" name="blog">Submit</button>
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
