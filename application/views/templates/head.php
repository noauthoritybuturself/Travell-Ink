<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>TravelInk | <?php echo $title;?></title>
  <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
  <meta content="utf-8" http-equiv="encoding">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="description" content="Travelink" />
  <meta name="keywords" content="" />
	<link rel="shortcut icon" href=''>

  <!--JQUERY-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/flick/jquery-ui.css" />




  <!---BOOTSTRAP-->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  
  <!--MY CSS/JAVASCRIPT-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>statics/css/style.css"/>
	<script type="text/javascript" src="<?php echo base_url(); ?>statics/js/scripts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>statics/js/jquery.browser.min.js"></script>


  <?php 
foreach($output->css_files as $file): ?>
  <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($output->js_files as $file): ?>
  <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>


  <!-- Google Place library -->
<script src="//maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>

<!-- Geocomplete plugin -->
<script src="//cdn.jsdelivr.net/jquery.geocomplete/1.6.4/jquery.geocomplete.min.js"></script>










</head>
<body>
