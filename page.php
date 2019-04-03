<?php /* Template Name: Page Content */ ?>

<?php get_header(); ?>

<?php $home = get_template_directory_uri(); ?>


    <div class="container">
        
        <div class="top">
            <div class="main">

                <?php include 'content/headerLogo.php' ?> <!-- header -->

            </div>
        </div>


        <div class="middleInterno">

                <nav class="sinistra">
                    <?php include 'content/menuInterno.php' ?>
                </nav>
                
                <article class="destra">
                    <?php include 'content/content.php' ?>
                </article>    
                
        </div>

    </div>


<?php get_footer(); ?>