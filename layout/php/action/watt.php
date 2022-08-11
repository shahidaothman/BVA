<?php

include '../config/db.php';
if (!$conn) {
    echo ("Error load");
} else {
    if (isset($_GET['mac'])) {
        $mac_db = $_GET['mac'];
        $tariff_id = $_GET['tariff_power'];

        // details
        $psc = $_GET['psc'];
        $pyl = $_GET['pyl'];
        $pnp  = $_GET['pnp'];
        $pbp = $_GET['pbp'];
        $pscb = $_GET['pscb'] / 100;
        $pspc = $_GET['pspc'];
        $pbs = $_GET['pbs'];
        $pmt = $_GET['pmt'];
        $psif = $_GET['psif'] / 100;
        $pbsf = $_GET['pbsf'] / 100;

        // calculate bill
        $mge =  $psc * 5 * 30;
        $mgg = $mac_db - $mge;

        // $vtscy = (($vtsc * 0.03) * $pyl) + $vtsc;

        //---------------------------------------------------------//
        //--------------CALCULATE BILL-----------------------------//
        //---------------------------------------------------------//

        // Current Bill
        if ($mac_db <= 200) {
            $sub_id = 'pr_a1';
        } elseif ($mac_db <= 300) {
            $sub_id = "pr_a2";
        } elseif ($mac_db <= 600) {
            $sub_id = "pr_a3";
        } elseif ($mac_db <= 900) {
            $sub_id = "pr_a4";
        } elseif ($mac_db >= 901) {
            $sub_id = "pr_a5";
        } else {
            echo "error";
        }

        // New Bill
        if ($mgg <= 200) {
            $sub_new_id = 'pr_a1';
        } elseif ($mgg <= 300) {
            $sub_new_id = "pr_a2";
        } elseif ($mgg <= 600) {
            $sub_new_id = "pr_a3";
        } elseif ($mgg <= 900) {
            $sub_new_id = "pr_a4";
        } elseif ($mgg >= 901) {
            $sub_new_id = "pr_a5";
        } else {
            echo "error";
        }

        // current bill calculation
        $query = "SELECT * FROM tariff_sub WHERE tariff_sub_id =  '" . $sub_id . "' ";
        $result_tariff = mysqli_query($conn, $query);

        if (mysqli_num_rows($result_tariff) > 0) {
            // echo "here";
            while ($row = mysqli_fetch_array($result_tariff)) {
                // foreach ($result_tariff as $row) {
                $ctru = $row['cumulative_total_rate_usd'];
                // $tru = $row['total_rate_usd'];
                $usdr = $row['usd_rate'];
                if ($mac_db <= 200) {
                    $total = $mac_db * $usdr;
                } elseif ($mac_db <= 300) {
                    $temp = $mac_db - 200;
                    $total = ($temp * $usdr) + $ctru;
                } elseif ($mac_db <= 600) {
                    $temp = $mac_db - 300;
                    $total = ($temp * $usdr) + $ctru;
                } elseif ($mac_db <= 900) {
                    $temp = $mac_db - 600;
                    $total = ($temp * $usdr) + $ctru;
                } elseif ($mac_db >= 901) {
                    $temp = $mac_db - 900;
                    // echo $temp;
                    $total = ($temp * $usdr) + $ctru;
                } else {
                    $total = 0;
                }
            }

            // $total_tahunan = 12 * $total * $pyl;
            $total_bulanan = 12 * $total;
            $total_tahunan = 12 * $total * 25;
        } else {
            echo "No matching records are found.";
        }

        // New calculation
        $new_query = "SELECT * FROM tariff_sub WHERE tariff_sub_id =  '" . $sub_new_id . "' ";
        $new_result_tariff = mysqli_query($conn, $new_query);

        if (mysqli_num_rows($new_result_tariff) > 0) {
            // echo "here";
            while ($new_row = mysqli_fetch_array($new_result_tariff)) {
                // foreach ($result_tariff as $row) {
                $ctru = $new_row['cumulative_total_rate_usd'];
                // $tru = $row['total_rate_usd'];
                $usdr = $new_row['usd_rate'];
                if ($mgg <= 200) {
                    $new_total = $mgg * $usdr;
                } elseif ($mgg <= 300) {
                    $temp = $mgg - 200;
                    $new_total = ($temp * $usdr) + $ctru;
                } elseif ($mgg <= 600) {
                    $temp = $mgg - 300;
                    $new_total = ($temp * $usdr) + $ctru;
                } elseif ($mgg <= 900) {
                    $temp = $mgg - 600;
                    $new_total = ($temp * $usdr) + $ctru;
                } elseif ($mgg >= 901) {
                    $temp = $mgg - 900;
                    // echo $temp;
                    $new_total = ($temp * $usdr) + $ctru;
                } else {
                    $new_total = 0;
                }
            }
            // $total_tahunan_baru = 12 * $new_total * $pyl;
            $total_bulanan_baru = 12 * $new_total;
            $total_tahunan_baru = 12 * $new_total * 25;
        } else {
            echo "No matching records are found.";
        }

        //---------------------------------------------------------//
        //--------------CALCULATE TOTAL INVESTMENT ----------------//
        //---------------------------------------------------------//


        $vbs = ($pbs * $pnp);
        $vbp = ($pbp * $pnp);
        $vscbs = ($vbp * $pscb);
        $vsi = ($pspc + $vbp) * $psif;
        $vps = ($pspc + $vbp) * $pbsf;

        $vtsc = (($pspc + $vbp + $vscbs) + (($pmt + $vsi + $vps) * $pyl));

        //---------------------------------------------------------//
        //--------------CALCULATE TOTAL SAVING ----------------//
        //---------------------------------------------------------//
        $vtscy = (($vtsc * 0.03) * $pyl) + $vtsc;
        $vld = $vtscy * 0.1;
        $vl = ($vtscy - $vld) / ($pyl - 1);

        //---------------------------------------------------------//
        //-----------------------Tariff compare Table -------------//
        //---------------------------------------------------------//

        // current bill calculation
        // $query_summary = "SELECT * FROM tariff_sub WHERE tariff_id =  '" . $tariff_id . "'";
        $query_summary = "SELECT *
         FROM tariff_sub 
         WHERE tariff_id =  '$tariff_id'
         AND  tariff_min_value <= '$mac_db' ";

        $summary_tariff = mysqli_query($conn, $query_summary);
        $test = array();

        if (mysqli_num_rows($summary_tariff) > 0) {
            // echo "here";
            // while ($summary = mysqli_fetch_array($summary_tariff)) {
            //     $test[] = $summary;
            //   echo ($mac_db);
            //     echo json_encode($test);
            // }
            foreach ($summary_tariff as $line) {
                $t_max = $line["tariff_max_value"];
                $t_min = $line["tariff_min_value"];
                $t_group = $line["tariff_group_label"];
                // $t_id = $line["tariff_sub_id"];
                $usd = $line["usd_rate"];

                if ($t_max > $mac_db) {
                    $t_out = $mac_db - $t_min;
                    $t_usd = $t_out *  $usd;
                    $usage = $t_out;
                } else {
                    $t_out =  $t_max;
                    $t_usd = $line["total_rate_usd"];
                    $usage =  $line["tariff_usage"];
                }

                $test[] = array('group' => $t_group, 'max' => $t_max, 'max_display' => $t_out, 'usage' => $usage, 'rate' => $usd, 'total_rate' => $t_usd);
                // }
                // else {
                //     echo "end";
                // }
            }
            // echo json_encode($test);
        }

        $query_summary_1 = "SELECT *
        FROM tariff_sub 
        WHERE tariff_id =  '$tariff_id'
        AND  tariff_min_value <= '$mgg' ";
 
       $summary_tariff_1 = mysqli_query($conn, $query_summary_1);
       $test_1 = array();
//   echo $mgg;
       if (mysqli_num_rows($summary_tariff_1) > 0) {
        
           // while ($summary = mysqli_fetch_array($summary_tariff)) {
           //     $test[] = $summary;
           //   echo ($mac_db);
           //     echo json_encode($test);
           // }
           foreach ($summary_tariff_1 as $line_1) {
               $t_max = $line_1["tariff_max_value"];
               $t_min = $line_1["tariff_min_value"];
               $t_group = $line_1["tariff_group_label"];
               // $t_id = $line["tariff_sub_id"];
               $usd = $line_1["usd_rate"];

               if ($t_max > $mgg) {
                   $t_out = $mgg - $t_min;
                   $t_usd = $t_out *  $usd;
                   $usage = $t_out;
               } else {
                   $t_out =  $t_max;
                   $t_usd = $line_1["total_rate_usd"];
                   $usage =  $line_1["tariff_usage"];
               }

               $test_1[] = array('group' => $t_group, 'max' => $t_max, 'max_display' => $t_out, 'usage' => $usage, 'rate' => $usd, 'total_rate' => $t_usd);
               // }
               // else {
               //     echo "end";
               // }
           }
           // echo json_encode($test);
       }

        //---------------------------------------------------------//
        //---------------------------OUTPUT -----------------------//
        //---------------------------------------------------------//
        $result = array(
            "average_watt" => $mac_db,
            // "tariff" => $tariff_id,
            // "test" => $test,
            // details
            "solar_panel_cost" => $pspc,
            "system_maintain" => $pmt,
            "monthly_generation_RE" => $mge,
            "monthly_grid" => $mgg,
            "year_lease" => $pyl,
            // current bill
            "tarif_id" => $sub_id,
            "total" => $total,
            "total_tahunan" =>  $total_tahunan,
            // new bill
            "solar_capacity" => $psc,
            "new_tariff_id" => $sub_new_id,
            "new_total" => $new_total,
            "new_total_tahunan" => $total_tahunan_baru,
            // total investment
            "battery_size" => $vbs,
            "battery_price" => $vbp,
            "shipment_cost" => $vscbs,
            "insurance_cost" => $vsi,
            "backend_cost" => $vps,
            "system_cost" => $vtsc,
            // total saving
            "year_leasing" => $vtscy,
            "depo_cost" => $vld,
            "leasing_cost" => $vl,
            // projection
            "monthly_lease" => $total_bulanan_baru,
            "monthly" =>  $total_bulanan,

            // tariff table 
            "table" => $test,
            "table_1" => $test_1,
        );
        // $json = json_encode($result);
        echo json_encode($result);

        //   echo json_encode(array('success' => 1));
    } else {
        echo json_encode(array('success' => 0));
    }
}
