<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>

<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    echo "<script>window.location.href='" . AdminURL . "'</script>";
    exit;
}


?>


<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $app = new App;
    $query = "SELECT * FROM foods WHERE id='$id'";
    $one = $app->selectOne($query);

    unlink("foods-images/" . $one->image);



    $query = "DELETE FROM foods WHERE id= '$id'";

    $path = "show-foods.php";

    $app->delete($query, $path);
}
// else {

//     echo "<script>window.location.href='" . AppUrl . "/404.php'</script>";
// }

?>