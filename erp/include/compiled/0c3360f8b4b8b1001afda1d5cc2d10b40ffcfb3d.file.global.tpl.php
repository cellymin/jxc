<?php /* Smarty version Smarty-3.1.15, created on 2017-10-18 15:03:31
         compiled from "E:\wwwroot\jxc.com\erp\include\template\charts\global.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1065659e6fcc3162868-11803930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c3360f8b4b8b1001afda1d5cc2d10b40ffcfb3d' => 
    array (
      0 => 'E:\\wwwroot\\jxc.com\\erp\\include\\template\\charts\\global.tpl',
      1 => 1508149938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1065659e6fcc3162868-11803930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'osadmin_quick_note' => 0,
    'company_options' => 0,
    '_GET' => 0,
    'list' => 0,
    'v' => 0,
    'osadmin_action_confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59e6fcc32d98c8_84352658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e6fcc32d98c8_84352658')) {function content_59e6fcc32d98c8_84352658($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\wwwroot\\jxc.com\\erp\\include\\config/../../include/lib/Smarty/plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- TPLSTART 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>

<?php echo $_smarty_tpl->tpl_vars['osadmin_quick_note']->value;?>

<style>
    table thead tr td{ text-align: center!important;vertical-align: middle!important;border-right: 1px solid #fff}
    table tbody tr td{ text-align: center!important;vertical-align: middle!important;border-right: 1px solid #eee}
    table tbody tr:last-child{ font-weight: 700;font-size: 14px;color: #000}
</style>
<form class="form_search"  action="" method="GET" style="margin-bottom:0px">

    <div style="float:left;margin-right:5px">
        <label>选择公司</label>
        <?php echo smarty_function_html_options(array('name'=>'companyId','id'=>"companyId",'class'=>"input-xlarge",'options'=>$_smarty_tpl->tpl_vars['company_options']->value,'selected'=>$_smarty_tpl->tpl_vars['_GET']->value['companyId']),$_smarty_tpl);?>

    </div>

    <div class="btn-toolbar" style="padding-top:25px;padding-bottom:0px;margin-bottom:0px">
        <button type="submit" class="btn btn-primary">检索</button>
        <a type="button" class="btn btn-primary" onclick="method5('data_list')">导出</a>
    </div>
    <div style="clear:both;"></div>
</form>

<div class="block">
    <a href="#page-stats" class="block-heading" data-toggle="collapse">材料购入、领用、盘存汇总表</a>
    <div id="page-stats" class="block-body collapse in">
        <table class="table table-striped" id="data_list">
            <thead>
            <tr>
                <td rowspan="2" >产品名称</td>
                <td rowspan="2">计量单位</td>
                <td colspan="3">上月结存量</td>
                <td colspan="3">本月入库量</td>
                <td colspan="3">本月出库量</td>
                <td colspan="3">本月结存量</td>
            </tr>
            <tr>
                <td>数量</td>
                <td>单价</td>
                <td>金额</td>
                <td>数量</td>
                <td>单价</td>
                <td>金额</td>
                <td>数量</td>
                <td>单价</td>
                <td>金额</td>
                <td>数量</td>
                <td>单价</td>
                <td>金额</td>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cateName'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['unitName'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['last']['count'];?>
</td>
                    <td></td>
                    <td><?php echo number_format($_smarty_tpl->tpl_vars['v']->value['last']['money'],2);?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['buy']['count'];?>
</td>
                    <td></td>
                    <td><?php echo number_format($_smarty_tpl->tpl_vars['v']->value['buy']['money'],2);?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['using']['count'];?>
</td>
                    <td></td>
                    <td><?php echo number_format($_smarty_tpl->tpl_vars['v']->value['using']['money'],2);?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['depot']['count'];?>
</td>
                    <td></td>
                    <td><?php echo number_format($_smarty_tpl->tpl_vars['v']->value['depot']['money'],2);?>
</td>
                </tr>
                <?php } ?>
            <tr>
                <td>合计</td>
                <td></td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['total']['last']['count'];?>
</td>
                <td></td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['list']->value['total']['last']['money'],2);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['total']['buy']['count'];?>
</td>
                <td></td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['list']->value['total']['buy']['money'],2);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['total']['using']['count'];?>
</td>
                <td></td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['list']->value['total']['using']['money'],2);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['list']->value['total']['depot']['count'];?>
</td>
                <td></td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['list']->value['total']['depot']['money'],2);?>
</td>
            </tr>
            </tbody>

        </table>
    </div>
</div>

<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $_smarty_tpl->tpl_vars['osadmin_action_confirm']->value;?>

<script>

</script>
<!-- TPLEND 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
