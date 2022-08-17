function power() {
$('#calculate_form').submit(function(e) {
    
    // console.log($(this).serialize());
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: 'layout/php/action/power.php',
        data: $(this).serialize(),
        dataType: "json",
        success: function(data) {
            $("#table_test").empty();
            $("#t_projection").empty();
            $("#exampleid").empty();
            $('#current_bill').html(data.total_tahunan + ' ' + 'USD');
            $('#new_bill').html(data.new_total_tahunan + ' ' + 'USD');
            $('#investment_cost').html(data.system_cost + ' ' + 'USD');
            // $('#total_saving').html(data.leasing_cost + ' ' + 'USD');
            // table
            $('#t_sc').html(data.solar_capacity);
            $('#t_sp').html(data.solar_panel_cost);
            $('#t_bs').html(data.battery_size);
            $('#t_bp').html(data.battery_price);
            $('#t_scb').html(data.shipment_cost);
            $('#t_sm').html(data.system_maintain);
            $('#t_si').html(data.insurance_cost);
            $('#t_ps').html(data.backend_cost);
            $('#t_tsc').html(data.system_cost);
            $('#t_tscl').html(data.year_leasing);

            $('#t_mac').html(data.average_watt);
            $('#t_mgr').html(data.monthly_generation_RE);
            $('#t_mgg').html(data.monthly_grid);

            $('#tesst').html(data.test);

            // $('#t_vld').html(data.depo_cost);
            // $('#t_vl').html(data.leasing_cost);

            var year = data.year_lease;
            var leasing = data.leasing_cost;
            var leasing_depo = data.depo_cost
            var x = 1;
            // alert (year);
            while (x <= year) {
                // $('#t_test').html(x);
                if (x == 1) {
                    $('#exampleid').append("<tr>\
                            <td>Year " + x + " (Deposit 10%)</td>\
                            <td>" + leasing_depo + "</td>\
                            </tr>");
                    // console.log(x);
                    x++;
                } else if (x <= year) {

                    $('#exampleid').append("<tr>\
                            <td>Year " + x + "</td>\
                            <td>" + leasing + "</td>\
                            </tr>");
                    // console.log(x);
                    x++;

                }
            }
            // projection
            var y = 1;
            var monthly = data.monthly;
            var monthly_lease = data.monthly_lease;
            var saving_1year = monthly - monthly_lease - leasing_depo;
            var saving_year = monthly - monthly_lease - leasing;

            var payback = 0;

            var sum_wop = 0;
            var sum_wp = 0;
            var sum_lease = 0;
            var sum_save = 0;
            var sum_payback = 0;

            var tic1 = data.investment_1;
            var tic5 = data.investment_5;
            var tic10 = data.investment_10;
            var overall = data.system_cost;
            $('#1y_ic').html(tic1 + ' ' + 'USD');
            if (year <= 2) {

                $('#5y_ic').html(overall + ' ' + 'USD');
                $('#10y_ic').html(overall + ' ' + 'USD');
                $('#15y_ic').html(overall + ' ' + 'USD');
                $('#20y_ic').html(overall + ' ' + 'USD');
                $('#25y_ic').html(overall + ' ' + 'USD');
            } else if (year <= 5) {
                $('#5y_ic').html(tic5 + ' ' + 'USD');
                $('#10y_ic').html(tic5 + ' ' + 'USD');
                $('#15y_ic').html(tic5 + ' ' + 'USD');
                $('#20y_ic').html(tic5 + ' ' + 'USD');
                $('#25y_ic').html(tic5 + ' ' + 'USD');

            } else if (year == 10) {
                $('#5y_ic').html(tic5 + ' ' + 'USD');
                $('#10y_ic').html(tic10 + ' ' + 'USD');
                $('#15y_ic').html(tic10 + ' ' + 'USD');
                $('#20y_ic').html(tic10 + ' ' + 'USD');
                $('#25y_ic').html(tic10 + ' ' + 'USD');

            }



            while (y <= 25) {
                if (y == 1) {
                    var c = saving_1year + payback;
                    var payback = parseFloat(c.toFixed(2));
                    $('#t_projection').append("<tr>\
                            <td> " + y + "</td>\
                            <td>" + monthly + "</td>\
                            <td>" + monthly_lease + "</td>\
                            <td>" + leasing_depo + "</td>\
                            <td>" + saving_1year + "</td>\
                            </tr>");

                    sum_wop += monthly;
                    sum_wp += monthly_lease;
                    sum_lease += leasing_depo;
                    sum_save += saving_1year;
                    sum_payback += payback;

                    $('#1y_nb').html(monthly_lease + ' ' + 'USD');
                    // $('#1y_ic').html(payback + ' ' + 'USD');
                    $('#1y_ts').html(saving_1year + ' ' + 'USD');
                    $('#1y_lease').html(leasing_depo + ' ' + 'USD');

                    y++;

                } else if (y <= year) {
                    var c = saving_year + payback;
                    var payback = parseFloat(c.toFixed(2));
                    $('#t_projection').append("<tr>\
                            <td> " + y + "</td>\
                            <td>" + monthly + "</td>\
                            <td>" + monthly_lease + "</td>\
                            <td>" + leasing + "</td>\
                            <td>" + saving_year + "</td>\
                            </tr>");

                    sum_wop += monthly;
                    sum_wp += monthly_lease;
                    sum_lease += leasing;
                    sum_save += saving_year;
                    sum_payback += payback;


                    var fsp = parseFloat(sum_payback.toFixed(2));
                    var fswp = parseFloat(sum_wp.toFixed(2));
                    var fslease = parseFloat(sum_lease.toFixed(2));
                    var fsaving = parseFloat(sum_save.toFixed(2));

                    if (y == 5) {
                        // $('#5y_nb').html(monthly_lease + ' ' + 'USD');
                        // $('#5y_ic').html(payback + ' ' + 'USD');
                        // $('#5y_ts').html(saving_year + ' ' + 'USD');
                        // $('#5y_lease').html(leasing + ' ' + 'USD');
                        $('#5y_nb').html(fswp + ' ' + 'USD');
                        // $('#5y_ic').html(fsp + ' ' + 'USD');
                        $('#5y_ts').html(fsaving + ' ' + 'USD');
                        $('#5y_lease').html(fslease + ' ' + 'USD');

                    } else if (y == 10) {
                        $('#10y_nb').html(fswp + ' ' + 'USD');
                        // $('#10y_ic').html(fsp + ' ' + 'USD');
                        $('#10y_ts').html(fsaving + ' ' + 'USD');
                        $('#10y_lease').html(fslease + ' ' + 'USD');
                    }



                    y++;

                } else if (y > year) {
                    var saving_nyear = monthly - monthly_lease - 0;
                    var c = saving_nyear + payback;
                    var payback = parseFloat(c.toFixed(2));
                    var leasing = 0;
                    $('#t_projection').append("<tr>\
                            <td> " + y + "</td>\
                            <td>" + monthly + "</td>\
                            <td>" + monthly_lease + "</td>\
                            <td>" + leasing + "</td>\
                            <td>" + saving_nyear + "</td>\
                            </tr>");

                    sum_wop += monthly;
                    sum_wp += monthly_lease;
                    sum_lease += leasing;
                    sum_save += saving_nyear;
                    sum_payback += payback;

                    var fsp = parseFloat(sum_payback.toFixed(2));
                    var fswp = parseFloat(sum_wp.toFixed(2));
                    var fslease = parseFloat(sum_lease.toFixed(2));
                    var fsaving = parseFloat(sum_save.toFixed(2));
                    if (y == 5) {
                        // $('#5y_nb').html(monthly_lease + ' ' + 'USD');
                        // $('#5y_ic').html(payback + ' ' + 'USD');
                        // $('#5y_ts').html(saving_nyear + ' ' + 'USD');
                        // $('#5y_lease').html(leasing + ' ' + 'USD');
                        $('#5y_nb').html(fswp + ' ' + 'USD');
                        // $('#5y_ic').html(fsp + ' ' + 'USD');
                        $('#5y_ts').html(fsaving + ' ' + 'USD');
                        $('#5y_lease').html(fslease + ' ' + 'USD');
                    } else if (y == 10) {
                        $('#10y_nb').html(fswp + ' ' + 'USD');
                        // $('#10y_ic').html(fsp + ' ' + 'USD');
                        $('#10y_ts').html(fsaving + ' ' + 'USD');
                        $('#10y_lease').html(fslease + ' ' + 'USD');
                    } else if (y == 15) {
                        $('#15y_nb').html(fswp + ' ' + 'USD');
                        // $('#15y_ic').html(fsp + ' ' + 'USD');
                        $('#15y_ts').html(fsaving + ' ' + 'USD');
                        $('#15y_lease').html(fslease + ' ' + 'USD');
                    } else if (y == 20) {
                        $('#20y_nb').html(fswp + ' ' + 'USD');
                        // $('#20y_ic').html(fsp + ' ' + 'USD');
                        $('#20y_ts').html(fsaving + ' ' + 'USD');
                        $('#20y_lease').html(fslease + ' ' + 'USD');
                    } else if (y == 25) {
                        $('#25y_nb').html(fswp + ' ' + 'USD');
                        // $('#25y_ic').html(fsp + ' ' + 'USD');
                        $('#25y_ts').html(fsaving + ' ' + 'USD');
                        $('#25y_lease').html(fslease + ' ' + 'USD');
                    }



                    y++;

                }

            }

            var fswop = parseFloat(sum_wop.toFixed(2));
            var fswp = parseFloat(sum_wp.toFixed(2));
            var fslease = parseFloat(sum_lease.toFixed(2));
            var fsaving = parseFloat(sum_save.toFixed(2));

            $('#t_projection').append("<tr class='b_green'>\
                            <th> Total (USD) </th>\
                            <th>" + fswop + "</th>\
                            <th>" + fswp + "</th>\
                            <th>" + fslease + "</th>\
                            <th>" + fsaving + "</th>\
                              </tr>");
            // var table = JSON.stringify(data.table.group)
            var table = JSON.stringify(data.table);
            var z = data.table;
            $.each(z, function(i, z) {
                // console.log(z.usage);

                if (z.usage === undefined || z.total_rate === undefined) {
                    var usage = 0;
                    var usage_rate = 0;
                } else {
                    var usage = z.usage;
                    var usage_rate = z.total_rate;
                }
                $('#table_test').append("<tr>\
            <td> " + z.group + "</td>\
            <td> " + z.rate_t + "</td>\
            <td> " + z.usage_t + "</td>\
            <td> " + z.total_rate_t + "</td>\
            <td> " + usage + "</td>\
            <td> " + usage_rate + "</td>\
            </tr>");
            });
            $('#table_test').append("<tr>\
        <th colspan='2'>Total</th>\
        <th> " + data.average_watt + "</th>\
              <th> " + data.total + "</th>\
              <th> " + data.monthly_grid + "</th>\
              <th> " + data.new_total + "</th>\
        </th>");
            var group = table.group;
            var usage_t = table.usage_t;

            // console.log(group);
            // console.log(table);

            // $('#table_test').html(data.table);



            // alert(JSON.stringify(data.table))
            // $('#table_test').append("<tr>\
            // 					<td> " + JSON.stringify(data.table.group) + "</td>\
            //                     <td>" + JSON.stringify(data.table[1]) + "</td>\
            //               										</tr>");

            //    var jsonData = JSON.parse(response);
            // user is logged in successfully in the back-end
            // let's redirect
            //    if (jsonData.success == "1") {
            //   alert("success");
            //   alert(data.id);
            // alert("hello" + data.new_total_tahunan);
            // alert("battery_size" + data.battery_size +
            //     "battery_price" + data.battery_price +
            //     "shipment_cost" + data.shipment_cost +
            //     "insurance_cost" + data.insurance_cost +
            //     "backend_cost" + data.backend_cost +
            //     "investment" + data.investment_cost +
            //     "t1" + data.t1 +
            //     "t2" + data.t2 +
            //     "saving_cost" + data.saving_cost );
            //  alert("current" + data.new_total);
            //    } 
            //    else {
            //        alert('Invalid Credentials!');
            //    }

            $('#total_saving').html(fsaving + ' ' + 'USD');
            window.location.href = "#opower";

        }

    });
});
};