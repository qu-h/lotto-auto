<?php
/* Smarty version 3.1.28-dev/73, created on 2017-12-09 15:53:58
  from "/media/quanict/WWW/QuanNH/Trung-lotto/views/coupbal.htm" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_5a2ba4a6c71896_46100178',
  'file_dependency' => 
  array (
    'e0c3e21945d2b4d948caec82e0ed38600f62cafb' => 
    array (
      0 => '/media/quanict/WWW/QuanNH/Trung-lotto/views/coupbal.htm',
      1 => 1512809635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2ba4a6c71896_46100178 ($_smarty_tpl) {
?>
<div class="bs-example" data-example-id="simple-panel"> <div class="panel panel-default">
	<div class="panel-body"><h1>Lotto-Hoang Chung</div> </div> </div>

<form action="" method="POST" >
	<div class="row" style="margin-top: 15px; "><div class="col-6">
		<div class="form-group">
			<label for="tong">Tổng</label>
			<input type="text" class="form-control" id="tong" aria-describedby="" placeholder="Enter Total" name="number" value="<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
">
			<small id="tongHelp" class="form-text text-muted">Nhap vao tong</small>
		</div>
		<button type="submit" class="btn btn-primary">TẠO DÀN</button>
	</div></div>
</form>

<?php if (isset($_smarty_tpl->tpl_vars['color'])) {$_smarty_tpl->tpl_vars['color'] = clone $_smarty_tpl->tpl_vars['color'];
$_smarty_tpl->tpl_vars['color']->value = explode(',',"danger,primary,success,info,warning"); $_smarty_tpl->tpl_vars['color']->nocache = null; $_smarty_tpl->tpl_vars['color']->scope = 0;
} else $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable(explode(',',"danger,primary,success,info,warning"), null, 0);?>
<div class="row" style="margin-top: 15px; ">
	<div class="col">
	<div class="form-group">
		<label for="exampleTextarea">Kết quả Chạm <?php if (count($_smarty_tpl->tpl_vars['totalCal']->value) > 0) {?><i>(<?php echo count($_smarty_tpl->tpl_vars['totalCal']->value);?>
 Kết quả)</i><?php }?></label>
		<?php if (count($_smarty_tpl->tpl_vars['totalCal']->value) > 0) {?>
			<ol>
				<?php
$_from = $_smarty_tpl->tpl_vars['totalCal']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_aa_0_saved_item = isset($_smarty_tpl->tpl_vars['aa']) ? $_smarty_tpl->tpl_vars['aa'] : false;
$__foreach_aa_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['aa'] = new Smarty_Variable();
$__foreach_aa_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_aa_0_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['aa']->value) {
$__foreach_aa_0_saved_local_item = $_smarty_tpl->tpl_vars['aa'];
?>
				<li>
					<?php
$_from = explode(",",$_smarty_tpl->tpl_vars['aa']->value);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_a_1_saved_item = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a'] : false;
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable();
$__foreach_a_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_a_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$__foreach_a_1_saved_local_item = $_smarty_tpl->tpl_vars['a'];
?>
						<span class="btn btn-<?php echo $_smarty_tpl->tpl_vars['color']->value[$_smarty_tpl->tpl_vars['k']->value%count($_smarty_tpl->tpl_vars['color']->value)];?>
 btn-sm"><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</span>
					<?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_1_saved_local_item;
}
}
if ($__foreach_a_1_saved_item) {
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_1_saved_item;
}
?>
				</li>
				<?php
$_smarty_tpl->tpl_vars['aa'] = $__foreach_aa_0_saved_local_item;
}
}
if ($__foreach_aa_0_saved_item) {
$_smarty_tpl->tpl_vars['aa'] = $__foreach_aa_0_saved_item;
}
if ($__foreach_aa_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_aa_0_saved_key;
}
?>
			</ol>
		<?php }?>
		<textarea class="form-control" rows="5"><?php if (count($_smarty_tpl->tpl_vars['totalCal']->value) > 0) {
$_from = $_smarty_tpl->tpl_vars['totalCal']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_aa_2_saved_item = isset($_smarty_tpl->tpl_vars['aa']) ? $_smarty_tpl->tpl_vars['aa'] : false;
$_smarty_tpl->tpl_vars['aa'] = new Smarty_Variable();
$__foreach_aa_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_aa_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['aa']->value) {
$__foreach_aa_2_saved_local_item = $_smarty_tpl->tpl_vars['aa'];
echo $_smarty_tpl->tpl_vars['aa']->value;?>
&#13;<?php
$_smarty_tpl->tpl_vars['aa'] = $__foreach_aa_2_saved_local_item;
}
}
if ($__foreach_aa_2_saved_item) {
$_smarty_tpl->tpl_vars['aa'] = $__foreach_aa_2_saved_item;
}
}?></textarea>
	</div>
	<div class="form-group">
		<label for="exampleTextarea">Kết quả Tổng <?php if (count($_smarty_tpl->tpl_vars['chamCal']->value) > 0) {?><i>(<?php echo count($_smarty_tpl->tpl_vars['chamCal']->value);?>
 Kết quả)</i><?php }?></label>
		<?php if (count($_smarty_tpl->tpl_vars['chamCal']->value) > 0) {?>
			<ol>
				<?php
$_from = $_smarty_tpl->tpl_vars['chamCal']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_aa_3_saved_item = isset($_smarty_tpl->tpl_vars['aa']) ? $_smarty_tpl->tpl_vars['aa'] : false;
$__foreach_aa_3_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['aa'] = new Smarty_Variable();
$__foreach_aa_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_aa_3_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['aa']->value) {
$__foreach_aa_3_saved_local_item = $_smarty_tpl->tpl_vars['aa'];
?>
				<li>
					<?php
$_from = explode(",",$_smarty_tpl->tpl_vars['aa']->value);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_a_4_saved_item = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a'] : false;
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable();
$__foreach_a_4_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_a_4_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$__foreach_a_4_saved_local_item = $_smarty_tpl->tpl_vars['a'];
?>
						<span class="btn btn-<?php echo $_smarty_tpl->tpl_vars['color']->value[$_smarty_tpl->tpl_vars['k']->value%count($_smarty_tpl->tpl_vars['color']->value)];?>
 btn-sm"><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</span>
					<?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_4_saved_local_item;
}
}
if ($__foreach_a_4_saved_item) {
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_4_saved_item;
}
?>
				</li>
				<?php
$_smarty_tpl->tpl_vars['aa'] = $__foreach_aa_3_saved_local_item;
}
}
if ($__foreach_aa_3_saved_item) {
$_smarty_tpl->tpl_vars['aa'] = $__foreach_aa_3_saved_item;
}
if ($__foreach_aa_3_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_aa_3_saved_key;
}
?>
			</ol>
		<?php }?>
		<textarea class="form-control" rows="5"><?php if (count($_smarty_tpl->tpl_vars['chamCal']->value) > 0) {
$_from = $_smarty_tpl->tpl_vars['chamCal']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_b_5_saved_item = isset($_smarty_tpl->tpl_vars['b']) ? $_smarty_tpl->tpl_vars['b'] : false;
$_smarty_tpl->tpl_vars['b'] = new Smarty_Variable();
$__foreach_b_5_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_b_5_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$__foreach_b_5_saved_local_item = $_smarty_tpl->tpl_vars['b'];
echo $_smarty_tpl->tpl_vars['b']->value;?>
&#13;<?php
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_5_saved_local_item;
}
}
if ($__foreach_b_5_saved_item) {
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_5_saved_item;
}
}?></textarea>
	</div>
	</div>
</div><?php }
}
