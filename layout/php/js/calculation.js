$(document).ready(function() {
    $("#calculate_power").click(function() {
        // Basic
        var tariff = $('#tariff_power').val();
        var mac = $('#mac').val();
        // alert (mac);
        // Details

        var yl = $('#yl').val();
        var p_s_c = $('#psc').val();
        var bs = $('#bs').val();
        var bp = $('#bp').val();
        var scb = $('#scb').val();
        var mt = $('#mt').val();
        var sif = $('#sif').val();
        var bsf = $('#bsf').val();
        var np = $('#np').val();
        var spc = $('#spc').val();

        //    Output
        //Basic
        $("#s_tariff").html(" " + tariff);
        $("#s_mac").html(" " + mac + " kWh");
        // Details
        $("#s_psc").html(" " + p_s_c + " kWh");
        $("#s_yl").html(" " + yl + " Year");
        $("#s_bs").html(" " + bs + " kWh");
        $("#s_bp").html(" " + bp + " USD");
        $("#s_scb").html(" " + scb + " %");
        $("#s_mt").html(" " + mt + " USD");
        $("#s_sif").html(" " + sif + " %");
        $("#s_bsf").html(" " + bsf + " %");
        $("#s_np").html(" " + np + " unit");
        $("#s_spc").html(" " + spc + " USD");
    });

    // calculate total current bill 
    if (mac < 200) {
        // todo call from sql php
        var total = mac * total_usd_rate
    } else if (mac < 300) {
        var temp = 300 - mac;
        var total = (temp * total_usd_rate) + cumulative_total_rate_usd;
    } else if (mac < 600) {
        var temp = 600 - mac;
        var total = (temp * total_usd_rate) + cumulative_total_rate_usd;
    } else if (mac < 900) {
        var temp = 900 - mac;
        var total = (temp * total_usd_rate) + cumulative_total_rate_usd;
    } else {
        var temp = (mac - 900);
        var total = (temp * total_usd_rate) + cumulative_total_rate_usd;
    }
    var total_tahun = total * 12;

    //    calculate new bill
    var a = p_s_c * 5 * 30;
    var b = a - mac;

    if (b < 200) {
        // todo call from sql php
        var new_total = b * total_usd_rate
    } else if (b < 300) {
        var temp = 300 - b;
        var new_total = (temp * total_usd_rate) + cumulative_total_rate_usd;
    } else if (b < 600) {
        var temp = 600 - b;
        var new_total = (temp * total_usd_rate) + cumulative_total_rate_usd;
    } else if (b < 900) {
        var temp = 900 - b;
        var new_total = (temp * total_usd_rate) + cumulative_total_rate_usd;
    } else {
        var temp = (b - 900);
        var new_total = (temp * total_usd_rate) + cumulative_total_rate_usd;
    }
    var new_total_tahun = new_total * 12;
})