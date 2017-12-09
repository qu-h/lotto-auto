<?php
/* Smarty version 3.1.28-dev/73, created on 2017-07-19 13:07:20
  from "D:\WWW\QuanNH\GiaiPhapICT\views\blocks\experience.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_596ef718d620c2_42774125',
  'file_dependency' => 
  array (
    '4206f2d08617abc69e845b36fd204edaf61fcaee' => 
    array (
      0 => 'D:\\WWW\\QuanNH\\GiaiPhapICT\\views\\blocks\\experience.html',
      1 => 1500444438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596ef718d620c2_42774125 ($_smarty_tpl) {
if (!is_callable('smarty_function_lang')) require_once 'D:\\WWW\\QuanNH\\CodeIgniter\\system\\third_party\\Smarty_3\\ci\\function.lang.php';
?>
<section id="experience" class="spacing">
		<div class="container">
			<h2 class="section-title text-center wow fadeInUp"><?php echo smarty_function_lang(array('txt'=>"Experience"),$_smarty_tpl);?>
</h2>
			<div class="divider divider-center wow fadeInUp"></div>
			<div class="portfoioArea">
				<div class="main-area wow fadeInUp">
					<div class="mixitup-control">
						<ul>
							<li class="filter" data-filter="all"><?php echo smarty_function_lang(array('txt'=>"All"),$_smarty_tpl);?>
</li>
							<?php
$_from = $_smarty_tpl->tpl_vars['opensources']->value['types'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_t_0_saved_item = isset($_smarty_tpl->tpl_vars['t']) ? $_smarty_tpl->tpl_vars['t'] : false;
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable();
$__foreach_t_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_t_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$__foreach_t_0_saved_local_item = $_smarty_tpl->tpl_vars['t'];
?>
							<li class="filter" data-filter=".<?php echo $_smarty_tpl->tpl_vars['t']->value->type;?>
"><?php echo smarty_function_lang(array('txt'=>$_smarty_tpl->tpl_vars['t']->value->type),$_smarty_tpl);?>
</li>
							<?php
$_smarty_tpl->tpl_vars['t'] = $__foreach_t_0_saved_local_item;
}
}
if ($__foreach_t_0_saved_item) {
$_smarty_tpl->tpl_vars['t'] = $__foreach_t_0_saved_item;
}
?>
						</ul>
					</div>
					<div id="Mixitup">
						<?php
$_from = $_smarty_tpl->tpl_vars['opensources']->value['apps'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_app_1_saved_item = isset($_smarty_tpl->tpl_vars['app']) ? $_smarty_tpl->tpl_vars['app'] : false;
$_smarty_tpl->tpl_vars['app'] = new Smarty_Variable();
$__foreach_app_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_app_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['app']->value) {
$__foreach_app_1_saved_local_item = $_smarty_tpl->tpl_vars['app'];
?>
						<div class="mix mixItUp-img <?php echo $_smarty_tpl->tpl_vars['app']->value->type;?>
" data-my-order="1" 
						<?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['app']->value->img_demo, $tmp) > 0) {?>style="background-image: url(/assets/<?php echo $_smarty_tpl->tpl_vars['app']->value->img_demo;?>
);"<?php }?> >
							<div class="mix-single-item">
								<a href="assets/img/<?php echo $_smarty_tpl->tpl_vars['app']->value->image;?>
" class="work-popup">
									<img src="assets/<?php echo $_smarty_tpl->tpl_vars['app']->value->image;?>
" alt="">
									<div class="mix-caption mix-caption-table">
										<div class="mix-caption-tcell">
											<i class="fa fa-plus"></i>
										</div>
									</div>
								</a>
							</div>
						</div>
						<?php
$_smarty_tpl->tpl_vars['app'] = $__foreach_app_1_saved_local_item;
}
}
if ($__foreach_app_1_saved_item) {
$_smarty_tpl->tpl_vars['app'] = $__foreach_app_1_saved_item;
}
?>
					</div>
				</div>
			</div>
		</div>
	</section><?php }
}
