function uses() {
    $('#calculate_form').submit(function (e) {
        // console.log($(this).serialize());
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: 'layout/php/action/uses.php',
            data: $(this).serialize(),
            dataType: "json",
            success: function (data) {
                $("#t_utariff").empty();
                $("#table_uintsallment").empty();
                $('#t_uprojection').empty();
                console.log(data);
                $('#t_usc').html(data.solar_capacity);
                $('#t_uspc').html(data.solar_panel);
                $('#t_ubs').html(data.battery_size);
                $('#t_ubp').html(data.battery_price);
                $('#t_uscb').html(data.shipment_cost);
                $('#t_uid').html(data.import_duty);
                $('#t_ugt').html(data.ground_transport);
                $('#t_ubi').html(data.installation_fee);
                $('#t_umt').html(data.system_maintenance);
                $('#t_usif').html(data.system_insurance);
                $('#t_ubsf').html(data.back_end);
                $('#t_vutsc').html(data.total_investment);
                $('#t_vutscy').html(data.total_investment_lease);

                $('#t_umgg').html(data.mgg);
                $('#t_umac').html(data.mac);
                $('#t_umgr').html(data.mgre);

                $('#current_bill_uses').html(data.total_curent_bill_y);
                $('#new_bill_uses').html(data.total_new_bill_y);
                $('#investment_cost_uses').html(data.total_investment);
                $('#total_saving_uses').html(data.total_saving);


                // tariff table

                $('#t_utariff').append(`<tr>\
                <td>Max Demand Peak Period </td>\
                <td>${data.md_usd}</td>\
                <td>${data.max_demand}</td>\
                <td>${data.md_cost}</td>\
                <td>${data.new_max_demand}</td>\
                <td>${data.nmd_cost}</td>\
                </tr>\
                <tr>\
                <td>Peak Usage </td>\
                <td>${data.pu_usd}</td>\
                <td>${data.peak_usage}</td>\
                <td>${data.pu_cost}</td>\
                <td>${data.new_peak_usage}</td>\
                <td>${data.npu_cost}</td>\
                </tr>\
                <tr>\
                  <td> Off Peak Usage </td>\
                <td>${data.of_usd}</td>\
                <td>${data.offpeak}</td>\
                <td>${data.of_cost}</td>\
                <td>${data.offpeak}</td>\
                <td>${data.of_cost}</td>\
                </tr>\
                <tr>\
                <th colspan="2">Total</th>\
                <th>${data.total_eu}</th>\
                <th>${data.total_bill}</th>\
                <th>${data.total_new_eu}</th>\
                <th>${data.total_new_bill_tariff}</th>\
                </tr>`);

                // installment table
                var year = data.year;
                var leasing = data.installment_year;
                var leasing_depo = data.installment_depo
                var x = 1;

                while (x <= year) {

                    if (x == 1) {
                        $('#table_uintsallment').append("<tr>\
                                <td>Year " + x + " (Deposit 10%)</td>\
                                <td>" + leasing_depo + "</td>\
                                </tr>");
                        x++;
                    } else if (x <= year) {
                        $('#table_uintsallment').append("<tr>\
                                <td>Year " + x + "</td>\
                                <td>" + leasing + "</td>\
                                </tr>");
                        x++;

                    }
                }
                // card
                var tic1 = data.total_investment_1;
                var tic5 = data.total_investment_5;
                var tic10 = data.total_investment_10;
                var overall = data.total_investment;

                $('#1y_uic').html(tic1 + ' ' + 'USD');
                if (year > 1 && year < 5) {
                    $('#5y_uic').html(overall + ' ' + 'USD');
                    $('#10y_uic').html(overall + ' ' + 'USD');
                    $('#15y_uic').html(overall + ' ' + 'USD');

                }
                else if (year == 5) {
                    $('#5y_uic').html(tic5 + ' ' + 'USD');
                    $('#10y_uic').html(tic5 + ' ' + 'USD');
                    $('#15y_uic').html(tic5 + ' ' + 'USD');
                }
                else if (year > 5 && year < 10) {
                    $('#5y_uic').html(tic5 + ' ' + 'USD');
                    $('#10y_uic').html(overall + ' ' + 'USD');
                    $('#15y_uic').html(overall + ' ' + 'USD');
                }
                else if (year == 10) {
                    $('#5y_uic').html(tic5 + ' ' + 'USD');
                    $('#10y_uic').html(tic10 + ' ' + 'USD');
                    $('#15y_uic').html(tic10 + ' ' + 'USD');
                }

                // projection table

                var y = 1;
                var monthly = data.total_curent_bill_m;
                var monthly_lease = data.total_new_bill_m;
                var saving_1year = monthly - monthly_lease - leasing_depo;
                var saving_year = monthly - monthly_lease - leasing;

                var payback = 0;

                var sum_uwop = 0;
                var sum_uwp = 0;
                var sum_ulease = 0;
                var sum_usave = 0;
                var sum_upayback = 0;






                const uses_array = [];
                const fu_year = [];

                while (y <= 15) {
                    if (y == 1) {
                        var c = saving_1year + payback;
                        var payback = parseFloat(c.toFixed(2));
                        $('#t_uprojection').append("<tr>\
                                <td> " + y + "</td>\
                                <td>" + monthly + "</td>\
                                <td>" + monthly_lease + "</td>\
                                <td>" + leasing_depo + "</td>\
                                <td>" + saving_1year + "</td>\
                                <td>" + payback + "</td>\
                                </tr>");

                        $('#1y_unb').html(monthly_lease + ' ' + 'USD');
                        $('#1y_uts').html(saving_1year + ' ' + 'USD');
                        $('#1y_ulease').html(leasing_depo + ' ' + 'USD');

                        sum_uwop += monthly;
                        sum_uwp += monthly_lease;
                        sum_ulease += leasing_depo;
                        sum_usave += saving_1year;
                        sum_upayback += payback;

                        const master = { payback: payback, year: y };
                        fu_year.push(master);
                        uses_array.push(payback);

                        y++;

                    } else if (y <= year) {
                        var c = saving_year + payback;
                        var payback = parseFloat(c.toFixed(2));
                        $('#t_uprojection').append("<tr>\
                                <td> " + y + "</td>\
                                <td>" + monthly + "</td>\
                                <td>" + monthly_lease + "</td>\
                                <td>" + leasing + "</td>\
                                <td>" + saving_year + "</td>\
                                <td>" + payback + "</td>\
                                </tr>");

                        sum_uwop += monthly;
                        sum_uwp += monthly_lease;
                        sum_ulease += leasing;
                        sum_usave += saving_year;
                        sum_upayback += payback;

                        if (y == 5) {
                            $('#5y_unb').html(sum_uwp + ' ' + 'USD');
                            $('#5y_uts').html(sum_usave + ' ' + 'USD');
                            $('#5y_ulease').html(sum_ulease + ' ' + 'USD');

                        } else if (y == 10) {
                            $('#10y_unb').html(sum_uwp + ' ' + 'USD');
                            $('#10y_uts').html(sum_usave + ' ' + 'USD');
                            $('#10y_ulease').html(sum_ulease + ' ' + 'USD');
                        }

                        const master = { payback: payback, year: y };
                        fu_year.push(master);
                        uses_array.push(payback);

                        y++;

                    } else if (y > year) {
                        var saving_nyear = monthly - monthly_lease - 0;
                        var c = saving_nyear + payback;
                        var payback = parseFloat(c.toFixed(2));
                        var leasing = 0;
                        $('#t_uprojection').append("<tr>\
                                <td> " + y + "</td>\
                                <td>" + monthly + "</td>\
                                <td>" + monthly_lease + "</td>\
                                <td>" + leasing + "</td>\
                                <td>" + saving_nyear + "</td>\
                                <td>" + payback + "</td>\
                                </tr>");

                        sum_uwop += monthly;
                        sum_uwp += monthly_lease;
                        sum_ulease += leasing;
                        sum_usave += saving_nyear;
                        sum_upayback += payback;

                        if (y == 5) {
                            $('#5y_unb').html(sum_uwp + ' ' + 'USD');
                            $('#5y_uts').html(sum_usave + ' ' + 'USD');
                            $('#5y_ulease').html(sum_ulease + ' ' + 'USD');
                        } else if (y == 10) {
                            $('#10y_unb').html(sum_uwp + ' ' + 'USD');
                            $('#10y_uts').html(sum_usave + ' ' + 'USD');
                            $('#10y_ulease').html(sum_ulease + ' ' + 'USD');
                        } else if (y == 15) {
                            $('#15y_unb').html(sum_uwp + ' ' + 'USD');
                            $('#15y_uts').html(sum_usave + ' ' + 'USD');
                            $('#15y_ulease').html(sum_ulease + ' ' + 'USD');
                        }

                        const master = { payback: payback, year: y };
                        fu_year.push(master);
                        uses_array.push(payback);
                        y++;
                    }
                }

                $('#t_uprojection').append("<tr class='b_green'>\
                <th> Total (USD) </th>\
                <th>" + sum_uwop + "</th>\
                <th>" + sum_uwp + "</th>\
                <th>" + sum_ulease + "</th>\
                <th>" + sum_usave + "</th>\
                <th>" + sum_upayback + "</th>\
                  </tr>");

                //   calculate payback
                // console.log(fu_year);
                // console.log(uses_array);
                var largest = sum_ulease;
                for (i = 0; i <= largest; i++) {
                    if (uses_array[i] > largest) {
                        var number = uses_array[i];
                        break;
                    }
                    else {
                        var number = 0;
                    }
                }
                //    console.log (number);

                // console.log (item.year);
                if (number != 0) {
                    var item = fu_year.find(item => item.payback === number);
                    $('#payback_uses').html(item.year + " " + "Year");
                    $('#verdict_uses').html(" <span class='text-success'> Viable </span>");
                }
                else if (number == 0) {
                    $('#payback_uses').html("Not Yet");
                    $('#verdict_uses').html("<span class='text-danger'> Not Recommended </span>");
                }

                // go to next page
                window.location.href = "#ouses";
            }
        });
    });
}