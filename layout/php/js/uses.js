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

                // projection table

                var y = 1;
                var monthly = data.total_curent_bill_m;
                var monthly_lease = data.total_new_bill_m;
                var saving_1year = monthly - monthly_lease - leasing_depo;
                var saving_year = monthly - monthly_lease - leasing;

                var payback = 0;


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


                        y++;

                    }

                }

                // go to next page
                window.location.href = "#ouses";
            }
        });
    });
}