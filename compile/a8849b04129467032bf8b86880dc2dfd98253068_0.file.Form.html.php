<?php
/* Smarty version 3.1.28-dev/73, created on 2017-07-30 01:06:36
  from "D:\WWW\QuanNH\GiaiPhapICT\modules\Massage\views\Form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/73',
  'unifunc' => 'content_597cceac8af595_07560932',
  'file_dependency' => 
  array (
    'a8849b04129467032bf8b86880dc2dfd98253068' => 
    array (
      0 => 'D:\\WWW\\QuanNH\\GiaiPhapICT\\modules\\Massage\\views\\Form.html',
      1 => 1501351583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597cceac8af595_07560932 ($_smarty_tpl) {
if (!is_callable('smarty_function_img')) require_once 'D:\\WWW\\QuanNH\\CodeIgniter\\system\\third_party\\Smarty_3\\ci\\function.img.php';
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
                    <div class="widget-body">
                        <?php if (isset($_smarty_tpl->tpl_vars['fields']->value) && count($_smarty_tpl->tpl_vars['fields']->value) > 0) {?>
                        <form action="" method="post" class="smart-form" enctype="multipart/form-data" >
                            <?php if (isset($_smarty_tpl->tpl_vars['FieldCustomize'])) {$_smarty_tpl->tpl_vars['FieldCustomize'] = clone $_smarty_tpl->tpl_vars['FieldCustomize'];
$_smarty_tpl->tpl_vars['FieldCustomize']->value = array('name','alias','category','source',"imgthumb","images"); $_smarty_tpl->tpl_vars['FieldCustomize']->nocache = null; $_smarty_tpl->tpl_vars['FieldCustomize']->scope = 0;
} else $_smarty_tpl->tpl_vars['FieldCustomize'] = new Smarty_Variable(array('name','alias','category','source',"imgthumb","images"), null, 0);?>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="br-dashed br-grey" >
                                            <?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['fields']->value['imgthumb']['value'], $tmp) > 0) {?>
                                            <?php echo smarty_function_img(array('file'=>("/uploads/massage/").($_smarty_tpl->tpl_vars['fields']->value['imgthumb']['value']),'class'=>"img-responsive upload-imgthumb"),$_smarty_tpl);?>

                                            <?php } else { ?>
                                            <?php echo smarty_function_img(array('file'=>"svg/image/500x200.svg",'class'=>"img-responsive upload-imgthumb"),$_smarty_tpl);?>

                                            <?php }?>
                                            <input type="file" name="imgthumb[]" accept="image/*" multiple class="hidden" >
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <?php echo smartadmin_ui::inputs(array('name'=>"name",'field'=>$_smarty_tpl->tpl_vars['fields']->value['name']),$_smarty_tpl);?>

                                        <?php echo smartadmin_ui::inputs(array('name'=>"alias",'field'=>$_smarty_tpl->tpl_vars['fields']->value['alias']),$_smarty_tpl);?>

                                    </div>
                                </div>
                            </fieldset>
                            <fieldset style="padding-top: 0;">

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
                                <?php if (!in_array($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['FieldCustomize']->value)) {?>
                                <?php echo smartadmin_ui::inputs(array('name'=>$_smarty_tpl->tpl_vars['name']->value,'field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

                                <?php }?>

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

                            </fieldset>
                            <footer class="smart-form" >
                                <button class="btn btn-primary" type="submit"> Submit Form </button>
                            </footer>
                        </form>
                        <?php }?>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section><?php }
}
