<!DOCTYPE html>
<html>
<body>


<form action="" id="" method = "post">
  <label for="county">Choose a subcounty:</label>
  <?php
        $db = mysqli_connect("localhost", "root", "", "counties");

        if (isset($_POST["subcountiesbtn"]))
               {
                 $id = $_GET['id'];
                 echo $id;

                $sql = mysqli_query($db, "SELECT * FROM subcounty WHERE countyID = '$id'");
                echo "<select name='subcounty' >";
                        while ($row = mysqli_fetch_array($sql)) {
                            ?>
                            <option class="txt" value="<?php echo$row['id']?>"> <?php echo$row['name']; ?> </option>
                            <?php
                        }
                        echo "</select>";

               }
     ?>

     <input type = "submit" name = "subcountybtn" value = "submit">

<br>




</form>
</body>
</html>
