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
        );

        echo json_encode($result_1);
    } else {

        echo json_encode(array('success' => 0));
    }
}
