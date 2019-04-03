<?php /* Template Name: Slide */ ?>

<?php get_header(); ?>

<?php $home = get_template_directory_uri(); ?>


<script type="text/javascript">
    
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
  }



</script>


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

                    <div class="w3-content w3-display-container">
                      <img class="mySlides" src="http://localhost/tieffeu/wp-content/uploads/2019/03/fiaba3.jpg" style="width:100%">
                      <img class="mySlides" src="http://localhost/tieffeu/wp-content/uploads/2019/03/DSC_0034.jpg" style="width:100%">
                      <img class="mySlides" src="http://localhost/tieffeu/wp-content/uploads/2019/03/fiaba1.jpg" style="width:100%">
                      <img class="mySlides" src="http://localhost/tieffeu/wp-content/uploads/2019/03/cera-una-volta.jpg" style="width:100%">

                      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>



                </article>    
                
        </div>

    </div>


<?php get_footer(); ?>