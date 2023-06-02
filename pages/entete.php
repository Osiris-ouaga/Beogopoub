<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BEOGOPOUB</title>
    <link rel="stylesheet"  href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
      <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
          width: 400px;
          height: 400px;
          margin: auto;
        }
      </style>
</head>
 <body>
      
      <div class="container">
          <marquee direction="left" scrollamount="10"> <h1> Bienvenue sur la plateforme BEOGOPOUB </h1> </marquee> 
        <br>
        <br>
              
              <!-- debut carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
      
            <div class="item active">
              <img src="../images/image_nature1.jpg" alt="Protégeons la planète" width="460" height="345">
              <div class="carousel-caption">
                <h3>Protégeons la planète</h3>
              </div>
            </div>
      
            <div class="item">
              <img src="../images/image_nature2.jpg" alt="Déchets" width="460" height="345">
              <div class="carousel-caption">
                <h3>Déchets</h3>
              </div>
            </div>
          
            <div class="item">
              <img src="../images/imageagentcollecte.jpg" alt="Agent de collecte" width="460" height="345">
              <div class="carousel-caption">
                <h3>Agent de collecte</h3>
              </div>
            </div>
             
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
             <!-- fin carousel -->

    <div class="jumbotron">

      <div class="row">
          <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#men0">Présentation</a></li>  
              <li><a data-toggle="tab" href="#men1">Contacts</a></li>
              <li class="nav navbar-nav navbar-right"> <a href="login.php">connecter-vous</a></li>
          </ul>

          <div class="tab-content">
              <div id="men0" class="tab-pane fade in active">
                   <?php include('textePresentation.php')?>
              </div>
              <div id="men1" class="tab-pane fade">
                   <?php include('..\texteContact.php')?>
              </div>
          </div>
      </div>

    </div>

</div>
  
  </body>
</html>