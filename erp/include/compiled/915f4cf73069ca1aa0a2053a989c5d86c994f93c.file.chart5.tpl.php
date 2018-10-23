<?php /* Smarty version Smarty-3.1.15, created on 2017-11-22 08:41:53
         compiled from "D:\wwwroot\erp\include\template\charts\chart5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:264285a14c7d1468641-47862444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '915f4cf73069ca1aa0a2053a989c5d86c994f93c' => 
    array (
      0 => 'D:\\wwwroot\\erp\\include\\template\\charts\\chart5.tpl',
      1 => 1509760252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264285a14c7d1468641-47862444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'depots_options' => 0,
    '_GET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a14c7d14bb6f5_46888498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a14c7d14bb6f5_46888498')) {function content_5a14c7d14bb6f5_46888498($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\wwwroot\\erp\\include\\config/../../include/lib/Smarty/plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
<style type="text/css">
#depotId,#depotSubId,#startTime,#endTime{width:150px;}
</style>


<!-- TPLSTART 以上内容不需更改，保证该TPL页内的标签匹配即可 -->
<form class="form_search"  action="" method="GET" style="margin-bottom:0px">
	<div style="float:left;margin-right:5px">
        <label>关键词</label>
        <input type="text" name="keyword" id="keyword" placeholder="产品条码/关键词">
    </div>
    <div style="float:left;margin-right:5px">
        <label>仓库</label>
        <?php echo smarty_function_html_options(array('name'=>'depotId','id'=>"depotId",'class'=>"input-xlarge",'options'=>$_smarty_tpl->tpl_vars['depots_options']->value,'selected'=>$_smarty_tpl->tpl_vars['_GET']->value['depotId']),$_smarty_tpl);?>

    </div>
    <div style="float:left;margin-right:5px">
    	<label>类型</label>
    	<select name="table" id="table" style="width:80px;">
    		<option value="vich_orders_oy">领用</option>
    		<option value="vich_orders_so">销售</option>vich_orders_oq
    		<option value="vich_orders_od">调库</option>
    		<option value="vich_orders_oq">其他</option>
    	</select>
    </div>
    <div style="float:left;margin-right:5px">
        <label>日期段</label>
        <input type="text" name="startTime" id="startTime" class="time_input" readonly value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['startTime'];?>
">
    </div>
    <div style="float:left;margin-right:5px">
        <label>至</label>
        <input type="text" name="endTime" id="endTime" class="time_input" readonly value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['endTime'];?>
">
    </div>
    <div class="btn-toolbar" style="padding-top:25px;padding-bottom:0px;margin-bottom:0px">
        <button type="submit" class="btn btn-primary">检索</button>
        <a type="button" class="btn btn-primary" onclick="method5('data_list')">导出</a>
    </div>
    <div style="clear:both;"></div>
</form>

<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">图表</a>
	<div id="page-stats" class="block-body collapse in">
	<table class="table table-striped" id="data_list">
			<thead>
			<tr>
				<th>产品条码</th>
				<th>产品名称</th>
				<th>产品规格</th>
				<th>数量</th>
				<th>时间</th>
				<th>订单编号</th>
			</tr>
			</thead>
			<tbody id="list">							  
			
			</tbody>
		</table>						
	</div>
</div>

<script type="text/javascript">
var page = 1;
$(function(){
	$('.form_search').submit(function(){
		page = 1;
		var keyword = $('#keyword').val();
		var depotId = $('#depotId').val();
		var table = $('#table').val();
		var startTime = $('#startTime').val();
		var endTime = $('#endTime').val();
		
		$('.block-heading').html('<font color="red">报表生成中,请勿刷新页面...</font>')
		$('#list').html('');
		_search(keyword, depotId, table, startTime, endTime);
		
		return false;
	})
})

function _search(keyword, depotId, table, startTime, endTime){
	$.ajax({
		type:"post",
		url:"chart5.php",
		data:{keyword:keyword, depotId:depotId, table:table, startTime:startTime, endTime:endTime, page_no:page},
		async:false,
		dataType:"json",
		success:function(e){
			var html = '';
			html += '<tr>';
			html += '<td>'+ e[0]['goodsSn'] +'</td>';
			html += '<td>'+ e[0]['goodsName'] +'</td>';
			html += '<td>'+ e[0]['goodsCnt'] +'</td>';
			html += '<td>'+ e[0]['goodsSpec'] +'</td>';
			html += '<td>'+ e[0]['reviewerTime'] +'</td>';
			html += '<td>'+ e[0]['orderNo'] +'</td>';
			html += '</tr>';
			$('#list').append(html);
			if(e[0].count==0){
				$('.block-heading').html('报表');
				$('#list').html('');
				alert('暂无数据');
				return false;
			}
			page ++;
			if(page<=e[0]['count']){
				setTimeout(function(){
					_search(keyword, depotId, table, startTime, endTime);
				},200)
			}else{
				$('.block-heading').html('报表');
				alert('报表生成成功')
			}
		}
	});
	return false;
}
</script>
<!-- TPLEND 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
