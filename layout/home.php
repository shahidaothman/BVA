<script type="text/javascript" src="layout/php/js/power.js"></script>
<script type="text/javascript" src="layout/php/js/uses.js"></script>
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

    .b_green {
        background: #12cc9a;
    }

    .b_lgrey {
        background: #ebebeb !important;
    }

    .b_dgrey {
        background: #b9b9b9 !important;
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


        <!-- <form method="get" name="calculate_form" id="c_power"> -->
        <form method="get" name="calculate_form" class="save" id="c_power">

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
                        <input type="text" class="form-control" id="max_demand" placeholder="Insert Max Demand">
                        <div class="input-group-prepend">
                            <span class="input-group-text">kWh</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-medium form-label" for="name">Peak Usage</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="peak_usage" placeholder="Insert Peak Usage">
                        <div class="input-group-prepend">
                            <span class="input-group-text">kWh</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-medium form-label" for="name">Off Peak Usage</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="offpeak" placeholder="Insert Off Peak Usage">
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

            // var str = $('form').attr('id');

            // var res = str.replace(str, "calculate_uses");

            //    var res = "calculate"
            //             $('form').attr('id') = res;
            // $('calculate_form').attr("id", res);

            // $("#c_power").attr("id", "c_power");

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
            // $("#c_power").attr("id", "c_uses");
            // $("#calculate_power").attr("id", "calculate_uses");
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
                $('#calculate_power').hide();
                $('#calculate_uses').show();
                

                $("#max_demand").attr('readonly', false);
                $("#peak_usage").attr('readonly', false);
                $("#offpeak").attr('readonly', false);
                $("#mac").attr('readonly', true);

                $("#bp").attr("required", false);
                $("#spc").attr("required", false);
                $("#psc").attr("required", false);
                $("#yl").attr("required", false);
                $("#mac").attr("required", false);
                $("#tariff_power").attr("required", false);

                $("#uyl").attr("required", true);
                $("#usc").attr("required", true);
                $("#uspc").attr("required", true);
                $("#ubp").attr("required", true);
                $("#tariff_uses").attr("required", true);
                $("#max_demand").attr("required", true);
                $("#peak_usage").attr("required", true);
                $("#offpeak").attr("required", true);

               
            $('#odpower').hide();

            } else {

                $("#tariff_uses").val("default_uses").change();
                $('#go_uses').hide();
                $('#go_power').show();
                $('#calculate_uses').hide();
                $('#calculate_power').show();
                $("#max_demand").attr('readonly', true);
                $("#peak_usage").attr('readonly', true);
                $("#offpeak").attr('readonly', true);
                $("#mac").attr('readonly', false);

                $("#bp").attr("required", true);
                $("#spc").attr("required", true);
                $("#psc").attr("required", true);
                $("#yl").attr("required", true);
                $("#mac").attr("required", true);
                $("#tariff_power").attr("required", true);

                $("#uyl").attr("required", false);
                $("#usc").attr("required", false);
                $("#uspc").attr("required", false);
                $("#ubp").attr("required", false);
                $("#tariff_uses").attr("required", false);
                $("#max_demand").attr("required", false);
                $("#peak_usage").attr("required", false);
                $("#offpeak").attr("required", false);

                $('#oduses').hide();
          

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

        $("#go_details_power").click(function() {
            $('#oduses').hide();
            $('#odpower').show();
        });

        $("#go_details_uses").click(function() {
            $('#oduses').show();
            $('#odpower').hide();
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

<script>
    $(document).on("click", ":submit", function(e) {
        var submit_value = $(this).val();

        if (submit_value == 'calculate_power') {
           
          power();
      


        } else if (submit_value == 'calculate_uses') {

          uses();

        }

    });
</script>

<!-- <script>
    $(document).ready(function() {
        $("#calculate_power").click(function() {
            $("#table_test").remove();
            $("#exampleid").remove();
            $("#t_projection").remove();

        });
    });
</script> -->