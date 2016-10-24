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

$result = $mysqli->query("SELECT * FROM zooshops WHERE type='sklep' ");
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

    <title>Net-Pet - Sklepy zoologiczne</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
	
    <!-- Dodatkowy CSS -->
    <link href="/css/1-col-portfolio.css" rel="stylesheet">
	<link href="/css/round-about.css" rel="stylesheet">
     <link href="/css/stylish-portfolio.css" rel="stylesheet">
    <link href="/css/full-slider.css" rel="stylesheet">
	<link href="css/modal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="zmiana.js"></script>

    <!-- Dodatkowe Czcionki -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<!-- Modal CSS -->
	<link href="css/modal.css" rel="stylesheet">
	
	
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
    
  

    <!-- Zawartość strony -->
    <div class="container">
        

        <!-- Nagłówek strony -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">SKLEPY ZOOLOGICZNE
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
                <h4>Sklep zoologiczny</h4>

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
				<a class="btn btn-primary"  id="'.$row["btn"].'">Gdzie Jesteśmy<span class="glyphicon glyphicon-chevron-right"></span></a>
				</p>
				
				</div>
				<div class="fb">
				
				</div>
			
				</div>
        </div>
          <hr>';
    
    
    
}
        
        ?>
<button type="button" onclick="window.location.href='/formshops.php'" class="btn btn-primary btn-block">Dodaj swój sklep!</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
          <form action="saveshops.php" method="post">
              <select name="type">
  <option value="sklep">Sklep zoologiczny</option>
  <option value="weterynarz">Gabinet weterynaryjny</option>
  <option value="groomer">Salon groomerski</option>
  
</select>
       Nazwa<br>
          <input name="name" type="text"><br>
        E-mail<br>
        <input name="email" type="text"><br>
      Strona internetowa<br>
        <input name="website" type="text"><br>
      Ulica, kod pocztowy i miasto<br>
      <input name="street" type="text">
  
    <input class="post_code" name="post_code" type="text">
            
            <input name="city" type="text"><br>
        Numer telefonu<br>
        <input name="phone_number" type="text"><br>
    Opis<br>
    <input class="describe" name="description" type="text"><br>
              <input type="submit" value="wyslij">
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
      </div>
    </div>

  </div>
</div>

        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
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
    });
</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
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

	<!-- The Modal zoolus-->
<div id="modalzoolus" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var zoolus = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.224858065342!2d18.60304021586997!3d49.95088433111481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711533c323140dd%3A0xbb6ee59f00e75247!2sHarcerska+1D%2C+44-335+Jastrz%C4%99bie-Zdr%C3%B3j!5e0!3m2!1spl!2spl!4v1477321142663" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(zoolus)</script>
	  </div>
    </div>
  </div>

</div>
<!-- The Modal animals2-->
<div id="modalanimals2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var animals2 = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.3165529747394!2d18.60355511586992!3d49.94916413123806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711533ebd09743d%3A0xed3ca11ad7fcef3e!2sAnimals+s.c.+FHU.+Sklep+zoologiczny.+Piernikarczyk+J.L.!5e0!3m2!1spl!2spl!4v1477321245574" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(animals2);</script>
	  </div>
    </div>
  </div>

</div>
<!-- The Modal fourpet-->
<div id="modalfourpet" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var fourpet = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.3112652402842!2d18.592263866890182!3d49.94926333051071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471153148abbb26d%3A0xea1b106ea076edc8!2zQWxlamEgSsOzemVmYSBQacWCc3Vkc2tpZWdvIDJhLCBKYXN0cnrEmWJpZS1aZHLDs2o!5e0!3m2!1spl!2spl!4v1477321337366" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(fourpet)</script>
	  </div>
    </div>
  </div>

</div>
<!-- The Modal sumatra-->
<div id="modalsumatra" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var sumatra = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.327837440052!2d18.570297215869992!3d49.94895243125315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47115374df1011cd%3A0x8bc16a764982dca7!2s1+Maja+15%2C+Jastrz%C4%99bie-Zdr%C3%B3j!5e0!3m2!1spl!2spl!4v1477321407141" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(sumatra)</script>
	  </div>
    </div>
  </div>

</div>
<!-- The Modal animals-->
<div id="modalanimals" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var animals = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.4466020463246!2d18.596789315869803!3d49.94672433141245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711533fe591962f%3A0xa690a14367b6a0ae!2sMazowiecka+24%2C+Jastrz%C4%99bie-Zdr%C3%B3j!5e0!3m2!1spl!2spl!4v1477321634036" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(animals)</script>
	  </div>
    </div>
  </div>

</div>
<!-- The Modal zoopupil-->
<div id="modalzoopupil" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var zoopupil = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.827975362679!2d18.59174251586967!3d49.93956903192443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471153426c045e11%3A0xbb0de67a628a750c!2zUG9kaGFsYcWEc2thIDI2LCBKYXN0cnrEmWJpZS1aZHLDs2o!5e0!3m2!1spl!2spl!4v1477321697688" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(zoopupil);</script>
	  </div>
	</div>
	</div>
</div>
<!-- The Modal akwarystyka-->
<div id="modalakwarystyka" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var akwarystyka = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.351504320059!2d18.576982315869884!3d49.94850843128492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47115373291c6639%3A0xcf26ab5dc0211d7c!2s11+Listopada+10%2C+Jastrz%C4%99bie-Zdr%C3%B3j!5e0!3m2!1spl!2spl!4v1477321736359" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(akwarystyka);</script>
	  </div>
	</div>
	</div>
</div>
<!-- The Modal pologar-->
<div id="modalpologar" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-body">
      <div class="modaldiv">
	  <script> var pologar = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2567.097381132534!2d18.60126671587001!3d49.95327573094374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711533d79dd5df1%3A0x2cf2cbb2a234a525!2sPologar.+FHU!5e0!3m2!1spl!2spl!4v1477321769666" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>';
	  document.write(pologar);</script>
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