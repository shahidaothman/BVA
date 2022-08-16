<!-- start hero -->
<style>
    .myDiv {
        display: none;
    }
</style>
<section class="hero-1 bg-white position-relative py-4 my-5 align-items-center justify-content-center overflow-hidden" style="background-image: url(images/hero-1-bg.png);" id="home">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-lg-10 mt-4 pt-2">
                <h6 class="text-primary mb-3">Connect With People</h6>
                <h1 class="ml11">
                    FORECAST YOUR ELECTRICITY BILL
                </h1>
                <h5 class="my-4">& Boost Your Company</h5>
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
                <label class="fw-medium form-label" for="name">Country</label>
                <select class="form-select form-control" aria-label="Default select example" placeholder="Your email">
                    <option value="1">One</option>
                </select>
            </div>
            <!-- end col -->
            <div class="col-md-6 mb-3">
                <label class="fw-medium form-label" for="email">Region</label>
                <select class="form-select form-control" aria-label="Default select example" placeholder="Your email">
                    <option value="1">One</option>
                </select>
                <!-- <input type="email" class="form-control" placeholder="Your email" id="email"> -->
            </div>
            <!-- end col -->
        </div>

        <div class="row my-3">
            <label class="fw-medium form-label" for="email">Select Product</label>
            <div class="col-6">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="product-uses" value="uses" >
                    <label class="form-check-label">USES</label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="product-power" value="power">
                    <label class="form-check-label">Powervault</label>
                </div>
            </div>
        </div>


        <div class="row my-3 hide box uses">
            <div class="col-md-6 mb-3 ">
                <label class="fw-medium form-label">Tariff Group</label>
                <select class="form-select form-control" id="tariff_uses">
                    <option value="default_uses">---Pelase select tariff---</option>
                    <option value="tariff_B">Tariff B</option>
                    <option value="set_uses">Set Own Tariff Uses</option>
                </select>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md-6 mb-3 hide box power">
                <label class="fw-medium form-label">Tariff Group</label>
                <select class="form-select form-control" id="tariff_power">
                    <option value="default_power">---Pelase select tariff---</option>
                    <option value="tariff_A">Tariff A</option>
                    <option value="set_power">Set Own Tariff Power</option>
                </select>
            </div>
        </div>

        <!-- <div class="row my-3 myDiv" id="showset_tariff"> -->
        <div class="row my-3 myDiv " id="showset_uses">
            <label class="fw-medium form-label">Key In Your Tariff</label>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Tariff Type</th>
                        <th scope="col">Local Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Maximum Demand</th>
                        <td><input type="text" class="form-control" name="" id="" placeholder="Insert Maximum Demand"></td>
                    </tr>
                    <tr>
                        <th scope="row">Peak Hour</th>
                        <td><input type="text" class="form-control" name="" id="" placeholder="Insert Peak Hour">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Off Peak Hour</th>
                        <td><input type="text" class="form-control" name="" id="" placeholder="Insert Off Peak Hour"></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- <div class="row my-3 myDiv" id="showtariff_A"> -->
        <div class="row my-3 myDiv " id="showset_power">
            <label class="fw-medium form-label">Key In Your Tariff</label>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" colspan="2">Tariff Type</th>
                        <th scope="col" rowspan="2">Local Rate</th>
                    </tr>
                    <tr>
                        <th scope="row">Minimum Charge </th>
                        <th scope="row">Maximum Charge </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td><input type="text" class="form-control" name="" id="" placeholder="Insert Minimum Charge"></td>
                        <td><input type="text" class="form-control" name="" id="" placeholder="Insert Maximum Charge"></td>
                        <td><input type="text" class="form-control" name="" id="" placeholder="Insert Local Rate">
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>

        <div class="row my-5">
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
                <label class="fw-medium form-label" for="name">Peak Demand</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="max_demand" placeholder="Insert Peak Demand">
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
        <a href="#dpower" id="go_power" class="btn btn-primary hide mt-4">Begin Simulation<i data-feather="arrow-right" class="icon-xs icon"></i>
        </a>
    </div>
    <!-- end container -->
</section>
<!-- end hero -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
                $('#showset_power').hide();
                $("#tariff_power").val("default_power").change();
                $('#go_uses').show();
                $('#go_power').hide();

                $( "#max_demand" ).attr('readonly', false);
                $( "#peak_usage" ).attr('readonly', false);
                $( "#offpeak" ).attr('readonly', false);


            } else {
                $('#showset_uses').hide();
                $("#tariff_uses").val("default_uses").change();
                $('#go_uses').hide();
                $('#go_power').show();
                $( "#max_demand" ).attr('readonly', true);
                $( "#peak_usage" ).attr('readonly', true);
                $( "#offpeak" ).attr('readonly', true);

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