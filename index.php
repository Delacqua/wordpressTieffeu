<?php get_header(); ?>

<?php $home = get_template_directory_uri(); ?>

    <div class="container">
        
        <div class="top">
            <div class="main">

                <?php include 'content/headerLogo.php' ?> <!-- header -->

            </div>
        </div>

        <div class="middle">
            <div class="main">

                <?php include 'content/menu.php' ?> <!-- menu -->
            
            </div>

        </div>

        <div class="bottom">
            <div class="main">

                <?php include 'content/footerContatti.php' ?> <!-- Footer -->
                            
            </div>

        </div>
        
    </div>
  

<?php get_footer(); ?>