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
            <h2>Test 7</h2>
            <div class="tours__text__widget">
              <ul>
                <li>
                  <i class="fa fa-book"></i>
                  <span> Anda diminta untuk membuat fungsi PHP yang melakukan transposisi terhadap suatu
                    matriks. Implementasikan fungsi 'transposeMatrix' yang menerima matriks sebagai parameter
                    dan mengembalikan matriks yang sudah ditransposisi.
                    Contoh: <br>
                    Input: [
                    [1, 2, 3],
                    [4, 5, 6],
                    [7, 8, 9]
                    ] <br>
                    Output:
                    [
                    [1, 4, 7],
                    [2, 5, 8],
                    [3, 6, 9]
                    ]</span>
                </li>
                <li>
                  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <label for="matrix">Masukkan matriks (format: [[a, b, c], [d, e, f], [g, h, i]]):</label><br>
                    <textarea id="matrix" name="matrix" rows="4" cols="50"></textarea><br><br>
                    <input type="submit" value="Submit">
                  </form>

                  <?php

                  // Fungsi untuk mentransposisi matriks
                  function transposeMatrix($matrix)
                  {
                    $rows = count($matrix);
                    $cols = count($matrix[0]);

                    $transposed = array();

                    for ($i = 0; $i < $cols; $i++) {
                      $transposed_row = array();
                      for ($j = 0; $j < $rows; $j++) {
                        $transposed_row[] = $matrix[$j][$i];
                      }
                      $transposed[] = $transposed_row;
                    }

                    return $transposed;
                  }

                  // Menginisialisasi input matriks
                  $input_matrix = [
                    [1, 2, 3],
                    [4, 5, 6],
                    [7, 8, 9]
                  ];

                  // Memproses input dari form jika ada
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Memeriksa apakah input form matriks telah disubmit
                    if (isset($_POST['matrix'])) {
                      // Mendapatkan nilai dari input form
                      $input_matrix = json_decode($_POST['matrix']);
                    }
                  }

                  // Memanggil fungsi transposeMatrix dengan input matriks
                  $output_matrix = transposeMatrix($input_matrix);

                  // Menampilkan hasil transposisi
                  foreach ($output_matrix as $row) {
                    echo "[" . implode(", ", $row) . "]\n";
                  }
                  ?>
                  <br><br>
                  <a href="test6.php" class="primary-btn">Prev</a> &nbsp;&nbsp;&nbsp; <a href="test8.php" class="primary-btn">Next</a>
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