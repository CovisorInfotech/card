<?php 
include 'header.php';
$admin_user=$_SESSION['login_user'];
$row=mysqli_fetch_assoc(mysqli_query($db, "select * from useradmin where profile_id='$admin_user'"));
$adminuser_id = $row['id'];

$sql =  "select * from cat_product where adminuser_id='$adminuser_id'";
$res = mysqli_query($db, $sql);
 ?>



            <!-- MAIN CONTENT-->
            <style>
#preview1 img{width: 100px;height: 100px;}
#preview2 img{width: 100px;height: 100px;}
#preview3 img{width: 100px;height: 100px;}
#preview4 img{width: 100px;height: 100px;}
#preview5 img{width: 100px;height: 100px;}
</style>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h3 class="title-5 m-b-35">Add Products</h3>
                    
                    <div class="">
                                <div class="card">
                                    <div class="card-header">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="pill" href="#home">Add Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-secondary" data-bs-toggle="pill" href="#menu1">Add Catagery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-secondary" data-toggle="modal" data-target="#attributes">Add Attributes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-secondary" data-toggle="modal" data-target="#policy">Add Policy</a>
                                        </li>
                                    </ul>
                                    </div>






                                    <div class="tab-content">

                              <div class="tab-pane active" id="home">
                                    <div class="card-body card-block">
                                        <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <div class="row form-group">
                                                <div class="col-12 col-md-3">
                                                    <label for="text-input" class=" form-control-label">Product</label>
                                                    <input type="text" id="text-input" name="name_product" placeholder="Product" class="form-control" required>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                <label for="text-input" class=" form-control-label">Price</label>
                                                <input type="text" id="text-input" name="price" placeholder="Price" class="form-control" required>
                                                </div>
                                                
                                                <div class="col-12 col-md-3">
                                                <label for="text-input" class=" form-control-label">discount</label>
                                                <input type="text" id="text-input" name="discount" placeholder="Discount" class="form-control" required>
                                                </div>
                                               
                                                <div class="col-12 col-md-3">
                                                <label for="select" class=" form-control-label">Category</label>
                                                <select id="select" name="catagery" class="form-control" required>

                                                    <?php
                                                    while ($row = mysqli_fetch_assoc($res)) {
                                                    ?>
                                                    <option value="<?php echo $row['product_category'] ?>"><?php echo $row['product_category'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                
                                            <!-- <div class="col-6 col-md-2">
                                                <label for="file-input" class=" form-control-label">Image 1</label>
                                                 <div id="preview1"></div>
                                                <input type="file" id="file-input" name="file" class="form-control-file" onchange="getImagePreview1(event)" required>
                                                </div> -->

                                                 <style>.image-upload>input {display: none;}</style>
                                                <div class="col-6 col-md-2">
                                                <div class="image-upload text-center card m-2">   
                                                <label for="file-input" class=" form-control-label"><div id="preview1"><img src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png"/></div><p class="text-center m-0">Choose image</p></label>
                                                <input type="file" id="file-input" name="product_image" class="form-control-file" onchange="getImagePreview1(event)" required>
                                                </div>
                                                </div>

                                                <div class="col-6 col-md-2">
                                                <div class="image-upload text-center card m-2">   
                                                <label for="file-input2" class=" form-control-label"><div id="preview2"><img src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png"/></div><p class="text-center m-0">Choose image</p></label>
                                                <input type="file" id="file-input2" name="product_image2" class="form-control-file" onchange="getImagePreview2(event)">
                                                </div>
                                                </div>

                                                <div class="col-6 col-md-2">
                                                <div class="image-upload text-center card m-2">    
                                                <label for="file-input3" class=" form-control-label"><div id="preview3"><img src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png"/></div><p class="text-center m-0">Choose image</p></label>
                                                <input type="file" id="file-input3" name="product_image3" class="form-control-file" onchange="getImagePreview3(event)">
                                                </div>
                                                </div>

                                                <div class="col-6 col-md-2">
                                                <div class="image-upload text-center card m-2">    
                                                <label for="file-input4" class=" form-control-label"><div id="preview4"><img src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png"/></div><p class="text-center m-0">Choose image</p></label>
                                                <input type="file" id="file-input4" name="product_image4" class="form-control-file" onchange="getImagePreview4(event)">
                                                </div>
                                                </div>

                                                <div class="col-6 col-md-2">
                                                <div class="image-upload text-center card m-2">
                                                <label for="file-input5" class=" form-control-label"><div id="preview5"><img src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png"/></div><p class="text-center m-0">Choose image</p></label>
                                                <input type="file" id="file-input5" name="product_image5" class="form-control-file" onchange="getImagePreview5(event)">
                                                </div>
                                                </div>
                                                
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-12 col-md-12">
                                                    <label for="textarea-input" class=" form-control-label">Description</label>
                                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            
                                            
                                            <?php                                           
                                            function fill_unit_select_box($db)
                                            {
                                    	    $output = '';
                                            $query = "SELECT * FROM product_attributes_title";
                                            $result = mysqli_query($db, $query);
                                            foreach($result as $row)
	                                        {
		                                    $output .= '<option value="'.$row["attributes_title"].'">'.$row["attributes_title"] . '</option>';
	                                        }
                                            return $output;
                                            }
                                            ?>
                                            <table class="table table-bordered" id="item_table">
                                            <p class="text-center"><b>Product Attributes</b></p>    
								            <tr>
									        <td>Attributes Title</td>
									        <td>Attributes Name</td>
									        <td><button type="button" name="add" class="btn btn-success btn-sm add"><i class="fas fa-plus"></i></button></td>
								            </tr>
							                </table>
							                
							                
							                 <?php 
							                function fill_policy_select_box($db)
                                            {
                                    	    $output = '';
                                            $query = "SELECT * FROM products_qusan";
                                            $result = mysqli_query($db, $query);
                                            foreach($result as $row)
	                                        {
		                                    $output .= '<option value="'.$row["policy_qu"].'">'.$row["policy_qu"] . '</option>';
	                                        }
                                            return $output;
                                            }
                                            ?>
                                            <table class="table table-bordered" id="item_table2">
                                            <p class="text-center"><b>Product Policy</b></p>    
								            <tr>
									        <td>Policy Title</td>
									        <td>Policy Name</td>
									        <td><button type="button" name="add" class="btn btn-success btn-sm add2"><i class="fas fa-plus"></i></button></td>
								            </tr>
							                </table>
                                           
                                           

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary" name="product">Submit</button>
                                                </button>
                                            </div>


                                        </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="menu1">
                                    <div class="card-body card-block">
                                        <form action="add-form-query.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                        <div class="row form-group">
                                                
                                                <div class="col-12 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Category</label>
                                                    <input type="text" id="text-input" name="product_category" placeholder="" class="form-control" required>
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <label for="text-input" class=" form-control-label">Category Backgroung Color</label><br>
                                                    <input type="color" name="color" value="#fecb30" id="colorInputColor" style="height: 37px;">
                                                </div>
                                                
                                            </div>

                                            <div class="text-center pt-4">
                                                <button type="submit" class="btn btn-primary" name="cat_product">Submit </button>
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
            
       
            
            
            
<div class="modal fade" id="attributes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Attributes Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <form method="post" id="insert_form">
      <div class="modal-body">
      <div class="">
      <table class="table table-bordered" id="item_table3">
      <td>Attributes Titel</td>
	  <td><button type="button" name="add" class="btn btn-success btn-sm add3"><i class="fas fa-plus"></i></button></td>
   	  </tr>
	  </table>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" id="submit_button" class="btn btn-primary" value="Insert" />
      </div>
       </form>
    </div>
  </div>
</div>


<!--<script>-->
<!--$("#save-button").on("click",function(e){-->
<!--e.preventDefault();   -->
<!--var attributes_title = $("#attributes_title").val();-->
<!--alert(attributes_title);-->
<!--$.ajax({-->
<!--url: "att_insert.php",-->
<!--type: "POST",-->
<!--data : {attributes:attributes_title},-->
<!--success : function(data){-->
<!--if(data == 1){-->
<!--loadTable();-->
<!--}else{-->
<!--alert("Can't Save Record")-->
<!--}-->
<!--}-->
<!--});-->
<!--})-->
<!--</script>-->





<div class="modal fade" id="policy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Policy Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
       <form method="post" id="insert_form2">
      <div class="modal-body">
      <div class="">
      <table class="table table-bordered" id="item_table4">
      <td>Policy Title</td>
	  <td><button type="button" name="add" class="btn btn-success btn-sm add4"><i class="fas fa-plus"></i></button></td>
   	  </tr>
	  </table>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" id="policy_qu" class="btn btn-primary" value="Insert" />
      </div>
       </form>
      
    </div>
  </div>
</div>
            
            
            
            
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
<script>
 function getImagePreview4(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview4');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>
<script>
 function getImagePreview5(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview5');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="150";
    newimg.height="150";
    imagediv.appendChild(newimg);
  }
</script>


<script>
$(document).ready(function(){
    var count = 0;
	function add_input_field(count)
	{
        var html = '';

		html += '<tr>';
       
    //   selectpicker
		html += '<td><select name="attributes_title[]" class="form-control" data-live-search="true"><option value="">Select Unit</option><?php echo fill_unit_select_box($db); ?></select></td>';
       
        html += '<td><input type="text" name="attributes_name[]" class="form-control item_name" /></td>';
	
		var remove_button = '';

		if(count > 0)
		{
			remove_button = '<button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="fas fa-minus"></i></button>';
		}

		html += '<td>'+remove_button+'</td></tr>';

		return html;

	}

	$('#item_table').append(add_input_field(0));

// 	$('.selectpicker').selectpicker('refresh');

	$(document).on('click', '.add', function(){

		count++;

		$('#item_table').append(add_input_field(count));

// 		$('.selectpicker').selectpicker('refresh');

	});

	$(document).on('click', '.remove', function(){

		$(this).closest('tr').remove();

	});

	 
});
</script>

<script>
$(document).ready(function(){
    var count = 0;
	function add_input_field(count)
	{
        var html = '';

		html += '<tr>';

		html += '<td><select name="policy_qu[]" class="form-control" data-live-search="true"><option value="">Select Unit</option><?php echo fill_policy_select_box($db); ?></select></td>';
       
        html += '<td><input type="text" name="policy_an[]" class="form-control item_name" /></td>';
	
		var remove_button = '';

		if(count > 0)
		{
			remove_button = '<button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="fas fa-minus"></i></button>';
		}

		html += '<td>'+remove_button+'</td></tr>';

		return html;

	}

	$('#item_table2').append(add_input_field(0));

// 	$('.selectpicker').selectpicker('refresh');

	$(document).on('click', '.add2', function(){

		count++;

		$('#item_table2').append(add_input_field(count));

// 		$('.selectpicker').selectpicker('refresh');

	});

	$(document).on('click', '.remove', function(){

		$(this).closest('tr').remove();

	});

	 
});
</script>






<script>
$(document).ready(function(){

	var count = 0;
	
	function add_input_field(count)
	{

		var html = '';

		html += '<tr>';

		html += '<td><input type="text" name="attributes_title[]" class="form-control item_name" /></td>';

	
		var remove_button = '';

		if(count > 0)
		{
			remove_button = '<button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="fas fa-minus"></i></button>';
		}

		html += '<td>'+remove_button+'</td></tr>';

		return html;

	}

	$('#item_table3').append(add_input_field(0));

    $(document).on('click', '.add3', function(){

		count++;

		$('#item_table3').append(add_input_field(count));

	

	});

	$(document).on('click', '.remove', function(){

		$(this).closest('tr').remove();

	});

	$('#insert_form').on('submit', function(event){

		event.preventDefault();

		var error = '';

		count = 1;

		$('.attributes_title').each(function(){

			if($(this).val() == '')
			{

				error += "<li>Enter Item Name at "+count+" Row</li>";

			}

			count = count + 1;

		});

		count = 1;

		

	
		var form_data = $(this).serialize();

		if(error == '')
		{

			$.ajax({

				url:"att_insert.php",

				method:"POST",

				data:form_data,

				beforeSend:function()
	    		{

	    			$('#submit_button').attr('disabled', 'disabled');

	    		},

				success:function(data)
				{
					if(data == 'ok')
					{

						$('#item_table2').find('tr:gt(0)').remove();

						$('#error').html('<div class="alert alert-success">Item Details Saved</div>');

						$('#item_table2').append(add_input_field(0));

						$('.selectpicker').selectpicker('refresh');

						$('#submit_button').attr('disabled', false);
						
						window.location = 'add-products.php';
					}

				}
				
			})

		}
		else
		{
			$('#error').html('<div class="alert alert-danger"><ul>'+error+'</ul></div>');
		}

	});
	 
});
</script>





<script>
$(document).ready(function(){

	var count = 0;
	
	function add_input_field(count)
	{

		var html = '';

		html += '<tr>';

		html += '<td><input type="text" name="policy_qu[]" class="form-control item_name" /></td>';

	
		var remove_button = '';

		if(count > 0)
		{
			remove_button = '<button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="fas fa-minus"></i></button>';
		}

		html += '<td>'+remove_button+'</td></tr>';

		return html;

	}

	$('#item_table4').append(add_input_field(0));

    $(document).on('click', '.add4', function(){

		count++;

		$('#item_table4').append(add_input_field(count));

	

	});

	$(document).on('click', '.remove', function(){

		$(this).closest('tr').remove();

	});

	$('#insert_form2').on('submit', function(event){

		event.preventDefault();

		var error = '';

		count = 1;

		$('.policy_qu').each(function(){

			if($(this).val() == '')
			{

				error += "<li>Enter Item Name at "+count+" Row</li>";

			}

			count = count + 1;

		});

		count = 1;

		

	
		var form_data = $(this).serialize();

		if(error == '')
		{

			$.ajax({

				url:"att_insert.php",

				method:"POST",

				data:form_data,

				beforeSend:function()
	    		{

	    			$('#submit_button').attr('disabled', 'disabled');

	    		},

				success:function(data)
				{
					if(data == 'ok')
					{

						$('#item_table4').find('tr:gt(0)').remove();

						$('#error').html('<div class="alert alert-success">Item Details Saved</div>');

						$('#item_table2').append(add_input_field(0));

						$('.selectpicker').selectpicker('refresh');

						$('#submit_button').attr('disabled', false);
						
						window.location = 'add-products.php';
					}

				}
				
			})

		}
		else
		{
			$('#error').html('<div class="alert alert-danger"><ul>'+error+'</ul></div>');
		}

	});
	 
});
</script>








            <!-- END MAIN CONTENT-->

<?php include 'footer.php' ?>
