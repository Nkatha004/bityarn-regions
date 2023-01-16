<!DOCTYPE html>
<html>
<body>


<form action="counties.php" id="carform" method = "post">
  <label for="country">Choose a country:</label>
  <?php
        $db = mysqli_connect("localhost", "root", "", "counties");
        $sql = mysqli_query($db, "SELECT * FROM country");

        echo "<select name='country' >";
        while ($row = mysqli_fetch_array($sql)) {
            ?>
            <option class="txt" value="<?php echo$row['id']?>"> <?php echo$row['name']; ?> </option>
            <?php
        }
        echo "</select>";
     ?>
     <input type = "submit" name = "countrybtn" value = "submit">

<br>




</form>
</body>
</html>