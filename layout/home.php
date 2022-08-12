<!-- start hero -->
<style>
    .myDiv {
        display: none;
    }

    .category {
        border: 1px solid;
        border-radius: 4px;
        text-align: -webkit-center;
        padding: 1em;
        font-size: 18px;
    }

    .fw-400 {
        font-weight: 400;
    }

    .fw-500 {
        font-weight: 500;
    }

    .service.active {
        background: white;

    }

    #exTab3 .nav-pills>li {
        border-radius: 4px 4px 0 0;
        border: 1px solid;
        padding: 10px;
        margin: 1px;
    }

    #exTab3 .nav-pills>li>a {
        color: #2dbc9d;
    }

    #exTab3 .tab-content {
        color: black;
        /* background-color: #428bca; */
        padding: 5px 15px;
    }

    #exTab3 .nav-pills>li.active {
        background-color: #2dbc9d;
    }

    #exTab3 .nav-pills>li.active>a {
        color: white;
    }
</style>
<section class="hero-1 bg-white position-relative py-4 my-5 align-items-center justify-content-center overflow-hidden" style="background-image: url(images/hero-1-bg.png);" id="home">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-lg-10 mt-4 pt-2">
                <!-- <h6 class="text-primary mb-3">Connect With People</h6> -->
                <h1 class="ml11">
                    FORECAST YOUR ELECTRICITY BILL
                </h1>
                <!-- <h5 class="my-4">& Boost Your Company</h5> -->
                <p class="text-muted mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit <br> maxime vitae
                    labore aliquam odit est illo ducimus, dolores neque expedita.</p>

            </div>


            <!-- <div class="col-lg-6 mt-lg-4 pt-2 mt-5">
                    <img class="hero-img" src="images/hero-1-img.png" alt="">
                </div> -->

        </div>


        <form method="get" id="calculate_watt">
            <div class="row">
                <h4 class="fw-semibold my-4">Select Product for Analysis</h4>
                <div class="col-md-6 mb-3">
                    <?php include 'php/dd_country.php'; ?>
                </div>
                <!-- end col -->
                <div class="col-md-6 mb-3">
                    <label class="fw-medium form-label" for="email">Region</label>
                    <select class="form-select form-control" aria-label="Default select example" placeholder="Your email" readonly>
                        <option value="1">--Select Region--</option>
                    </select>
                    <!-- <input type="email" class="form-control" placeholder="Your email" id="email"> -->
                </div>
                <!-- end col -->
            </div>

            <div class="row my-3">
                <label class="fw-medium form-label" for="email">Select Product</label>
                <div class="col-6">
                    <div class="category" id="r_uses">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="product-uses" value="uses">
                            <label class="form-check-label">USES</label>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class="category" id="r_power">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="product-power" value="power">
                            <label class="form-check-label">Powervault</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- uses -->
            <div class="row  hide box uses">
                <div class="col-md-6  ">
                    <label class="fw-medium form-label">Tariff Group</label>
                    <?php include 'php/dd_u_tariff.php'; ?>
                </div>
            </div>

            <!-- powervault -->
            <div class="row hide box power">
                <div class="col-md-6 ">
                    <label class="fw-medium form-label">Tariff Group</label>
                    <?php include 'php/dd_p_tariff.php'; ?>
                </div>
            </div>



            <div class="row my-4">
                <div class="col-md-6 mb-3">
                    <label class="fw-medium form-label" for="name">Monthly Average Consumption</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="mac" name="mac" placeholder="Insert Monthly Average Consumption">
                        <div class="input-group-prepend">
                            <span class="input-group-text">kWh</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-medium form-label" for="name">Max Demand</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="p_demand" placeholder="Insert Max Demand">
                        <div class="input-group-prepend">
                            <span class="input-group-text">kWh</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-medium form-label" for="name">Peak Usage</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="p_peak" placeholder="Insert Peak Usage">
                        <div class="input-group-prepend">
                            <span class="input-group-text">kWh</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-medium form-label" for="name">Off Peak Usage</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="p_offpeak" placeholder="Insert Off Peak Usage">
                        <div class="input-group-prepend">
                            <span class="input-group-text">kWh</span>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#duses" id="go_uses" class="btn btn-primary hide mt-4">Begin Simulation<i data-feather="arrow-right" class="icon-xs icon"></i> </a>
            <a href="#dpower" id="go_power" class="btn btn-primary hide mt-4">Begin Simulation<i data-feather="arrow-right" class="icon-xs icon"></i> </a>
            <!-- <button  type="submit" id="go_power" class="btn btn-primary hide mt-4">Begin eSimulation<i data-feather="arrow-right" class="icon-xs icon"></i>
</button> -->

            <!-- </form> -->
    </div>
    <!-- end container -->
</section>
<!-- end hero -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- radio click -->
<script>
    $(document).ready(function() {
        $("#r_power").click(function() {
            $("#r_power").css({
                "background-color": "#57c297",
                "color": "white"
            });
            $("#r_uses").css({
                "background-color": "white",
                "color": "black"
            });
            $("#product-power").click();

        });
    });

    $(document).ready(function() {
        $("#r_uses").click(function() {
            $("#r_uses").css({
                "background-color": "#57c297",
                "color": "white"
            });
            $("#r_power").css({
                "background-color": "white",
                "color": "black"
            });
            // $("#product-uses").prop("checked", true);
            $("#product-uses").click();
        });
    });
</script>

<script>
    // radio button
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            var inputValue = $(this).attr("value");
            // alert(inputValue)
            var targetBox = $("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
            $('#opower').hide();
            $('#ouses').hide();
            $('#dpower').hide();
            $('#duses').hide();
            if (inputValue == "uses") {

                $("#tariff_power").val("default_power").change();
                $('#go_uses').show();
                $('#go_power').hide();
                $("#p_demand").attr('readonly', false);
                $("#p_peak").attr('readonly', false);
                $("#p_offpeak").attr('readonly', false);


            } else {

                $("#tariff_uses").val("default_uses").change();
                $('#go_uses').hide();
                $('#go_power').show();
                $("#p_demand").attr('readonly', true);
                $("#p_peak").attr('readonly', true);
                $("#p_offpeak").attr('readonly', true);

            }

        });
    });
</script>

<!-- button click -->
<script>
    $(document).ready(function() {
        $("#go_uses").click(function() {
            $('#duses').show();
            $('#dpower').hide();
        });
        $("#go_power").click(function() {
            $('#duses').hide();
            $('#dpower').show();
        });
    });
</script>

<script>
    $(document).ready(function() {

        $("#go_details").click(function() {
            $('#oduses').hide();
            $('#odpower').show();
        });
    });
</script>

<!-- tariff -->
<script>
    $(document).ready(function() {
        $('#tariff_uses').on('change', function() {
            var demovalue = $(this).val();
            $("div.myDiv").hide();
            $("#show" + demovalue).show();
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#tariff_power').on('change', function() {
            var demovalue = $(this).val();
            $("div.myDiv").hide();
            $("#show" + demovalue).show();
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        // var test = 0.048 * 200;
        // alert(test);
        $('#calculate_watt').submit(function(e) {
            // console.log($(this).serialize());
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: 'layout/php/action/watt.php',
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    $('#current_bill').html(data.total_tahunan);
                    $('#new_bill').html(data.new_total_tahunan);
                    $('#investment_cost').html(data.system_cost);
                    $('#total_saving').html(data.leasing_cost);
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

                    while (y <= 25) {
                        if (y == 1) {
                            var payback = saving_1year + payback;
                            $('#t_projection').append("<tr>\
										<td> " + y + "</td>\
                                        <td>" + monthly + "</td>\
                                        <td>" + monthly_lease + "</td>\
                                        <td>" + leasing_depo + "</td>\
                                        <td>" + saving_1year + "</td>\
                                        <td>" + payback + "</td>\
										</tr>");

                            $('#1y_nb').html(monthly_lease);
                            $('#1y_ic').html(payback);
                            $('#1y_ts').html(saving_1year);
                            $('#1y_lease').html(leasing_depo);
                            y++;
                        } else if (y <= year) {
                            var payback = saving_year + payback;
                            $('#t_projection').append("<tr>\
										<td> " + y + "</td>\
                                        <td>" + monthly + "</td>\
                                        <td>" + monthly_lease + "</td>\
                                        <td>" + leasing + "</td>\
                                        <td>" + saving_year + "</td>\
                                        <td>" + payback + "</td>\
										</tr>");

                            if (y == 5) {
                                $('#5y_nb').html(monthly_lease);
                                $('#5y_ic').html(payback);
                                $('#5y_ts').html(saving_year);
                                $('#5y_lease').html(leasing);
                            } else if (y == 10) {
                                $('#10y_nb').html(monthly_lease);
                                $('#10y_ic').html(payback);
                                $('#10y_ts').html(saving_year);
                                $('#10y_lease').html(leasing);
                            }

                            y++;
                        } else if (y > year) {
                            var saving_nyear = monthly - monthly_lease - 0;
                            var payback = saving_nyear + payback;
                            var leasing = 0;
                            $('#t_projection').append("<tr>\
										<td> " + y + "</td>\
                                        <td>" + monthly + "</td>\
                                        <td>" + monthly_lease + "</td>\
                                        <td>" + leasing + "</td>\
                                        <td>" + saving_nyear + "</td>\
                                        <td>" + payback + "</td>\
										</tr>");
                            if (y == 5) {
                                $('#5y_nb').html(monthly_lease);
                                $('#5y_ic').html(payback);
                                $('#5y_ts').html(saving_nyear);
                                $('#5y_lease').html(leasing);;
                            } else if (y == 10) {
                                $('#10y_nb').html(monthly_lease);
                                $('#10y_ic').html(payback);
                                $('#10y_ts').html(saving_nyear);
                                $('#10y_lease').html(leasing);
                            } else if (y == 15) {
                                $('#15y_nb').html(monthly_lease);
                                $('#15y_ic').html(payback);
                                $('#15y_ts').html(saving_nyear);
                                $('#15y_lease').html(leasing);
                            } else if (y == 20) {
                                $('#20y_nb').html(monthly_lease);
                                $('#20y_ic').html(payback);
                                $('#20y_ts').html(saving_nyear);
                                $('#20y_lease').html(leasing);
                            } else if (y == 25) {
                                $('#25y_nb').html(monthly_lease);
                                $('#25y_ic').html(payback);
                                $('#25y_ts').html(saving_nyear);
                                $('#25y_lease').html(leasing);
                            }
                            y++;
                        }
                    }
                    // var table = JSON.stringify(data.table.group)
                    var table = JSON.stringify(data.table);
                    var z = data.table;
                    $.each(z, function(i, z) {
                        console.log(z.usage);


                        $('#table_test').append("<tr>\
                        <td> " + z.group + "</td>\
                        <td> " + z.rate_t + "</td>\
                        <td> " + z.usage_t + "</td>\
                        <td> " + z.total_rate_t + "</td>\
                        <td> " + z.usage + "</td>\
                        <td> " + z.total_rate + "</td>\
                        </tr>");



                    });
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
                }

            });
        });
    });
</script>