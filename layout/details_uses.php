   <!-- start feature -->
   <style>
       .right {

           text-align-last: end;

       }
   </style>
   <section class="section bg-light overflow-hidden hide" id="duses">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-lg-12 mt-lg-0 mt-5 pt-lg-0 pt-4">
                   <div class="row">
                       <div class="col-9">
                           <h3 class="fw-semibold lh-base mb-4">USES CALCULATOR</h3>
                       </div>
                       <div class="col-3 right"> <a href="#feature" class="btn btn-danger lh-base mb-4">Reset
                           </a></div>
                   </div>

                   <!-- <h5 class="text-muted fw-normal">We're always here to help you.</h5> -->
                   <div class="row my-5">
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Year of Lease</label>
                           <div class="input-group">
                               <input class="form-control" placeholder="Insert Year of Lease" type="number" min="1" max="10" name="uyl" id="uyl" >
                               <div class="input-group-prepend">
                                   <span class="input-group-text">Year</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Solar Capacity</label>
                           <div class="input-group">
                               <input type="number"  class="form-control" id="usc" placeholder="Insert Solar Capacity" name="usc" >
                               <div class="input-group-prepend">
                                   <span class="input-group-text">kWp</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Solar Panel Cost</label>
                           <div class="input-group">
                               <input type="text" class="form-control" id="uspc" name="uspc" placeholder="Insert Solar Panel Cost" >
                               <div class="input-group-prepend">
                                   <span class="input-group-text">USD</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Battery Size</label>
                           <div class="input-group">
                               <input type="text" class="form-control" id="ubs" name="ubs" placeholder="" value="207" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">kWh</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Battery Price</label>
                           <div class="input-group">
                               <input type="text" class="form-control" id="ubp" name="ubp" placeholder="Insert battery Price" >
                               <div class="input-group-prepend">
                                   <span class="input-group-text">USD</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Shipment Cost </label>
                           <div class="input-group">
                               <input type="text" value="5.5" name="uscb" class="form-control" id="uscb" placeholder="" >
                               <div class="input-group-prepend">
                                   <span class="input-group-text">%</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Import Duty</label>
                           <div class="input-group">
                               <input type="number" min="1" max="10" value="5" class="form-control" id="uid" name="uid" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">%</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Ground Transport/Warehouse Storage</label>
                           <div class="input-group">
                               <input type="number" min="0" max="20" value="3" class="form-control" id="ugt" name="ugt" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">%</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Battery Installation Fee</label>
                           <div class="input-group">
                               <input type="number" min="1" max="10" value="1" class="form-control" id="ubi" name="ubi" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">%</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Maintenance & Tech Support Fee</label>
                           <div class="input-group">
                               <input type="number" min="0" max="1000" value="622" class="form-control" id="umt" name="umt" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">USD</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">System Insurance Fee</label>
                           <div class="input-group">
                               <input type="number" min="0" max="20" class="form-control" value="3" id="usif" name="usif" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">%</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Backend Support Fee</label>
                           <div class="input-group">
                               <input ttype="number" min="0" max="20" class="form-control" value="11" id="ubsf" name="ubsf" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">%</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">New Max Demand</label>
                           <div class="input-group">
                               <input type="number"  class="form-control" value="1" id="unmd" name="unmd" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">kW</span>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-4 mb-3">
                           <label class="fw-medium form-label">Number of USES to install</label>
                           <div class="input-group">
                               <input type="number" min="1" max="6" class="form-control" value="1" id="unu" name="unu" placeholder="" required>
                               <div class="input-group-prepend">
                                   <span class="input-group-text">unit</span>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <button type="submit" id="calculate_uses" value="calculate_uses" class="btn btn-primary mt-4">Calculate<i data-feather="arrow-right" class="icon-xs icon"></i>
           </button>
           <!-- </form> -->
       </div>
   </section>

   <script>
       $(document).ready(function() {
           $("#calculate_uses").click(function() {
                //   $("#table_test").empty();
                //   $("#t_projection").empty();
                //   $("#exampleid").empty();

               // Basic
               var utariff = $('#tariff_uses').find('option:selected').attr("name");
               var umd = $('#max_demand').val();
               var upu = parseFloat($('#peak_usage').val());
               var uopu = parseFloat($('#offpeak').val());
               var usc = $('#usc').val();
               var uyl = $('#uyl').val();
               var unu = $('#unu').val();
               var ubp = $('#ubp').val();
               var uspc = $('#uspc').val();
               var ubs = $('#ubs').val();
               var unmd = $('#unmd').val();


               var umac = uopu + upu;


               //    Output
               //Basic
               $("#s_utariff").html(" " + utariff);
               $("#s_umac").html(" " + umac + " kWh");
               // Details
               $("#s_usc").html(" " + usc + " kWp");
               $("#s_uspc").html(" " + uspc + " USD");
               $("#s_umd").html(" " + umd + " kWp");
               $("#s_upu").html(" " + upu + " kWh");
               $("#s_uopu").html(" " + uopu + " kWh");
               $("#s_unmd").html(" " + unmd + " kW");
               $("#s_ubs").html(" " + ubs + " kWh");
               $("#s_ubp").html(" " + ubp + " USD");
               $("#s_uyl").html(" " + uyl + " year");
               $("#s_unu").html(" " + unu + " unit");
               //    $("#pnp").html(pnp + " ");
               //    $("#onp").html(pnp + " ");
           });

       })
   </script>


   <!-- end feature -->