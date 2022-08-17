function uses() {
    $('#calculate_form').submit(function(e) {
        // console.log($(this).serialize());
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: 'layout/php/action/uses.php',
            data: $(this).serialize(),
            dataType: "json",
            success: function(data) {

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
                
                console.log (data);
                window.location.href = "#ouses";
            }
        });
    });
}