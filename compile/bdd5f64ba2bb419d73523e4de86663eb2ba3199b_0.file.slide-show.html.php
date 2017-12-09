<?php
/* Smarty version 3.1.28-dev/73, created on 2017-11-03 02:15:46
  from "D:\WWW\QuanNH\GiaiPhapICT\views\blocks\slide-show.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_59fb6ee2571480_94217382',
  'file_dependency' => 
  array (
    'bdd5f64ba2bb419d73523e4de86663eb2ba3199b' => 
    array (
      0 => 'D:\\WWW\\QuanNH\\GiaiPhapICT\\views\\blocks\\slide-show.html',
      1 => 1509648645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fb6ee2571480_94217382 ($_smarty_tpl) {
if (!is_callable('smarty_function_lang')) require_once 'D:\\WWW\\QuanNH\\CodeIgniter\\system\\third_party\\Smarty_3\\ci\\function.lang.php';
?>

	

	<!-- 
		Header
	==================================== -->
	<header id="header" class="parallax-bg wow fadeIn">
		<div id="particles-js"></div>
		
		<div class="container">
			<div class="header_content">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						<div class="header-text">
							<h3><?php echo smarty_function_lang(array('txt'=>"Hi, I am"),$_smarty_tpl);?>
</h3>
							<h1><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h1>
							<div class="typing-title">
								<p><?php echo smarty_function_lang(array('txt'=>"Web Development"),$_smarty_tpl);?>
</p>
								<p><?php echo smarty_function_lang(array('txt'=>"Software Development"),$_smarty_tpl);?>
</p>
								<p><?php echo smarty_function_lang(array('txt'=>"Mobile Development"),$_smarty_tpl);?>
</p>
								<p><?php echo smarty_function_lang(array('txt'=>"Product Management"),$_smarty_tpl);?>
</p>
							</div>
							<p><span class="typed-title"></span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>


<!-- scripts -->
<?php echo '<script'; ?>
 src="<?php  echo git_assets("particles.js","particles.js",'2.0.0')?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php  echo git_assets("app.js","particles.js",'2.0.0')?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php  echo git_assets("lib/stats.js","particles.js",'2.0.0')?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
<?php echo '</script'; ?>
><?php }
}
