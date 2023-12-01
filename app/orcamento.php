<?php
session_start();
$user = $_SESSION;

if(isset($user['id_usuario']) == ""){
  header("location: " . $app->index() . "/login/acesso" . Helper::notification(false,"Acesso negado"));

}

  $template = new TEngine();
  $app = new Module();

  // <?php $template->css();
  // <?php $template->js();
  //<?php $template->component('sweetalert-notification');
   //<?php $template->component('nav');
   // <?php $template->invokeView(); 
  
?>
     <?php $template->invokeView(); ?>
     <?php $template->component('sweetalert-notification') ?>;