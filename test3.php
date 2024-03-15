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
            <h2>Test 3</h2>
            <div class="tours__text__widget">
              <ul>
                <li>
                  <i class="fa fa-book"></i>
                  <span>Anda diminta untuk membuat fungsi PHP yang dapat menentukan apakah suatu string
                    merupakan anagram atau bukan. Sebuah anagram adalah sebuah kata atau frase yang dapat
                    membentuk kata atau frase lain dengan mengacak urutan hurufnya.
                    Contoh: isAnagram("listen", "silent") // Output:true</span>
                </li>
                <li>
                  <form method="post">
                    <label for="str1">String 1:</label>
                    <input type="text" id="str1" name="str1" required><br><br>
                    <label for="str2">String 2:</label>
                    <input type="text" id="str2" name="str2" required><br><br>
                    <button type="submit" name="submit">Check Anagram</button>
                  </form>

                  <?php
                  // Cek apakah form sudah disubmit
                  if (isset($_POST['submit'])) {
                    // Ambil nilai dari form
                    $str1 = $_POST['str1'];
                    $str2 = $_POST['str2'];

                    // Panggil fungsi isAnagram
                    if (isAnagram($str1, $str2)) {
                      echo "<p>true</p>";
                    } else {
                      echo "<p>false</p>";
                    }
                  }

                  // Fungsi isAnagram
                  function isAnagram($str1, $str2)
                  {
                    // Hilangkan spasi dan ubah huruf menjadi huruf kecil
                    $str1 = strtolower(str_replace(' ', '', $str1));
                    $str2 = strtolower(str_replace(' ', '', $str2));

                    // Pisahkan setiap karakter string ke dalam array
                    $arr1 = str_split($str1);
                    $arr2 = str_split($str2);

                    // Urutkan array karakter
                    sort($arr1);
                    sort($arr2);

                    // Bandingkan array
                    return $arr1 === $arr2;
                  }
                  ?><br><br>
                  <a href="test2.php" class="primary-btn">Prev</a> &nbsp;&nbsp;&nbsp; <a href="test4.php" class="primary-btn">Next</a>
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