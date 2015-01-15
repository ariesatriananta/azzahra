<?php
include("lib/top.php");
include("lib/bottom.php");
?>
<!doctype html>
<html class="signin no-js" lang="">

<?php top("Sign In",null); ?>

<body class="bg-primary">

    

    <div class="cover" style="background-image: url(img/cover3.jpg)"></div>

    <div class="overlay bg-primary"></div>

    <div class="center-wrapper">
        <div class="center-content">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <section class="panel bg-white no-b">
                        <ul class="switcher-dash-action">
                            <center><h4>Login</h4></center>
                        </ul>
                        
                        <div class="p15">  
                            <form role="form" action="cek_signin.php" method="post">
                                <input name="user" class="form-control input-lg mb25" placeholder="Username" autofocus>
                                <input name="pass" type="password" class="form-control input-lg mb25" placeholder="Password">
                                <div class="show">
                                    <div class="pull-right">
                                        <a href="forgot.html">Poho Password?</a>
                                    </div>
                                    <label class="checkbox">
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign in">
                            </form>
                        </div>
                    </section>
                    <p class="text-center">
                        Copyright &copy;
                        <span id="year" class="mr5"></span>
                        <span>Azzahra</span>
                    </p>
                </div>
            </div>
        
        </div>
    </div>
    
    <?php bottom(null); ?>
    
</body>
</html>
