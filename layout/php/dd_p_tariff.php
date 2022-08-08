<?php include 'config/db.php';

$sqlt = "SELECT * FROM display_tariff_powervault";
$resultt = mysqli_query($conn, $sqlt);
// $result = $conn->query($sql);

?>

<select class="form-select form-control" id="tariff_power">
<option value="">---Pelase select tariff---</option>          
    <?php
         while ($row = mysqli_fetch_array($resultt)) {
            $name = $row['tariff_name'];
            $id = $row['tariff_id'];
    ?>
<<<<<<< HEAD
            <!-- <option value="<?php echo $id; ?>"><?php echo $name; ?> </option> -->
            <option value="<?php echo $name; ?>"><?php echo $name; ?> </option>
=======
            <option value="<?php echo $id; ?>"><?php echo $name; ?> </option>
>>>>>>> 2ad4855a90a2101960c10ab5ac26d7503969663b
    <?php
        }

    ?>

 </select>

                   
               