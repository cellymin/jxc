<?php /* Smarty version Smarty-3.1.15, created on 2018-09-30 11:17:19
         compiled from "D:\WWW\ttjxc\erp\include\template\storage\count_order_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175895bb0403fee52c5-06589461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb40496531e2e3da6a1d0f42bcd089ac2255da1f' => 
    array (
      0 => 'D:\\WWW\\ttjxc\\erp\\include\\template\\storage\\count_order_add.tpl',
      1 => 1538098950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175895bb0403fee52c5-06589461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods' => 0,
    '_GET' => 0,
    'orderId' => 0,
    'nonceStr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5bb0403ff29a88_53989674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb0403ff29a88_53989674')) {function content_5bb0403ff29a88_53989674($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<div class="form_div">
    <form method="post" action="count_order_add.php">
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
                <td>数量</td>
                <td><input name="goodsCnt" type="text" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['goodsCnt'];?>
" required></td>
            </tr>
            <tr>
                <td>备注</td>
                <td><textarea name="remark" id="" cols="30" rows="5" style="resize: none"><?php echo $_smarty_tpl->tpl_vars['_GET']->value['remark'];?>
</textarea></td>
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

<?php }} ?>
