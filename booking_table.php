<?php require "config/config.php"; ?>
<?php require "libs/App.php"; ?>
<?php require "includes/header.php"; ?>

<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    echo "<script>window.location.href='" . AppUrl . "'</script>";
    exit;
}


?>



<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $date_time = $_POST["date_time"];
    $num_people = $_POST["num_people"];
    $special_request = $_POST["special_request"];
    $status = "pending";
    $user_id = $_SESSION["user_id"];

    if ($date_time > date("m/d/Y h:i:sa")) {
        $query = "INSERT INTO bookings (name, email, date_time, num_people, special_request, status,  user_id) VALUES ( :name, :email, :date_time, :num_people, :special_request, :status, :user_id)";
        $app = new App;
        $arr = [
            ":name" => $name,
            ":email" => $email,
            ":date_time" => $date_time,
            ":num_people" => $num_people,
            ":special_request" => $special_request,
            ":status" => $status,
            ":user_id" => $user_id,
        ];

        $path = "index.php";


        $app->insert($query, $arr, $path);
    } else {
        echo "<script>alert('invalid date')</script>";
        echo "<script>window.location.href='" . AppUrl . "'</script>";
    }
}
?>
















<?php require "includes/footer.php"; ?>