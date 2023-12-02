<?php
session_start();
  $template = new TEngine();
  $app = new Module();

  $user = $_SESSION;

if(isset($user['id_user']) == ""){
    header("location: " . $app->index() . "/login/access" . Helper::notification(false,"Acesso negado"));

}


  // <?php $template->css();
  // <?php $template->js();
  //<?php $template->component('sweetalert-notification');
   //<?php $template->component('nav');
   // <?php $template->invokeView(); 
  
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Camoree Gestor de camporis e eventos">
    <meta name="keywords" content="campori, camporee, gestor de campori, desbravadores campori">
    <meta name="author" content="in9host">
    <title>AER Tecnologia</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    
    
    <?php $template->css(); ?>
   

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php $template->component('nav'); ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php $template->component('sidebar'); ?>
 

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
     <?php $template->invokeView(); ?>

    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php $template->component('footer'); ?>
    <!-- END: Footer-->

    <?php $template->js(); ?>
    <?php $template->component('sweetalert-notification'); ?>
    <?php $template->component('scripts'); ?> 
</body>
<!-- END: Body-->

</html>