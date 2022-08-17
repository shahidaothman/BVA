<?php include 'config/db.php';

$sqlt = "SELECT * FROM display_tariff_uses";
$resultt = mysqli_query($conn, $sqlt);
// $result = $conn->query($sql);

?>

<select class="form-select form-control" id="tariff_uses" name="tariff_uses">
    <option value="">---Pelase select tariff---</option>
    <?php
    while ($row = mysqli_fetch_array($resultt)) {
        $name = $row['tariff_name'];
        $id_uses = $row['tariff_id'];
    ?>
        <option value="<?php echo $id_uses; ?>" name="<?php echo $name; ?>"><?php echo $name; ?> </option>
    <?php
    }

    ?>

</select>