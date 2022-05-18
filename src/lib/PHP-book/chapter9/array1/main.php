<body>
  <?php
      require_once('ShoppingCart.php');
      require_once('Item.php');

      $cart = new ShoppingCart();
      $cart->addItems(new Item('AMB-12345', 'タッチペン極細', 2500));
      $cart->addItems(new Item('XYZ-98765', 'マウスパッド', 980));
      $cart->addItems(new Item('YTR-76543', 'ノートPCスタンド', 3000));
  ?>

<h4>カートの商品一覧</h4>
<?php foreach ($cart as $itemNumber => $item): ?>
    <p><?=$itemNumber?>:<?=$item?></p>
<?php endforeach; ?>
</body>
