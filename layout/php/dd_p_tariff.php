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
            <option value="<?php echo $id; ?>"><?php echo $name; ?> </option>
    <?php
        }

    ?>

 </select>

                   
               