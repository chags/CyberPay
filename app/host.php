<?php
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