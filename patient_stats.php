<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="main-body">
        
              <!-- Breadcrumb -->
              
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                        <?php
    // Include the database connection file
    include 'connection.php';

    // Check if the selectedName is set in the POST data
    if(isset($_POST['selectedName'])) {
        // Get the selected name from the POST data
        $selectedName = $_POST['selectedName'];

        // Prepare and execute a query to fetch the phone number based on the selected name
        $stmt = $conn->prepare("SELECT patient_phone_number FROM patient WHERE patient_name = ?");
        $stmt->bind_param("s", $selectedName);
        $stmt->execute();
        $stmt->bind_result($phoneNumber);

        // Fetch the result
        $stmt->fetch();

        // Close the statement
        $stmt->close();

        // Display the name and phone number
        echo "<p>Name: $selectedName</p>";
        echo "<p>Phone Number: $phoneNumber</p>";
    } else {
        // If selectedName is not set, display a message
        echo "<p>No patient selected.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                        <span class="text-secondary">https://bootdey.com</span>
                      </li>
                      
                      
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                      <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                      <script>
                        window.onload = function () {
                        
                          var chart = new CanvasJS.Chart("chartContainer", {
                            animationEnabled: true,
                            title: {
                              text: "Favorite Language of Developers"
                            },
                            data: [{
                              type: "pie",
                              yValueFormatString: "#,##0.00\"%\"",
                              indexLabel: "{label} ({y})",
                              dataPoints: [
                                { y: 64.02, label: "Java" },
                                { y: 12.55, label: "JavaScript" },
                                { y: 10.72, label: "Python" },
                                { y: 7.23, label: "C++" },
                                { y: 6.42, label: "PHP" },
                                { y: 5.72, label: "C#" }
                              ]
                            }]
                          });
                          chart.render();
                        }
                      </script>
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          Kenneth Valdez
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          fip@jukmuh.al
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          (239) 816-9029
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          (320) 380-4539
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          Bay Area, San Francisco, CA
                        </div>
                      </div>
                      <hr>
                    </div>
                  </div>
                  <div class="row gutters-sm">
                    <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                          
                          
                          <small>Backend API</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Medications</i>Daily Report</h6>
                          
                          <small>Backend API</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
        </div>
        <style>
            body{
                margin-top:20px;
                color: #1a202c;
                text-align: left;
                background-color: #e2e8f0;    
            }
            .main-body {
                padding: 15px;
            }
            .card {
                box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
            }
            
            .card {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 0 solid rgba(0,0,0,.125);
                border-radius: .25rem;
            }
            
            .card-body {
                flex: 1 1 auto;
                min-height: 1px;
                padding: 1rem;
            }
            
            .gutters-sm {
                margin-right: -8px;
                margin-left: -8px;
            }
            
            .gutters-sm>.col, .gutters-sm>[class*=col-] {
                padding-right: 8px;
                padding-left: 8px;
            }
            .mb-3, .my-3 {
                margin-bottom: 1rem!important;
            }
            
            .bg-gray-300 {
                background-color: #e2e8f0;
            }
            .h-100 {
                height: 100%!important;
            }
            .shadow-none {
                box-shadow: none!important;
            }
            
        </style>
</body>
</html>