<? if (isset($_POST))
{

    ?>

    <?php require "db.php" ?>
    <?php


    $time = time();
    $date = date("Y-m-d H:i:s",$time + 300);



    mysqli_query($connection, "INSERT INTO `servers`  VALUES (null , '$date','','')");



}
die($_POST['id']);

?>
