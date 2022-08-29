  <!-- start services -->
  <section class="section hide" id="opower" style="background: aliceblue;">
      <div class="container">
          <div class="row justify-content-center text-center">
              <div class="col-12 mb-4">
                  <h4 class="fw-semibold mb-3">POWERVAULT SIMULATION RESULT</h4>
                  <!-- <h6 class="text-muted fw-normal">Don't you get what you want?</h6> -->
              </div>
          </div>
          <p class="my-4">Parameter Summary</h6>
          <div class="service rounded px-5 py-md-5 py-5 active mb-5 bgy">
              <div class="row">
                  <div class="col-4">
                      <p class="fw-bold">Tariff :<span id="s_tariff" class="fw-500"></span></p>
                      <p class="fw-bold">Avg Consumption Monthly :<span id="s_mac" class="fw-500"></span></p>
                      <p class="fw-bold">Solar Capacity :<span id="s_psc" class="fw-500"></span></p>

                  </div>
                  <div class="col-4">
                      <p class="fw-bold">Solar panel Cost :<span id="s_spc" class="fw-500"></span></p>
                      <p class="fw-bold">Battery Size : <span id="s_bs" class="fw-500"></span></p>
                      <p class="fw-bold">Battery Price : <span id="s_bp" class="fw-500"></span></p>
                  </div>

                  <div class="col-4">
                      <p class="fw-bold">Max Demand : - </p>
                      <p class="fw-bold">Year Leased : <span id="s_yl" class="fw-500"></span></p>
                      <!-- <p class="fw-bold">Unit Installed : <span id="s_np" class="fw-500"></span></p> -->
                  </div>
              </div>
          </div>


          <div class="row ">
              <div id="exTab3" class=" row container  mb-5">
                  <div class="tab-content clearfix col-11">
                      <!-- ------------------------------------------ -->
                      <!--  Overall   -->
                      <!-- ------------------------------------------ -->
                      <div class="tab-pane active" id="0yp">
                          <div class="row">
                              <h6 class="mb-2 mt-4">Overall Summary</h6>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active ">
                                      <p class="my-4">Total Current Bill</p>
                                      <h4 class=" mb-2" id="current_bill_my">
                                      </h4>
                                      <p class="mb-4 grey" id="current_bill">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total New Bill</p>
                                      <h4 class="mb-2" id="new_bill_my">
                                      </h4>
                                      <p class="mb-4 grey" id="new_bill">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Investment Cost</p>
                                      <h4 class="mb-2" id="investment_cost_my">
                                      </h4>
                                      <p class="mb-4 grey" id="investment_cost">
                                      </p>

                                  </div>
                              </div>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active" id="card_pts">
                                      <p class="my-4">Total Saving</p>
                                      <h4 class="mb-2" id="total_saving_my">
                                      </h4>
                                      <p class="mb-4" id="total_saving">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-4 py-3 active">
                                      <p class="my-4">Payback</p>
                                      <h4 class="mb-4" id="payback_power">
                                      </h4>
                                  </div>
                              </div>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-4 py-3 active">
                                      <p class="my-4">Verdict</p>
                                      <h4 class=" mb-4" id="verdict_power">
                                      </h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- ------------------------------------------ -->
                      <!--  1 YEAR   -->
                      <!-- ------------------------------------------ -->
                      <div class="tab-pane" id="1yp">
                          <div class="row">
                              <h6 class="mb-2 mt-4">1 Year Projection</h6>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total New Bill For 1 Year</p>
                                      <h4 class=" mb-2" id="1y_nb_my">
                                      </h4>
                                      <p class="mb-4 grey" id="1y_nb">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Investment Cost For 1 Year</p>
                                      <h4 class="mb-2" id="1y_ic_my">
                                      </h4>
                                      <p class="mb-4 grey" id="1y_ic">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Saving For 1 Year</p>
                                      <h4 class="mb-2" id="1y_ts_my">
                                      </h4>
                                      <p class="mb-4 grey" id="1y_ts">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Current Lease per Year</p>
                                      <h4 class="mb-2" id="1y_lease_my">
                                      </h4>
                                      <p class="mb-4 grey" id="1y_lease">
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane" id="5yp">
                          <div class="row">
                              <h6 class="mb-2 mt-4">5 Year Projection</h6>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total New Bill For 5 Year</p>
                                      <h4 class="mb-2" id="5y_nb_my">
                                      </h4>
                                      <p class="mb-4 grey" id="5y_nb">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Investment Cost For 5 Year</p>
                                      <h4 class="mb-2" id="5y_ic_my">
                                      </h4>
                                      <p class="mb-4 grey" id="5y_ic">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Saving For 5 Year</p>
                                      <h4 class="mb-2" id="5y_ts_my">
                                      </h4>
                                      <p class="mb-4 grey" id="5y_ts">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Current Lease per Year</p>
                                      <h4 class="mb-2" id="5y_lease_my">
                                      </h4>
                                      <p class="mb-4 grey" id="5y_lease">
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="tab-pane" id="10yp">
                          <div class="row">
                              <h6 class="mb-2 mt-4">10 Year Projection</h6>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total New Bill For 10 Year</p>
                                      <h4 class=" mb-2" id="10y_nb_my">
                                      </h4>
                                      <p class="mb-4 grey" id="10y_nb">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Investment Cost For 10 Year</p>
                                      <h4 class="mb-2" id="10y_ic_my">
                                      </h4>
                                      <p class="mb-4 grey" id="10y_ic">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Saving For 10 Year</p>
                                      <h4 class="mb-2" id="10y_ts_my">
                                      </h4>
                                      <p class="mb-4 grey" id="10y_ts">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Current Lease per Year</p>
                                      <h4 class="mb-2" id="10y_lease_my">
                                      </h4>
                                      <p class="mb-4 grey" id="10y_lease">
                                      </p>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <div class="tab-pane" id="15yp">
                          <div class="row">
                              <h6 class="mb-2 mt-4">15 Year Projection</h6>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total New Bill For 15 Year</p>
                                      <h4 class=" mb-2" id="15y_nb_my">
                                      </h4>
                                      <p class="mb-4 grey" id="15y_nb">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Investment Cost For 15 Year</p>
                                      <h4 class="mb-2" id="15y_ic_my">
                                      </h4>
                                      <p class="mb-4 grey" id="15y_ic">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Saving For 15 Year</p>
                                      <h4 class="mb-2" id="15y_ts_my">
                                      </h4>
                                      <p class="mb-4 grey" id="15y_ts">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Current Lease per Year</p>
                                      <h4 class="mb-2" id="15y_lease_my">
                                      </h4>
                                      <p class="mb-4 grey" id="15y_lease">
                                      </p>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <div class="tab-pane" id="20yp">
                          <div class="row">
                              <h6 class="mb-2 mt-4">20 Year Projection</h6>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total New Bill For 20 Year</p>
                                      <h4 class=" mb-2" id="20y_nb_my">
                                      </h4>
                                      <p class="mb-4 grey" id="20y_nb">
                                      </p>

                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Investment Cost For 20 Year</p>
                                      <h4 class="mb-2" id="20y_ic_my">
                                      </h4>
                                      <p class="mb-4 grey" id="20y_ic">
                                      </p>

                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Saving For 20 Year</p>
                                      <h4 class="mb-2" id="20y_ts_my">
                                      </h4>
                                      <p class="mb-4 grey" id="20y_ts">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Current Lease per Year</p>
                                      <h4 class="mb-2" id="20y_lease_my">
                                      </h4>
                                      <p class="mb-4 grey" id="20y_lease">
                                      </p>
                                  </div>
                              </div>

                          </div>
                      </div>

                      <div class="tab-pane" id="25yp">
                          <div class="row">
                              <h6 class="mb-2 mt-4">25 Year Projection</h6>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total New Bill For 25 Year</p>
                                      <h4 class=" mb-2" id="25y_nb_my">
                                      </h4>
                                      <p class="mb-4 grey" id="25y_nb">
                                      </p>

                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Investment Cost For 25 Year</p>
                                      <h4 class="mb-2" id="25y_ic_my">
                                      </h4>
                                      <p class="mb-4 grey" id="25y_ic">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Total Saving For 25 Year</p>
                                      <h4 class="mb-2" id="25y_ts_my">
                                      </h4>
                                      <p class="mb-4 grey" id="25y_ts">
                                      </p>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-2 py-3 active">
                                      <p class="my-4">Current Lease per Year</p>
                                      <h4 class="mb-2" id="25y_lease_my">
                                      </h4>
                                      <p class="mb-4 grey" id="25y_lease">
                                      </p>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
                  <div class="col-1" style="place-self: center;padding-top: 5em; padding-right:1em;">
                      <ul class="nav nav-pills " style="display: contents;    ">
                          <li class="active">
                              <a href="#0yp" data-toggle="tab">Overall</a>
                          </li>

                          <li><a href="#25yp" data-toggle="tab">25Y</a>
                          </li>
                          <li><a href="#20yp" data-toggle="tab">20Y</a>
                          </li>
                          <li><a href="#15yp" data-toggle="tab">15Y</a>
                          </li>
                          <li><a href="#10yp" data-toggle="tab">10Y</a>
                          </li>
                          <li><a href="#5yp" data-toggle="tab">5Y</a>
                          </li>
                          <li><a href="#1yp" data-toggle="tab">1Y</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="mt-5">
                  <a href="#odpower" id="go_details_power" class="btn btn-success lh-base mb-4">More Details</a>
              </div>
          </div>


  </section>