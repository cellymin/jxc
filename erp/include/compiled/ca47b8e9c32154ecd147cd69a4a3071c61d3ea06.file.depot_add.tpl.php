<?php /* Smarty version Smarty-3.1.15, created on 2018-09-19 17:03:20
         compiled from "D:\phpPro\wwwroot\StockManager\erp\include\template\sys\depot_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104535ba210d8d61991-43224485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca47b8e9c32154ecd147cd69a4a3071c61d3ea06' => 
    array (
      0 => 'D:\\phpPro\\wwwroot\\StockManager\\erp\\include\\template\\sys\\depot_add.tpl',
      1 => 1507779528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104535ba210d8d61991-43224485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_options' => 0,
    '_GET' => 0,
    'department_options' => 0,
    'employee_options' => 0,
    'nonceStr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5ba210d8d9ea21_68227310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba210d8d9ea21_68227310')) {function content_5ba210d8d9ea21_68227310($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\phpPro\\wwwroot\\StockManager\\erp\\include\\config/../../include/lib/Smarty/plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->



<div class="form_div">
    <form id="form_data" method="post" action="">
        <table width="80%">
            <tr>
                <td><b>公司</b></td>
                <td><?php echo smarty_function_html_options(array('name'=>'companyId','id'=>"companyId",'options'=>$_smarty_tpl->tpl_vars['company_options']->value,'selected'=>$_smarty_tpl->tpl_vars['_GET']->value['companyId']),$_smarty_tpl);?>
</td>
            </tr>
            <tr>
                <td><b>部门</b></td>
                <td><?php echo smarty_function_html_options(array('name'=>'departmentId','id'=>"departmentId",'options'=>$_smarty_tpl->tpl_vars['department_options']->value,'selected'=>$_smarty_tpl->tpl_vars['_GET']->value['departmentId']),$_smarty_tpl);?>
</td>
            </tr>
            <tr>
                <td><b>负责人</b></td>
                <td><?php echo smarty_function_html_options(array('name'=>'employeeId','id'=>"employeeId",'options'=>$_smarty_tpl->tpl_vars['employee_options']->value,'selected'=>$_smarty_tpl->tpl_vars['_GET']->value['employeeId'],'required'=>"true"),$_smarty_tpl);?>
</td>
            </tr>
            <tr>
                <td><b>仓库名称</b></td>
                <td>
                    <input type="text" name="depotName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['depotName'];?>
"  required="true">
                </td>
            </tr>
            <tr>
                <td><b>仓库编码</b></td>
                <td>
                    <input type="text" name="depotNo" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['depotNo'];?>
" placeholder="英文+字母" required="true">
                </td>
            </tr>
            <tr>
                <td><b>是否默认</b></td>
                <td>
                    <select name="isDefault"  >
                        <option value="0" selected >否</option>
                        <option value="1">是</option>
                    </select>
                </td>
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

<script type="text/javascript">
$(function(){
	$('#companyId, #departmentId').change(function(){
		var companyId = $('#companyId').val();
		var departmentId = $('#departmentId').val();
		window.location.href = "depot_add.php?companyId="+companyId+"&departmentId="+departmentId
	})
})
</script>
<?php }} ?>
