<?php /* Smarty version Smarty-3.1.15, created on 2017-11-03 16:43:55
         compiled from "D:\wwwroot\jxc.com\erp\include\template\storage\allot_deliver_modify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2132259fc2c4b40c812-20421538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7070d675f462f5d280018513e922e4d7cf296627' => 
    array (
      0 => 'D:\\wwwroot\\jxc.com\\erp\\include\\template\\storage\\allot_deliver_modify.tpl',
      1 => 1504681991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132259fc2c4b40c812-20421538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods' => 0,
    'department_options' => 0,
    'departmentId' => 0,
    'employee_options' => 0,
    'orderId' => 0,
    'id' => 0,
    'nonceStr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59fc2c4b4f6e57_27780901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fc2c4b4f6e57_27780901')) {function content_59fc2c4b4f6e57_27780901($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\wwwroot\\jxc.com\\erp\\include\\config/../../include/lib/Smarty/plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<div class="form_div">
    <form method="post" action="allot_deliver_modify.php">
        <table>
            <tbody>
            <tr>
                <td>商品</td>
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
                <td><?php echo smarty_function_html_options(array('name'=>'employeeId','id'=>"employeeId",'class'=>"input-xlarge",'options'=>$_smarty_tpl->tpl_vars['employee_options']->value,'selected'=>$_smarty_tpl->tpl_vars['goods']->value['employeeId'],'required'=>"true"),$_smarty_tpl);?>
</td>
            </tr>
            <tr>
                <td>数量</td>
                <td><input name="goodsCnt" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goodsCnt'];?>
" required></td>
            </tr>
            <tr>
                <td>价格</td>
                <td><input name="goodsPrice" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goodsPrice'];?>
" required></td>
            </tr>
            <tr>
                <td>备注</td>
                <td><textarea name="remark" id="" cols="30" rows="5" style="resize: none"><?php echo $_smarty_tpl->tpl_vars['goods']->value['remark'];?>
</textarea></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="orderId" value="<?php echo $_smarty_tpl->tpl_vars['orderId']->value;?>
">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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
            window.location.href = "allot_deliver_modify.php?method=options&orderId=<?php echo $_smarty_tpl->tpl_vars['orderId']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&departmentId="+departmentId
        })
    })
</script>
<?php }} ?>
