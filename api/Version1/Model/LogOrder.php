<?php

class Model_LogOrder extends PhalApi_Model_NotORM
{
    public function getTableName($id)
    {
        return 'logs_order'; // TODO: Change the autogenerated stub
    }

    public function getTableKey($table)
    {
        return 'logId';
    }
}