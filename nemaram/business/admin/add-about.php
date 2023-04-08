<?php
 include 'header.php';
 $admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
$adminuser_id = $row['id'];

$sql =  "select * from 	cat_about where adminuser_id='$adminuser_id'";
$res = mysqli_query($db, $sql); 

?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h3 class="title-5 m-b-35">Add Adout</h3>
                    
                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="pill" href="#home">Add Adout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="pill" href="#menu1">Add Title</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="pill" href="#menu2">Menu 2</a>
                                        </li> -->
                                        </ul>
                                    </div>

<!-- Nav pills -->


<!-- Tab panes -->






                                <div class="tab-content">

                                <div class="tab-pane container active" id="home">
                                    <div class="card-body card-block">
                                        <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                            <div class="col-12 col-md-6">
                                                <label for="select" class=" form-control-label">Title</label>
                                                <select id="select" name="title_name" class="form-control" required>
                                                   <?php
                                                    while ($row = mysqli_fetch_assoc($res)) {
                                                    ?>
                                                    <option value="<?php echo $row['about_category'] ?>"><?php echo $row['about_category'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Info</label>
                                                    <input type="text" id="text-input" name="adout_name" placeholder="" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="text-center pt-4">
                                                <button type="submit" class="btn btn-primary" name="about">Submit </button>
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
                                                    <input type="text" id="text-input" name="about_category" placeholder="" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="text-center pt-4">
                                                <button type="submit" class="btn btn-primary" name="cat_about">Submit </button>
                                            </div>


                                        </form>
                                    </div>
                                    </div>

                                    <!-- <div class="tab-pane container fade" id="menu2">..l.</div> -->

                                </div>    
















                                    
                                </div>
                               
                            </div>
                    

                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
<?php include 'footer.php' ?>
