<?php
include '../include/init.inc.php';
$orderId = $type = "";
extract($_POST, EXTR_IF_EXISTS);

if (Common::isPost()) {
    if (!is_array($orderId)) {
        Common::exitWithError('参数错误', 'purchase/arrival_order.php');
    }

    //请求接口
    $client = new PhalApiClient();

    $orderId = implode(',', $orderId);

    $rs = $client->request('Order_Delete.Go', array(
        'orderId' => $orderId,
        'type'    => $type,
    ));
    if ($client->getRet() == PhalApiClient::RET_OK) {
        Common::exitWithSuccess('删除成功', 'purchase/arrival_order.php');
    } else {
        Common::exitWithError($client->getMsg(), 'purchase/arrival_order.php');
    }

}
header('location:arrival_order.php');