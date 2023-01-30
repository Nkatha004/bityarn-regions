<?php
require_once('countryconn.php');
$id = $_POST['levels'];

$result = Levels($id, $conn);
?>
<form action = "counties.php?id=<?php echo $id;?>" method = 'post'>
    <?php
    echo "<label for='searchby'>Search by: </label><select name = 'counties'>";
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <option class="txt" value="<?php echo$row['id']?>"> <?php echo$row['name']; ?> </option>
        <?php
    }
    echo "</select><br/>";
    ?>

    <label for="searchby">View a list of all:</label>
    <?php
        $db = mysqli_connect("localhost", "root", "", "counties");
        $sql = mysqli_query($db, "SELECT * FROM levels");

        echo "<select name='levels' >";

        while ($row = mysqli_fetch_array($sql)) {
            ?>
            <option class="txt" value="<?php echo $row['id']?>"> <?php echo$row['name']; ?> </option>
            <?php
        }
        echo "</select>";
    ?>

    <input type = "submit" value = "submit" name = "viewsbtn">
</form>