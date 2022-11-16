<?php 
//This Config Does a Few Things
//1.) Redirects to SSL if HTTP.
//2.) Provides siteAbsolutePath (update when deployed or moved).
include_once('./includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
  include_once('./includes/googleAnalytics.php');
  ?>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The Official Game Masters Database. Easy as duck.">
  <meta name="author" content="Seth Timmons">
  <?php
  //display title
  echo '<title>'.$pageTitle.'</title>';
  ?>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#333333">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="theme-color" content="#232323">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
  <!-- Datatables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/> 
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
  <!-- Google Fonts CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu+Mono:ital@1&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
  <!-- The GMDB CSS -->
  <?php 
  //<link rel="stylesheet" type="text/css" href="./css/quackTools.css">
  echo '<link rel="stylesheet" type="text/css" href="'.$siteAbsolutePath.'/css/quackTools.css'.'">';
  ?>
</head>
<body class="bg-transparent">
  <!-- Top Nav Bar -->
    <?php 
    include_once('./includes/header.php');
    ?>

  <!-- Main Stage -->
  <div class="container">
    
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
      </ol>
    </nav>

    <div id="mainStage" class="py-5 mb-4 text-center text-white">
      <div class="container">
        <?php
        echo '<img src="'.$siteAbsolutePath.'/img/duck_only_large_outline_trans.png" class="img-fluid" alt="The GMDB Rubber Ducky Logo Large.">';
        ?>
        
        <h1><?php echo $pageHeading;?></h1>
        <p class="lead"><?php echo $pageTagline;?></p>
        <p>
          <?php
          echo '<a href="'.$siteAbsolutePath.'/DND" class="btn btn-primary btn-lg">DND Resources</a>';
          ?>
        </p>
      </div>
    </div>

    <!-- Footer -->
    <?php include_once('./includes/footer.php');?>

  </div>     

    <!-- Separate jQuery, Popper, Bootstrap, and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
      $('.dataTable').DataTable();
    } );
    </script>
  </body>
  </html>
  