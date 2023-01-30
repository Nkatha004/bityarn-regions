
<!DOCTYPE html>
<html>
<body>
    <form action="views.php" id="carform" method = "post">

        <label for="searchby">Choose a level:</label>
            <?php
                $db = mysqli_connect("localhost", "root", "", "counties");
                $sql = mysqli_query($db, "SELECT * FROM levels");

                echo "<select name='levels' >";

                while ($row = mysqli_fetch_array($sql)) {
                    ?>
                    <option class="txt" value="<?php echo$row['id']?>"> <?php echo$row['name']; ?> </option>
                    <?php
                }
                echo "</select>";
            ?>
            <input type = "submit" value = "submit" name = "levelsbtn">
        <br>

    </form>
</body>
</html>
