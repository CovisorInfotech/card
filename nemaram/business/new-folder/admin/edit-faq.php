<?php 
include 'header.php'; 
$id = $_GET['id'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from faq where id='$id'"));
?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h3 class="title-5 m-b-35">Add Faq</h3>
                    
                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Basic Form</strong> Elements
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="update-form-query.php?update_id=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col-12 col-md-6">
                                                <label for="select" class=" form-control-label">Catagery</label>
                                                <select id="select" name="faq_catagery" class="form-control" required>
                                                        <option value="<?php echo $row['faq_catagery'] ?>"><?php echo $row['faq_catagery'] ?></option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                </select>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Qusan?</label>
                                                    <input type="text" id="text-input" value="<?php echo $row['faq_qusan'] ?>" name="faq_qusan" placeholder="" class="form-control" required>
                                                </div>
                                    
                                            </div>
                                            <div class="row form-group">
                                            <div class="col-12 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Anser</label>
                                                    <input type="text" id="text-input" value="<?php echo $row['faq_anser'] ?>" name="faq_anser" placeholder="" class="form-control" required>
                                                </div>
                                            </div>    

                                            
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary" name="faq">Submit</button>
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
<?php include 'footer.php' ?>
