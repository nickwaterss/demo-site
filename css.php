<?php
  require_once './libs/smarty-5.4.0/libs/Smarty.class.php';
  use Smarty\Smarty;
  $smarty = new Smarty(); //create Smarty object
  //set template locations
  $smarty->setTemplateDir('./templates');
  $smarty->setConfigDir('./config');
  $smarty->setCompileDir('./compile');
  $smarty->setCacheDir('./cache');


  $smarty->assign('title', 'CSS');
  $smarty->display('header.tpl');
  $smarty->display('css-content.tpl');
  $smarty->display('footer.tpl');
?>