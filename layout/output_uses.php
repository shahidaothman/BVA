  <!-- start services -->
  <section class="section hide" id="ouses" style="background: aliceblue;">
      <div class="container">
          <div class="row justify-content-center text-center">
              <div class="col-12 mb-4">
                  <h4 class="fw-semibold mb-3">USES SIMULATION RESULT</h4>
                  <!-- <h5 class="text-muted fw-normal">Don't you get what you want?</h5> -->
              </div>
          </div>

          <h6 class="my-4">Parameter Summary</h6>
          <div class="service rounded px-5 py-md-5 py-5 active mb-5 bgy">
              <div class="row">
                  <div class="col-4">
                      <p class="fw-bold">Tariff :<span id="s_utariff" class="fw-500"></span></p>
                      <p class="fw-bold">Avg Consumption Monthly:<span id="s_umac" class="fw-500"></span></p>
                      <p class="fw-bold">Solar Capacity:<span id="s_usc" class="fw-500"></span></p>
                      <p class="fw-bold">Solar panel Cost:<span id="s_uspc" class="fw-500"></span></p>
                  </div>
                  <div class="col-4">
                      <p class="fw-bold">Max Demand:<span id="s_umd" class="fw-500"></span></p>
                      <p class="fw-bold">Peak Usage:<span id="s_upu" class="fw-500"></span></p>
                      <p class="fw-bold">Off Peak Usage:<span id="s_uopu" class="fw-500"></span></p>
                      <p class="fw-bold">New Max Demand:<span id="s_unmd" class="fw-500"></span></p>
                  </div>

                  <div class="col-4">
                      <p class="fw-bold"> Battery Size:<span id="s_ubs" class="fw-500"></span></p>
                      <p class="fw-bold">Battery Price:<span id="s_ubp" class="fw-500"></span></p>
                      <p class="fw-bold">Year Leased:<span id="s_uyl" class="fw-500"></span></p>
                      <!-- <p class="fw-bold">Unit Installed:<span id="s_unu" class="fw-500"></span></p> -->
                  </div>
              </div>
          </div>
          <!-- card -->

          <div id="exTab3" class="container mb-5">
              <div class="row ">
                  <div class="tab-content clearfix col-11">
                      <!-- ------------------------------------------ -->
                      <!--  Overall   -->
                      <!-- ------------------------------------------ -->
                      <div class="tab-pane active" id="0yu">
                          <div class="row">
                              <h6 class="mb-2 mt-4">Overall Summary</h6>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total Current Bill</p>
                                      <h4 class=" mb-4" id="current_bill_uses">

                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total New Bill</p>
                                      <h4 class=" mb-4" id="new_bill_uses">

                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total Investment Cost</p>
                                      <h4 class=" mb-4" id="investment_cost_uses">

                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active" id="card_uts">
                                      <p class="my-4">Total Saving</p>
                                      <h4 class=" mb-4" id="total_saving_uses">

                                      </h4>
                                  </div>
                              </div>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Payback</p>

                                      <h4 class=" mb-4" id="payback_uses">

                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-4 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Verdict</p>
                                      <h4 class=" mb-4" id="verdict_uses">

                                      </h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- ------------------------------------------ -->
                      <!--  1 YEAR   -->
                      <!-- ------------------------------------------ -->
                      <div class="tab-pane" id="1yu">
                          <div class="row">
                              <h6 class="mb-2 mt-4">1 Year Projection</h6>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total New Bill For 1 Year</p>
                                      <h4 class=" mb-4" id="1y_unb">

                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total Investment Cost For 1 Year</p>
                                      <h4 class=" mb-4" id="1y_uic">

                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total Saving For 1 Year</p>
                                      <h4 class=" mb-4" id="1y_uts">

                                      </h4>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Current Lease per Year</p>
                                      <h4 class=" mb-4" id="1y_ulease">

                                      </h4>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <div class="tab-pane" id="5yu">
                          <div class="row">
                              <h6 class="mb-2 mt-4">5 Year Projection</h6>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total New Bill For 5 Year</p>
                                      <h4 class=" mb-4" id="5y_unb">

                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total Investment Cost For 5 Year</p>
                                      <h4 class=" mb-4" id="5y_uic">

                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total Saving For 5 Year</p>
                                      <h4 class=" mb-4" id="5y_uts">

                                      </h4>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Current Lease per Year</p>
                                      <h4 class=" mb-4" id="5y_ulease">

                                      </h4>
                                  </div>
                              </div>

                          </div>
                      </div>

                      <div class="tab-pane" id="10yu">
                          <div class="row">
                              <h6 class="mb-2 mt-4">10 Year Projection</h6>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total New Bill For 10 Year</p>
                                      <h4 class=" mb-4" id="10y_unb">

                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total Investment Cost For 10 Year</p>
                                      <h4 class=" mb-4" id="10y_uic">
                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total Saving For 10 Year</p>
                                      <h4 class=" mb-4" id="10y_uts">

                                      </h4>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Current Lease per Year</p>
                                      <h4 class=" mb-4" id="10y_ulease">

                                      </h4>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <div class="tab-pane" id="15yu">
                          <div class="row">
                              <h6 class="mb-2 mt-4">15 Year Projection</h6>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total New Bill For 15 Year</p>
                                      <h4 class=" mb-4" id="15y_unb">

                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total Investment Cost For 15 Year</p>
                                      <h4 class=" mb-4" id="15y_uic">

                                      </h4>

                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Total Saving For 15 Year</p>
                                      <h4 class=" mb-4" id="15y_uts">

                                      </h4>
                                  </div>
                              </div>
                              <div class="col-md-6 mt-4 pt-2">
                                  <div class="service rounded px-4 py-md-3 py-3 active">
                                      <p class="my-4">Current Lease per Year</p>
                                      <h4 class=" mb-4" id="15y_ulease">

                                      </h4>
                                  </div>
                              </div>

                          </div>
                      </div>

                  </div>

                  <div class="col-1" style="place-self: center;padding-top: 5em; padding-right:1em;">
                      <ul class="nav nav-pills " style="display: contents;">
                          <li class="active">
                              <a href="#0yu" data-toggle="tab">Overall</a>
                          </li>
                          <li><a href="#15yu" data-toggle="tab">15Y</a>
                          </li>
                          <li><a href="#10yu" data-toggle="tab">10Y</a>
                          </li>
                          <li><a href="#5yu" data-toggle="tab">5Y</a>
                          </li>
                          <li><a href="#1yu" data-toggle="tab">1Y</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="mt-5">
                  <a href="#oduses" id="go_details_uses" class="btn btn-success lh-base mb-4">More Details</a>
              </div>
          </div>
      </div>
  </section>
  <!-- end servies -->