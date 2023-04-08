<?php
 include 'header.php';
 $admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
$adminuser_id = $row['id'];



?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h3 class="title-5 m-b-35">Product Policy</h3>
                    
                    <div class="">
                                <div class="card">
                                    <div class="card-header">
                                        <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="pill" href="#attributes">Add Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="pill" href="#title">Add Title</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="pill" href="#menu2">Menu 2</a>
                                        </li> -->
                                        </ul>
                                    </div>

<!-- Nav pills -->


<!-- Tab panes -->






                                <div class="tab-content">

                                <div class="tab-pane active" id="attributes">
                                    <div class="card-body card-block">
                                        <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                             <div class="col-12 col-md-6 pt-2">
                                                <label for="select" class=" form-control-label">Select Product</label>
                                                <select id="select" name="product_id" class="form-control" required>
                                                     <option>Select Product</option>
                                                   <?php
                                                    $sql1 =  "select * from products where adminuser_id='$adminuser_id'";
                                                    $res1 = mysqli_query($db, $sql1); 
                                                    while ($row1 = mysqli_fetch_assoc($res1)) {
                                                    ?>
                                                    <option value="<?php echo $row1['id'] ?>"><?php echo $row1['product'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                </div>    
                                                
                                            <div class="col-12 col-md-6 pt-2">
                                                <label for="select" class=" form-control-label">Qusan?</label>
                                                <select id="select" name="policy_qu" class="form-control" required>
                                                    <option>Qusan?</option>
                                                   <?php
                                                    $sql2 =  "select * from products_qusan where adminuser_id='$adminuser_id'";
                                                    $res2 = mysqli_query($db, $sql2); 
                                                    while ($row2 = mysqli_fetch_assoc($res2)) {
                                                    ?>
                                                    <option value="<?php echo $row2['policy_qu'] ?>"><?php echo $row2['policy_qu'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                </div>
                                                <div class="col-6 col-md-6 pt-2">
                                                    <label for="text-input" class=" form-control-label">Anser</label>
                                                    <input type="text" id="text-input" name="policy_an" placeholder="" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary" name="add_policy">Submit </button>
                                            </div>


                                        </form>
                                    </div>
                                    </div>

                                    <div class="tab-pane fade" id="title">
                                    <div class="card-body card-block">
                                        <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                        <div class="row form-group">
                                            <div class="col-12 col-md-12">
                                
                                                <div class="col-12 col-md-12">
                                                    <label for="text-input" class=" form-control-label">Qusan?</label>
                                                    <input type="text" id="text-input" name="policy_qu" placeholder="" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="text-center pt-4">
                                                <button type="submit" class="btn btn-primary" name="add_policy_qusan">Submit </button>
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
