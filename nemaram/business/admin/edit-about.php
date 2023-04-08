<?php 
include 'header.php'; 
$id = $_GET['id'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from adout where id='$id'"));
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h3 class="title-5 m-b-35">Add Adout</h3>
                    
                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>About</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="update-form-query.php?update_id=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                            <div class="col-12 col-md-6">
                                                <label for="select" class=" form-control-label">title</label>
                                                <select id="select" name="title_name" class="form-control" required>
                                                        <option value="<?php echo $row['title_name'] ?>"><?php echo $row['title_name'] ?></option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                </select>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Info</label>
                                                    <input type="text" id="text-input" value="<?php echo $row['adout_name'] ?>" name="adout_name" placeholder="" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary" name="about">Submit </button>
                                            </div>


                                        </form>
                                    </div>
                                    
                                </div>
                               
                            </div>

                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
<?php include 'footer.php' ?>
