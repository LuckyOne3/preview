<? if (isset($_POST['id']))
{
    $id = (int) $_POST['id'];
    ?>

<?php require "db.php" ?>
<?php


    $time = time();
    $date = date("Y-m-d H:i:s",$time + 180);



    mysqli_query($connection, "UPDATE `servers` SET `SelectedForRemove` = '+', `RemoveDateTime` = '$date' WHERE `id` = '$id'");


}
    die($_POST['id']);

?>
