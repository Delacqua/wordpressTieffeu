<?php if( have_posts() ) {
            while( have_posts() ) {
                the_post();
?>

    <div class="titoloPage">
        <h1> <?php the_title(); ?></h1>
    </div>

    <div class="content">

        <?php
            the_content(); 
        ?>

    </div>

<?php
    }
}
?>
