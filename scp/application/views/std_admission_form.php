<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Admission - SAMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
	/*
  background-color: #f0f0f0;*/
  width: 700px;
  float: center;
}


hr.style7 {
	border-top: 1px solid #8c8b8b;
	border-bottom: 1px solid #fff;
}


hr.style14 { 
  border: 0; 
  height: 1px; 
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
}
.user {
  display: inline-block;
  width: 175px;
  height: 175px;
  border-radius: 10%;

  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

</style>
</head>
<body>
 <!-- <hr class="style7"><hr class="style14"> 	<?php foreach ($admission_list as $admission): ?>   <?php endforeach; ?>  --> 
<div class="container-fluid">

	<div class="container">
		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-10">
				<div class="page-header">
				  <div class="pull-left">
				  <h3>Admission Form (<?php echo $admission_data[0]->admission_form_id; ?>)</h3>
				  </div>
				  <div class="pull-right">
				  <h3 class="text-right"><span class="label label-primary"><?php echo $school_details[0]->school_name; ?></span></h3>
				  </div>
				  <div class="clearfix"></div>
				</div>
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-md-4 text-right">
				</br>
				
				<img class="user" src="<?php if($admission_data[0]->passport_photo){echo base_url("../uploads/admission_form/passport_photo/".$admission_data[0]->passport_photo);}else{echo base_url("../uploads/admission_form/passport_photo/user.jpg");}?>" alt="Passport Photo" />
				</br>
			</div>
			
			 <?php //echo "../uploads/admission_form/passport_photo/".$admission_data[0]->passport_photo ?>
  			<div class="col-md-5">
  				
  				<table class="table">
				    <thead>
				      
				    </thead>
				    <tbody class="">
				      <tr>
				        <td><strong>Student First Name : </strong></td>
						<td><?php echo $admission_data[0]->fname; ?></td>				       
				      </tr>
				      <tr>
				        <td><strong>Student Middle Name : </strong></td>
						<td><?php echo $admission_data[0]->mname; ?></td>				        
				      </tr>
				      <tr>
				        <td><strong>Student Last Name : </strong></td>
				        <td><?php echo $admission_data[0]->lname; ?></td>				        
				      </tr>
				      <tr>
				        <td><strong>Date of Birth : </strong></td>
				        <td><?php echo $admission_data[0]->dob; ?></td>
				      </tr>
				      <tr>
				        <td><strong>Gender : </strong></td>
				        <td><?php echo $admission_data[0]->gender; ?></td>
				      </tr>
				      <tr>
				        <td><strong>Religion : </strong></td>
				        <td><?php echo $admission_data[0]->religion; ?></td>
				      </tr>
				      <tr>
				        <td><strong>Native Place : </strong></td>
				        <td><?php echo $admission_data[0]->native_place; ?></td>
				      </tr>
				    </tbody>
			 	</table>
				
			</div>  				
			<div class="col-md-3">

			</div>

			
		</div>
		<div class="row">
			<div class="col-md-1">
				
				
				
			</div>
			
			 
  			<div class="col-md-5">
  				
  				<table class="table">
				    <thead>
				      
				    </thead>
				    <tbody class="">
				      <tr>
				        <td><strong>Father Name : </strong></td>
						<td><?php echo $admission_data[0]->father_name; ?></td>				       
				      </tr>
				      <tr>
				        <td><strong>Mother Name : </strong></td>
						<td><?php echo $admission_data[0]->mother_name; ?></td>				        
				      </tr>
				      <tr>
				        <td><strong>Email : </strong></td>
				        <td><?php echo $admission_data[0]->email; ?></td>				        
				      </tr>
				      <tr>
				        <td><strong>Telephone No. : </strong></td>
				        <td><?php echo $admission_data[0]->telephone; ?></td>
				      </tr>
				      <tr>
				        <td><strong>Mobile No. : </strong></td>
				        <td><?php echo $admission_data[0]->mobile; ?></td>
				      </tr>
				      
				    </tbody>
			 	</table>
				
			</div> 
			<div class="col-md-5">
  				
  				<table class="table">
				    <thead>
				      
				    </thead>
				    <tbody class="">
				      <tr>
				        <td><strong>Country : </strong></td>
						<td><?php echo $admission_data[0]->nationality; ?></td>				       
				      </tr>
				      <tr>
				        <td><strong>State : </strong></td>
						<td><?php echo $admission_data[0]->state; ?></td>				        
				      </tr>
				      <tr>
				        <td><strong>City : </strong></td>
				        <td><?php echo $admission_data[0]->city; ?></td>				        
				      </tr>
				      
				      <tr>
				        <td><strong>Residential Address : </strong></td>
				        <td><?php echo $admission_data[0]->address; ?></td>
				      </tr>
				      <tr>
				        <td><strong>Permanent Address : </strong></td>
				        <td><?php echo $admission_data[0]->permanent_address; ?></td>
				      </tr>
				    </tbody>
			 	</table>
				
			</div>  	 				
			<div class="col-md-1">

			</div>

			
		</div>

		<div class="row">
			<div class="col-md-1">
				
				
				
			</div>
			
			 
  			<div class="col-md-5">
  				
  				<table class="table">
				    <thead>
				      
				    </thead>
				    <tbody class="">
				      <tr>
				        <td><strong>Applying For : </strong></td>
						<td><?php echo $admission_data[0]->applied_standard; ?></td>				       
				      </tr>
				      <tr>
				        <td><strong>Previous Standard : </strong></td>
						<td><?php echo $admission_data[0]->previous_school; ?></td>				        
				      </tr>
				      <tr>
				        <td><strong>Previous School : </strong></td>
				        <td><?php echo $admission_data[0]->previous_standard; ?></td>				        
				      </tr>
				      <tr>
				        <td><strong>Previous Percentage : </strong></td>
				        <td><?php echo $admission_data[0]->previous_percentage; ?></td>
				      </tr>
				      <tr>
				        <td><strong>Previous/Current Medium : </strong></td>
				        <td><?php echo $admission_data[0]->previous_medium; ?></td>
				      </tr>
				     
				    </tbody>
			 	</table>
				
			</div> 
			<div class="col-md-5">
  				<p>
  				<strong>Student Description : </strong>
				<span><?php echo $admission_data[0]->std_description; ?></span>
				</p>
			</div>  	 				
			<div class="col-md-1">

			</div>

			
		</div>
  		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-10">
				<hr class="style7">
				
				<div class="page-footer">
				  <div class="pull-left">
				  <h4><strong>By User : </strong> <?php echo $admission_data[0]->usr_id; ?></h4>
				  </div>
				  <div class="pull-right">
				  <h4 class="text-right"><strong>Submitted at : </strong><?php echo $admission_data[0]->submitted_at; ?></h4>
				  </div>
				  
				</div>
			</div>
			
		</div>


	</div>
         
</div>

</body>
</html>