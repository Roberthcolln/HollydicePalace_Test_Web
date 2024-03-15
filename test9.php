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
            <h2>Test 9</h2>
            <div class="tours__text__widget">
              <ul>
                <li>
                  <i class="fa fa-book"></i>
                  <span> Dalam pengembangan aplikasi Laravel, caching dapat menjadi strategi
                    yang kuat untuk meningkatkan kinerja aplikasi. Jelaskan konsep caching
                    strategis dan jelaskan bagaimana Cache Tagging digunakan dalam Laravel.
                    Berikan contoh situasi di mana implementasi caching strategis dan
                    penggunaan Cache Tagging dapat memberikan manfaat yang signifikan.</span>
                </li>
                <li>
                  <h3><u>Jawaban</u></h3>

                  Konsep caching strategis melibatkan pemilihan data mana yang akan disimpan
                  dalam cache, berapa lama data tersebut akan disimpan, dan bagaimana data
                  tersebut akan diperbarui atau dihapus dari cache <br /><br />
                  Salah satu strategi caching yaitu Full Page Caching yg dimaksud untuk
                  Menyimpan halaman web secara keseluruhan dalam cache untuk mengurangi
                  waktu pengambilan halaman dari server. <br /><br />
                  Cache Tagging adalah fitur yang disediakan oleh Laravel untuk mengelola
                  cache dengan lebih terstruktur. Dengan Cache Tagging, dapat memberikan tag
                  ke setiap item cache yang di simpan. <br /><br />
                  dengan contoh misalkan saya memiliki aplikasi e-commerce yang menampilkan
                  produk-produk dari berbagai kategori. Setiap kali pengguna mengakses
                  halaman kategori tertentu, aplikasi perlu mengambil data produk dari
                  database. Namun, data produk jarang berubah dan kategori-kategori tersebut
                  cenderung sering diakses. Dalam kasus ini, kita dapat menerapkan caching
                  strategis dengan menyimpan data produk dari setiap kategori dalam cache.
                  dan juga dapat menggunakan Cache Tagging dengan memberikan tag ke setiap
                  item cache berdasarkan kategori produknya. Dengan demikian, saat ada
                  perubahan pada produk dalam suatu kategori, maka dapat dengan mudah
                  menghapus semua item cache yang terkait dengan kategori tersebut, sehingga
                  memastikan bahwa data yang ditampilkan kepada pengguna selalu diperbarui.
                  <br><br>
                  <a href="test8.php" class="primary-btn">Prev</a> &nbsp;&nbsp;&nbsp; <a href="test10.php" class="primary-btn">Next</a>
                </li>
              </ul>

            </div>
            <div class="tours__text__desc">
            </div>
          </div>
        </div>
        <div class="col-lg-6 order-lg-3">
          <div class="tours__item__pic tours__item__pic--left">
            <img src="img/quis.jpg" alt="" />
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