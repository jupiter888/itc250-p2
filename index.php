<?php
//index.php

//tax is constant
define('TAX', 0.09);

require_once 'item.php';
require_once 'menu.php';
require_once 'order.php';

$menu = new menu();
$order = new order();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Pizza Truck Order Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
<body>
  <div class="container">
    <div class="page-header"><h1>Curbside Pizza</h1></div>
    <!--form starts here-->
    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <h2>Pizza : All pizzas are large (16")</h2>
      <!--applied bootstrap stying no need for separate css page-->
      <?php echo $menu->show(); ?>
      <input type="submit" class="btn btn-info btn-md" value="Update Order">
    </form>
  </div>
  <div class="container">&nbsp;</div>
  <div class="container alert alert-info"><?php echo $order->show(); ?></div>
</body>
</html>
