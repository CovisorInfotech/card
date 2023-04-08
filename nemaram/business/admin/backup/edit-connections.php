<?php 
include 'header.php'; 
$id = $_GET['id'];
$row_connect=mysqli_fetch_assoc(mysqli_query($db, "select * from connections where id='$id'"));
?>

<!-- MAIN CONTENT-->
<style>
#preview1 img{width: 100px;height: 100px;}
</style>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h3 class="title-5 m-b-35">Add Products</h3>
        
        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Basic Form</strong> Elements
                        </div>
                        <div class="card-body card-block">
                            <form action="update-form-query.php?update_id=<?php echo $row_connect['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                               <div class="row form-group">
                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="text-input" class=" form-control-label">Username ID</label>
                                                <select id="select" name="connections_id" class="form-control" required="" fdprocessedid="56hwfq">
                                                    <option value="<?php echo $row_connect['connections_id'] ?>"><?php echo $row_connect['connections_id'] ?></option>
                                                        <?php 
                                                         $sql_con =  "SELECT * FROM useradmin";
                                                         $res_con = mysqli_query($db, $sql_con);
                                                         while ($row_con = mysqli_fetch_assoc($res_con)) {
                                                        ?>
                                                        <option value="<?php echo $row_con['username'] ?>"><?php echo $row_con['username'] ?></option>
                                                        <?php
                                                         }
                                                        ?>
                                                </select>
                                                </div>
                                                
                                                <div class="col-12 col-md-6 p-2">
                                                <label for="text-input" class=" form-control-label">Category Connection</label>
                                                <select id="select" name="category_connection" class="form-control" required="" fdprocessedid="56hwfq">
                                                    <option value="<?php echo $row_connect['category_connection'] ?>"><?php echo $row_connect['category_connection'] ?></option>
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
                                    <button type="submit" class="btn btn-primary" name="connections">Submit</button>
                                    </button>
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
