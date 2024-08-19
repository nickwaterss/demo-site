<?php
/* Smarty version 5.4.0, created on 2024-08-18 23:18:29
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66c28145415d65_36251481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45b3a87025394b03bac67e9ef8b7ce923222437b' => 
    array (
      0 => 'header.tpl',
      1 => 1724022698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c28145415d65_36251481 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\apache\\htdocs\\demo-site\\templates';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <title><?php echo $_smarty_tpl->getValue('title');?>
</title>
  </head>
  <body>
    <div id="page">
      <header>
        <nav>
          <a href="./index.php">Demo Site</a>
          <ul>
            <li><a href="./html.php" title="HTML">HTML</a></li>
            <li><a href="./css.php" title="CSS">CSS</a></li>
            <li><a href="./php.php" title="PHP">PHP</a></li>
          </nav>
          </ul>
      </header><?php }
}
