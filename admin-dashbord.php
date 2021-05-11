<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rajnandini</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Rajnandini Web 0.1
   * Author: RUSHIKESH RAUT
add this code if you want to add logo in website
a href="index.html" class="logo"><img src="assets/img/logo.jpg" alt="" class="img-fluid"
 ======================================================== -->
</head>
<style>
.content-table{
  
  z-index:2;
  left:0px;
  width: 100%;
  height:50%; 

}
 
  

   .content-table{
     border-collapse:collapse;
     margin:55px 0;
     font-size:0.9em;

     border-radius:5px 5px 0 0;
     overflow:hidden;
     box-shadow: 0 0 20px rgba(0,0,0,0,15);
   }
   .content-table th {
    background-color:#009879;
    color:#ffffff;
    text-align:left;
    font-weight:bold;
    padding:12px 15px;
    position: sticky;
    top:0;

   }
   .content-table td{
     padding:12px 15px;
   }
   .content-table tbody tr{
     border-bottom:1px solid #dddddd; }
  
  .content-table tbody tr:nth-of-type(){
    background-color:#f3f3f3;
  }
  tr:hover{
    background-color: #f5f5f5;
    transform: scale(1.02);
    box-shadow: 0 0 20px rgba(0,0,0,0,15);
  }
</style>

<body>

  <!-- ======= ===============================================================================================Header ======= -->
  <header id="header" class="fixed-top ">
 <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Rajnandini Web</a></h1>

     

      <nav id="navbar" class="navbar">
        <ul>
          
            
          
          <li><a class="nav-link scrollto" href="#v">Visitors List</a></li>
          
          <li><a href="index.html" class="read-more">Log out <i class="bi bi-long-arrow-right"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1> Rushikesh Raut</h1>
          <h2>Welcome Admin</h2>
          <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
</---------------------------------------------------------------------------------->

<td><h4 style = text-align:center;> Here is the list of visitors</h4></td>

<table id="v" class="content-table" >
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>contact</th>
  </tr>
<?php
include 'dbcon.php';
$selectquery="select * from registration";
$query= mysqli_query($con,$selectquery);
$nums= mysqli_num_rows($query);
while($res=mysqli_fetch_array($query)){
    ?>
    <tr>
    <td><?php echo $res['id']; ?></td>
    <td><?php echo $res['username']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['mobile']; ?></td>
</tr>
<?php
}
?>
</table>

</--------------------------------------------------------------------------------------------------->

</------------------------------------------------------------------------------------------------------->

<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Rajnandini Web</h3>
            <p>
              Pune,Hadapasar <br>
              Pune-Saswad Road<br>
              Maharashtra , India <br><br>
              <strong>Phone:</strong> +91 7709 5267 10<br>
              <strong>Email:</strong> rajnandiniweb@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Rajnandini WEB</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            
            Designed by <a href="https://">Rushikesh Raut</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer>









  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- ===========================================================================================================Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>