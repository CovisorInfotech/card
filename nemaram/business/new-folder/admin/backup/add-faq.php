


<?php include 'header.php' ?>

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
                                        <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col-12 col-md-6">
                                                <label for="select" class=" form-control-label">Catagery</label>
                                                <select id="select" name="faq_catagery" class="form-control" required>
                                                        <option value="0">Please select</option>
                                                        <option value="marketplace">marketplace</option>
                                                        <option value="authors">authors</option>
                                                        <option value="legal">legal</option>
                                                        <option value="discussion">discussion</option>
                                                        <option value="affiliates">affiliates</option>
                                                        <option value="miscellaneous">miscellaneous</option>
                                                </select>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Qusan?</label>
                                                    <input type="text" id="text-input" name="faq_qusan" placeholder="" class="form-control" required>
                                                </div>
                                    
                                            </div>
                                            <div class="row form-group">
                                            <div class="col-12 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Anser</label>
                                                    <input type="text" id="text-input" name="faq_anser" placeholder="" class="form-control" required>
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
