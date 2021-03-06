<{include file ="header.tpl"}>

<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<div class="form_div">
    <form id="form_data" method="post" action="">
        <table>
            <tr>
                <td><b>产品货号</b></td>
                <td>
                    <input type="text" name="goodsSn" value="<{$_POST.goodsSn}>" placeholder="供应商条码"  required="true" >
                    <!--<span class="label label-important">系统自动生成</span>-->
                </td>
                <th><b>产品条码</b>
                	<!--<span class="label label-important">如有条码扫描仪可直接扫描</span>-->
                </th>
                <td>
                    <input type="text" readonly name="goodsBarCode" value="<{$code}>"  placeholder="如有条码扫描仪可直接扫描"  required="true" >
                    	<!--<span class="label label-important">如使用条形码,销售时可直接使用</span>-->
                </td>
            </tr>
            <tr>
               
            </tr>
            <tr>
                <td><b>产品名称</b></td>
                <td><input type="text" name="goodsName" value="<{$_POST.goodsName}>"  required="true" ></td>
                <th><b>产品规格</b></th>
                <td><input type="text" name="goodsSpec" value="<{$_POST.goodsSpec}>"   ></td>
            </tr>
            <tr>
                <td><b>所属分类</b></td>
                <td>
                	<select name="goodsCateId1" id="goodsCateId1" style="width: 100px">
        				<option value="0">=请选择=</option>
        			</select>
                    <select name="goodsCateId2" id="goodsCateId2" style="width: 100px">
                        <option value="0">=请选择=</option>
                    </select>
                    <select name="goodsCateId" id="goodsCateId" style="width: 100px">
                        <option value="0">=请选择=</option>
                    </select>
                </td>
                <th><b>计量单位</b></th>
                <td><{html_options name=goodsUnitId id="goodsUnitId"  options=$unitList selected=0}></td>
            </tr>
            <{* <tr>
                <td><b>上次进货价</b><span class="label label-important">入库时可自行修改或输入</span></td>
                <td></td>
            </tr>
            <tr>
                <td><b>历史最低价</b></td>
                <td></td>
            </tr>
            <tr>
                <td><b>历史最高价</b></td>
                <td></td>
            </tr>
            <tr>
                <td><b>平均采购价</b></td>
                <td></td>
            </tr> *}>
            <input type="hidden" name="lastPrice" value="0" readonly="readonly">
            <input type="hidden" name="minPrice" value="0"  readonly="readonly">
            <input type="hidden" name="maxPrice" value="0"  readonly="readonly">
            <input type="hidden" name="avgPrice" value="0"  readonly="readonly">
            <tr>
                <td><b>生产日期</b></td>
                <td><input type="text" readonly name="productionDate" value="<{$_POST.productionDate}>" class="time_input" placeholder="" ></td>
                <th><b>作废日期</b></th>
                <td><input type="text" readonly name="invalidDate" value="<{$_POST.invalidDate}>" class="time_input" placeholder="" ></td>
            </tr>
            <tr>
                <td><b>助记词</b>
                	<!--<span class="label label-important">用于快速搜寻产品用</span>-->
                </td>
                <td colspan="3"><input type="text" name="searchKey" value="<{$_POST.searchKey}>"  placeholder="用于快速搜寻产品用"   ></td>
            </tr>
            <tr>
                <td><b>备注</b></td>
                <td colspan="3"><textarea name="remark" rows="3" cols="100"></textarea></td>
            </tr>
           <tr>
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

<script type="text/javascript">
    $(function () {
        opt(0,$("#goodsCateId1"));
    });

    $("#goodsCateId1").change(function () {
        var parentId = $(this).val();
        $("#goodsCateId2 option:not(:first-child)").remove();
        $("#goodsCateId option:not(:first-child)").remove();
        if(parentId!=0)
            opt(parentId,$("#goodsCateId2"))
    });

    $("#goodsCateId2").change(function () {
        var parentId = $(this).val();
        $("#goodsCateId option:not(:first-child)").remove();
        if(parentId!=0)
            opt(parentId,$("#goodsCateId"))
    });

    function opt(parentId,select) {

        $.ajax({
            url:'goods_add.php',
            type:'POST',
            dataType:'json',
            async:false,
            data:{parentId:parentId,method:'opt'},
            success:function (e) {
                if(e){
                    $.each(e,function (i,v) {
                        select.append('<option value="'+v.cateId+'">'+v.cateName+'</option>');
                    })
                }
            }
        })
    }
</script>