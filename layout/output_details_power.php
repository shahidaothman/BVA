  <!-- start services -->
  <section class="section hide bg-light" id="odpower">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-12 mb-4">
                  <h4 class="fw-semibold mb-3">Tariff Comparison</h4>
                  <!-- <h5 class="text-muted fw-normal">Don't you get what you want?</h5> -->
              </div>
          </div>



          <!-- Tariff Comparison -->
          <!-- <p id="table_test"></p> -->

          <!-- <table class="table table-bordered table-responsive">
              <thead>
                  <tr>
                      <th scope="col" rowspan="2">Tariff Type</th>
                      <th scope="col" rowspan="2">USD</th>
                      <th scope="col" colspan="2">Before</th>
                      <th scope="col" colspan="2">After</th>
                  </tr>
                  <tr>
                      <th scope="col">Tariff Used Without Powervault</th>
                      <th scope="col">Rate (USD)</th>
                      <th scope="col">Tariff Used With Powervault</th>
                      <th scope="col">Rate (USD)</th>
                  </tr>
              </thead>
              <tbody id="table_test">

              </tbody>
          </table> -->
          <!-- <table id="table_test" class="table table-bordered table-responsive" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
</table> -->


          <div class="row service rounded px-4 py-md-4 py-3 active">
              <table class="table table-bordered table-responsive">
                  <thead>
                      <tr>
                          <th class="b_lgrey" scope="col" rowspan="2">Tariff Label</th>
                          <th class="b_lgrey" scope="col" rowspan="2">Tariff Rate (USD)</th>
                          <th class="b_lgrey" scope="col" colspan="2">Before</th>
                          <th class="b_lgrey" scope="col" colspan="2">After</th>
                      </tr>
                      <tr>
                          <th class="b_lgrey" scope="col">Tariff Used Without Powervault</th>
                          <th class="b_lgrey" scope="col">Bill w/o Powervault (USD)</th>
                          <th class="b_lgrey" scope="col">Tariff Used With Powervault</th>
                          <th class="b_lgrey" scope="col">Bill w Powervault (USD)</th>
                      </tr>
                  </thead>
                  <div id="table_header">
                      <tbody id="table_test">
                      </tbody>
                  </div>

              </table>
          </div>

          <!-- Full cost breakdown -->
          <div class="row justify-content-center">
              <div class="col-12 my-4">
                  <h4 class="fw-semibold mb-3">Full Cost Breakdown</h4>
                  <!-- <h5 class="text-muted fw-normal">Don't you get what you want?</h5> -->
              </div>
          </div>

          <div class="row service rounded px-4 py-md-4 py-3 active">
              <div class="col-12">
                  <h6 class="mb-3">System Cost Table</h6>
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th scope="col">System Cost</th>
                              <th scope="col"> <span id="pnp"></span>Powervault</th>

                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">Solar Capacity(kWh)</th>
                              <td id="t_sc"></td>

                          </tr>
                          <tr>
                              <th scope="row">Solar Panel (US$)</th>
                              <td id="t_sp"></td>

                          </tr>
                          <tr>
                              <th scope="row">Battery Size (kWh)</th>
                              <td id="t_bs"></td>

                          </tr>
                          <tr>
                              <th scope="row">Battery Price (US$)</th>
                              <td id="t_bp"></td>

                          </tr>
                          <tr>
                              <th scope="row">Shipment Cost for Battery Storage</th>
                              <td id="t_scb"></td>

                          </tr>
                          <tr>
                              <th scope="row">System Maintenance and Tech Support (US$)</th>
                              <td id="t_sm"></td>

                          </tr>
                          <tr>
                              <th scope="row">System Insurance (US$)</th>
                              <td id="t_si"></td>

                          </tr>
                          <tr>
                              <th scope="row">Part Sparing/ Helpdesk and Backend Support (US$)</th>
                              <td id="t_ps"></td>

                          </tr>
                          <tr>
                              <th scope="row">Total System Cost x Years</th>
                              <td id="t_tsc"></td>
                          </tr>

                          <tr>
                              <th scope="row">Total System Cost x Years (if Lease)</th>
                              <td id="t_tscl"></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6 ">
                  <!-- Installment -->
                  <h6 class="my-4">Installment Schedule</h6>
                  <div class="row service rounded active px-4 py-md-4 py-3 me-1">
                      <!-- <p id="t_test"></p> -->
                      <table class="table table-bordered ">
                          <thead>
                              <tr>
                                  <th scope="col">Year</th>
                                  <th scope="col">Price</th>
                              </tr>
                              <!-- <tr>
                                  <td>Year 1 (Deposit 10%)</td>
                                  <td  id="t_vld"></td>       

                              </tr>
                              <tr>
                                  <td>Year 2</td>
                                  <td  id="t_vl"></td>       
                              </tr> -->

                          </thead>
                          <tbody id="exampleid">

                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="col-md-6">
                  <h6 class="my-4"> Powervault Consumption Table</h6>
                  <div class="row service rounded active px-4 py-md-4 py-3 ms-1">
                      <table class="table  table-striped ">
                          <thead>
                              <tr>
                                  <th scope="col">System Cost</th>
                                  <th scope="col"> <span id="onp"></span>Powervault</th>

                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">Monthly Average Consumption (kWh)</th>
                                  <td id="t_mac"></td>

                              </tr>
                              <tr>
                                  <th scope="row">Monthly Generation RE (kWh)</th>
                                  <td id="t_mgr"></td>

                              </tr>
                              <tr>
                                  <th scope="row">Monthly Generation Grid (kWH)</th>
                                  <td id="t_mgg"></td>

                              </tr>
                          </tbody>
                      </table>
                  </div>

              </div>
          </div>

          <div class="row">

              <!-- Projection Year -->
              <h6 class="my-4">Projection Year</h6>
              <div class="row service rounded active px-4 py-md-4 py-3 me-1">
                  <table class="table table-bordered table-responsive">
                      <thead>
                          <tr>
                              <th class="b_lgrey" scope="col" rowspan="2">Year</th>
                              <th class="b_lgrey" scope="col">Current Expenses</th>
                              <th class="b_lgrey" scope="col" colspan="2">New Expenses</th>
                              <th class="b_lgrey" scope="col" rowspan="2">Saving</th>
                              <!-- <th scope="col" rowspan="2">Payback Value</th> -->
                              <!-- <th scope="col" rowspan="2">Payback</th> -->
                          </tr>
                          <tr>
                              <th class="b_lgrey" scope="col">Annual Electricity Bill (w/o powervault)</th>
                              <th class="b_lgrey" scope="col">Annual Electricity Bill (w powervault)</th>
                              <th class="b_lgrey" scope="col">Leasing</th>
                          </tr>
                      </thead>
                      <tbody id="t_projection">

                      </tbody>
                  </table>
              </div>
          </div>
          <!-- end full cost breakdown -->
          <div class="py-5">
              <a href="#dpower" id="edit_parameter" class="btn btn-warning lh-base mb-4">Edit Parameter</a>
              <a href="" class="btn btn-success lh-base mb-4">Download Report</a>
              <a href="http://178.128.220.125/" class="btn btn-danger lh-base mb-4">Reset Parameters</a>
          </div>

      </div>

  </section>

  <!-- <script>
    $(document).ready(function() {
        $("#edit_parameter").click(function() {
            $("#table_test").remove();
            $("#exampleid").remove();
            $("#t_projection").remove();

        });
    });
</script> -->

  <!-- end servies -->