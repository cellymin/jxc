<{include file ="header.tpl"}>

<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<div class="form_div">
	<form id="form_data" method="post" action="">
		<input type="hidden" name="departmentId" value="<{$department.departmentId}>">
	    <table>	 
	        <tr>
	            <td><b>部门名称</b></td>
	            <td>
	                <input type="text" name="departmentName" value="<{$department.departmentName}>"  required="true" autofocus="true">
	            </td>
	        </tr>
	        <tr>
	            <td><b>备注</b></td>
	            <td>
	            	<textarea name="remark"><{$department.remark}></textarea>
	            </td>
	        </tr>
	            <td><b></b></td>
	            <td>
	                <div class="btn-toolbar">
						<input type="hidden" name="nonceStr" value="<{$nonceStr}>">
	                    <button type="submit" class="btn btn-primary"><strong>保存</strong></button>
	                </div>
	            </td>
	        </tr>
	
	    </table>
	</form>
</div>
