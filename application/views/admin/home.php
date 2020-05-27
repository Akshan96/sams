<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home - Admin Panel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="<?php echo base_url("admin_assets/css/bootstrap.css"); ?>" rel='stylesheet' type='text/css' /><!--You can use link tag too , refer documentation -->
        <script src="<?php echo base_url("admin_assets/js/jquery-3.1.1.js");?>"></script>
        <script src="<?php echo base_url("admin_assets/js/bootstrap.min.js");?>"></script>
        
    </head>
    <body>
    
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <b><a class="navbar-brand" href="#">Admin Panel</a></b>
            </div>
            <!--
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
            </ul>-->
            
        </div>
        </nav>
        <div class="container">

           
            <div class="login col-md-12">
                <center><legend>Login</legend></center>
                <!-- Flash Data Login Error-->
                <?php if( $error = $this->session->flashdata('login_failed')):?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-dismissible alert-danger">
                                <center><?= $error?></center> 
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!--<form class="form-horizontal" id="login"> Using form_open-->
                <?php echo form_open('admin/login','class="form-horizontal" id="login"');?>
                    <fieldset>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Username/Email</label>
                            <div class="col-md-6">
                                <?php echo form_input(['name'=>'a_name','class'=>'form-control','placeholder'=>'User Name or E-mail id','type'=>'text','id'=>'uname','value'=>set_value('username')]);?>
                                <!--<input type="text" class="form-control" id="uname" placeholder="User Name or E-mail id">-->
                            </div>
                            <div class="col-md-3">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password</label>
                            <div class="col-md-6">
                                <?php echo form_password(['name'=>'a_password','class'=>'form-control','id'=>'password','placeholder'=>'Password','type'=>'password']);?>
                                <!--<input type="password" class="form-control" id="password" placeholder="Password">-->
                            </div>
                            <div class="col-md-3">
                                
                            </div>

                        </div>
                        

                        <div class="form-group">
                        <div class="col-md-12 col-md-offset-3">
                            <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']);?>
                            <!--<button type="reset" class="btn btn-default" value="Reset">Cancel</button>-->
                            <?php echo form_submit(['name'=>'submit','value'=>'Login','type'=>'submit','class'=>'btn btn-primary']);?>
                            <!--<button type="submit" class="btn btn-primary" value="Login">Login</button>-->
                        </div>
                        </div>
                    </fieldset>
                </form>
            </div>


        
            <center><legend>Instruction and Guidelines</legend></center>
            <h4>1)..........................................................</h4>
            <h4>2)..........................................................</h4>
            <h4>3)..........................................................</h4>
            <h4>4)..........................................................</h4>
            <h4>5)..........................................................</h4>
            <h4>6)..........................................................</h4>
            <h4>7)..........................................................</h4>
            <h4>8)..........................................................</h4>
            <h4>9)..........................................................</h4>
            <h4>10)..........................................................</h4>

        
        </div>    
    </body>
</html>
