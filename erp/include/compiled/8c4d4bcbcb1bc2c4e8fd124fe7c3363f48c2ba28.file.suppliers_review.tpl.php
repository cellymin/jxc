<?php /* Smarty version Smarty-3.1.15, created on 2018-10-08 09:41:26
         compiled from "D:\WWW\ttjxc\erp\include\template\sys\suppliers_review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:291675bbab5c6a60294-48690408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c4d4bcbcb1bc2c4e8fd124fe7c3363f48c2ba28' => 
    array (
      0 => 'D:\\WWW\\ttjxc\\erp\\include\\template\\sys\\suppliers_review.tpl',
      1 => 1538098950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291675bbab5c6a60294-48690408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'supplier' => 0,
    'reviewer_options' => 0,
    'nonceStr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5bbab5c6b2e813_67220543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bbab5c6b2e813_67220543')) {function content_5bbab5c6b2e813_67220543($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\WWW\\ttjxc\\erp\\include\\config/../../include/lib/Smarty/plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->


<div class="form_div">
    <form id="" method="post" action="">
        <table width="100%">
            <tr>
                <td><b>供应商名称</b></td>
                <td>
                    <input type="text" disabled name="supplierName" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['supplierName'];?>
"  required="true"  autofocus="true">
                </td>
                <td><b>供应商地址</b></td>
                <td>
                    <input type="text" disabled name="supplierAddress" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['supplierAddress'];?>
"  required="true"  autofocus="true">
                </td>
            </tr>
            <tr>
                <td><b>供应商电话</b></td>
                <td>
                    <input type="text" disabled name="supplierTel" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['supplierTel'];?>
"  required="true"  autofocus="true">
                </td>
            </tr>
            <tr><td colspan="4">&nbsp;</td></tr>
            <tr>
                <td><b>负责人</b></td>
                <td>
                    <input type="text" disabled name="supplierUserName" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['supplierUserName'];?>
"  required="true"  autofocus="true">
                </td>
                <td><b>负责人电话</b></td>
                <td>
                    <input type="text" disabled name="supplierUserPhone" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['supplierUserPhone'];?>
"  required="true"  autofocus="true">
                </td>
            </tr>
            <tr>
                <td><b>负责人邮箱</b></td>
                <td>
                    <input type="text" disabled name="supplierUserEmail" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['supplierUserEmail'];?>
"  required="true"  autofocus="true">
                </td>
                <td><b>负责人QQ</b></td>
                <td>
                    <input type="text" disabled name="supplierUserQQ" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['supplierUserQQ'];?>
"  required="true"  autofocus="true">
                </td>
            </tr>
            <tr><td colspan="4">&nbsp;</td></tr>
            <tr>
                <td><b>银行名称</b></td>
                <td>
                    <input type="text" disabled name="bankName" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['bankName'];?>
"  required="true"  autofocus="true">
                </td>
                <td><b>开户银行</b></td>
                <td>
                    <input type="text" disabled name="bankOpenName" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['bankOpenName'];?>
"  required="true"  autofocus="true">
                </td>
            </tr>
            <tr>
                <td><b>开卡人姓名</b></td>
                <td>
                    <input type="text" disabled name="cardUserName" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['cardUserName'];?>
"  required="true"  autofocus="true">
                </td>
                <td><b>开卡人电话</b></td>
                <td>
                    <input type="text" disabled name="cardUserPhone" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['cardUserPhone'];?>
"  required="true"  autofocus="true">
                </td>
            </tr>
            <tr>
                <td><b>账户</b></td>
                <td>
                    <input type="text" disabled name="bankAccount" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['bankAccount'];?>
"  required="true"  autofocus="true">
                </td>
                <td><b>金额</b></td>
                <td>
                    <input type="text" disabled name="cardMoney" value="<?php echo $_smarty_tpl->tpl_vars['supplier']->value['cardMoney'];?>
"  required="true"  autofocus="true">
                </td>
            </tr>
            <tr><td colspan="4">&nbsp;</td></tr>
            <tr>
                <td><b>审核人</b></td>
                <td><?php echo smarty_function_html_options(array('name'=>'reviewer','id'=>"DropDownTimezone",'disabled'=>"disabled",'options'=>$_smarty_tpl->tpl_vars['reviewer_options']->value,'selected'=>$_smarty_tpl->tpl_vars['supplier']->value['reviewer']),$_smarty_tpl);?>
</td>
            </tr>
            <tr>
                <td><b>备注</b></td>
                <td colspan="3"><textarea style="width:80%;resize: none" disabled name="remark" rows="3" ><?php echo $_smarty_tpl->tpl_vars['supplier']->value['remark'];?>
</textarea></td>
            </tr>
            <tr>
                <td><b></b></td>
                <td>
                    <div class="btn-toolbar">
                        <input type="hidden" name="nonceStr" value="<?php echo $_smarty_tpl->tpl_vars['nonceStr']->value;?>
">
                        <?php if ($_smarty_tpl->tpl_vars['supplier']->value['flag']!=1) {?>
                        <button type="submit" class="btn btn-primary"><strong>审核</strong></button>
                        <?php }?>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php }} ?>
