<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="icon" href="images/logo-final.png">
  <title>Wcoin</title>
  <meta name="description" content="">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="images/logo-final.png">
  <link rel="icon" href="images/logo-final.png" type="image/png">
  <link rel="shortcut icon" href="images/logo-final.png" type="image/x-icon">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/flexslider.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- MODERNIZR -->
  <script src="js/modernizr.js"></script>

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>

  <!--  Loader -->
  <div id="loader">
    <div class="wrapper">
      <div class="cssload-loader"></div>
    </div>
  </div>
  <!--  Loader End -->

  <!-- header navigation -->
  <header id="navigation">
  
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-inverse navbar-static-top marginBottom-0" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a class="navbar-brand" href="http://wcoins.com/wcoin/">
                 <img src="images/logo-final.png" alt="Logo" class="main-nav-logo">
              </a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://wcoins.com/">Home</a></li>
                    <li class="dropdown hoves"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                       <!-- <ul class="dropdown-menu">
                            <li><a href="about.php">About</a></li>
                            <li><a href="about.php">Introduction</a></li>
                            <li><a href="our-story.php">Our Story</a></li>
                            <li><a href="management.php">Management</a></li>
                            <li><a href="Opportunity.php">Our Opportunity</a></li>
                            <li><a href="comFAQs.php">FAQs</a></li>
                            <li><a href="contactus.php">Contact Us</a></li>
                        </ul> -->
                    </li>
                    <li><a href="http://wcoins.com/wcoin/goldbase.php">Goldbase<b class="caret"></b></a>
                       <!-- <ul class="dropdown-menu">
                            <li><a href="CommProfitPotential.php">CommProfitPotential</a></li>
                            <li><a href="CommRiskWarning.php">Risk Warning</a></li>
                            <li><a href="CommPresentation.php">Presentation</a></li>
                            <li><a href="background-history.php">Background History</a></li>
                            <li><a href="commodities-overview.php">Overview</a></li>
                            <li><a href="CommWhyTradeFX.php">Why Trade Gold?</a></li>
                        </ul> -->
                    </li>
                    <li class="dropdown hoves"><a href="Opportunity.php" class="dropdown-toggle" data-toggle="dropdown">Opportunity<b class="caret"></b></a>
                        <!--<ul class="dropdown-menu">
                            <li><a href="WhyAGCX.php">WhyAGCX</a></li>
                            <li><a href="WhyReferralCommission.php">Why Referral Commission</a></li>
                            <li><a href="SystemToSuccess.php">System to Success</a></li>
                            <li><a href="RewardsAndBonus.php">Rewards & Bonus</a></li>
                            <li><a href="IncomeCalculator.php">Income Calculator</a></li>
                           
                        </ul>-->
                    </li>
                    <li><a href="http://wcoins.com/wcoin/buy-world-coin.php">Buy World Coin<b class="caret"></b></a>
                        <!--<ul class="dropdown-menu">
                            <li><a href="commodities.php">Commodities Basics</a></li>
                            <li><a href="WhyReferralCommission.php">Why Referral Commission</a></li>
                            <li><a href="CommVsStocks.php">Commodities vs. Stocks</a></li>
                        </ul> -->
                    </li>
                    <li><a href="http://wcoins.com/wcoin/news-latest.php">Latest News</a></li>
                    <li><a href="http://wcoins.com/wcoin/contactus.php">Contact Us</a></li>
                    <li>
                      <div class="my-account-wrap">            
                        <div>
                          <span class="menu-signin"><a href="http://wcoins.com/backoffice/">Sign In</a></span><span class="menu-register"><a href="http://wcoins.com/backoffice/register/user_register">Register</a></span>                          
                        </div>          
                      </div>
                    </li>                
                </ul>               
            </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
  </header>
  <!-- header navigation end -->
  <script>
$('#dropdown').hover(function() {
  $(this).AddClass('open');
})
</script>
<script>
(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
</script>