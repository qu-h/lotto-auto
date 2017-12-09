<?php
/* Smarty version 3.1.28-dev/73, created on 2017-11-23 15:07:45
  from "/media/quanict/WWW/QuanNH/GiaiPhapICT/views/layouts/mnabi.htm" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_5a1681d16e24d0_75415773',
  'file_dependency' => 
  array (
    '9001af7cb03438a588891feaede4c0fdc37aa551' => 
    array (
      0 => '/media/quanict/WWW/QuanNH/GiaiPhapICT/views/layouts/mnabi.htm',
      1 => 1500497231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../blocks/slide-show.html' => 1,
    'file:../blocks/information.html' => 1,
    'file:../blocks/skills.html' => 1,
    'file:../blocks/experience.html' => 1,
    'file:../blocks/programming-language.html' => 1,
    'file:../blocks/contact.html' => 1,
  ),
),false)) {
function content_5a1681d16e24d0_75415773 ($_smarty_tpl) {
if (!is_callable('smarty_function_lang')) require_once '/media/quanict/WWW/QuanNH/CodeIgniter/system/third_party/Smarty_3/ci/function.lang.php';
if (!is_callable('smarty_function_assets')) require_once '/media/quanict/WWW/QuanNH/CodeIgniter/system/third_party/Smarty_3/ci/function.assets.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/media/quanict/WWW/QuanNH/CodeIgniter/system/third_party/Smarty_3/plugins/modifier.date_format.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 - <?php echo smarty_function_lang(array('txt'=>"Web Development"),$_smarty_tpl);?>
 / <?php echo smarty_function_lang(array('txt'=>"Software Development"),$_smarty_tpl);?>
 / <?php echo smarty_function_lang(array('txt'=>"Mobile Development"),$_smarty_tpl);?>
" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Web Site Title -->
<title><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 - CV / Resume / Portfolio</title>
<?php echo smarty_function_assets(array('type'=>'css'),$_smarty_tpl);?>

<?php echo smarty_function_assets(array('type'=>'js'),$_smarty_tpl);?>


</head>
<body>
<div id="home"></div>
	
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, 'file:../blocks/slide-show.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<nav class="navigation-area stickyNav">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="brand-logo"><a class="" href="index.html"><img src="assets/img/logo.png" alt="logo"></a></div>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav ">
				
				<li class="smooth-scroll active"><a href="#About"><?php echo smarty_function_lang(array('txt'=>"About Me"),$_smarty_tpl);?>
 <span class="sr-only">(current)</span> </a></li>
				<?php if (isset($_smarty_tpl->tpl_vars['skills']->value) && count($_smarty_tpl->tpl_vars['skills']->value) > 0) {?>
				<li class="smooth-scroll"><a href="#skills"><?php echo smarty_function_lang(array('txt'=>"Skills"),$_smarty_tpl);?>
</a></li>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['opensources']->value)) {?>
				<li class="smooth-scroll"><a href="#experience"><?php echo smarty_function_lang(array('txt'=>"Experience"),$_smarty_tpl);?>
</a></li>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['languages']->value)) {?>
				<li class="smooth-scroll"><a href="#languages"><?php echo smarty_function_lang(array('txt'=>"Languages"),$_smarty_tpl);?>
</a></li>
				<?php }?>
				<li class="smooth-scroll"><a href="#contact"><?php echo smarty_function_lang(array('txt'=>"Contact"),$_smarty_tpl);?>
</a></li>
			</ul>
		</div>
	</div>
</nav>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, 'file:../blocks/information.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['skills']->value) && count($_smarty_tpl->tpl_vars['skills']->value) > 0) {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, 'file:../blocks/skills.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>
	
<?php if (isset($_smarty_tpl->tpl_vars['opensources']->value) && count($_smarty_tpl->tpl_vars['opensources']->value) > 0) {?>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, 'file:../blocks/experience.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>	

	
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, 'file:../blocks/programming-language.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, 'file:../blocks/contact.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="ScrollToTop">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>

	<footer id="footer" class="wow fadeIn">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="footer-copyihgt">
						<?php echo smarty_function_lang(array('txt'=>"All rights reserved"),$_smarty_tpl);?>
 &copy; <?php echo smarty_modifier_date_format(time(),'%Y');?>
 <span>QuanICT</span>
					</div> 
				</div>
				<div class="col-sm-4">
					<div class="social-link text-right">
						<?php if (isset($_smarty_tpl->tpl_vars['skype']->value)) {?><a href="skype:<?php echo $_smarty_tpl->tpl_vars['skype']->value;?>
?chat" ><i class="fa fa-skype"></i></a><?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['facebook']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['facebook']->value;?>
" target="_blank"><i class="fa fa-facebook"></i></a><?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['twitter']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
" target="_blank"><i class="fa fa-twitter"></i></a><?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['linkedin']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['linkedin']->value;?>
" target="_blank"><i class="fa fa-linkedin"></i></a><?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['instagram']->value)) {?><a href="#"><i class="fa fa-instagram"></i></a><?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['github']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['github']->value;?>
" target="_blank"><i class="fa fa-github"></i></a><?php }?>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body><?php }
}
