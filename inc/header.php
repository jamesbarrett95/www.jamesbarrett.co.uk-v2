<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!-- Buttons Library -->
    <link rel="stylesheet" href="./css/buttons.css">
    <!-- Jose Sans Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <!-- Main stylesheet -->
    <link rel="stylesheet" type="text/css" href="./css/stylesheet.css">
  </head>

  <body>
    <!--Navigation-->
    <nav class="navbar bg-faded navbar-fixed-top">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#about" data-target="#contact">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#work">Work</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#contact">Contact</a>
        </li>
      </ul>
    </nav>

    <!--Jumbotron/Header-->
    <div class="jumbotron jumbotron-fluid no-margin-bottom">
      <div class="container text-xs-center">
        <noscript>
            <div>
              <h2 class="white">In order to contact me you must have JavaScript enabled.
              <u><a class="contact-link white" href="http://www.enable-javascript.com" target="_blank">Instructions how
              to enable JavaScript in your web browser</a></u></h2>
            </div>
        </noscript>
          <?php
            if(isset($thankyou)) {
              echo "<h1 class='display-2 m-t-1 m-b-2 white'>Thank you!</h1>";
              echo "<p class='lead white'>You will be redirected shortly.</p>";
            } else { ?>
              <p class="lead white">Aspriring Full-Stack Developer</p>
              <h1 class="display-2 m-t-1 m-b-2 white">James Barrett</h1>
              <button class="contactBtn m-b-3" type="button" data-toggle="modal" data-target="#contact">Contact me here</button>
              <a href="#work"><i class="fa fa-2x fa-chevron-down" aria-hidden="true"></i></a>
            <?php } ?>
      </div>
    </div>
