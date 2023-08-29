<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layout/header.php"; ?>

<?php

$app = new App;
$app->validateSessionAdminDashboard();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST["submit"])) {
        $status = $_POST["status"];
        $query =  "UPDATE orders SET status=:status WHERE id=$id";

        $arr = [
            ":status" => $status,
        ];

        $path = "show-orders.php";

        $app->update($query, $arr, $path);
    }
}

?>
<div class="container-fluid ">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Change Status</h5>
                    <form method="POST" action="status.php?id=<?php echo $id; ?>" enctype="multipart/form-data">

                        <div class="form-outline mb-4 mt-4">

                            <select name="status" class="form-select  form-control" aria-label="Default select example">
                                <option selected>Choose status</option>
                                <option value="pending">pending</option>
                                <option value="confirmed">confirmed</option>
                            </select>
                        </div>

                        <br>



                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Update</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php require "../layout/footer.php"; ?>