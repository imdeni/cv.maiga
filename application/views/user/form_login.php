<?php include'onek.php'; ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title></title>

    <style type="text/css">
        body{   
        background-color: gray;
        }
        .authfy-login{
            box-shadow: 0 0 200px white;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .authfy-panel{
box-shadow: 0 0 100px #ededed;
                margin-top: 70px;
            margin-bottom: 70px;
        }
        .btn-primary {
    background-color: gray;
        
    border-color: silver;
}
.btn-block{
    background-color: gray;
}
.authfy-login{
    padding: 20px;
    background-color: #ededed;
}


    </style>
</head>

<body>
<form method="post" action="<?php echo base_url('index.php/Auth/login'); ?>">
<!-- Start Preloader -->
<div id="preload-block">
    <div class="square-block"> <!--animasi-->
        
    </div>
</div>
<!-- Preloader End -->

<div class="container-fluid">
    <div class="row1">
        <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">
            <!-- login start -->
            <div class="authfy-login">
                <!-- panel-login start -->
                <div class="authfy-panel panel-login text-center active">
                    <div class="authfy-heading">
                        <img src="<?php echo base_url('img/logo.png'); ?>" style="margin-left: 0px;" width='70' height='80'><img src="<?php echo base_url('img/logoup.png'); ?>" style="margin-left: 50px;" width='70' height='90'><br><br>
                        <h3 style="color:gray" class="auth-title"><b>Login</b></h3>
                        
                    </div>

                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                                <div class="form-group wrap-input">
                                    <input type="number" name="username" class="form-control"  required="required" placeholder="NISN/Username">
                                    <span class="focus-input"></span>
                                </div>
                                <div class="form-group wrap-input">
                                    <div class="pwdMask">
                                        <input type="password" name="password" class="form-control"  required="required" placeholder="Password">
                                        <span class="focus-input"></span>
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <button  class="btn btn-lg btn-primary btn-block" type="submit" class="tombol_login" value="LOGIN">Login</button>
                                </div></form>
    <form action="" method="post"><br>
    
    
                                    
                               
                                
                                
                            
                        </div>
                    </div>
                </div> <!-- ./panel-login -->




                
            </div> <!-- ./authfy-login -->
        </div>
    </div> <!-- ./row -->
</div> <!-- ./container -->

</body>
</html>
