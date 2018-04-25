<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Template Website Bootstrap</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of 
         HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom CSS -->
    <link href="assets/style.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">

    <!-- Bagian Header -->
    <div class="row">
        <div class="col-md-12 header" id="site-header">
            <!-- isi header -->
            <header>
    <h1 class="title-site">Digital Home Monitoring </h1>
    <p class="description">Aplikasi untuk memonitor kondisi suhu dan kelembaban Rumah Berbasis IoT</p>
</header>
<nav class="menus">
    <ul>
        <li><a href="#">Suhu</a></li>
        <li><a href="#">Listrik</a></li>
        <li><a href="#">Gas</a></li>
    </ul>
</nav>
        </div>
    </div>
    <!-- End Bagian Header -->

    <!-- Bagian Wrapper 2 kolom -->
    <div class="row">
        <div class="col-md-8 articles" id="site-content">
           <!-- isi content -->
           <article class="posts">
    <h2 class="title-post"> Grafik Kondisi Suhu dan Kelembaban</h2>
    <div class="meta-post">
        <span><em class="glyphicon glyphicon-user"></em> <?php echo date("l") ?></span>
        <span><em class="glyphicon glyphicon-time"></em> <?php echo date("Y/m/d") ?></span>
    </div>
    <div class="content">
      <?php
        include_once("graf.php");
      ?>
    </div>
</article>
        </div>
        <div class="col-md-4 sidebar" id="site-sidebar">
            <!-- isi sidebar -->
            <aside class="widgets">
    <h3 class="widget-title">Latest Posts</h3>
    <ul>
        <li><a href="#">Ruang 1</a></li>
        <li><a href="#">Ruang 2</a></li>
        <li><a href="#">Ruang 3</a></li>
        <li><a href="#">Ruang 4</a></li>
        <li><a href="#">Ruang 5</a></li>
    </ul>
</aside>
        </div>
    </div>
    <!-- End Bagian wrapper -->
    
    <!-- Bagian footer -->
    <div class="row">
        <div class="col-md-12 footer" id="site-footer">
            <!-- isi footer -->
            <footer class=”copyright text-center”><p>&copy; 2015 onphpid.com</p></footer>
        </div>
    </div>
    <!-- End Bagian footer -->

</div>

    <!--happy code-->


    <!-- jQuery online menggunakan CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- jQuery lokal -->
    <script src="assets/jquery/jquery.min.js"></script>
 
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/custom.js"></script>
  </body>
</html>