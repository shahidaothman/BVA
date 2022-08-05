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
                    <input type="text" class="form-control" placeholder="Insert Monthly Average Consumption">
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
        <a href="#dpower" id="go_power" class="btn btn-primary hide mt-4">Begin Simulation<i data-feather="arrow-right" class="icon-xs icon"></i>
        </a>
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