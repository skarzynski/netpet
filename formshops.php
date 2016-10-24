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
  
  
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Katarzyna Rusek, Szymon Skarzyński, Kamil Langer, Maciej Ryś, Michał Henicz">

    <title>Net-Pet - formularz dodawania</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/1-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="zmiana.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/round-about.css" rel="stylesheet">
     <link href="/css/stylish-portfolio.css" rel="stylesheet">
    <link href="/css/full-slider.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>

     <!-- Navigation -->
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
                <a href="/#aboutus" onclick=$("#menu-close").click();>O nas</a>
            </li>
        </ul>
    </nav>
    
  

    <!-- Page Content -->
    <div class="container">
        

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">WYPEŁNIJ FORMULARZ
                    <!--<small>Secondary Text</small> --->
                </h1>
            </div>
        </div>
        <form method="post" action="saveshops.php">
        
        <div class="form-group">
  <label for="usr">Pełna nazwa sklepu</label>
  <input type="text" class="form-control" id="usr" placeholder="np. Sklep zoologiczny Smaczna Karma" name="name">
</div>
<div class="form-group">
  <label for="pwd">E-mail kontaktowy</label>
  <input type="email" class="form-control" id="pwd" placeholder="np. jan.kowalski@domena.pl" name="email">
</div>
            <div class="form-group">
  <label for="pwd">Ulica</label>
  <input type="text" class="form-control" id="pwd" placeholder="np. ul. Jana Matejki 81" name="street">
</div>
            <div class="form-group">
  <label for="pwd">Kod pocztowy</label>
  <input type="text" class="form-control" id="pwd" placeholder="np. 44-335" name="post_code">
</div>
            <div class="form-group">
  <label for="pwd">Miasto</label>
  <input type="text" class="form-control" id="pwd" placeholder="np. Szczecin" name="city">
</div>
            <div class="form-group">
  <label for="pwd">Numer telefonu</label>
  <input type="text" class="form-control" id="pwd" placeholder="np. 666000333" name="phone_number">
</div>
<div class="form-group">
  <label for="pwd">Strona internetowa</label>
  <input type="text" class="form-control" id="pwd" placeholder="np. www.domena.com.pl" name="website">
</div>
<div class="form-group">
  <label for="pwd">Profil Facebook</label>
  <input type="text" class="form-control" id="pwd" placeholder="Link wskazujący na profil Facebook" name="facebook">
</div>
<div class="form-group">
  <label for="sel1">Wybierz typ działalności</label>
  <select class="form-control" id="sel1" name="type">
    <option value="weterynarz">Zakład weterynaryjny</option>
    <option value="sklep">Sklep zoologiczny</option>
    <option value="groomer">Salon groomerski</option>
   
  </select>
</div>
<div class="form-group">
  <label for="comment">Krótki opis zakładu/oferowanych usług</label>
  <textarea class="form-control" rows="5" id="comment" placeholder="Krótki opis dotyczący działalaności, będzie on wyświetlany w wizytówce." name="description"></textarea>
</div>
<hr>
          <input type="submit" value="Wyślij formularz!" class="btn btn-primary btn-block">
            <br>

            
</form>
        

        
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
<script>
$("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
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
    </div>
</body>

</html>
