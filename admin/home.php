<?php
include("lib/lib.php");
$page_name = 'Home';
?>
<!doctype html>
<html class="no-js" lang="">

<?php top($page_name,null); ?>

<!-- body -->

<body>

   
    
    <div class="app">
        <!-- top header -->
        <?php head(); ?>
        <!-- /top header -->

        <section class="layout">
            
            <!-- sidebar menu -->
            <?php aside($page_name); ?>
            <!-- /sidebar menu -->

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">

                    <!-- inner content wrapper -->
                    <div class="wrapper no-p"></div>
                    <!-- /inner content wrapper -->

                </div>
                <!-- /content wrapper -->
                <a class="exit-offscreen"></a>
            </section>
            <!-- /main content -->
            
        </section>

    </div>

    <?php bottom(null); ?>

</body>
<!-- /body -->

</html>
