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
                $('#t_vutsc').html(data.total_cost);

                $('#t_umgg').html(data.mgg);
                $('#t_umac').html(data.mac);
                $('#t_umgr').html(data.mgre);

                $('#current_bill_uses').html(data.total_curent_bill);
                $('#new_bill_uses').html(data.total_new_bill);
                $('#investment_cost_uses').html(data.total_investment);
                $('#total_saving_uses').html(data.total_saving);




                $('#t_utariff').append("<tr>\
                <td>Max Demand Peak Period </td>\
                <td>" + data.md_usd + "</td>\
                <td>" + data.max_demand + "</td>\
                <td>" + data.md_cost + "</td>\
                <td>" + data.new_max_demand + "</td>\
                <td>" + data.nmd_cost + "</td>\
                </tr>\
                <tr>\
                <td>Peak Usage </td>\
                <td>" + data.pu_usd + "</td>\
                <td>" + data.peak_usage + "</td>\
                <td>" + data.pu_cost + "</td>\
                <td>" + data.new_peak_usage + "</td>\
                <td>" + data.npu_cost + "</td>\
                </tr>\
                <tr>\
                <p>HELLLOOO</p>\
                <td> Off Peak Usage </td>\
                <td>" + data.of_usd + "</td>\
                <td>" + data.offpeak + "</td>\
                <td>" + data.of_cost + "</td>\
                <td>" + data.offpeak + "</td>\
                <td>" + data.of_cost + "</td>\
                </tr>\
                <tr>\
                <th>Total</th>\
                <td>" + data.total_eu + "</td>\
                <td>" + data.total_bill + "</td>\
                <td>" + data.total_new_eu + "</td>\
                <td>" + data.total_new_bill_tariff + "</td>\
                </tr>");

                window.location.href = "#ouses";
            }
        });
    });
}