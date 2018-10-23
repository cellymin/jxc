<?php /* Smarty version Smarty-3.1.15, created on 2018-09-28 14:33:58
         compiled from "D:\WWW\ttjxc\erp\include\template\sys\company_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88275badcb56ce3169-36787969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '166044793c2897a1cfd105e6b12f4acdc2c9233f' => 
    array (
      0 => 'D:\\WWW\\ttjxc\\erp\\include\\template\\sys\\company_add.tpl',
      1 => 1538098950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88275badcb56ce3169-36787969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_POST' => 0,
    'nonceStr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5badcb56d37464_73848287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5badcb56d37464_73848287')) {function content_5badcb56d37464_73848287($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->
<div class="form_div">
    <form id="form_data" method="post" action="">
        <table>
            <tr>
                <td><b>公司名称</b></td>
                <td>
                    <input class="input-xlarge" type="text" name="companyName" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['companyName'];?>
"  required="true" autofocus="true">
                </td>
            </tr>
            <tr>
                <td><b>公司地址</b></td>
                <td>
                    <input class="input-xlarge" type="text" name="companyAddress" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['companyAddress'];?>
"  placeholder=""  required="true" >
                </td>
            </tr>
            <tr>
                <td><b>公司电话</b></td>
                <td>
                    <input class="input-xlarge" type="text" name="companyTel" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['companyTel'];?>
"  placeholder=""  required="true" >
                </td>
            </tr>
            <tr>
                <td><b>联系人</b></td>
                <td><input class="input-xlarge" type="text" name="companyUserName" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['companyUserName'];?>
"  required="true" autofocus="true"></td>
            </tr>
            <tr>
                <td><b>联系电话</b></td>
                <td><input class="input-xlarge" type="text" name="companyUserPhone" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['companyUserPhone'];?>
"  required="true" autofocus="true"></td>
            </tr>
            <tr>
                <td><b>邮箱</b></td>
                <td><input class="input-xlarge" type="text" name="companyUserEmail" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['companyUserEmail'];?>
"  required="true" autofocus="true"></td>
            </tr>
            <tr>
                <td><b>QQ</b></td>
                <td><input class="input-xlarge" type="text" name="companyUserQQ" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['companyUserQQ'];?>
"  required="true" autofocus="true"></td>
            </tr>
            <tr>
                <td><b></b></td>
                <td>
                    <div class="btn-toolbar">
                        <input type="hidden" name="nonceStr" value="<?php echo $_smarty_tpl->tpl_vars['nonceStr']->value;?>
">
                        <button type="submit" class="btn btn-primary"><strong>保存</strong></button>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php }} ?>
