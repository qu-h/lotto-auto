<?php
/* Smarty version 3.1.28-dev/73, created on 2017-07-28 19:23:06
  from "D:\WWW\QuanNH\CodeIgniter\modules\backend\views\Datatables.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_597b2caa8fe951_80749548',
  'file_dependency' => 
  array (
    'ffca529ccd14102b3d2147ba52132801e35bcff2' => 
    array (
      0 => 'D:\\WWW\\QuanNH\\CodeIgniter\\modules\\backend\\views\\Datatables.html',
      1 => 1496116814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597b2caa8fe951_80749548 ($_smarty_tpl) {
?>
<div class="row">
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<i class="fa fa-table fa-fw "></i> Table <span>> Data Tables </span>
		</h1>
	</div>
	

</div>
<section id="widget-grid" class="">
	<div class="row">

		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0"
				data-widget-editbutton="false">
				<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"

								-->

				<header>
					<span class="widget-icon"> <i class="fa fa-table"></i></span>
					<h2>Standard Data Tables</h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>

					<div class="widget-body no-padding">
						<?php if (isset($_smarty_tpl->tpl_vars['fields']->value)) {?>
						<table id="data_ajax" class="table table-striped table-bordered table-hover" width="100%" data-order='[[ 0, "desc" ]]' data-page-length='25'>
							<thead>
								<?php if (isset($_smarty_tpl->tpl_vars['columns_filter']->value) && $_smarty_tpl->tpl_vars['columns_filter']->value) {?>
								<tr>
								<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_th_0_saved_item = isset($_smarty_tpl->tpl_vars['th']) ? $_smarty_tpl->tpl_vars['th'] : false;
$_smarty_tpl->tpl_vars['th'] = new Smarty_Variable();
$__foreach_th_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_th_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['th']->value) {
$__foreach_th_0_saved_local_item = $_smarty_tpl->tpl_vars['th'];
?>

								<th class="hasinput" >
									<input type="text" class="form-control" placeholder="Filter Name" />
								</th>

								<?php
$_smarty_tpl->tpl_vars['th'] = $__foreach_th_0_saved_local_item;
}
}
if ($__foreach_th_0_saved_item) {
$_smarty_tpl->tpl_vars['th'] = $__foreach_th_0_saved_item;
}
?>

								</tr>
								<?php }?>
								<tr><?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_th_1_saved_item = isset($_smarty_tpl->tpl_vars['th']) ? $_smarty_tpl->tpl_vars['th'] : false;
$_smarty_tpl->tpl_vars['th'] = new Smarty_Variable();
$__foreach_th_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_th_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['th']->value) {
$__foreach_th_1_saved_local_item = $_smarty_tpl->tpl_vars['th'];
?>
									<th><?php echo $_smarty_tpl->tpl_vars['th']->value[0];?>
</th>
									<?php
$_smarty_tpl->tpl_vars['th'] = $__foreach_th_1_saved_local_item;
}
}
if ($__foreach_th_1_saved_item) {
$_smarty_tpl->tpl_vars['th'] = $__foreach_th_1_saved_item;
}
?>

									
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
						
						<?php echo '<script'; ?>
 type="text/javascript">
							tables.url = '<?php echo $_smarty_tpl->tpl_vars['data_json_url']->value;?>
';
							tables.columns = [<?php echo $_smarty_tpl->tpl_vars['columns_fields']->value;?>
];
							$(document).ready(function() {
								pageSetUp();
								tables.load('table#data_ajax');
							});
						<?php echo '</script'; ?>
>
						<?php }?>

					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->
		</article>
	</div>
</section><?php }
}
