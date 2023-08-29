<?php require "../config/config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "layout/header.php"; ?>
<?php

$app = new App;
$app->validateSessionAdminDashboard();

$query = "SELECT COUNT(*) AS count_foods FROM foods";
$foods = $app->selectOne($query);

$query = "SELECT COUNT(*) AS count_orders FROM orders";
$orders = $app->selectOne($query);

$query = "SELECT COUNT(*) AS count_bookings FROM bookings";
$bookings = $app->selectOne($query);

$query = "SELECT COUNT(*) AS count_admins FROM admins";
$admins = $app->selectOne($query);
?>


<div class="container-fluid">

  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Foods</h5>
          <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
          <p class="card-text">number of foods: <?php echo $foods->count_foods ?></p>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Orders</h5>

          <p class="card-text">number of orders: <?php echo $orders->count_orders ?></p>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Bookings</h5>

          <p class="card-text">number of bookings: <?php echo $bookings->count_bookings ?></p>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Admins</h5>

          <p class="card-text">number of admins: <?php echo $admins->count_admins ?></p>

        </div>
      </div>
    </div>
  </div>
</div>
<?php require "layout/footer.php"; ?>