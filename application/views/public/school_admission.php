<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uideck.com/demos/estatex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jan 2018 08:34:40 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="EstateX">
<title>Admission – SAMS</title>
<?php include 'header_files.php';?>
</head>
<body>

<?php include 'header.php';?>

<?php if(!$submitadmission){ ?>
	<?php if($this->session->userdata('login')){ ?>

<section id="content">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-9 col-md-offset-2">
<div class="page-ads box">

<form data-toggle="validator" enctype="multipart/form-data" method="post" action="<?php echo base_url("user/submit_admission_form?school=".$results[0]->school_id); ?>">
<h4 class="help-block"><span class="label label-primary"><?php echo $results[0]->school_name ?></span></h4>	
<h2 class="title-2">
Student Details
</h2>
<div class="form-group">
<label class="control-label" for="textarea">First Name</label>
<input type="text" id="fname" name="fname" class="form-control" required data-error="Please enter first name">
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Middle Name</label>
<input type="text" id="mname" name="mname" class="form-control" required data-error="Please enter middle name">
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Last Name</label>
<input type="text" id="lname" name="lname" class="form-control" required data-error="Please enter last name">
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Date of Birth</label>
<input type="date" id="dob" name="dob" class="form-control" required data-error="Please enter date of birth">
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Religion</label>
<input type="text" id="religion" name="religion" class="form-control" required data-error="Please enter religion">
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label">Gender</label>
<select id="gender" name="gender" class="dropdown-product selectpicker" required data-error="Please select gender">
<div class="help-block with-errors"></div>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</div>
<h2 class="title-2">
Parent Details
</h2>
<div class="form-group">
<label class="control-label" for="textarea">Father Full Name</label>
<input type="text" id="father_name" name="father_name" class="form-control" required data-error="Please enter father name">
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Mother Full Name</label>
<input type="text" id="mother_name" name="mother_name" class="form-control" required data-error="Please enter mother name">
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Email</label>
<input id="email" name="email"  type="text" class="form-control" required data-error="Please enter email">
<div class="help-block with-errors"></div>
<span class="middle" id="email_error" style="color:red"></span>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Telephone Number</label>
<input type="text" class="form-control" id="telephone" name="telephone" required data-error="Please enter telephone number">
<div class="help-block with-errors"></div>
<span class="middle" id="telephone_error" style="color:red"></span>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Mobile Number</label>
<input type="text" class="form-control" id="mobile" name="mobile" required data-error="Please enter phone number">
<div class="help-block with-errors"></div>
<span class="middle" id="mobile_error" style="color:red"></span>
</div>

<h2 class="title-2">
Other Details
</h2>
<div class="form-group">
<label class="control-label" for="seller-Location">Country</label>
<select class="dropdown-product selectpicker" id="nationality" name="nationality" required data-error="Please select country">
<div class="help-block with-errors"></div>
<option value="" style="display:none;">Country</option>
<option value="India">India</option>
</select>
</div>
<div class="form-group">
<label class="control-label" for="seller-Location">State</label>
<select class="dropdown-product selectpicker" id="state" name="state" required data-error="Please select  state">
<div class="help-block with-errors"></div>	
<option value="" style="display:none;">State</option>
<option value="Gujarat">Gujarat</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Delhi">Delhi</option>
</select>
</div>
<div class="form-group">
<label class="control-label" for="seller-Location">City</label>
<select id="city" name="city" class="dropdown-product selectpicker" required data-error="Please select  city">
<div class="help-block with-errors"></div>	
<option value="" style="display:none;">City</option>	
<option value="Ahmedabad">Ahmedabad</option>
<option value="Surat">Surat</option>
<option value="Vadodra">Vadodra</option>
</select>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Native Place</label>
<input type="text" id="native_place" name="native_place" class="form-control" required data-error="Please enter  native place">
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Res. Address</label>
<input type="text" class="form-control" name="address" id="address" required data-error="Please enter  residenatial address">
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Per. Address</label>
<input type="text" class="form-control" name="permanent_address" id="permanent_address" required data-error="Please enter  permanent address">
<div class="help-block with-errors"></div>
</div>
<h2 class="title-2">
required Documents
</h2>
<style>
	.btn-file {
		position: relative;
		overflow: hidden;
	}
	.btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		background: white;
		cursor: inherit;
		display: block;
	}

	#img-upload{
		width: 20%;
	}
	.nbtn {
		display: inline-block;
		margin-bottom: 0;
		font-weight: 400;
		text-align: center;
		vertical-align: middle;
		touch-action: manipulation;
		cursor: pointer;
		border: 1px solid transparent;
		white-space: nowrap;
		padding: 6px 12px;
		border-radius: 0px !important;
		font-size: 14px;
		line-height: 1.42857143;
		border-radius: 4px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
</style>
<div class="form-group">
<label class="control-label" for="textarea">Passport Photo</label>
<div class="input-group">
			<span class="input-group-btn">
				<span class="nbtn btn-primary btn-file">
					Browse… <input type="file" id="imgInp" name="passport_photo" accept="image/*">
				</span>
			</span>
		<input class="" type="text" placeholder="" class="form-control" readonly>
		</div>
		<img style="padding:10px"; id='img-upload'/>
<div class="help-block with-errors"></div>
</div>



<!-- comment starts - all necessary file upload 
<div class="form-group">
<label class="control-label">Select Student Passport Photo</label>
<div class="mb15">
<div class="input-group ">
<div tabindex="-1" class="form-control file-caption">
<div style="width: 239px;" class="file-caption-name"></div>
</div>
<div class="input-group-btn">
<button type="button" class="btn btn-danger fileinput-remove fileinput-remove-button"><i class="icon-ban"></i> Remove</button>
<button type="submit" class="btn btn-success kv-fileinput-upload"><i class="icon-cloud-upload"></i> Upload</button>
<div class="btn btn-primary btn-file">
<i class="icon-folder"></i> &nbsp;Browse …
<input id="passport_photo" name="passport_photo" class="file" data-preview-file-type="text" type="file" req data-error="Please select valid file">
<div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<label class="control-label">Select Father Passport Photo</label>
<div class="mb15">
<div class="input-group ">
<div tabindex="-1" class="form-control file-caption">
<div style="width: 239.12px;" class="file-caption-name"></div>
</div>
<div class="input-group-btn">
<button type="button" class="btn btn-danger fileinput-remove fileinput-remove-button"><i class="icon-ban"></i> Remove</button>
<button type="submit" class="btn btn-success kv-fileinput-upload"><i class="icon-cloud-upload"></i> Upload</button>
<div class="btn btn-primary btn-file">
<i class="icon-folder"></i> &nbsp;Browse …
<input id="f_passport_photo" name="f_passport_photo" class="file" data-preview-file-type="text" type="file" req data-error="Please select valid file">
<div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<label class="control-label">Select Mother Passport Photo</label>
<div class="mb15">
<div class="input-group ">
<div tabindex="-1" class="form-control file-caption">
<div style="width: 239.12px;" class="file-caption-name"></div>
</div>
<div class="input-group-btn">
<button type="button" class="btn btn-danger fileinput-remove fileinput-remove-button"><i class="icon-ban"></i> Remove</button>
<button type="submit" class="btn btn-success kv-fileinput-upload"><i class="icon-cloud-upload"></i> Upload</button>
<div class="btn btn-primary btn-file">
<i class="icon-folder"></i> &nbsp;Browse …
<input id="m_passport_photo" name="m_passport_photo" class="file" data-preview-file-type="text" type="file" req data-error="Please select valid file">
<div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<label class="control-label">Student Birth Certificate</label>
<div class="mb15">
<div class="input-group ">
<div tabindex="-1" class="form-control file-caption">
<div style="width: 239.12px;" class="file-caption-name"></div>
</div>
<div class="input-group-btn">
<button type="button" class="btn btn-danger fileinput-remove fileinput-remove-button"><i class="icon-ban"></i> Remove</button>
<button type="submit" class="btn btn-success kv-fileinput-upload"><i class="icon-cloud-upload"></i> Upload</button>
<div class="btn btn-primary btn-file">
<i class="icon-folder"></i> &nbsp;Browse …
<input id="birth_certi" name="birth_certi" class="file" data-preview-file-type="text" type="file" req data-error="Please select valid file">
<div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<label class="control-label">Student Adhaar Card</label>
<div class="mb15">
<div class="input-group ">
<div tabindex="-1" class="form-control file-caption">
<div style="width: 239.12px;" class="file-caption-name"></div>
</div>
<div class="input-group-btn">
<button type="button" class="btn btn-danger fileinput-remove fileinput-remove-button"><i class="icon-ban"></i> Remove</button>
<button type="submit" class="btn btn-success kv-fileinput-upload"><i class="icon-cloud-upload"></i> Upload</button>
<div class="btn btn-primary btn-file">
<i class="icon-folder"></i> &nbsp;Browse …
<input id="adhaarcard" name="adhaarcard" class="file" data-preview-file-type="text" type="file" req data-error="Please select valid file">
<div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<label class="control-label">Address Proof</label>
<div class="mb15">
<div class="input-group ">
<div tabindex="-1" class="form-control file-caption">
<div style="width: 239.12px;" class="file-caption-name"></div>
</div>
<div class="input-group-btn">
<button type="button" class="btn btn-danger fileinput-remove fileinput-remove-button"><i class="icon-ban"></i> Remove</button>
<button type="submit" class="btn btn-success kv-fileinput-upload"><i class="icon-cloud-upload"></i> Upload</button>
<div class="btn btn-primary btn-file">
<i class="icon-folder"></i> &nbsp;Browse …
<input id="residential_proof" name="residential_proof" class="file" data-preview-file-type="text" type="file" req data-error="Please select valid file">
<div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<p class="help-block">Use a real image/file of  document, no black and white xerox copies</p>
</div>
comment completed
-->
<h2 class="title-2">
Application Details
</h2>

<div class="form-group">
<label class="control-label">Applying for</label>
<select class="dropdown-product selectpicker" id="applied_standard" name="applied_standard"  required data-error="Please select applying standard">
<option value="" style="display:none;">Standard</option>	
<option value="Play Group">Play Group</option>
<option value="Jr. KG">Jr. KG</option>
<option value="Sr. KG">Sr. KG</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label">Previous Standard</label>
<select class="dropdown-product selectpicker" id="previous_standard" name="previous_standard"  required data-error="Please select previous standard">
<option value="" style="display:none;">Previous Standard</option>		
<option value="Play Group">Play Group</option>
<option value="Jr. KG">Jr. KG</option>
<option value="Sr. KG">Sr. KG</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Previous School</label>
<input type="text" id="previous_school" name="previous_school" class="form-control" required data-error="Please select  previous school">
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Previous Percentage</label>
<input type="text" class="form-control" id="previous_percentage" name="previous_percentage" required data-error="Please select  previous percentage">
<div class="help-block with-errors"></div>
</div>

<div class="form-group">
<label class="control-label" for="textarea">Previous/Current Medium</label>
<input type="text" id="previous_medium" name="previous_medium" class="form-control" required data-error="Please select  previous school">
<div class="help-block with-errors"></div>
</div>
<div class="form-group">
<label class="control-label" for="textarea">Student description</label>
<textarea class="form-control" id="std_description" name="std_description" required data-error="Please enter student description">Describe about student</textarea>
<div class="help-block with-errors"></div>
</div>


<div class="form-group">
<div class="well">
<p>You will redirect to payment option where nominal admission fee will be charged..</p>
<div class="checkbox">
<label><input checked="checked" type="checkbox"> Are you sure, you want to apply?</label>
</div>
<div class="checkbox">
<label><input checked="checked" type="checkbox"> I agree to the <a href="#">Terms of Use</a></label>
</div>
<input type="submit" id="submit" name="submit" value="Submit" class="btn btn-common"/>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
<?php }else{?>
					<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8"><div class="alert alert-danger text-center">Oops! You will have to login to complete the admission process!</div></div>
					<div class="col-lg-2"></div>
					</div>
				<?php } }else{ ?>
					<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8"><div class="alert alert-success text-center">Your admission process has completed successfully.</div></div>
					<div class="col-lg-2"></div>
					</div>
				<?php } ?>

<?php include 'footer.php';?>
<script
  src="https://code.jquery.com/jquery-3.2.1.js">
</script>	
<script>
$(document).ready( function() {
	$(document).on('change', '.btn-file :file', function() {
	var input = $(this),
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	input.trigger('fileselect', [label]);
	});

	$('.btn-file :file').on('fileselect', function(event, label) {
		
		var input = $(this).parents('.input-group').find(':text'),
			log = label;
		
		if( input.length ) {
			input.val(log);
		} else {
			if( log ) alert(log);
		}
	
	});
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function (e) {
				$('#img-upload').attr('src', e.target.result);
			}
			
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#imgInp").change(function(){
		readURL(this);
	}); 	
});
</script>
<script
  src="https://code.jquery.com/jquery-3.2.1.js">
</script>
<script>
	$(document).ready(function(){
		//Email
				function isEmail(email) {
				  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				  return regex.test(email);
				}
				//keyup - when start typing in input
				$('#email').keyup(function(e){
					if(!$('#email').val()){
						e.preventDefault();
						$('#email_error').html("Email Required");
					}else if(!isEmail($('#email').val())){
						e.preventDefault();
						$('#email_error').html("Invalid Email");
					}else{
						$('#email_error').html("");
					}
				});							
				
				$('#email').blur(function(e){
					if(!$('#email').val()){
						e.preventDefault();
						$('#email_error').html("Required");
					}else if(!isEmail($('#email').val())){
						e.preventDefault();
						$('#email_error').html("Invalid Email");
					}else{
						$('#email_error').html("");
					}
				});
								
				
				//mobile no
				function isMobile(mobile) {
				  var phoneNumberPattern = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
				  return phoneNumberPattern.test(mobile);
				}									
				$('#telephone').keyup(function(e){
					if(!$('#telephone').val()){
						e.preventDefault();
						$('#telephone_error').html("Mobile No. Required");
					}else if(!isMobile($('#telephone').val())){
						e.preventDefault();
						$('#telephone_error').html("Invalid Telephone No.");
					}else{
						$('#telephone_error').html("");
					}
				});
				
												
				$('#telephone').blur(function(e){
					if(!$('#telephone').val()){
						e.preventDefault();
						$('#telephone_error').html("Mobile No. Required");
					}else if(!isMobile($('#telephone').val())){
						e.preventDefault();
						$('#telephone_error').html("Invalid Telephone No.");
					}else{
						$('#telephone_error').html("");
					}
				});

				$('#mobile').keyup(function(e){
					if(!$('#mobile').val()){
						e.preventDefault();
						$('#mobile_error').html("Mobile No. Required");
					}else if(!isMobile($('#telephone').val())){
						e.preventDefault();
						$('#mobile_error').html("Invalid Mobile No.");
					}else{
						$('#mobile_error').html("");
					}
				});
				
				$('#mobile').blur(function(e){
					if(!$('#mobile').val()){
						e.preventDefault();
						$('#mobile_error').html("Mobile No. Required");
					}else if(!isMobile($('#telephone').val())){
						e.preventDefault();
						$('#mobile_error').html("Invalid Mobile No.");
					}else{
						$('#mobile_error').html("");
					}
				});
								
			
				
				
				//use click to check validation in autosaved too.
				$('input[type="submit"]').click(function(e){
					
					//email
					if(!$('#email').val()){
						e.preventDefault();
						$('#email_error').html("Email Required");
					}else if(!isEmail($('#email').val())){
						e.preventDefault();
						$('#email_error').html("Invalid Email");
					}
					else if(!$('#telephone').val()){
						e.preventDefault();
						$('#telephone_error').html("Mobile Required");
					}else if($('#telephone').val().length < 10){
						e.preventDefault();
						$('#telephone_error').html("Invalid Telephone No.");
					}
					else if(!$('#mobile').val()){
						e.preventDefault();
						$('#telephone_error').html("Mobile Required");
					}else if($('#mobile').val().length < 10){
						e.preventDefault();
						$('#mobile_error').html("Invalid Mobile No.");
					}													
					else{
						$('#email_error','#telephone_error','#mobile_error').html("");
					}														
				});
			});
	</script>
</body>
<?php include 'footer_files.php';?>		
</html>