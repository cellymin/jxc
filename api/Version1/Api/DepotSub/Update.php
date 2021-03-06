<?php

class Api_DepotSub_Update extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'go'=>array(
                'depotSubId'   => array('name' => 'depotSubId', 'type' => 'int', 'min' => 1, 'require' => true),
                'depotId'      => array('name' => 'depotId', 'type' => 'int', 'min' => 1, 'require' => true),
                'depotSubName' => array('name' => 'depotSubName', 'type' => 'string', 'require' => true),
                'depotSubNo' => array('name' => 'depotSubNo', 'type' => 'string', 'require' => true),
                'companyId'    => array('name' => 'companyId', 'type' => 'int', 'min' => 1, 'require' => true),
            )
        );
    }

    public function go(){
        $rs = array('code' => 0, 'depotSubId' => '', 'msg' => '');

        if (DI()->userInfo['userGroup'] != 1) {
            throw new PhalApi_Exception_BadRequest('没有权限,您不是超级管理员', 0);
        }

        if(!preg_match('/^[a-zA-Z0-9]*$/',$this->depotSubNo)){
            throw new PhalApi_Exception_BadRequest('库位库编码不符合规则', 0);
        }

        $domain = new Domain_Depot_CURD();
        $depot = $domain->getForUD($this->depotId);
        if(!$depot){
            $rs['msg'] = '仓库不存在';
            return $rs;
        }

        $domain = new Domain_Company_CURD();
        $comany = $domain->getForUD($this->companyId);
        if(!$comany){
            $rs['msg'] = '公司不存在';
            return $rs;
        }

        $domain = new Domain_DepotSub_CURD();
        $depotSub = $domain->getForUD($this->depotSubId);
        if(!$depotSub){
            $rs['msg'] = '没有权限';
            return $rs;
        }

        $input = array();
        $input['depotId'] = $this->depotId;
        $input['depotSubName'] = $this->depotSubName;
        $input['depotSubNo'] = $this->depotSubNo;
        $input['companyId'] = $this->companyId;

        $depotId = $domain->update($this->depotSubId,$input);
        if ($depotId === false) {
            $rs['msg'] = '保存失败';
            return $rs;
        }

        $rs['code'] = 1;
        $rs['depotSubId'] = $this->depotSubId;
        return $rs;
    }
}