<?php require "../config/config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "../includes/header.php"; ?>

<?php

$query = "SELECT * FROM orders WHERE user_id= '$_SESSION[user_id]'";
$app = new App;

$orders = $app->selectAll($query);
?>




<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Orders</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo AppUrl; ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo AppUrl; ?>/users/orders.php?id=<?php echo $_SESSION['user_id']; ?>">Orders</a></li>
            </ol>
        </nav>
    </div>
</div>


<!-- Service Start -->
<div class="container">

    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Review</th>



                </tr>
            </thead>
            <tbody>

                <?php foreach ($orders as $order) : ?>
                    <tr>
                        <td>
                            <?php echo $order->name; ?>
                        </td>
                        <td><?php echo $order->email; ?></td>
                        <td><?php echo $order->phone_number; ?></td>
                        <td>$<?php echo $order->total_price; ?></td>
                        <td><?php echo $order->status; ?></td>
                        <td><?php echo $order->created_at; ?></td>
                        <?php if ($order->status === "confirmed") : ?>
                            <td><a href="<?php echo AppUrl; ?>/users/review.php" class="btn btn-success text-white">Review Us</td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>
<!-- Service End -->

<?php require "../includes/footer.php"; ?>