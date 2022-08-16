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
        if ($tariff_id == 'pr_a') {


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
        }
        // TARIFF B
        elseif ($tariff_id == 'pc_b') {

            if ($mac_db <= 200) {
                $sub_id = 'pc_b1';
            } else {
                $sub_id = 'pc_b2';
            }

            if ($mgg <= 200) {
                $sub_new_id = 'pc_b1';
            } else {
                $sub_new_id = 'pc_b2';
            }

            // current bill calculation
            $query_tb = "SELECT * FROM tariff_sub WHERE tariff_sub_id =  '" . $sub_id . "' ";
            $result_tariff_tb = mysqli_query($conn, $query_tb);

            if (mysqli_num_rows($result_tariff_tb) > 0) {
                // echo "here";
                while ($row_tb = mysqli_fetch_array($result_tariff_tb)) {
                    // foreach ($result_tariff as $row) {
                    $ctru = $row_tb['cumulative_total_rate_usd'];
                    echo $ctru;
                    // $tru = $row['total_rate_usd'];
                    $usdr = $row_tb['usd_rate'];
                    if ($mac_db <= 200) {
                        $total = $mac_db * $usdr;
                    } elseif ($mac_db >= 201) {
                        $temp = $mac_db - 200;
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
            $new_query_tb = "SELECT * FROM tariff_sub WHERE tariff_sub_id =  '" . $sub_new_id . "' ";
            $new_result_tariff_tb = mysqli_query($conn, $new_query_tb);

            if (mysqli_num_rows($new_result_tariff_tb) > 0) {
                // echo "here";
                while ($new_row = mysqli_fetch_array($new_result_tariff_tb)) {
                    // foreach ($result_tariff as $row) {
                    $ctru = $new_row['cumulative_total_rate_usd'];
                    // $tru = $row['total_rate_usd'];
                    $usdr = $new_row['usd_rate'];
                    if ($mgg <= 200) {
                        $new_total = $mgg * $usdr;
                    } elseif ($mgg >= 201) {
                        $temp = $mgg - 200;
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
        }


        //---------------------------------------------------------//
        //--------------CALCULATE TOTAL INVESTMENT ----------------//
        //---------------------------------------------------------//


        $vbs = ($pbs * $pnp);
        $vbp = ($pbp * $pnp);
        $vscbs = ($vbp * $pscb);
        $vsi = ($pspc + $vbp) * $psif;
        $vps = ($pspc + $vbp) * $pbsf;

        $vtscpy = (($pspc + $vbp + $vscbs) + ($pmt + $vsi + $vps));
        $vtsc = (($pspc + $vbp + $vscbs) + (($pmt + $vsi + $vps) * $pyl));

       
            $vtsc1 = (($pspc + $vbp + $vscbs) + (($pmt + $vsi + $vps) * 1));
      
            $vtsc5 = (($pspc + $vbp + $vscbs) + (($pmt + $vsi + $vps) * 5));
      
            $vtsc10 = (($pspc + $vbp + $vscbs) + (($pmt + $vsi + $vps) * 10));
     
            $fvtsc1 = round($vtsc1, 2);
            $fvtsc5 = round($vtsc5, 2);
            $fvtsc10 = round($vtsc10, 2);
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

                // $usd =  round($line["usd_rate"], 2);
                $usd =  $line["usd_rate"];
                if ($t_max > $mac_db) {
                    $t_out = $mac_db - $t_min;
                    $t_usd = ($t_out + 1) *  $usd;
                    $usage = $t_out + 1;
                } else {
                    $t_out =  $t_max;
                    $t_usd = $line["total_rate_usd"];
                    $usage =  $line["tariff_usage"];
                }

                $test[] = array('group' => $t_group,  'usage_t' => $usage, 'rate_t' => $usd, 'total_rate_t' => $t_usd);
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
                    $t_usd = ($t_out + 1) *  $usd;
                    $usage = $t_out + 1;
                } else {
                    $t_out =  $t_max;
                    $t_usd = $line_1["total_rate_usd"];
                    $usage =  $line_1["tariff_usage"];
                }

                $test_1[] = array('group' => $t_group, 'usage' => $usage, 'rate' => $usd, 'total_rate' => round($t_usd,2) );
                // }
                // else {
                //     echo "end";
                // }
            }
            // echo json_encode($test);
        }

        $lookup = array_column($test_1, null, 'group');
        foreach ($test as &$row) {
            $row += $lookup[$row['group']] ?? [];
        }

        // echo $test;
        //---------------------------------------------------------//
        //---------------------------FORMAT -----------------------//
        //---------------------------------------------------------//
        $fvld = round($vld, 2);
        $fvl = round($vl, 2);

        $ftotal_bulanan_baru = round($total_bulanan_baru, 2);
        $ftotal_bulanan = round($total_bulanan, 2);
        $ftotal_tahunan = round($total_tahunan, 2);
        $ftotal_tahunan_baru  = round($total_tahunan_baru, 2);

        // $ftotal = round($total, 2);
        $ftotal = $total;


        $fvtsc = round($vtsc, 2);
        $fvbp = round($vbp, 2);
        $fvscbs = round($vscbs, 2);
        $fvsi = round($vsi, 2);
        $fvps = round($vps, 2);

        $fvtscy = round($vtscy, 2);



        //---------------------------------------------------------//
        //---------------------------OUTPUT -----------------------//
        //---------------------------------------------------------//
        $result = array(
            "average_watt" => $mac_db,
            // "tariff" => $tariff_id,
            "pnp" => $pnp,
            // details
            "solar_panel_cost" => $pspc,
            "system_maintain" => $pmt,
            "monthly_generation_RE" => $mge,
            "monthly_grid" => $mgg,
            "year_lease" => $pyl,
            // current bill
            "tarif_id" => $sub_id,
            "total" => $ftotal,
            "total_tahunan" =>  $ftotal_tahunan,
            // new bill
            "solar_capacity" => $psc,
            "new_tariff_id" => $sub_new_id,
            "new_total" => $new_total,
            "new_total_tahunan" => $ftotal_tahunan_baru,
            // total investment
            "battery_size" => $vbs,
            "battery_price" => $fvbp,
            "shipment_cost" => $fvscbs,
            "insurance_cost" => $fvsi,
            "backend_cost" => $fvps,

            "investment_1" =>  $fvtsc1,
            "investment_5" =>  $fvtsc5,
            "investment_10" =>  $fvtsc10,

            "system_cost_pyear" => $vtscpy,
            "system_cost" => $fvtsc,
            // total saving
            "year_leasing" => $fvtscy,
            "depo_cost" => $fvld,
            "leasing_cost" => $fvl,
            // projection
            "monthly_lease" => $ftotal_bulanan_baru,
            "monthly" =>  $ftotal_bulanan,

            // tariff table 
            "table" => $test,
            "table_1" => $test_1,
            "table_2" => $test_1,
        );
        // $json = json_encode($result);
        echo json_encode($result);

        //   echo json_encode(array('success' => 1));
    } else {
        echo json_encode(array('success' => 0));
    }
}
