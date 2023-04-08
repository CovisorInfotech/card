<?php
include 'header.php';

?>


<?php
        $admin_user=$_SESSION['login_user'];
        $row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
        $adminuser_id = $row['id'];

        $sql_member =  "SELECT * FROM `pro_member` WHERE adminuser_id='$adminuser_id'";
        $res_member = mysqli_query($db, $sql_member);

       
        if (isset($_GET['type']) && $_GET['type'] !== '' && isset($_GET['id']) && $_GET['id'] > 0) {
            $type = $_GET['type'];
            $id = $_GET['id'];
            if ($type == 'delete') {
                mysqli_query($db, "delete from pro_member where id='$id' and adminuser_id='$adminuser_id'");
                echo "<script>alert('Record deleted successfully'); window.location = 'pro-member.php';</script>";
            }
        }
        
?>

<!-- MAIN CONTENT-->
<style>
#preview1 img{width: 100px;height: 100px;}
</style> 

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
    

               
      
      
                            <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">member</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light">
                                            <ul class="nav nav-pills d-flex">
                                                <li class="nav-item">
                                                 <a class="nav-link active" data-bs-toggle="pill" href="#home">Member List</a>
                                                </li>
                                                <li class="nav-item">
                                                 <a class="nav-link" data-bs-toggle="pill" href="#menu1">Add Member</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    
                                </div>


                                <div class="tab-content">

                                <div class="tab-pane container active" id="home">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="background: #555;">
                                            <tr>
                                                <th>Imges</th>
                                                <th>Much Communities</th>
                                                <th>Name Community</th>
                                                <th>Year Which</th>
                                                <th>Area Region</th> 
                                                <th>Post Link Group</th>
                                                <th>other</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       <?php
                                        while ($row_member = mysqli_fetch_assoc($res_member)) {
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><img src="images/member/<?php echo $row_member['logo_community'] ?>" alt="" width="100px" height="100px"></td>
                                                <td><?php echo $row_member['much_communities'] ?></td>
                                                <td><?php echo $row_member['name_community'] ?></td>
                                                <td><?php echo $row_member['year_which'] ?></td>
                                                <td><?php echo $row_member['area_region'] ?></td>
                                                <td><?php echo $row_member['post_link_group'] ?></td>
                                                <td><?php echo $row_member['other'] ?></td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!-- <a class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </a> -->
                                                        <a href="edit-pro-member.php?id=<?php echo $row_member['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </a>
                                                        <a href="?id=<?php echo $row_member['id'] ?>&type=delete" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tr>
                                        <?php
                                     }
                                      ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>

                                <div class="tab-pane container fade" id="menu1">
                                                    <div class="card">
                        <div class="card-header">
                            <strong>Member Add</strong>
                            
                        </div>
                        <div class="card-body card-block">
                            <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                                <div class="row form-group">
                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">How Much Communities You want to show ?</label>
                                        <input type="text" id="text-input" name="much_communities" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Full Name of the Community You have Joined</label>
                                        <input type="text" id="text-input" name="name_community" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-4">
                                    <label for="text-input" class=" form-control-label">Year in which you joined the community</label>
                                        <input type="text" id="text-input" name="year_which" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-6">
                                    <label for="text-input" class=" form-control-label">Area / Region</label>
                                        <input type="text" id="text-input" name="area_region" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-6">
                                    <label for="text-input" class=" form-control-label">Post Link for your Group</label>
                                        <input type="text" id="text-input" name="post_link_group" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-6">
                                    <label for="text-input" class=" form-control-label">Other</label>
                                        <input type="text" id="text-input" name="other" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-6">
                                    <label for="text-input" class=" form-control-label">Upload the Logo of the Community</label>
                                        <div id="preview1"></div>
                                        <input type="file" id="text-input" name="logo_community" placeholder="" class="form-control" onchange="getImagePreview1(event)">
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

                                </div>





                                <!-- END DATA TABLE -->
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
