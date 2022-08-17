<?php

include '../config/db.php';
if (!$conn) {
    echo ("Error load");
} else {
    if (isset($_GET['max_demand'])) {
        $umd = $_GET['max_demand'];
        $upu = $_GET['peak_usage'];
        $uopu = $_GET['offpeak'];
        $tariff = $_GET['tariff_uses'];
        // details
        $usc = $_GET['usc'];
        $uyl = $_GET['uyl'];
        $unu = $_GET['unu'];
        $ubp = $_GET['ubp'];
        $uscb = $_GET['uscb'];
        $uid = $_GET['uid'];
        $ugt = $_GET['ugt'];
        $ubi = $_GET['ubi'];
        $uspc = $_GET['uspc'];
        $ubs = $_GET['ubs'];
        $umt = $_GET['umt'];
        $usif = $_GET['usif'];
        $ubsf = $_GET['ubsf'];
        $unmd = $_GET['unmd'];

        // calculation
        $umac =  $upu + $uopu;
        $umge = $usc * 5 * 30;
        $umgg = $umac - $umge;

        //---------------------------------------------------------//
        //--------------CALCULATE BILL-----------------------------//
        //---------------------------------------------------------//

        //---------------------------------------------------------//
        //--------------OUTPUT-----------------------------//
        //---------------------------------------------------------//
        $result_1 = array(
            // "test" => $md,
            "solar_capacity" => $usc,
            "solar_panel" => $uspc,
            "battery_size" => $ubs,
            "battery_price" => $ubp,
            "shipment_cost" => $uscb,
            "import_duty" => $uid,
            "ground_transport" => $ugt,
            "installation_fee" => $ubi,
            "system_maintenance" => $umt,
            "system_insurance" => $usif,
            "back_end" => $ubsf,
            "year" => $uyl,
            "no_uses" => $unu,

            "mac" => $umac,
            "mgre" => $umge,
            "mgg" => $umgg,            

            "total_cost" => $usc,
            "total_cost_year" => $usc,
        );

        echo json_encode($result_1);
    } else {

        echo json_encode(array('success' => 0));
    }
}
