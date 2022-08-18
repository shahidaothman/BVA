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

        // current bill calculation
        $query_uses = "SELECT * FROM uses_tariff WHERE tariff_id =  '" . $tariff . "' ";
        $result_tariff = mysqli_query($conn, $query_uses);

        if (mysqli_num_rows($result_tariff) > 0) {
            // echo "here";
            while ($row = mysqli_fetch_array($result_tariff)) {
                // foreach ($result_tariff as $row) {
                $md_usd = $row['max_demand'];
                $pu_usd = $row['peak_usage'];
                $of_usd = $row['off_peak_usage'];
                //   echo $md_usd;

            }

            //   $total_bulanan = 12 * $total;
            //   $total_tahunan = 12 * $total * 25;


        } else {
            echo "No matching records are found.";
        }

        // total current bil
        $md_cost = $umd * $md_usd;
        $pu_cost = $upu * $pu_usd;
        $of_cost = $uopu *  $of_usd;

        $nmd_cost = $unmd *  $md_usd;

        $vutcb_m = (($md_cost) + ($pu_cost) + ($of_cost)) * 12 ;
        $vutcb = $vutcb_m * 15;

        // new bill
        $vutnb_m =  (($nmd_cost) + ($upu - ($usc * 5 * 30)) + ($uopu * $of_usd)) * 12 ;
        $vutnb = $vutnb_m * 15;

        // investment cost
        $vubs = ($ubs * $unu);
        $vubp = ($ubp * $unu);
        $vuscbs = ($ubp * $uscb);
        $vuid = ($uid * $ubp);
        $vugt = ($ugt * $ubp);
        $vubi = ($ubi * $ubp);
        $vusi = ($uspc + $ubp) * $usif;
        $vups = ($uspc + $ubp) * $ubsf;

        $vutsc = (($uspc + $vubp + $vuscbs + $vuid + $vugt + $vubi) + (($mt + $vusi + $vups) * $uyl)) - ($umt * 2);

        // system cost include leasing
        $vutscy =  (($vutsc * 0.03) * $uyl) + $vutsc;

 

        //    saving
        $vas = $vutcb - ($vutnb + $vul);



        //---------------------------------------------------------//
        //--------------Tariff Comparison USES------------------//
        //---------------------------------------------------------//
        $vnpu =  $upu - ($usc * 5 * 30);
        $vpnu_cost = ($vnpu * $pu_usd);

        $total_eu = $umd + $upu + $uopu;
        $total_bill =    $md_cost +  $pu_cost +  $of_cost;
        $total_new_eu =  $unmd + $vnpu + $uopu;
        $total_new_bill = $nmd_cost + $vpnu_cost + $of_cost;

        //---------------------------------------------------------//
        //--------------------Installment-------------------------//
        //--------------------------------------------------------//
        $vuld = $vutscy * 0.1;
        $vul = ($vutscy - $vuld) / ($uyl - 1);

    //   $vld = $vtscy * 0.1;
    //     $vl = ($vtscy - $vld) / ($pyl - 1);


        //---------------------------------------------------------//
        //--------------OUTPUT-----------------------------//
        //---------------------------------------------------------//
        $result_1 = array(
            // "test" => $md,
            "tariff" => $tariff,
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
            "peak_usage" =>   $upu,
            "max_demand" => $umd,
            "offpeak" => $uopu,
            "new_max_demand" => $unmd,
            "new_peak_usage" =>  $vnpu,

            "mac" => $umac,
            "mgre" => $umge,
            "mgg" => $umgg,

            "total_curent_bill_m" => $vutcb_m,
            "total_new_bill_m" => $vutnb_m,
            "total_curent_bill_y" => $vutcb,
            "total_new_bill_y" => $vutnb,
            "total_investment" => $vutsc,
            "total_saving" => $vas,
            "payback" => $vutsc,
            "verdict" => $vutsc,
            "total_cost_year" => $usc,

            "md_usd" => $md_usd,
            "pu_usd" => $pu_usd,
            "of_usd" => $of_usd,

            "md_cost" => $md_cost,
            "pu_cost" => $pu_cost,
            "of_cost" => $of_cost,
            "nmd_cost" => $nmd_cost,
            "npu_cost" => $vpnu_cost,

            "total_eu" => $total_eu,
            "total_bill" => $total_bill, 
            "total_new_eu" => $total_new_eu ,
            "total_new_bill_tariff" => $total_new_bill,

            "installment_depo" =>  $vuld,
            "installment_year" =>   $vul,



        );

        echo json_encode($result_1);
    } else {

        echo json_encode(array('success' => 0));
    }
}
