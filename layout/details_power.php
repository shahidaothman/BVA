   <!-- start feature -->
   <style>
       .right {
           text-align-last: end;
       }
   </style>
   <section class="section bg-light overflow-hidden hide" id="dpower">
       <div class="container">

           <div class="row align-items-center">
               <div class="col-lg-12 mt-lg-0 mt-5 pt-lg-0 pt-4">
                   <div class="row">
                       <div class="col-9">
                           <h3 class="fw-semibold lh-base mb-4">POWERVAULT CALCULATOR</h3>
                       </div>
                       <!-- <div class="col-3 right"> <a href="#home" class="btn btn-danger lh-base mb-4">Reset
                               </a>
                           </div> -->
                   </div>

                   <!-- <h5 class="text-muted fw-normal">We're always here to help you.</h5> -->
                   <div class="row my-5">
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Year of Lease</label>
                           <div class="input-group">
                               <input class="form-control" id="yl" name="pyl" placeholder="Insert Year of Lease" type="number" min="2" max="10" >
                               <div class="input-group-prepend">
                                   <span class="input-group-text">Year</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Solar Capacity</label>
                           <div class="input-group">
                               <input type="number" min="0" max="20" class="form-control" id="psc" name="psc" placeholder="Insert Solar Capacity" >
                               <div class="input-group-prepend">
                                   <span class="input-group-text">kWp</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Solar Panel Cost</label>
                           <div class="input-group">
                               <input type="text" class="form-control" id="spc" name="pspc" placeholder="Insert Solar Panel Cost" >
                               <div class="input-group-prepend">
                                   <span class="input-group-text">USD</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Battery Size</label>
                           <div class="input-group">
                               <input type="text" class="form-control" id="bs" name="pbs" placeholder="" value="14" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">kWh</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Battery Price</label>
                           <div class="input-group">
                               <input type="text" class="form-control" name="pbp" id="bp" placeholder="Insert battery Price" >
                               <div class="input-group-prepend">
                                   <span class="input-group-text">USD</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Shipment Cost for Battery</label>
                           <div class="input-group">
                               <input type="number" min="0" max="3" value="3" class="form-control" id="scb" name="pscb" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">%</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Maintenance & Tech Support Fee</label>
                           <div class="input-group">
                               <input type="number" min="0" max="400" value="311" class="form-control" id="mt" name="pmt" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">USD</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">System Insurance Fee</label>
                           <div class="input-group">
                               <input type="number" min="0" max="20" class="form-control" value="3" id="sif" name="psif" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">%</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Backend Support Fee</label>
                           <div class="input-group">
                               <input ttype="number" min="0" max="20" class="form-control" value="11" id="bsf" name="pbsf" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">%</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Number of Powervault to install</label>
                           <div class="input-group">
                               <input type="number" min="1" max="2" name="pnp" class="form-control" value="1" id="np" placeholder="" readonly>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">unit</span>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- <a href="#opower" id="calculate_power" class="btn btn-primary mt-4">Calculate <i data-feather="arrow-right" class="icon-xs icon"></i>
               </a> -->
           <!-- <button  type="submit" id="calculate_power" class="btn btn-primary mt-4">Calculate<i data-feather="arrow-right" class="icon-xs icon"></i>
</button> -->
           <button type="submit" id="calculate_power" value="calculate_power" class="btn btn-primary mt-4">Calculate<i data-feather="arrow-right" class="icon-xs icon"></i>
           </button>
           <!-- </form> -->
       </div>
   </section>

   <script>
       $(document).ready(function() {
           $("#calculate_power").click(function() {
            //    $("#table_test").empty();
            //    $("#t_projection").empty();
            //    $("#exampleid").empty();


               // Basic
               //    var tariff = $('#tariff_power').val();
               var tariff = $('#tariff_power').find('option:selected').attr("name");
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
               var pnp = $('#np').val();

               //    Output
               //Basic
               $("#s_tariff").html(" " + tariff);
               $("#s_mac").html(" " + mac + " kWh");
               // Details
               $("#s_psc").html(" " + p_s_c + " kWh");
               $("#s_yl").html(" " + yl + " Year");
               $("#s_bs").html(" " + bs + " kWp");
               $("#s_bp").html(" " + bp + " USD");
               $("#s_scb").html(" " + scb + " %");
               $("#s_mt").html(" " + mt + " USD");
               $("#s_sif").html(" " + sif + " %");
               $("#s_bsf").html(" " + bsf + " %");
               $("#s_np").html(" " + np + " unit");
               $("#s_spc").html(" " + spc + " USD");
               $("#pnp").html(pnp + " ");
               $("#onp").html(pnp + " ");
           });

           //    // calculate total current bill 
           //    if (mac < 200) {
           //        // todo call from sql php
           //        var total = mac * total_usd_rate
           //    } else if (mac < 300) {
           //        var temp = 300 - mac;
           //        var total = (temp * total_usd_rate) + cumulative_total_rate_usd;
           //    } else if (mac < 600) {
           //        var temp = 600 - mac;
           //        var total = (temp * total_usd_rate) + cumulative_total_rate_usd;
           //    } else if (mac < 900) {
           //        var temp = 900 - mac;
           //        var total = (temp * total_usd_rate) + cumulative_total_rate_usd;
           //    } else {
           //        var temp = (mac - 900);
           //        var total = (temp * total_usd_rate) + cumulative_total_rate_usd;
           //    }
           //    var total_tahun = total * 12;

           //    //    calculate new bill
           //    var a = p_s_c * 5 * 30;
           //    var b = a - mac;

           //    if (b < 200) {
           //        // todo call from sql php
           //        var new_total = b * total_usd_rate
           //    } else if (b < 300) {
           //        var temp = 300 - b;
           //        var new_total = (temp * total_usd_rate) + cumulative_total_rate_usd;
           //    } else if (b < 600) {
           //        var temp = 600 - b;
           //        var new_total = (temp * total_usd_rate) + cumulative_total_rate_usd;
           //    } else if (b < 900) {
           //        var temp = 900 - b;
           //        var new_total = (temp * total_usd_rate) + cumulative_total_rate_usd;
           //    } else {
           //        var temp = (b - 900);
           //        var new_total = (temp * total_usd_rate) + cumulative_total_rate_usd;
           //    }
           //    var new_total_tahun = new_total * 12;
       })
   </script>



   <!-- end feature -->