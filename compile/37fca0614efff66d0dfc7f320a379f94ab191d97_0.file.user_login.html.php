<?php
/* Smarty version 3.1.28-dev/73, created on 2017-12-08 14:15:59
  from "/media/quanict/WWW/QuanNH/CodeIgniter/modules/backend/views/user_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_5a2a3c2f3aaa27_18546888',
  'file_dependency' => 
  array (
    '37fca0614efff66d0dfc7f320a379f94ab191d97' => 
    array (
      0 => '/media/quanict/WWW/QuanNH/CodeIgniter/modules/backend/views/user_login.html',
      1 => 1512715531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2a3c2f3aaa27_18546888 ($_smarty_tpl) {
?>
<header id="header">
    
</header>

<div id="main" role="main" style="margin-left: 0;">
    <div id="content" class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                <div class="well no-padding">
                    <form method="post" action="" id="login-form" class="smart-form client-form">
                        <header>
                            Sign In
                        </header>

                        <fieldset>

                            <section>
                                <label class="label">E-mail / Username </label>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    <input type="text" name="username">
                                    <b class="tooltip tooltip-top-right">
                                        <i class="fa fa-user txt-color-teal"></i>Please enter email address/username</b>
                                </label>
                            </section>

                            <section>
                                <label class="label">Password</label>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
                                    <input type="password" name="password">
                                    <b class="tooltip tooltip-top-right">
                                        <i class="fa fa-lock txt-color-teal"></i> Enter your password
                                    </b>
                                </label>
                                <div class="note">
                                    <a href="#">Forgot password?</a>
                                </div>
                            </section>

                            <section>
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" checked="">
                                    <i></i>Stay signed in</label>
                            </section>
                        </fieldset>
                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Sign in
                            </button>
                        </footer>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    runAllForms();
    $(function () {
        // Validation
        $("#login-form").validate({
            // Rules for form validation
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 3,
                    maxlength: 20
                }
            },

            // Messages for form validation
            messages: {
                email: {
                    required: 'Please enter your email address',
                    email: 'Please enter a VALID email address'
                },
                password: {
                    required: 'Please enter your password'
                }
            },

            // Do not change code below
            errorPlacement: function (error, element) {
                error.insertAfter(element.parent());
            }
        });
    });
<?php echo '</script'; ?>
><?php }
}
