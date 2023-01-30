<!DOCTYPE html>
<html>
<body>

<?php
require_once('countryconn.php');

$id = $_POST['counties'];
$searchBy = $_GET['id'];
$level = $_POST['levels'];

$result = country($id, $level, $conn, $searchBy);

?>
<form action="levels.php" id="" method = "post">
    <b><label for="county">A list of its <?php echo getName($level, $conn);?>(s)</label></b>
    <?php
    $db = mysqli_connect("localhost", "root", "", "counties");

    if (isset($_POST["viewsbtn"]))
    {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <p> <?php echo$row['name']; ?> </p>
            <?php
        }
    }
    ?>

    <input type = "submit" name = "back" value = "Back to Levels"><br>
</form>
</body>
</html>
