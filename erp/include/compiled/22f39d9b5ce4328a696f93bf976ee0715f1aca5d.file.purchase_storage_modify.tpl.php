<?php /* Smarty version Smarty-3.1.15, created on 2018-09-29 11:25:41
         compiled from "D:\WWW\ttjxc\erp\include\template\storage\purchase_storage_modify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232395baef0b5ac09c4-30017382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f39d9b5ce4328a696f93bf976ee0715f1aca5d' => 
    array (
      0 => 'D:\\WWW\\ttjxc\\erp\\include\\template\\storage\\purchase_storage_modify.tpl',
      1 => 1538098950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232395baef0b5ac09c4-30017382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods' => 0,
    'depots_options' => 0,
    'depotId' => 0,
    'depotSubs_options' => 0,
    'depotSubId' => 0,
    'orderId' => 0,
    'id' => 0,
    'nonceStr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5baef0b5baad99_02376986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5baef0b5baad99_02376986')) {function content_5baef0b5baad99_02376986($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\WWW\\ttjxc\\erp\\include\\config/../../include/lib/Smarty/plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<div class="form_div">
    <form method="post" action="purchase_storage_modify.php">
        <table>
            <tbody>
            <tr>
                <td>商品</td>
                <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goodsName'];?>
" readonly></td>
            </tr>
            <tr>
                <td>仓库</td>
                <td><?php echo smarty_function_html_options(array('name'=>'depotId','id'=>"depotId",'required'=>"true",'options'=>$_smarty_tpl->tpl_vars['depots_options']->value,'selected'=>$_smarty_tpl->tpl_vars['depotId']->value),$_smarty_tpl);?>
</td>
            </tr>
            <tr>
                <td>库位</td>
                <td><?php echo smarty_function_html_options(array('name'=>'depotSubId','id'=>"DropDownTimezone",'required'=>"true",'options'=>$_smarty_tpl->tpl_vars['depotSubs_options']->value,'selected'=>$_smarty_tpl->tpl_vars['depotSubId']->value),$_smarty_tpl);?>
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

<script>
    $(function(){
        $('#depotId').change(function(){
            var depotId = $('#depotId').val();
            window.location.href = "purchase_storage_modify.php?orderId=<?php echo $_smarty_tpl->tpl_vars['orderId']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&depotId="+depotId
        })
    })
</script>
<?php }} ?>
