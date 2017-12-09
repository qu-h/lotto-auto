<?php
/* Smarty version 3.1.28-dev/73, created on 2017-07-28 14:56:30
  from "D:\WWW\QuanNH\CodeIgniter\modules\layouts\views\Login_layout.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_597aee2e1dabf8_49342580',
  'file_dependency' => 
  array (
    '33d57f20a2418bfdc9cf2545812adf9dcadd4228' => 
    array (
      0 => 'D:\\WWW\\QuanNH\\CodeIgniter\\modules\\layouts\\views\\Login_layout.php',
      1 => 1496476774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597aee2e1dabf8_49342580 ($_smarty_tpl) {
if (!is_callable('smarty_function_assets')) require_once 'D:\\WWW\\QuanNH\\CodeIgniter\\system\\third_party\\Smarty_3\\ci\\function.assets.php';
?>
<!DOCTYPE html>
<html lang="en-us" id="extr-page" >
<head>
    <meta charset="utf-8">
	<title> </title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="icon" type="image/png" href="">
        <?php 
         /*
            <?php if (config_item('site_appleicon') != '') : ?>
            <link rel="apple-touch-icon" href="<?=base_url()?>resource/images/<?=config_item('site_appleicon')?>" />
            <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url()?>resource/images/<?=config_item('site_appleicon')?>" />
            <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>resource/images/<?=config_item('site_appleicon')?>" />
            <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url()?>resource/images/<?=config_item('site_appleicon')?>" />
            <?php endif; ?>

            <title><?php echo $template['title'];?></title>
            <meta name="description" content="<?=config_item('site_desc')?>" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="<?=base_url()?>resource/css/app.css" type="text/css" />
            <link rel="stylesheet" href="<?=base_url()?>resource/css/login.css" type="text/css" cache="false" />




            <!--[if lt IE 9]>
            <script src="js/ie/html5shiv.js" cache="false">
            </script>
            <script src="js/ie/respond.min.js" cache="false">
            </script>
            <script src="js/ie/excanvas.js" cache="false">
            </script> <![endif]-->
         */

        ?>
        <?php echo smarty_function_assets(array('type'=>'css'),$_smarty_tpl);?>

        <?php echo smarty_function_assets(array('type'=>'js'),$_smarty_tpl);?>


        <meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
</head>
<body class="animated fadeInDown" >
     <?php echo $_smarty_tpl->tpl_vars['_body']->value;?>

</body>
</html><?php }
}
