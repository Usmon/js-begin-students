<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 14.06.2019
 * Time: 15:27
 */


$json_string = (string) '{
  "id": "23d93cac-000f-5000-8000-126628f15141",
  "status": "pending",
  "paid": false,
  "amount": {
    "value": "100.00",
    "currency": "RUB"
  },
  "confirmation": {
    "type": "redirect",
    "confirmation_url": "https://money.yandex.ru/api-pages/v2/payment-confirm/epl?orderId=23d93cac-000f-5000-8000-126628f15141"
  },
  "created_at": "2019-01-22T14:30:45.129Z",
  "description": "Заказ №1",
  "metadata": {},
  "recipient": {
    "account_id": "100001",
    "gateway_id": "1000001"
  },
  "test": false
}';

//echo $json_string;
$decoded_json = json_decode($json_string);
//echo $decoded_json->amount->value;

$newsList = [
    ['title' => 'First post', 'content' => 'Loreim ipsum dolor sit...', 'dateTime' => date('d/m/Y H:i:s')],
    ['title' => 'Second post', 'content' => 'Loreim ipsum dolor sit...', 'dateTime' => date('d/m/Y H:i:s')],
    ['title' => 'Three post', 'content' => 'Loreim ipsum dolor sit...', 'dateTime' => date('d/m/Y H:i:s')],
];

echo json_encode($newsList);