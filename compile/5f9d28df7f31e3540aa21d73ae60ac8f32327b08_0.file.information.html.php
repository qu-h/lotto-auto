<?php
/* Smarty version 3.1.28-dev/73, created on 2017-11-23 15:07:45
  from "/media/quanict/WWW/QuanNH/GiaiPhapICT/views/blocks/information.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_5a1681d1956e27_67510529',
  'file_dependency' => 
  array (
    '5f9d28df7f31e3540aa21d73ae60ac8f32327b08' => 
    array (
      0 => '/media/quanict/WWW/QuanNH/GiaiPhapICT/views/blocks/information.html',
      1 => 1501651251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1681d1956e27_67510529 ($_smarty_tpl) {
if (!is_callable('smarty_function_theme_img')) require_once '/media/quanict/WWW/QuanNH/CodeIgniter/system/third_party/Smarty_3/ci/function.theme_img.php';
if (!is_callable('smarty_function_lang')) require_once '/media/quanict/WWW/QuanNH/CodeIgniter/system/third_party/Smarty_3/ci/function.lang.php';
?>
<section id="About" class="spacing">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-10 col-sm-offset-1 col-md-offset-0">
					<div class="row">
						<div class="col-md-5 col-sm-5">
							<div class="author-photo fadeInUp wow">
								<img src="<?php echo smarty_function_theme_img(array(),$_smarty_tpl);?>
18422569_1504530159566250_6495325875918294858_o.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
">
								<?php if (isset($_smarty_tpl->tpl_vars['cv_file']->value)) {?>
								<a class="manbi-btn" href="/<?php echo $_smarty_tpl->tpl_vars['cv_file']->value;?>
"><?php echo smarty_function_lang(array('txt'=>"Download CV"),$_smarty_tpl);?>
</a>
								<?php }?>
							</div>
						</div>
						<div class="col-md-7 col-sm-7">
							<div class="author-name fadeInUp wow">
								<h2 class="author-title"><?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
</h2>
								<h4>WEB DEVELOPER</h4>
								<div class="divider"></div>
								<p><?php echo $_smarty_tpl->tpl_vars['short_desc']->value;?>
</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1">
					<div class="author-ifno fadeInUp wow">
						<h2 class="author-title"><?php echo smarty_function_lang(array('txt'=>"Personal Info"),$_smarty_tpl);?>
</h2>
						<div class="divider"></div>
						<div class="BioData">
							<table>
								<tr>
									<td class="padding-top"><?php echo smarty_function_lang(array('txt'=>"NAME"),$_smarty_tpl);?>
<span>:</span></td>
									<td class="padding-top"><?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
</td>
								</tr>
								<tr>
									<td><?php echo smarty_function_lang(array('txt'=>"YEAR OF BIRTH"),$_smarty_tpl);?>
<span>:</span></td>
									<td><?php echo $_smarty_tpl->tpl_vars['birth_year']->value;?>
</td>
								</tr>
								<tr>
									<td><?php echo smarty_function_lang(array('txt'=>"ADDRESS"),$_smarty_tpl);?>
<span>:</span></td>
									<td><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
<br>
									</td>
								</tr>
								<tr>
									<td><?php echo smarty_function_lang(array('txt'=>"PHONE"),$_smarty_tpl);?>
<span>:</span></td>
									<td><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</td>
								</tr>
								<tr>
									<td><?php echo smarty_function_lang(array('txt'=>"EMAIL"),$_smarty_tpl);?>
<span>:</span></td>
									<td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
</section><?php }
}
