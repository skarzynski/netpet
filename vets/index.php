<!DOCTYPE html>
<html lang="pl">

<head>
    
    <?php
$server = "localhost";
$user = "p491607_root";
$pass = "fvecrqcj";
$mysqli = new mysqli($server, $user, $pass);
  
    $request = "SELECT * FROM `zooshops`";
$doreq = $mysqli->query($request);
$mysqli->select_db('p491607_netpet');
    $mysqli->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

$result = $mysqli->query("SELECT * FROM zooshops WHERE type='weterynarz' ");
if (!$result) {
    echo 'Nie można uruchomić zapytania: ' . $mysqli->error;
    exit;
}
    
    
?>
    
	<style>
	.info{
	float:left;
	width:49%;
	}
	.fb{
	position:absolute;
	bottom:0;
	right:0;
	padding-right:15%;
	}
	
	</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Katarzyna Rusek, Szymon Skarzyński, Kamil Langer, Maciej Ryś, Michał Henicz">

    <title>NetPet - Gabinety weterynaryjne</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	
    <!-- Dodatkowy CSS -->
    <link href="/css/1-col-portfolio.css" rel="stylesheet">
    <link href="/css/round-about.css" rel="stylesheet">
    <link href="/css/stylish-portfolio.css" rel="stylesheet">
    <link href="/css/full-slider.css" rel="stylesheet">

    <!-- Dodatkowe Czionki -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
	<!-- Modal CSS -->
	<link href="css/modal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	<script src="zmiana.js"></script>
</head>

<body>

   <!-- Menu Nawigacyjne -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <p class="menutxt">Menu</p>
            </li>
            <li>
                <a href="/" onclick=$("#menu-close").click();>Strona główna</a>
            </li>
            <li>
                <a href="/vets" onclick=$("#menu-close").click();>Gabinety weterynaryjne</a>
            </li>
            <li>
                <a href="/groomers" onclick=$("#menu-close").click();>Salony groomerskie</a>
            </li>
            <li>
                <a href="/shops" onclick=$("#menu-close").click();>Sklepy zoologiczne</a>
            </li>
			<li>
                <a href="/hotel" onclick=$("#menu-close").click();>Hotel dla zwierząt</a>
            </li>
			<li>
                <a href="/schronisko" onclick=$("#menu-close").click();>Schronisko</a>
            </li>
			<li><a id="miasto" onclick=$("#menu-close").click();>Wybierz miasto</a></li>
            <li>
                <a href="/index.html#aboutus" onclick=$("#menu-close").click();>O nas</a>
            </li>
			<li>
				</br></br>
				<img style="display: block; margin: 0 auto;" class="logo" src="logo200x200.png">
			</li>
        </ul>
    </nav>

    <!-- Zawartość Strony -->
    <div class="container">
        

        <!-- Nagłówek Strony -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">GABINETY WETERYNARYJNE
                    <!--<small>Secondary Text</small> --->
                </h1>
            </div>
        </div>
        <!-- /.row -->
		<div id="zmiana">
        <?php
        while ($row = $result->fetch_assoc()) {
            
         echo '<div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="'. $row["img"] .'" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>'. $row["name"] .'</h3>
                <h4>Gabinet weterynaryjny</h4>

				<div class="info">
				<p><h6><b>ADRES :</b></h6>
                '. $row["street"].'</br>
				'. $row["post_code"] . $row["city"] .'</br>
				<h6><b>TEL: '. $row["phone_number"] .'</b></h6>
				<h6><b>E-MAIL: ' . $row["email"] . '</b></h6>
				<h6><b>GODZINY OTWARCIA :</b></h6>'
				. $row["open"] .
				'<h6><b>STRONA WWW : ' . $row["website"] . '</b></h6>
				
				</div>
				<div class="info">
				
				<h6><b>DODATKOWE INFORMACJE :</b></h6>
				'. $row["description"] .'</br>
<a href="'. $row["fb"] .'"><img src="' . $row["fb1"] . '" alt="facebook" /></a>
				<a class="btn btn-primary" id="'.$row["btn"].'">Gdzie Jesteśmy<span class="glyphicon glyphicon-chevron-right"></span></a>
				</p>
				
				</div>
				<div class="fb">
				
				</div>
			
				</div>
        </div>
          <hr>';
    
    
    
}
            ?>
            <button type="button" onclick="window.location.href='/formshops.php'" class="btn btn-primary btn-block">Dodaj swój gabinet!</button>
	</div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script>
$("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Otwarcie Bocznego Menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Przesuwanie strony do wybranego elementu
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });</script>
<a href="/" class="navbar-brand"> NET PET </a> <button class="navbar-toggle"
      data-toggle="collapse" data-target=".navHeaderCollapse"></button>

      <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="http://zs6sobieski.pl">Strona szkoły</a></li>

          <li><a href="/#aboutus">Kontakt</a></li>

          <li class="dropdown">
            <a href="/#aboutus" class="dropdown-toggle" data-toggle="dropdown">O nas</a>

            
        </ul>
      </div>
    </div>

		<!-- The Modal vetka-->
<div id="modalvetka" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var vetka = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.7372047575045!2d18.589517515869666!3d49.941272131802535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471153698ee9330f%3A0xa5d2c4308166d52f!2sVetka+s.c.+Klinika+weterynaryjna.+Mucha+A.%2C+Szopa+M.!5e0!3m2!1spl!2spl!4v1477321818267" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(vetka)</script>
	  </div>
    </div>
  </div>

</div>
<!-- The Modal limavet-->
<div id="modallimavet" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var limavet = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.301830346144!2d18.570710615869903!3d49.949440331218284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47115374d7cb3595%3A0xa9729c1d412f156!2sLima+Vet!5e0!3m2!1spl!2spl!4v1477321851655" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(limavet)</script>
	  </div>
    </div>
  </div>

</div>
<!-- The Modal wet1-->
<div id="modalwet1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var wet1 = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.3275176162924!2d18.60420941586998!3d49.948958431252734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711533eb716f14f%3A0xaa31cd4c7a275d55!2sArki+Bo%C5%BCka+3%2C+44-335+Jastrz%C4%99bie-Zdr%C3%B3j!5e0!3m2!1spl!2spl!4v1477321906348" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(wet1)</script>
	  </div>
    </div>
  </div>

</div>
<!-- The Modal primaanimalia-->
<div id="modalprimaanimalia" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var primaanimalia = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.399850372812!2d18.59638031586984!3d49.94760143134983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471153156213cf4d%3A0x54b9153c5de92773!2sPrzychodnia+Weterynaryjna+Prima+Animalia+Natalia+Fonrobert!5e0!3m2!1spl!2spl!4v1477321955568" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(primaanimalia)</script>
	  </div>
    </div>
  </div>

</div>
<!-- The Modal triovet-->
<div id="modaltriovet" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var triovet = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2568.562333819761!2d18.592073215869256!3d49.925788932910116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471153589ba2fe9d%3A0x66828b7b054e06d9!2sTriovet.+Przychodnia+weterynaryjna!5e0!3m2!1spl!2spl!4v1477322000938" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(triovet)</script>
	  </div>
    </div>
  </div>
<!-- The Modal wybormiasta-->
<div id="modalmiasto" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var wybormiasta = "Funkcja jeszcze niedostępna";
	  document.write(wybormiasta)</script>
	  </div>
    </div>
  </div>

</div>
	<!-- Modal JS -->
	<script src="js/modal.js"></script>
	</body>

</html>
