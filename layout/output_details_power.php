  <!-- start services -->
  <section class="section hide" id="odpower">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-12 mb-4">
                  <h4 class="fw-semibold mb-3">Tariff Comparison</h4>
                  <!-- <h5 class="text-muted fw-normal">Don't you get what you want?</h5> -->
              </div>
          </div>



          <!-- Tariff Comparison -->


          <div class="row service rounded px-4 py-md-4 py-3 active">
              <table class="table table-bordered table-responsive">
                  <thead>
                      <tr>
                          <th scope="col" rowspan="2">Tariff Type</th>
                          <th scope="col" rowspan="2">USD</th>
                          <th scope="col" colspan="2">Before</th>
                          <th scope="col" colspan="2">After</th>
                      </tr>
                      <tr>
                          <th scope="col">Tariff Used Without Powervault</th>
                          <th scope="col">Tariff Used Without Powervault</th>
                          <th scope="col">Tariff Used Without Powervault</th>
                          <th scope="col">Tariff Used Without Powervault</th>
                      </tr>
                  </thead>
                  <tbody>

                      <tr>
                          <th scope="row">1-200kWh</th>
                          <td>0.05</td>
                          <td>200</td>
                          <td>10</td>
                          <td>200</td>
                          <td>10</td>
                      </tr>
                      <tr>
                          <th scope="row">201-300 kWh</th>
                          <td>0.05</td>
                          <td>200</td>
                          <td>10</td>
                          <td>200</td>
                          <td>10</td>

                      </tr>
                      <tr>
                          <th scope="row">301-600 kWh</th>
                          <td>0.05</td>
                          <td>200</td>
                          <td>10</td>
                          <td>200</td>
                          <td>10</td>
                      </tr>
                      <tr>
                          <th scope="row">601-900 kWh</th>
                          <td>0.05</td>
                          <td>200</td>
                          <td>10</td>
                          <td>200</td>
                          <td>10</td>
                      </tr>
                      <tr>
                          <th scope="row">901 kWh onwards</th>
                          <td>0.05</td>
                          <td>200</td>
                          <td>10</td>
                          <td>200</td>
                          <td>10</td>
                      </tr>
                      <tr>
                          <th colspan="2">Total</th>
                          <td>200</td>
                          <td>10</td>
                          <td>200</td>
                          <td>10</td>
                      </tr>
                  </tbody>
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
                              <th scope="col">x Powervault</th>
                             
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">Solar Capacity(kWh)</th>
                              <td  id="t_sc"></td>
                              
                          </tr>
                          <tr>
                              <th scope="row">Solar Panel (US$)</th>
                              <td  id="t_sp"></td>
                             
                          </tr>
                          <tr>
                              <th scope="row">Battery Size (kWh)</th>
                              <td  id="t_bs"></td>
                            
                          </tr>
                          <tr>
                              <th scope="row">Battery Price (US$)</th>
                              <td  id="t_bp"></td>
                             
                          </tr>
                          <tr>
                              <th scope="row">Shipment Cost for Battery Storage</th>
                              <td  id="t_scb"></td>
                            
                          </tr>
                          <tr>
                              <th scope="row">System Maintenance and Tech Support (US$)</th>
                              <td  id="t_sm"></td>
                              
                          </tr>
                          <tr>
                              <th scope="row">System Insurance (US$)</th>
                              <td  id="t_si"></td>
                             
                          </tr>
                          <tr>
                              <th scope="row">Part Sparing/ Helpdesk and Backend Support (US$)</th>
                              <td  id="t_ps"></td>
                              
                          </tr>
                          <tr>
                              <th scope="row">Total System Cost x Years</th>
                              <td  id="t_tsc"></td>                        
                          </tr>

                          <tr>
                              <th scope="row">Total System Cost x Years (if Lease)</th>
                              <td  id="t_tscl"></td>                        
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
                      <table class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th scope="col">Year</th>
                                  <th scope="col">Price</th>
                              </tr>
                              <tr>
                                  <td>Year 1 (Deposit 10%)</td>
                                  <td  id="t_vld"></td>       

                              </tr>
                              <tr>
                                  <td>Year 2</td>
                                  <td  id="t_vl"></td>       
                              </tr>
                              <tr>
                                  <td>Year 3</td>
                                  <td  id="t_vld"></td>  

                              </tr>
                              <tr>
                                  <td>Year 4</td>
                                  <td  id="t_vld"></td>  

                              </tr>
                              <tr>
                                  <td>Year 5</td>
                                  <td  id="t_vld"></td>  

                              </tr>
                              <tr>
                                  <td>Year 6</td>
                                  <td  id="t_vld"></td>  

                              </tr>
                              <tr>
                                  <td>Year 7</td>
                                  <td  id="t_vld"></td>  

                              </tr>
                              <tr>
                                  <td>Year 8</td>
                                  <td  id="t_vld"></td>  

                              </tr>
                              <tr>
                                  <td>Year 9</td>
                                  <td  id="t_vld"></td>  

                              </tr>
                              <tr>
                                  <td>Year 10</td>
                                  <td  id="t_vld"></td>  

                              </tr>
                          </thead>
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
                                  <th scope="col">x Powervault</th>
                                
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
          <!-- end full cost breakdown -->
          <div>
              <a href="#dpower" class="btn btn-warning lh-base mb-4">Edit Parameter</a>
              <a href="" class="btn btn-success lh-base mb-4">Download Report</a>
              <a href="" class="btn btn-danger lh-base mb-4">Reset Parameters</a>
          </div>

      </div>

  </section>
  <!-- end servies -->