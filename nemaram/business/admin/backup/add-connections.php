<?php include 'header.php' ?>

            <!-- MAIN CONTENT-->
            <style>
#preview1 img{width: 100px;height: 100px;}
</style>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h3 class="title-5 m-b-35">Add Connections</h3>
                    
                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Connections Form</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                           
                                            <div class="row form-group">
                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="text-input" class=" form-control-label">Profile Select</label>
                                                <select id="select" name="connections_id" class="form-control" required="" fdprocessedid="56hwfq">
                                                    <option>Please select</option>
                                                        <?php 
                                                         $sql_con =  "SELECT * FROM useradmin";
                                                         $res_con = mysqli_query($db, $sql_con);
                                                         while ($row_con = mysqli_fetch_assoc($res_con)) {
                                                        ?>
                                                        <option value="<?php echo $row_con['id'] ?>"><?php echo $row_con['profile_id'] ?></option>
                                                        <?php
                                                         }
                                                        ?>
                                                </select>
                                                </div>
                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="text-input" class=" form-control-label">Category Connection</label>
                                                <select id="select" name="category_connection" class="form-control" required="" fdprocessedid="56hwfq">
                                                    <option value="0">Select Category for your Connection</option>
                                                    <option value="Vendor">Vendor</option>   
                                                    <option value="Client">Client</option>
                                                    <option value="Employee">Employee</option>
                                                    <option value="Contractor">Contractor</option>
                                                    <option value="Friend">Friend</option>
                                                    <option value="Relative">Relative</option>
                                                    <option value="Importer">Importer</option>
                                                    <option value="Exporter">Exporter</option>
                                                </select>
                                                </div>
                                                
                                                                                                
                                               
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary"  name="connections">Submit</button>
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
<?php include 'footer.php' ?>
