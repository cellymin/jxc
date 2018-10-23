<?php /* Smarty version Smarty-3.1.15, created on 2018-09-30 17:43:04
         compiled from "D:\WWW\ttjxc\erp\include\template\storage\using_deliver_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274985bb09aa8259159-49534807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed78e6c28305192ca0b128724ab87c5df8b190f7' => 
    array (
      0 => 'D:\\WWW\\ttjxc\\erp\\include\\template\\storage\\using_deliver_add.tpl',
      1 => 1538098950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274985bb09aa8259159-49534807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods' => 0,
    'department_options' => 0,
    'departmentId' => 0,
    'employee_options' => 0,
    '_GET' => 0,
    'orderId' => 0,
    'nonceStr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5bb09aa830fab7_94811194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb09aa830fab7_94811194')) {function content_5bb09aa830fab7_94811194($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\WWW\\ttjxc\\erp\\include\\config/../../include/lib/Smarty/plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<div class="form_div">
    <form method="post" action="using_deliver_add.php">
        <table>
            <tbody>
            <tr>
                <td width="100">商品</td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goodsName'];?>
" readonly></td>
            </tr>
            <tr>
                <td>供应商</td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['supplierName'];?>
" readonly></td>
            </tr>
            <tr>
                <td>库位</td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['depotSubName'];?>
" readonly></td>
            </tr>
            <tr>
                <td><b>部门</b></td>
                <td><?php echo smarty_function_html_options(array('name'=>'departmentId','id'=>"departmentId",'class'=>"input-xlarge",'options'=>$_smarty_tpl->tpl_vars['department_options']->value,'selected'=>$_smarty_tpl->tpl_vars['departmentId']->value),$_smarty_tpl);?>
</td>
            </tr>
            <tr>
                <td><b>负责人</b></td>
                <td><?php echo smarty_function_html_options(array('name'=>'employeeId','id'=>"employeeId",'class'=>"input-xlarge",'options'=>$_smarty_tpl->tpl_vars['employee_options']->value,'selected'=>$_smarty_tpl->tpl_vars['_GET']->value['employeeId'],'required'=>"true"),$_smarty_tpl);?>
</td>
            </tr>
            <tr>
                <td>数量</td>
                <td><input name="goodsCnt" type="text" required></td>
            </tr>
            <tr>
                <td>备注</td>
                <td><textarea name="remark" id="" cols="30" rows="5" style="resize: none"></textarea></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="orderId" value="<?php echo $_smarty_tpl->tpl_vars['orderId']->value;?>
">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
">
                    <input type="hidden" name="nonceStr" value="<?php echo $_smarty_tpl->tpl_vars['nonceStr']->value;?>
">
                </td>
                <td>
                    <button class="btn btn-primary">登记</button>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        $('#departmentId').change(function(){
            var departmentId = $('#departmentId').val();
            window.location.href = "using_deliver_add.php?orderId=<?php echo $_smarty_tpl->tpl_vars['orderId']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
&departmentId="+departmentId
        })
    })
</script>
<?php }} ?>
