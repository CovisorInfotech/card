<?php 
include 'header.php'; 
$id = $_GET['id'];
$membered=mysqli_fetch_assoc(mysqli_query($db, "select * from pro_member where id='$id'"));
?>


<!-- MAIN CONTENT-->
<style>
#preview1 img{width: 100px;height: 100px;}
</style> 

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h3 class="title-5 m-b-35">Profile</h3>
    
        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Member Edit</strong>
                            
                        </div>
                        <div class="card-body card-block">
                            <form action="update-form-query.php?update_id=<?php echo $membered['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <div class="row form-group">
                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">How Much Communities You want to show ?</label>
                                        <input type="text" id="text-input" value="<?php echo $membered['much_communities'] ?>" name="much_communities" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Full Name of the Community You have Joined</label>
                                        <input type="text" id="text-input" value="<?php echo $membered['name_community'] ?>" name="name_community" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Year in which you joined the community</label>
                                        <input type="text" id="text-input" value="<?php echo $membered['year_which'] ?>" name="year_which" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-6">
                                    <label for="text-input" class=" form-control-label">Area / Region</label>
                                        <input type="text" id="text-input" value="<?php echo $membered['area_region'] ?>" name="area_region" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-6">
                                    <label for="text-input" class=" form-control-label">Post Link for your Group</label>
                                        <input type="text" id="text-input" value="<?php echo $membered['post_link_group'] ?>" name="post_link_group" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-6">
                                    <label for="text-input" class=" form-control-label">Other</label>
                                        <input type="text" id="text-input" value="<?php echo $membered['other'] ?>" name="other" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-6">
                                    <label for="text-input" class=" form-control-label">Upload the Logo of the Community</label>
                                        <div id="preview1"><img src="images/member/<?php echo $membered['logo_community'] ?>" width="150px" height="150px" alt="" /></div>
                                        <input type="file" id="text-input" value="<?php echo $membered['logo_community'] ?>" name="logo_community" placeholder="" class="form-control" onchange="getImagePreview1(event)">
                                        <input type="hidden" id="text-input" value="<?php echo $membered['logo_community'] ?>" name="logo_community_old" placeholder="" class="form-control">
                                    </div>

                                    
                                </div>

                               
                                <div class="text-center">
                                    <button type="submit" name="pro_member" class="btn btn-primary">Submit</button>
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
