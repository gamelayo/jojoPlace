<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layout/header.php"; ?>

<?php

$app = new App;
$app->validateSessionAdminDashboard();

$query = "SELECT * FROM bookings";
$bookings = $app->selectAll($query)

?>
<div class="container-fluid ">

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4 d-inline">Bookings</h5>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">date_booking</th>
                <th scope="col">num_people</th>
                <th scope="col">special_request</th>
                <th scope="col">status</th>
                <th scope="col">created_at</th>
                <th scope="col">delete</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($bookings as $booking) : ?>
                <tr>
                  <th scope="row"><?php echo $booking->id; ?></th>
                  <td><?php echo $booking->name; ?></td>
                  <td><?php echo $booking->email; ?></td>
                  <td><?php echo $booking->date_time; ?></td>
                  <td><?php echo $booking->num_people; ?></td>
                  <td><?php echo $booking->special_request; ?></td>
                  <td><a href="status.php?id=<?php echo $booking->id; ?>" class="btn btn-primary  text-center "><?php echo $booking->status; ?></td>
                  <td><?php echo $booking->created_at; ?></a></td>
                  <td><a href="delete-bookings.php?id=<?php echo $booking->id; ?>" class="btn btn-danger  text-center ">delete</a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>



</div>
<?php require "../layout/footer.php"; ?>