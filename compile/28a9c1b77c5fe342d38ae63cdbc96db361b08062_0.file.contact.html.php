<?php
/* Smarty version 3.1.28-dev/73, created on 2017-07-19 14:16:36
  from "D:\WWW\QuanNH\GiaiPhapICT\views\blocks\contact.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_596f07546904a9_76226059',
  'file_dependency' => 
  array (
    '28a9c1b77c5fe342d38ae63cdbc96db361b08062' => 
    array (
      0 => 'D:\\WWW\\QuanNH\\GiaiPhapICT\\views\\blocks\\contact.html',
      1 => 1500448277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596f07546904a9_76226059 ($_smarty_tpl) {
if (!is_callable('smarty_function_lang')) require_once 'D:\\WWW\\QuanNH\\CodeIgniter\\system\\third_party\\Smarty_3\\ci\\function.lang.php';
echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-6">
					<div class="contact-form spacing wow fadeInUp">
						<h3><?php echo smarty_function_lang(array('txt'=>"Contact with me"),$_smarty_tpl);?>
</h3>
						<form action="/contact" id="contact-form" method="post">
							<div class="width-50">
								<div class="contact-filed" id="name-field">
									<input class="form-control" type="text" name="name" placeholder="<?php echo smarty_function_lang(array('txt'=>"Your Name"),$_smarty_tpl);?>
" required="required">
									<i class="fa fa-user"></i>
								</div>
								<div class="contact-filed Right" id="email-field">
									<input class="form-control" id="form-email" type="email" name="email" placeholder="Email" required="required">
									<i class="fa fa-envelope-o"></i>
								</div>
							</div>
							<div class="contact-filed" id="subject-field">
								<input class="form-control" id="form-subject" type="text" name="subject" placeholder="<?php echo smarty_function_lang(array('txt'=>"Subject"),$_smarty_tpl);?>
" required="required">
								<i class="fa fa-link"></i>
							</div>
							<div class="contact-filed text-filed" id="message-field">
								<textarea class="form-control" id="form-message" name="message" placeholder="<?php echo smarty_function_lang(array('txt'=>"Message"),$_smarty_tpl);?>
" required="required"></textarea>
								<i class="fa fa-pencil"></i>
							</div>
							<div class="contact-filed text-filed">
								<div class="g-recaptcha" data-sitekey="6LfGmikUAAAAABzG-tqLWd0K6SgtRmgBdEf3lgql"></div>
							</div>
							
							<div class="contact-filed manbi-btn-filed">
								<button class="manbi-btn" type="submit"><?php echo smarty_function_lang(array('txt'=>"submit"),$_smarty_tpl);?>
</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="googleMap cd-google-map">
			<div id="google-container"></div>
			<div id="cd-zoom-in"></div>
			<div id="cd-zoom-out"></div>
		</div>
	</section><?php }
}
