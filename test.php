<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="DJoz Template" />
  <meta name="keywords" content="DJoz, unica, creative, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>DJoz | Template</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Css Styles -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/barfiller.css" type="text/css" />
  <link rel="stylesheet" href="css/nowfont.css" type="text/css" />
  <link rel="stylesheet" href="css/rockville.css" type="text/css" />
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>




  <!-- Tours Section Begin -->
  <section class="tours spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-lg-1">
          <div class="tours__item__text">
            <h2>Test 1</h2>
            <div class="tours__text__widget">
              <ul>
                <li>
                  <i class="fa fa-book"></i>
                  <span>Buatlah fungsi untuk membuat hash dan verifikasi hash untuk
                    sebuah API dengan metode enkripsi md5 dan salt dari sebuah
                    data, dengan ketentuan: $data=”andi:mypassword” $salt
                    =”mySecretKey”<br />
                    a. Buatlah function bernama "generateHash" dengan parameter
                    dan return berupa string. <br />
                    b. Buatlah function bernama "verifyHash" untuk verifikasi hash
                    tersebut dengan parameter berupa string hash hasil dari poin A
                    dan return nya adalah boolean, return true jika hash tersebut
                    valid dan return false jika hash tersebut tidak valid. <br />
                    c. Menurutmu apakah fungsi dari hash? <br />
                    d. Menurutmu apakah fungsi dari salt?</span>
                </li>
                <li>
                  <?php
                  function generateHash($data, $salt)
                  {
                    $dataWithSalt = $data . ':' . $salt;
                    $hash = md5($dataWithSalt);
                    return $hash;
                  }
                  function verifyHash($hash, $data, $salt)
                  {
                    $generatedHash = generateHash($data, $salt);
                    if ($hash === $generatedHash) {
                      return true;
                    } else {
                      return false;
                    }
                  }
                  $data = "";
                  $salt = "mySecretKey";
                  $hashedData = "";
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $data = $_POST["data"];
                    $hashedData = generateHash($data, $salt);
                  }
                  ?>
                  <h3>Penggunaan</h3><br>
                  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    Password : <input type="text" name="data" placeholder="Masukan Password" value="<?php echo $data; ?>"><br><br>
                    <input type="submit" name="submit" value="Generate Hash">
                  </form>
                  <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                    <?php if (!empty($hashedData)) : ?>
                      <p>Hashed data: <?php echo $hashedData; ?></p>
                    <?php else : ?>
                      <p>Data cannot be empty.</p>
                    <?php endif; ?>
                  <?php endif; ?>
                </li>
              </ul>

            </div>
            <div class="tours__text__desc">
            </div>
          </div>
        </div>
        <div class="col-lg-6 order-lg-3">
          <div class="tours__item__pic tours__item__pic--left">
            <img src="img/tour-2.jpg" alt="" />
          </div>
          <a href="index.php" class="primary-btn">Home</a> &nbsp;&nbsp;&nbsp; <a href="test2.php" class="primary-btn">Next</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Tours Section End -->

  <!-- Footer Section Begin -->
  <footer class="footer footer--normal spad set-bg" data-setbg="img/footer-bg.png">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer__address">
            <ul>
              <li>
                <i class="fa fa-phone"></i>
                <p>Phone</p>
                <h6>082124944770</h6>
              </li>
              <li>
                <i class="fa fa-envelope"></i>
                <p>Email</p>
                <h6>pattroberth13@gmail.com</h6>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1 col-md-6">
          <div class="footer__social">
            <img src="img/logo.png" style="width: 40%" alt="" />
          </div>
        </div>
        <div class="col-lg-3 offset-lg-1 col-md-6">
          <div class="footer__newslatter">
            <h4>Stay With me</h4>
            <form action="#">
              <input type="text" placeholder="Email" />
              <button type="submit"><i class="fa fa-send-o"></i></button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer__copyright__text">
        <p>
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          Roberth | Test Web Developer</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Js Plugins -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/jquery.barfiller.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>

  <!-- Music Plugin -->
  <script src="js/jquery.jplayer.min.js"></script>
  <script src="js/jplayerInit.js"></script>
</body>

</html>