<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php
  include('includes/css.php')
  ?>

</head>

<body>

  <?php include('includes/header.php') ?>

  <main id="main">

    <!-- ======= Book A Table Section ====== -->
    <div class="section mt-5 mb-5" id="book-a-table">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h1>Net Banking</h1>
            <div class="card" style="box-shadow: 9px 9px 20px 0px grey;">
              <div class="card-body">
                <img src="images/netbanking.png" alt="card" style="max-width: 48vh;" class="mt-5 mb-5">
                <form class="row g-3">
                  <h5>Some Limited Banks are Active</h5>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle mt-3" data-bs-toggle="dropdown" aria-expanded="false">
                      Choose your bank
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><button class="dropdown-item" type="button">State Bank of India</button></li>
                      <li><button class="dropdown-item" type="button">Axis Bank of India</button></li>
                      <li><button class="dropdown-item" type="button">Hdfc bank</button></li>
                    </ul>
                  </div>

                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h1>Card Payment</h1>
            <div class="card" style="box-shadow: 9px 9px 20px 0px grey;">
              <div class="card-body">
                <img src="images/card.png" alt="card" style="max-width: 48vh;">
                <form class="row g-3">
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Card Number</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 4567 8912 2345">
                  </div>
                  <div class="col-md-3">
                    <label for="inputEmail4" class="form-label">Month</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="**">
                  </div>
                  <div class="col-md-3">
                    <label for="inputPassword4" class="form-label">Year</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="****">
                  </div>
                  <div class="col-md-3">

                  </div>
                  <div class="col-md-3">
                    <label for="inputPassword4" class="form-label">CVV</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="***">
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h1>UPI Payment</h1>
            <div class="card" style="box-shadow: 9px 9px 20px 0px grey;">
              <div class="card-body">
                <img src="images/Upi-bar-code.png" alt="card" style="max-width: 100vh;" class="rounded mx-auto d-block mt-5 mb-5">
                <h5>Scan & Pay Using Any UPI App To</h5>
                <h5>UPI ID: myupiidOdisha@uil</h5>
                <h5>MERCHANT NAME: Adam Das</h5>
                <form class="row g-3 mt-1">
                  <div class="col-12 ">
                    <label for="inputAddress" class="form-label">UPI Number</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="myupiidOdisha@uil">
                  </div>

                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
<!-- End Book A Table Section -->




<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <h3>Delicious</h3>
    <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
    <div class="social-links">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
    <div class="copyright">
      &copy; Copyright <strong><span>Asish</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="">Asish Kumar Dhall</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
<script>

</script>