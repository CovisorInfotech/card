<?php 
include 'header.php'; 
$id = $_GET['id'];
$rowqusan=mysqli_fetch_assoc(mysqli_query($db, "select * from products_qusan where id='$id'"));
?>


            <!-- MAIN CONTENT-->
           
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h3 class="title-5 m-b-35">Edit Policy</h3>
                    
                    <div class="">
                                <div class="card">
                                   
                                    <div class="card-body card-block">
                                        <form action="update-form-query.php?update_qusan_id=<?php echo $rowqusan['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                        <div class="row form-group">
                                
                                                <div class="col-12 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Policy</label>
                                                    <input type="text" id="text-input" name="policy_qu" value="<?php echo $rowqusan['policy_qu'] ?>" placeholder="" class="form-control" required>
                                                </div>
                                               
                                            </div>

                                            <div class="text-center pt-4">
                                                <button type="submit" class="btn btn-primary" name="cat_policy">Submit </button>
                                            </div>


                                        </form>
                                  </div>    


                                </div>
                               
                            </div>
                    

                        
                    </div>
                </div>
            </div>

<?php include 'footer.php' ?>
