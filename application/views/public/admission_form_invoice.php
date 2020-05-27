<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uideck.com/demos/estatex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jan 2018 08:34:40 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="EstateX">
<title>Admission Invoice – SAMS</title>
<?php include 'header_files.php';?>
</head>
<body>

<?php include 'header.php';?>
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-9 col-md-offset-2 page-content">
<br>
<div class="alert alert-success text-center" role="alert">
  <a href="#" class="alert-link">Well done! You admission application is successfully submitted.</a>
</div>
</div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
                <h2>Invoice for application #3<?php echo $uid;?>322<?php echo $uid;?>1<?php echo $results[0]->school_id; ?></h2>
				<small class="pull-right"><?php echo date("Y/m/d");?></small>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-4 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Billing Details</div>
                        <div class="panel-body">
                            <strong>Email :  <?php echo $uemail;?></strong><br>     <br>                        
                            <strong>Contact no. : <?php echo $umob;?></strong><br><br> 
                        </div>
                    </div>
                </div>
				<div class="col-xs-12 col-md-4 col-lg-4">
                    <div class="panel panel-default height">
                        <div class="panel-heading">School details</div>
                        <div class="panel-body">
                            <div class="text-center"> <?php echo $results[0]->school_name; ?></div><br><br>
                            <strong>Contact no. : <?php echo $results[0]->school_mobile; ?></strong><br><br>
                            <strong>Email : <?php echo $results[0]->school_email; ?></</strong><br><br>
                            <strong>Address : <?php echo $results[0]->school_address; ?></strong><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Payment Used</div>
                        <div class="panel-body">
                            <!--<strong>Paied with Paytm</strong><br>
                            <strong>Paied with Paypal</strong><br>-->
                            <strong>Paied with Debit Card</strong><br>
							<em>Payment information</em>
							<p>XXXXXXXXXXXXXX</p>
							<!--<strong>Paied with Credit Card</strong><br>-->
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th><strong>User Email</strong></th>
                                    <th class="text-center"><strong>School Name</strong></th>                                    
                                    <th class="text-right"><strong>Admission Form Price</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $uemail;?></td>
                                    <td class="text-center"> <?php echo $results[0]->school_name; ?></td>                                    
                                    <td class="text-right">&#8377; 100</td>
                                </tr>
								
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>	
<?php include 'footer.php';?>
</body>
<?php include 'footer_files.php';?>		
</html>