<?php
class Api_Warning_Message extends PhalApi_Api
{
    public function getRules()
    {
        return parent::getRules(); // TODO: Change the autogenerated stub
    }

    public function go(){
        Domain_Message_Msg::InvoiceWaning(DI()->userInfo['companyId']);
        Domain_Message_Msg::DeliverWarning(DI()->userInfo['companyId']);
    }
}