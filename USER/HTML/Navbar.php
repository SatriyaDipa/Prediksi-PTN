<html>
    <?php include "koneksi.php"
    ?>
    <head>
        <title>Prediksi PTN</title>
        <div class="" id="topheader">
          <nav id="myNav" class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">PREDIKSI PTN</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="nav_bar">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="HOME.php">HOME <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="Saintek.php">Saintek</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="Soshum.php">Soshum</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="RankingProdiSaintek.php">Ranking Prodi Saintek</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="RankingProdiSoshum.php">Ranking Prodi Soshum</a>
                      </li>
<!--                      <li class="nav-item">-->
<!--                          <a class="nav-link" href="History.php">History</a>-->
<!--                      </li>-->
                      <li class="nav-item">
                          <a class="nav-link" href="logout.php">LOGOUT</a>
                      </li>
                  </ul>
              </div>
              <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
              <script>
                  $(function(){
                      $('a').each(function(){
                          if ($(this).prop('href') == window.location.href) {
                              $(this).addClass('active')
                              $(this).parents('li').addClass('active');
                          }
                      });
                  });
              </script>
          </nav>
        </div>
    </head>

    <body>
    </body>

</html>
