<!DOCTYPE html>
<html lang="en">


<head>
  <!--Required Meta Tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Homepage - Shomoyer alo</title>
  <meta name="description" content="Bootnews Bootstrap 5 News Magazine Template">
  <meta name="keywords" content="bootstrap news, bootstrap portal, bootstrap blog, bootstrap magazine">

  <!--App manifest-->
  <link rel="manifest" href="assets/js/manifest.json">

  <!--Favicon-->
  <link rel="shortcut icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">
  <meta name="theme-color" content="#ffffff">
  <link rel="apple-touch-icon" href="assets/img/favicon/apple-icon.png">

  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

  <!--Styles-->
  <link rel="stylesheet" href="assets/css/theme.css">
  <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />

  <!--Minify Styles-->
  <!-- <link rel="stylesheet" href="../../dist/css/bundle.min.css"> -->
</head>

<body class="bg-repeat font-family">
  <!--Skippy-->
  <a id="skippy" class="visually-hidden-focusable" href="#content">
    <div class="container">
      <span class="skiplink-text">Skip to main content</span>
    </div>
  </a>

  <!--Background image-->
  <div class="bg-image"></div>

  <!-- ========== WRAPPER ========== -->
  <div class="wrapper">

    <?php include('header.php'); ?>



    <!--Content start-->
    <main id="content">
      <div class="container">
        
		  live here
		</div>
    </main>
    <!--End Content-->

    <?php include('footer.php'); ?>




  </div>
  <!-- ========== END WRAPPER ========== -->

  <!--Back to top-->
  <a class="back-top btn btn-light border position-fixed r-1 b-1" href="#">
    <svg class="bi bi-arrow-up" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
      <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"></path>
    </svg>
  </a>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap Bundle JS -->
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!--Vendor js-->
  <script src="assets/vendor/hc-sticky/dist/hc-sticky.js"></script>
  <script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>
  <script src="assets/vendor/vanilla-lazyload/dist/lazyload.min.js"></script>
  <script src="assets/vendor/smoothscroll-for-websites/SmoothScroll.js"></script>
  <!-- FlexSlider -->
  <script defer src="assets/vendor/flexslider/jquery.flexslider.js"></script>



  <!--Theme js-->
  <script src="assets/js/theme.js"></script>

  <!--Minify js-->
  <!-- <script src="../../dist/js/bundle.min.js"></script> -->

  <script>
    $(document).ready(function(){
      $('#f1').flexslider({
        animation: "slide",
        rtl: true,
        start: function(slider) {
          $('body').removeClass('loading');
        }
      });
      $('#f2').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 5,
        pausePlay: true,
        mousewheel: true,
        rtl: true,
        asNavFor: '.flexslider'
      });
});


    
  </script>


</body>


</html>