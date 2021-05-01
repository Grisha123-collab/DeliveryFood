<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

use kartik\select2\Select2;

$this->title = 'Order History';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$i = 1;
$j = 1;
?>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Items Order</div>
  <!-- Table -->
  <table class="table padding" >
    <thead style="background-color: #22262A; color: white;">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Date</th>
        <th scope="col">Status</th>
        <th scope="col">Total price</th>
        <th scope="col">Address</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"><?= $i++; ?></th>
            <th scope="row"><?= $order->id; ?></th>
            <td><?= $order['date_order'] ?></td>
            <td><?= $order['status'] ?></td>
            <td><?= $order->total_price?></td>
            <td><?= $order['address'] ?></td>
        </tr>
    </tbody>
  </table>
  <table class="table padding" >
    <thead style="background-color: #22262A; color: white;">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Product</th>
        <th scope="col">Count</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($items_order as $item) : ?>
        <tr>
            <th scope="row"><?= $j++; ?></th>
            <th scope="row"><?= $item['id']; ?></th>
            <td><?= $item['product'] ?></td>
            <td><?= $item['count'] ?></td>
            <td><?= $item['price'] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
  </table>
</div>