<?php /* Template Name: Page Menu */ ?>

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

                    <div class="titoloPage">
                        <h1> <?php the_title(); ?>:</h1>
                    </div>

                    <div class="submenu">
                        <?php if( have_posts() ) {
                                    while( have_posts() ) {
                                        the_post();
                        ?>


                                <?php
                                        $showMenu = 1;
                                        the_content(); 
                                ?>
                                
                        <?php
                            }
                        }
                        ?>
                    
                    </div>
                
                </article>    
                
        </div>

    </div>

  
<?php get_footer(); ?>