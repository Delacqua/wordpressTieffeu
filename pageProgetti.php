<?php /* Template Name: Page Progetti */ ?>

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

                    <?php if( have_posts() ) {
                                while( have_posts() ) {
                                    the_post();
                    ?>

                        <div class="contentProgetti">

                            <?php
                                the_content();

                            ?>

                        </div>

                    <?php
                        }
                    }
                    ?>

                </article>    
                
        </div>

    </div>


<?php get_footer(); ?>