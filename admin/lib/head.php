<?php  function head(){ ?>
<header class="header header-fixed navbar">

            <div class="brand">
                <!-- toggle offscreen menu -->
                <a href="javascript:;" class="ti-menu off-left visible-xs" data-toggle="offscreen" data-move="ltr"></a>
                <!-- /toggle offscreen menu -->

                <!-- logo -->
                <a href="index.php" class="navbar-brand">
                    <img src="img/logo.png" alt="" width="100">
                    
                </a>
                <!-- /logo -->
            </div>

            <ul class="nav navbar-nav">
                
                <li class="header-search">
                    <!-- toggle search -->
                    <a href="javascript:;" class="toggle-search">
                        <i class="ti-search"></i>
                    </a>
                    <!-- /toggle search -->
                    <div class="search-container">
                        <form role="search">
                            <input type="text" class="form-control search" placeholder="type and press enter">
                        </form>
                    </div>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                

                <li class="off-right">
                    <a href="javascript:;" data-toggle="dropdown">
                        <span class="ti-power-off"></span>
                        <span class="hidden-xs ml10">Logout</span>
                        
                    </a>
                    <ul class="dropdown-menu animated fadeInLeft">
                        <li>
                            <a href="sigout.php">Yes</a>
                        </li>
                        <li>
                            <a href="#">No</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        
<?php } ?>