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
        $uscb = $_GET['uscb'] / 100;
        $uid = $_GET['uid'] / 100;
        $ugt = $_GET['ugt'] / 100;
        $ubi = $_GET['ubi'] / 100;
        $uspc = $_GET['uspc'];
        $ubs = $_GET['ubs'];
        $umt = $_GET['umt'];
        $usif = $_GET['usif'] / 100;
        $ubsf = $_GET['ubsf'] / 100;
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

        $vutcb_m = (($md_cost) + ($pu_cost) + ($of_cost)) * 12;
        $vutcb = $vutcb_m * 15;

        // new bill
        $vutnb_m =  (($nmd_cost) + (($upu - $umge) * $pu_usd) + ($uopu * $of_usd)) * 12;
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

        // $vutsc = (($uspc + $vubp + $vuscbs + $vuid + $vugt + $vubi) + (($mt + $vusi + $vups) * $uyl)) - ($umt * 2);
        $vutsc = (($uspc + $vubp + $vuscbs + $vuid + $vugt + $vubi) + (($umt + $vusi + $vups) * $uyl)) - ($umt * 2);

        $vutsc1 = (($uspc + $vubp + $vuscbs + $vuid + $vugt + $vubi) + (($umt + $vusi + $vups) * 1)) - ($umt * 2);
        $vutsc5 = (($uspc + $vubp + $vuscbs + $vuid + $vugt + $vubi) + (($umt + $vusi + $vups) * 5)) - ($umt * 2);
        $vutsc10 = (($uspc + $vubp + $vuscbs + $vuid + $vugt + $vubi) + (($umt + $vusi + $vups) * 10)) - ($umt * 2);

        // system cost include leasing
        $vutscy =  (($vutsc * 0.03) * $uyl) + $vutsc;



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
        //--------------------SAVING OUTPUT ON CARD -------------------//
        //--------------------------------------------------------//
        //    saving
        $vas = $vutcb - ($vutnb + $vul);

        //---------------------------------------------------------//
        //---------------------------CURRENCY -----------------------//
        //---------------------------------------------------------//
        // current bill calculation
        $query_currency = "SELECT * FROM currency WHERE currency_name =  'MYR' ";
        $result_currency = mysqli_query($conn, $query_currency);

        if (mysqli_num_rows($result_currency) > 0) {
            // echo "here";
            while ($row_currency = mysqli_fetch_array($result_currency)) {
                $currency = $row_currency['usd_rate'];
            }
        } else {
            echo "No matching records are found.";
        }

        //---------------------------------------------------------//
        //--------------OUTPUT-----------------------------//
        //---------------------------------------------------------//
        $result_1 = array(
            // "test" => $md,
            "tariff" => $tariff,
            "solar_capacity" => $usc,
            "solar_panel" => $uspc,
            // "battery_size" => $ubs,
            "battery_size" => $vubs,
            // "battery_price" => $ubp,
            "battery_price" => round($vubp, 2),
            // "shipment_cost" => $uscb,
            "shipment_cost" => round($vuscbs, 2),
            // "import_duty" => $uid,
            "import_duty" => round($vuid, 2),
            // "ground_transport" => $ugt,
            "ground_transport" => round($vugt, 2),
            // "installation_fee" => $ubi,
            "installation_fee" => round($vubi, 2),
            "system_maintenance" => $umt,
            // "system_insurance" => $usif,
            "system_insurance" =>  round($vusi, 2),
            // "back_end" => $ubsf,
            "back_end" => round($vups, 2),
            "year" => $uyl,
            "no_uses" => $unu,
            "peak_usage" =>   $upu,
            "max_demand" => $umd,
            "offpeak" => $uopu,
            "new_max_demand" => $unmd,
            "new_peak_usage" =>  round($vnpu, 2),

            "mac" => $umac,
            "mgre" => $umge,
            "mgg" => $umgg,

            "total_curent_bill_m" => round($vutcb_m, 2),
            "total_new_bill_m" => round($vutnb_m, 2),
            "total_curent_bill_y" => round($vutcb, 2),
            "total_new_bill_y" => round($vutnb, 2),
            "total_investment" => round($vutsc, 2),
            "total_investment_lease" => round($vutscy, 2),
            "total_saving" => round($vas, 2),
            // "payback" => $vutsc,
            // "verdict" => $vutsc,
            "total_cost_year" => round($usc, 2),

            "total_investment_1" => round($vutsc1, 2),
            "total_investment_5" => round($vutsc5, 2),
            "total_investment_10" => round($vutsc10, 2),

            "md_usd" => $md_usd,
            "pu_usd" => $pu_usd,
            "of_usd" => $of_usd,

            "md_cost" => round($md_cost, 2),
            "pu_cost" => round($pu_cost, 2),
            "of_cost" => round($of_cost, 2),
            "nmd_cost" => round($nmd_cost, 2),
            "npu_cost" => round($vpnu_cost, 2),

            "total_eu" => round($total_eu, 2),
            "total_bill" => round($total_bill, 2),
            "total_new_eu" => round($total_new_eu, 2),
            "total_new_bill_tariff" => round($total_new_bill, 2),

            "installment_depo" =>  round($vuld, 2),
            "installment_year" =>   round($vul, 2),

            // currency
            "currency" => $currency,

        );

        echo json_encode($result_1);
    } else {

        echo json_encode(array('success' => 0));
    }
}
