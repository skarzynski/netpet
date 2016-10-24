<!DOCTYPE html>
<html lang="pl">

<head>
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
    
        <?php
$server = "localhost";
$user = "p491607_root";
$pass = "fvecrqcj";
  $mysqli = new mysqli($server, $user, $pass);

    $request = "SELECT * FROM `zooshops`";
$doreq = $mysqli->query($request);
$mysqli->select_db('p491607_netpet');
    $mysqli->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

$result = $mysqli->query("SELECT * FROM zooshops WHERE type='groomer' ");
if (!$result) {
    echo 'Nie można uruchomić zapytania: ' . $mysqli->error;
    exit;
} 
?>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Katarzyna Rusek, Szymon Skarzyński, Kamil Langer, Maciej Ryś, Michał Henicz">

    <title>NetPet - Salony groomerskie</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Dodatkowy CSS -->
    <link href="/css/1-col-portfolio.css" rel="stylesheet">
    
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/modal.css" rel="stylesheet">
    <!-- Dodatkowy CSS -->
    <link href="/css/round-about.css" rel="stylesheet">
     <link href="/css/stylish-portfolio.css" rel="stylesheet">
    <link href="/css/full-slider.css" rel="stylesheet">
    <!-- Dodatkowe Czcionki -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

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
            <li>
                <a href="/index.html#aboutus" onclick=$("#menu-close").click();>O nas</a>
            </li>
			<li><a id="miasto" onclick=$("#menu-close").click();>Wybierz miasto</a></li>
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
                <h1 class="page-header">GROOMERZY
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
                <h4>Salon pielęgnacji dla zwierząt</h4>

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
<button type="button" onclick="window.location.href='/formshops.php'" class="btn btn-primary btn-block">Dodaj swój salon!</button>
		</div>
      
	 -->
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
    // Otwarcie bocznego Menu
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
    });
</script>
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

	<!-- The Modal labus -->
<div id="modallabus" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var labus = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.4692795112737!2d18.594630316114873!3d49.94629887940893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711531552845ee7%3A0x5d28b107dee22e9e!2sSalon+piel%C4%99gnacji+dla+zwierz%C4%85t+Labu%C5%9B!5e0!3m2!1spl!2spl!4v1477264509749" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(labus)</script>
	  </div>
    </div>
  </div>

</div>	
<!-- The Modal pieskistyl -->
<div id="modalpieskistyl" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var pieskistyl = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.463517572835!2d18.551481916114902!3d49.946406979408984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471153113c6c85b9%3A0xe2acbbef86da7327!2sPieski+Styl!5e0!3m2!1spl!2spl!4v1477264560016" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(pieskistyl)</script>
	  </div>
    </div>
  </div>

</div>

	<!-- The Modal york -->
<div id="modalyork" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var york = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.7043278931483!2d18.5893863161149!3d49.941888979408546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711536a285584ef%3A0x44f7b6e41fac3651!2sSalon+York!5e0!3m2!1spl!2spl!4v1477264599963" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(york)</script>
	  </div>
    </div>
  </div>

</div>	
<!-- The Modal roxi -->
<div id="modalroxi" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var roxi = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.2558524907736!2d18.614765516114968!3d49.95030287940944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471153308454c143%3A0x41153c701a9aedbb!2sRoxi.+Salon+psiej+urody!5e0!3m2!1spl!2spl!4v1477264618970" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(roxi)</script>
	  </div>
    </div>
  </div>

</div>
<!-- The Modal pupil-->
<div id="modalpupil" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var pupil = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20538.0473906712!2d18.59944465469683!3d49.950301541015214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28806d5a3703950!2sSalon+Psiej+Urody%22PUPIL%22!5e0!3m2!1spl!2spl!4v1477264644148" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(pupil)</script>
	  </div>
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
	<script src="js/modal.js"></script>
	
	
	
</body>

</html>
