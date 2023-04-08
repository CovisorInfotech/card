<?php include 'header.php'; ?>

  <main id="main" class="main">

    <!-- <div class="pagetitle">
      <h1>Web Card</h1>
      
    </div> -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
        <div class="row justify-content-center pb-4">
        <div class="col-xxl-7 col-md-7">
        <div class="row">
            <div class="col-6 col-xxl-6 col-md-6"><div>
                <select class="form-select" aria-label="Default select example">
                    <option selected="">nemara14751.wcard.io</option>
                  </select>
            </div></div>  
        <div class="col-6 col-xxl-6 col-md-6"><div>
            <select class="form-select" aria-label="Default select example">
                <option selected="">Last Week</option>
                <option>Today</option>
                <option>Yesterday</option>
                <option>Last Week</option>
                <option>Last Month</option>
                <option>Lifetime</option>
              </select>
        </div></div>    
        </div>   
        </div>    
        </div>    
        <div class="row justify-content-center">
            <div class="col-xxl-7 col-md-7">
            <div><h3>Activity</h3></div>    
            <div class="card info-card sales-card pb-0">
                <div class="card-body pb-0">
                <div class="row text-center p-4">   
                <div class="col-xxl-4 col-md-4">
                    <div>
                        <p>Views</p>
                        <p>11</p>
                    </div>
                </div> 
                <div class="col-xxl-4 col-md-4">
                    <div>
                        <p>Unique Views</p>
                        <p>3</p>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-4">
                    <div>
                        <p>Total Leads</p>
                        <p>0</p>
                    </div>
                </div>


                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Bar CHart</h5>
      
                    <!-- Bar Chart -->
                    <canvas id="barChart" style="max-height: 400px; display: block; box-sizing: border-box; height: 263px; width: 527px;" width="659" height="329"></canvas>
                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#barChart'), {
                          type: 'bar',
                          data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                            datasets: [{
                              label: 'Bar Chart',
                              data: [65, 59, 80, 81, 56, 55, 40],
                              backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 205, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(201, 203, 207, 0.2)'
                              ],
                              borderColor: [
                                'rgb(255, 99, 132)',
                                'rgb(255, 159, 64)',
                                'rgb(255, 205, 86)',
                                'rgb(75, 192, 192)',
                                'rgb(54, 162, 235)',
                                'rgb(153, 102, 255)',
                                'rgb(201, 203, 207)'
                              ],
                              borderWidth: 1
                            }]
                          },
                          options: {
                            scales: {
                              y: {
                                beginAtZero: true
                              }
                            }
                          }
                        });
                      });
                    </script>
                    <!-- End Bar CHart -->
      
                  </div>
                </div>
              </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6"><div><p><b>Top Performing Buttons</b><br>This is sample data</p></div></div>
                    <div class="col-lg-6"><div style="float: right;"><button type="submit" class="btn btn-primary">Upgrade</button></div></div>
                </div>
                <div>
                    <div class="card">
                        <div class="card-body">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>Main Action Button</td>
                                <td class="float-end">168</td>
                              </tr>
                              <tr>
                                <td>Share Button</td>
                                <td class="float-end">160</td>
                              </tr>
                              <tr>
                                <td>WhatsApp Share Button</td>
                                <td class="float-end">155</td>
                              </tr>
                              <tr>
                                <td>Save Contact Button</td>
                                <td class="float-end">146</td>
                              </tr>
                              <tr>
                                <td>WhatsApp Button</td>
                                <td class="float-end">139</td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- End Default Table Example -->
                        </div>
                      </div>
                </div>
            </div>
        </div>



        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6"><div><p><b>Top Locations</b><br>This is sample data</p></div></div>
                    <div class="col-lg-6"><div style="float: right;"><button type="submit" class="btn btn-primary">Upgrade</button></div></div>
                </div>
                <div>
                    <div class="card">
                        <div class="card-body">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>Denmark</td>
                                <td class="float-end">476</td>
                              </tr>
                              <tr>
                                <td>Canada</td>
                                <td class="float-end">424</td>
                              </tr>
                              <tr>
                                <td>Norway</td>
                                <td class="float-end">385</td>
                              </tr>
                              <tr>
                                <td>USA</td>
                                <td class="float-end">379</td>
                              </tr>
                              <tr>
                                <td>Sweden</td>
                                <td class="float-end">353</td>
                              </tr>
                              <tr>
                                <td>India</td>
                                <td class="float-end">273</td>
                              </tr>
                              <tr>
                                <td>UK</td>
                                <td class="float-end">108</td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- End Default Table Example -->
                        </div>
                      </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6"><div><p><b>Views by Devices</b><br>This is sample data</p></div></div>
                    <div class="col-lg-6"><div style="float: right;"><button type="submit" class="btn btn-primary">Upgrade</button></div></div>
                </div>
                <div>
                    <div class="card">
                        <div class="card-body">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>Mobile</td>
                                <td class="float-end">965</td>
                              </tr>
                              <tr>
                                <td>Desktop</td>
                                <td class="float-end">387</td>
                              </tr>
                              <tr>
                                <td>Tablet</td>
                                <td class="float-end">155</td>
                              </tr>
                              <tr>
                                <td>Save Contact Button</td>
                                <td class="float-end">93</td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- End Default Table Example -->
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </div>




      </div>
    </section>

  </main>

  <?php include 'footer.php'; ?>