<?php
/* Smarty version 3.1.28-dev/73, created on 2017-07-19 13:00:51
  from "D:\WWW\QuanNH\GiaiPhapICT\views\blocks\skills.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_596ef593f1e312_45649547',
  'file_dependency' => 
  array (
    '53acba9e5c2bf6c735b3a187e43c1caf030be8a8' => 
    array (
      0 => 'D:\\WWW\\QuanNH\\GiaiPhapICT\\views\\blocks\\skills.html',
      1 => 1500146406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596ef593f1e312_45649547 ($_smarty_tpl) {
if (!is_callable('smarty_function_lang')) require_once 'D:\\WWW\\QuanNH\\CodeIgniter\\system\\third_party\\Smarty_3\\ci\\function.lang.php';
?>

	<section id="skills">
		<div class="container">
			<div class="experiacneArea">
				<h2 class="section-title fadeInUp wow"><?php echo smarty_function_lang(array('txt'=>"Skills"),$_smarty_tpl);?>
</h2>
				<div class="divider fadeInUp wow"></div>
				<div class="row">
					<?php if (isset($_smarty_tpl->tpl_vars["ColSkill"])) {$_smarty_tpl->tpl_vars["ColSkill"] = clone $_smarty_tpl->tpl_vars["ColSkill"];
$_smarty_tpl->tpl_vars["ColSkill"]->value = 12/count($_smarty_tpl->tpl_vars['skills']->value)-1; $_smarty_tpl->tpl_vars["ColSkill"]->nocache = null; $_smarty_tpl->tpl_vars["ColSkill"]->scope = 0;
} else $_smarty_tpl->tpl_vars["ColSkill"] = new Smarty_Variable(12/count($_smarty_tpl->tpl_vars['skills']->value)-1, null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars["ColSkillOffset"])) {$_smarty_tpl->tpl_vars["ColSkillOffset"] = clone $_smarty_tpl->tpl_vars["ColSkillOffset"];
$_smarty_tpl->tpl_vars["ColSkillOffset"]->value = 0; $_smarty_tpl->tpl_vars["ColSkillOffset"]->nocache = null; $_smarty_tpl->tpl_vars["ColSkillOffset"]->scope = 0;
} else $_smarty_tpl->tpl_vars["ColSkillOffset"] = new Smarty_Variable(0, null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars["SkillProgressDelay"])) {$_smarty_tpl->tpl_vars["SkillProgressDelay"] = clone $_smarty_tpl->tpl_vars["SkillProgressDelay"];
$_smarty_tpl->tpl_vars["SkillProgressDelay"]->value = 2; $_smarty_tpl->tpl_vars["SkillProgressDelay"]->nocache = null; $_smarty_tpl->tpl_vars["SkillProgressDelay"]->scope = 0;
} else $_smarty_tpl->tpl_vars["SkillProgressDelay"] = new Smarty_Variable(2, null, 0);?>

					<?php
$_from = $_smarty_tpl->tpl_vars['skills']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_skill_0_saved_item = isset($_smarty_tpl->tpl_vars['skill']) ? $_smarty_tpl->tpl_vars['skill'] : false;
$__foreach_skill_0_saved_key = isset($_smarty_tpl->tpl_vars['group']) ? $_smarty_tpl->tpl_vars['group'] : false;
$_smarty_tpl->tpl_vars['skill'] = new Smarty_Variable();
$__foreach_skill_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_skill_0_total) {
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value => $_smarty_tpl->tpl_vars['skill']->value) {
$__foreach_skill_0_saved_local_item = $_smarty_tpl->tpl_vars['skill'];
?>
					<div class="col-md-<?php echo $_smarty_tpl->tpl_vars['ColSkill']->value;?>
 col-sm-6 col-md-offset-<?php echo $_smarty_tpl->tpl_vars['ColSkillOffset']->value;?>
">
						<div class="QualityLeft fadeInUp wow">
							<h4><?php echo smarty_function_lang(array('txt'=>"Skills"),$_smarty_tpl);?>
 <span><?php echo smarty_function_lang(array('txt'=>$_smarty_tpl->tpl_vars['group']->value),$_smarty_tpl);?>
</span></h4>
							<?php if (isset($_smarty_tpl->tpl_vars['SkillProgressDelay'])) {$_smarty_tpl->tpl_vars['SkillProgressDelay'] = clone $_smarty_tpl->tpl_vars['SkillProgressDelay'];
$_smarty_tpl->tpl_vars['SkillProgressDelay']->value = 2; $_smarty_tpl->tpl_vars['SkillProgressDelay']->nocache = null; $_smarty_tpl->tpl_vars['SkillProgressDelay']->scope = 0;
} else $_smarty_tpl->tpl_vars['SkillProgressDelay'] = new Smarty_Variable(2, null, 0);?>
							<?php
$_from = $_smarty_tpl->tpl_vars['skill']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ite_1_saved_item = isset($_smarty_tpl->tpl_vars['ite']) ? $_smarty_tpl->tpl_vars['ite'] : false;
$_smarty_tpl->tpl_vars['ite'] = new Smarty_Variable();
$__foreach_ite_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_ite_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['ite']->value) {
$__foreach_ite_1_saved_local_item = $_smarty_tpl->tpl_vars['ite'];
?>
							<div class="ProgressBarArea">
								<h3><?php echo $_smarty_tpl->tpl_vars['ite']->value->name;?>
 <span><?php echo $_smarty_tpl->tpl_vars['ite']->value->level;?>
%</span></h3>
								<div class="progress">
									<div class="progress-bar slideInLeft wow" data-wow-delay=".<?php echo $_smarty_tpl->tpl_vars['SkillProgressDelay']->value;?>
s" data-wow-duration="2.<?php echo $_smarty_tpl->tpl_vars['SkillProgressDelay']->value;?>
s" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['ite']->value->level;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_smarty_tpl->tpl_vars['ite']->value->level;?>
%;">
									</div>
								</div>
							</div>
							<?php if (isset($_smarty_tpl->tpl_vars['SkillProgressDelay'])) {$_smarty_tpl->tpl_vars['SkillProgressDelay'] = clone $_smarty_tpl->tpl_vars['SkillProgressDelay'];
$_smarty_tpl->tpl_vars['SkillProgressDelay']->value = $_smarty_tpl->tpl_vars['SkillProgressDelay']->value+4; $_smarty_tpl->tpl_vars['SkillProgressDelay']->nocache = null; $_smarty_tpl->tpl_vars['SkillProgressDelay']->scope = 0;
} else $_smarty_tpl->tpl_vars['SkillProgressDelay'] = new Smarty_Variable($_smarty_tpl->tpl_vars['SkillProgressDelay']->value+4, null, 0);?>
							<?php
$_smarty_tpl->tpl_vars['ite'] = $__foreach_ite_1_saved_local_item;
}
}
if ($__foreach_ite_1_saved_item) {
$_smarty_tpl->tpl_vars['ite'] = $__foreach_ite_1_saved_item;
}
?>
						</div>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['skills']->value) == 2) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['ColSkillOffset'])) {$_smarty_tpl->tpl_vars['ColSkillOffset'] = clone $_smarty_tpl->tpl_vars['ColSkillOffset'];
$_smarty_tpl->tpl_vars['ColSkillOffset']->value = 2; $_smarty_tpl->tpl_vars['ColSkillOffset']->nocache = null; $_smarty_tpl->tpl_vars['ColSkillOffset']->scope = 0;
} else $_smarty_tpl->tpl_vars['ColSkillOffset'] = new Smarty_Variable(2, null, 0);?>
					<?php } elseif (count($_smarty_tpl->tpl_vars['skills']->value) == 3) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['ColSkillOffset'])) {$_smarty_tpl->tpl_vars['ColSkillOffset'] = clone $_smarty_tpl->tpl_vars['ColSkillOffset'];
$_smarty_tpl->tpl_vars['ColSkillOffset']->value = 1; $_smarty_tpl->tpl_vars['ColSkillOffset']->nocache = null; $_smarty_tpl->tpl_vars['ColSkillOffset']->scope = 0;
} else $_smarty_tpl->tpl_vars['ColSkillOffset'] = new Smarty_Variable(1, null, 0);?>
					<?php }?>
					
					<?php
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_0_saved_local_item;
}
}
if ($__foreach_skill_0_saved_item) {
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_0_saved_item;
}
if ($__foreach_skill_0_saved_key) {
$_smarty_tpl->tpl_vars['group'] = $__foreach_skill_0_saved_key;
}
?>
				</div>
			</div>
		</div>
	</section><?php }
}
