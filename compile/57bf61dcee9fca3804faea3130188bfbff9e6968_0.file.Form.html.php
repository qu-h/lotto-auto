<?php
/* Smarty version 3.1.28-dev/73, created on 2017-07-28 19:37:08
  from "D:\WWW\QuanNH\CodeIgniter\modules\backend\views\Form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_597b2ff4d53706_11815992',
  'file_dependency' => 
  array (
    '57bf61dcee9fca3804faea3130188bfbff9e6968' => 
    array (
      0 => 'D:\\WWW\\QuanNH\\CodeIgniter\\modules\\backend\\views\\Form.html',
      1 => 1491559323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597b2ff4d53706_11815992 ($_smarty_tpl) {
echo smartadmin_ui::notification(array(),$_smarty_tpl);?>


<section id="widget-grid" class="">
	<div class="row">
		<article class="col-sm-12 col-md-12 col-lg-12">
			<div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
				
				<header>
					<span class="widget-icon"> <i class="fa fa-edit"></i></span>
					<h2>Form Grid </h2>
				</header>
				<div>
					<div class="jarviswidget-editbox"></div>
					<div class="widget-body ">
						<form action="" method="post" class="smart-form" >
							<fieldset>
							<?php if (isset($_smarty_tpl->tpl_vars['fields']->value) && count($_smarty_tpl->tpl_vars['fields']->value) > 0) {?>
								<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_field_0_saved_item = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field'] : false;
$__foreach_field_0_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable();
$__foreach_field_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_field_0_total) {
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$__foreach_field_0_saved_local_item = $_smarty_tpl->tpl_vars['field'];
?>
									<?php echo smartadmin_ui::inputs(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

								<?php
$_smarty_tpl->tpl_vars['field'] = $__foreach_field_0_saved_local_item;
}
}
if ($__foreach_field_0_saved_item) {
$_smarty_tpl->tpl_vars['field'] = $__foreach_field_0_saved_item;
}
if ($__foreach_field_0_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_field_0_saved_key;
}
?>
							<?php }?>
							</fieldset>
							<footer class="smart-form" >
								<button class="btn btn-primary" type="submit"> Submit Form </button>
							</footer>
						</form>
					</div>
				</div>
			</div>
		</article>
	</div>
</section><?php }
}
