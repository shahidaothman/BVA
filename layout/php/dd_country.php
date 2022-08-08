<?php include 'config/db.php';

$sql = "SELECT * FROM country";
$result = mysqli_query($conn, $sql);
// $result = $conn->query($sql);

?>

<label class="fw-medium form-label" for="name">Country</label>
                <select class="form-select form-control" aria-label="Default select example" placeholder="Your email">
    <?php
 
        while ($optionData = mysqli_fetch_array($result)) {
            $option = $optionData['country_name'];
            $id = $optionData['country_id'];

            echo $option;
    ?>
            <option value="<?php echo $id; ?>"><?php echo $option; ?> </option>

    <?php
        }

    ?>

 </select>

                   
               