<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layout/header.php"; ?>

<?php

$app = new App;
$app->validateSessionAdminDashboard();

if (isset($_POST["submit"])) {
  $adminName = $_POST["adminName"];
  $email = $_POST["email"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $query = "INSERT INTO admins (adminName, email, password) VALUES (:adminName, :email, :password)";

  $arr = [
    ":adminName" => $adminName,
    ":email" => $email,
    ":password" => $password,

  ];

  $path = "admins.php";


  $app->register($query, $arr, $path);
}

?>

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline">Create Admins</h5>
          <form method="POST" action="create-admins.php" enctype="multipart/form-data">
            <!-- Email input -->
            <div class="form-outline mb-4 mt-4">
              <input type="email" name="email" id="form2Example1" class="form-control" placeholder="email" />

            </div>

            <div class="form-outline mb-4">
              <input type="text" name="adminName" id="form2Example1" class="form-control" placeholder="admin name" />
            </div>
            <div class="form-outline mb-4">
              <input type="password" name="password" id="form2Example1" class="form-control" placeholder="password" />
            </div>







            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>


          </form>

        </div>
      </div>
    </div>
  </div>
</div>
<?php require "../layout/footer.php"; ?>