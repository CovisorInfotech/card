<?php 
error_reporting(0);
include 'header.php'; 
$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where username='$admin_user'"));
$userid=$row['id'];

// if($_SERVER["REQUEST_METHOD"] == "POST") {
//     $update_id=$_GET['update_id'];
//     $username = $_POST['username'];
//     $last_name = $_POST['last_name']; 
//     $designation = $_POST['designation']; 
//     $company = $_POST['company'];
//     $business_category = $_POST['business_category'];

//     $logo = $_FILES["logo"]["name"];
//     $tempname = $_FILES["logo"]["tmp_name"];
//     $folder = "admin/images/admin-img/".$product_image;

//     $image = $_FILES["image"]["name"];
//     $tempname = $_FILES["image"]["tmp_name"];
//     $folder = "admin/images/admin-img/".$product_image;


//     $thumbnail_image = $_FILES["thumbnail_image"]["name"];
//     $tempname = $_FILES["thumbnail_image"]["tmp_name"];
//     $folder = "admin/images/admin-img/".$product_image;
   
    
//     $sql = "UPDATE useradmin SET image='$image', username='$username', last_name='$last_name', designation='$designation',
// company='$company', combusiness_categorypany='$business_category', logo='$logo', thumbnail_image='$thumbnail_image' WHERE id=$update_id";
//     move_uploaded_file($tempname, $folder);
    
//     if (mysqli_query($db, $sql)) {
//       echo "<script>alert('Produc Update'); window.location = 'product.php';</script>";
//     } else {
     
//     }
//  }

// ?>

<!-- MAIN CONTENT-->
<style>
#preview1 img{width: 100px;height: 100px;}
#preview2 img{width: 100px;height: 100px;}
#preview3 img{width: 100px;height: 100px;}
</style>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        <h3 class="title-5 m-b-35">Profile</h3>
        
        <?php
        $payed=mysqli_fetch_assoc(mysqli_query($db, "select * from pro_pay where adminuser_id='$userid'"));
        if(isset($payed['adminuser_id'])){
        ?> 
        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Pay edit</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="update-form-query.php?update_id=<?php echo $payed['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                            <div class="row form-group border border-secondary p-4 m-2">
                                   <h4>Paytm</h4>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Paste Payment Link</label>
                                        <input type="text" id="text-input"  value="<?php echo $payed['paste_payment'] ?>" name="paste_payment" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">UPI ID</label>
                                        <input type="text" id="text-input"  value="<?php echo $payed['upi_paytm'] ?>" name="upi_paytm" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Paytm Number</label>
                                        <input type="text" id="text-input"  value="<?php echo $payed['number_paytm'] ?>" name="number_paytm" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Upload QR Code Image</label>
                                        <div id="preview1"><img src="images/pay/paytm/<?php echo $payed['qr_paytm'] ?>" width="150px" height="150px" alt="" /></div>
                                        <input type="file" id="text-input"  value="<?php echo $payed['qr_paytm'] ?>" name="qr_paytm" placeholder="" class="form-control" onchange="getImagePreview1(event)">
                                        <input type="hidden" id="text-input" value="<?php echo $payed['qr_paytm'] ?>" name="qr_paytm_old" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group border border-secondary p-4 m-2">
                                   <h4>Google Pay</h4>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Paste Google Pay Link</label>
                                        <input type="text" id="text-input"  value="<?php echo $payed['paste_googlepay'] ?>" name="paste_googlepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">UPI ID</label>
                                        <input type="text" id="text-input"  value="<?php echo $payed['upi_googlepay'] ?>" name="upi_googlepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Google Pay Number</label>
                                        <input type="text" id="text-input"  value="<?php echo $payed['number_googlepay'] ?>" name="number_googlepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Upload QR Code Image</label>
                                        <div id="preview2"><img src="images/products/<?php echo $payed['qr_google'] ?>" width="150px" height="150px" alt="" /></div>
                                        <input type="file" id="text-input"  value="<?php echo $payed['qr_google'] ?>" name="qr_google" placeholder="" class="form-control" onchange="getImagePreview2(event)">
                                        <input type="hidden" id="text-input" value="<?php echo $payed['qr_google'] ?>" name="qr_google_old" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group border border-secondary p-4 m-2">
                                   <h4>Phone Pay</h4>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Paste Phone Pay Link</label>
                                        <input type="text" id="text-input" value="<?php echo $payed['paste_phonepay'] ?>" name="paste_phonepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">UPI ID</label>
                                        <input type="text" id="text-input" value="<?php echo $payed['upi_phonepay'] ?>" name="upi_phonepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Phone Pay Number</label>
                                        <input type="text" id="text-input" value="<?php echo $payed['number_phonepay'] ?>" name="number_phonepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Upload QR Code Image</label>
                                        <div id="preview3"><img src="images/pay/phone/<?php echo $payed['qr_phone'] ?>" width="150px" height="150px" alt="" /></div>
                                        <input type="file" id="text-input" value="<?php echo $payed['qr_phone'] ?>" name="qr_phone" placeholder="" class="form-control" onchange="getImagePreview3(event)">
                                        <input type="hidden" id="text-input" value="<?php echo $payed['qr_phone'] ?>" name="qr_phone_old" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group border border-secondary p-4 m-2">
                                    <h4>Bank</h4>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Bank Name</label>
                                        <input type="text" id="text-input" value="<?php echo $payed['bank'] ?>" name="bank" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Bank Branch Name</label>
                                        <input type="text" id="text-input" value="<?php echo $payed['bank_branch'] ?>" name="bank_branch" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Account Number</label>
                                        <input type="text" id="text-input" value="<?php echo $payed['account_number'] ?>" name="account_number" placeholder="" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Ifsc Code</label>
                                        <input type="text" id="text-input" value="<?php echo $payed['ifsc_code'] ?>" name="ifsc_code" placeholder="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row form-group border border-secondary p-4 m-2">
                                    <h4>Other</h4>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Other</label>
                                        <input type="text" id="text-input" value="<?php echo $payed['other'] ?>" name="other" placeholder="" class="form-control" required>
                                    </div>
                                </div>

                               
                                <div class="text-center">
                                    <button type="submit" name="pro_pay" class="btn btn-primary">Submit</button>
                                    </button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                <?php
                }
                else
                {
                ?>
                        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Pay Add</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                
                                <div class="row form-group border border-secondary p-4 m-2">
                                   <h4>Paytm</h4>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Paste Payment Link</label>
                                        <input type="text" id="text-input" name="paste_payment" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">UPI ID</label>
                                        <input type="text" id="text-input" name="upi_paytm" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Paytm Number</label>
                                        <input type="text" id="text-input" name="number_paytm" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Upload QR Code Image</label>
                                        <input type="file" id="text-input" name="qr_paytm" placeholder="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row form-group border border-secondary p-4 m-2">
                                   <h4>Google Pay</h4>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Paste Google Pay Link</label>
                                        <input type="text" id="text-input" name="paste_googlepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">UPI ID</label>
                                        <input type="text" id="text-input" name="upi_googlepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Google Pay Number</label>
                                        <input type="text" id="text-input" name="number_googlepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Upload QR Code Image</label>
                                        <input type="file" id="text-input" name="qr_google" placeholder="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row form-group border border-secondary p-4 m-2">
                                   <h4>Phone Pay</h4>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Paste Phone Pay Link</label>
                                        <input type="text" id="text-input" name="paste_phonepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">UPI ID</label>
                                        <input type="text" id="text-input" name="upi_phonepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Phone Pay Number</label>
                                        <input type="text" id="text-input" name="number_phonepay" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Upload QR Code Image</label>
                                        <input type="file" id="text-input" name="qr_phone" placeholder="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row form-group border border-secondary p-4 m-2">
                                    <h4>Bank</h4>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Bank Name</label>
                                        <input type="text" id="text-input" name="bank" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Bank Branch Name</label>
                                        <input type="text" id="text-input" name="bank_branch" placeholder="" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Account Number</label>
                                        <input type="text" id="text-input" name="account_number" placeholder="" class="form-control" required>
                                    </div>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Ifsc Code</label>
                                        <input type="text" id="text-input" name="ifsc_code" placeholder="" class="form-control" required>
                                    </div>
                                    
                                </div>
                                <div class="row form-group border border-secondary p-4 m-2">
                                    <h4>Other</h4>
                                    <div class="col-12 col-md-3">
                                    <label for="text-input" class=" form-control-label">Other</label>
                                        <input type="text" id="text-input" name="other" placeholder="" class="form-control" required>
                                    </div>
                                </div>

                               
                                <div class="text-center">
                                    <button type="submit" name="pro_pay" class="btn btn-primary">Submit</button>
                                    </button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>

        
        
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

<script>
 function getImagePreview2(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview2');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>

<script>
 function getImagePreview3(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview3');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>


<?php include 'footer.php' ?>
