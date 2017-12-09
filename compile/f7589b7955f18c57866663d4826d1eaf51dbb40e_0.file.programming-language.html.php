<?php
/* Smarty version 3.1.28-dev/73, created on 2017-11-23 15:07:45
  from "/media/quanict/WWW/QuanNH/GiaiPhapICT/views/blocks/programming-language.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_5a1681d1c86498_89565486',
  'file_dependency' => 
  array (
    'f7589b7955f18c57866663d4826d1eaf51dbb40e' => 
    array (
      0 => '/media/quanict/WWW/QuanNH/GiaiPhapICT/views/blocks/programming-language.html',
      1 => 1500140498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1681d1c86498_89565486 ($_smarty_tpl) {
if (!is_callable('smarty_function_lang')) require_once '/media/quanict/WWW/QuanNH/CodeIgniter/system/third_party/Smarty_3/ci/function.lang.php';
?>
<section id="languages" class="spacing overlay_bg wow fadeInUp">
		<div class="container">
			<div class="section-title text-center">
				<h2><?php echo smarty_function_lang(array('txt'=>"Programming Language"),$_smarty_tpl);?>
</h2>
				<div class="divider divider-center"></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="partner-slider" class="PSItem text-center owl-carousel owl-theme">
						<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_l_0_saved_item = isset($_smarty_tpl->tpl_vars['l']) ? $_smarty_tpl->tpl_vars['l'] : false;
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable();
$__foreach_l_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_l_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$__foreach_l_0_saved_local_item = $_smarty_tpl->tpl_vars['l'];
?>
							<div class="item"><img src="assets/<?php echo $_smarty_tpl->tpl_vars['l']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['l']->value->name;?>
"></div>
						<?php
$_smarty_tpl->tpl_vars['l'] = $__foreach_l_0_saved_local_item;
}
}
if ($__foreach_l_0_saved_item) {
$_smarty_tpl->tpl_vars['l'] = $__foreach_l_0_saved_item;
}
?>
					</div>
				</div>
			</div>
		</div>
	</section><?php }
}
