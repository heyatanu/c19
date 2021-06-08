<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="..\images/india.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css/style.css">
    <link rel="stylesheet" href="..\newstyle.css">
    <title>India Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="..\js/counterup.js"></script>
    <script src="..\js/waypoint.js"></script>
    <script src="..\js/StopCutCopyPeastSelect.js"></script>




  <!-- RECOVER CHART GRAPH START HERE-->



   <!--Load the AJAX API-->
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
google.charts.load('44', {
  callback: drawChart,
  packages: ['corechart']
});



function drawChart(){
  // create DataTable
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'Id');
  data.addColumn('number', 'Recovered');
  

  // load data
  for (var i = 0; i < recoveredarray.length; i++) {
    var row = [i, recoveredarray[i]];
    data.addRow(row);
  }

  var options = {
    'title' : 'Graph Of Recovered Cases In India ',
    hAxis: {
      title: 'Days---->>>',
      gridlines: {
                      count: 0
                    }
               },
               
          isStacked: true,
          height: 200,
          legend: 'none',
          pointSize: 3,
          pointShape: { type: 'triangle', rotation: 180 },
          colors: ['green']
  };

  var chart = new  google.visualization.AreaChart(document.getElementById('recoveredchart'));
  chart.draw(data, options);
}


    </script>

    <!-- RECOVER CHART GRAPH END HERE-->


    <!-- COMFIRM CHART GRAPH START HERE-->

<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
google.charts.load('44', {
  callback: drawChart,
  packages: ['corechart']
});




function drawChart(){
  // create DataTable
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'Id');
  data.addColumn('number', 'Confirmed');
  

  // load data
  for (var i = 0; i < confirmarray.length; i++) {
    var row = [i, confirmarray[i]];
    data.addRow(row);
  }

  var options = {
    'title' : ' Graph Of Confirmed Cases In India ',
    hAxis: {
                  title: 'Days---->>>',
                  gridlines: {
                      count: 0
                    }
               },
               
          isStacked: true,
          height: 200,
          legend: 'none',
          pointSize: 3,
          pointShape: { type: 'triangle', rotation: 180 },
          colors: ['purple']
  };

  var chart = new  google.visualization.AreaChart(document.getElementById('confirmchart'));
  chart.draw(data, options);
}


    </script>



<!-- COMFIRM CHART GRAPH END HERE-->



<!--DEATHS CHART GRAPH START HERE-->
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
google.charts.load('44', {
  callback: drawChart,
  packages: ['corechart']
});



function drawChart(){
  // create DataTable
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'Id');
  data.addColumn('number', 'Deaths');
  

  // load data
  for (var i = 0; i < deathsarray.length; i++) {
    var row = [i, deathsarray[i]];
    data.addRow(row);
  }

  var options = {
    'title' : 'Graph Of Deaths In India ',
    hAxis: {
                  title: 'Days---->>>',
                  gridlines: {
                      count: 0
                    }
               },
               
          isStacked: true,
          height: 200,
          legend: 'none',
          pointSize: 3,
          pointShape: { type: 'triangle', rotation: 180 },
          colors: ['red']
         
  };

  var chart = new  google.visualization.AreaChart(document.getElementById('deathchart'));
  chart.draw(data, options);
}


    </script>

    <!-- DEATHS CHART GRAPH END HERE-->
   
</head>
<body>
<ul class="nav nav-tabs nav-justified">
    <li class="nav-item">
      <a target="about:blank" rel="noreferrer noopener" class="nav-link " href="..\index.php">Quick view</a>
    </li>
    <li class="nav-item">
      <a target="about:blank" rel="noreferrer noopener" class="nav-link active" href="indiatable.php" >India Data In Details </a>
    </li>
    <li class="nav-item">
      <a target="about:blank" rel="noreferrer noopener" class="nav-link" href="globletable.php" >World Wide Data In Details </a>
    </li>
    
    <li class="nav-item">
      <a target="about:blank" rel="noreferrer noopener" class="nav-link " href="rescorce.html">Rescorces</a>
    </li>
  </ul>
  
  


  <div class="container">
                 <div class="showdatatitle"><p class="text-center">Covid-19 Update</p></div>
        
        
            <p id="title" class="text-left" style="margin-top:10px;"> <span><img src="..\images/india.png" alt="wait" style="width:5%;"></span> India data</p>
            <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-6  ">
            <div class="global">
            <?php
                      
                      $data = file_get_contents('https://api.covid19india.org/data.json');
                      $coranalive = json_decode($data, true);
                      $statescount = count($coranalive['statewise']);
                      $in=  $coranalive['statewise'][0]['confirmed'] ;
                      $deilyin=  $coranalive['statewise'][0]['deltaconfirmed'] ;
                      $prints =" <html>
                                  <h1> $in</h1>
                                  <h6> ^ $deilyin</h6>
                              </html>";
                  echo"$prints";
                  ?>
            <p>Confirmed Cases</p>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
            <div class="global">
            <?php
                      
                      $data = file_get_contents('https://api.covid19india.org/data.json');
                      $coranalive = json_decode($data, true);
                      $statescount = count($coranalive['statewise']);
                      $in=  $coranalive['statewise'][0]['deaths'] ;
                      $deilyin=  $coranalive['statewise'][0]['deltadeaths'] ;
                  
                      $prints =" <html>
                                  <h1> $in</h1>
                                  <h5> ^ $deilyin</h5>
                              </html>";
                  echo"$prints";
                  ?>
            <p>Deaths Cases</p>            
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 recover">
            <div class="global">
            <?php
                      
                      $data = file_get_contents('https://api.covid19india.org/data.json');
                      $coranalive = json_decode($data, true);
                      $statescount = count($coranalive['statewise']);
                      $in=  $coranalive['statewise'][0]['recovered'] ;
                      $deilyin=  $coranalive['statewise'][0]['deltarecovered'] ;
                      $prints =" <html>
                                  <h1> $in</h1>
                                  <h4> ^ $deilyin</h4>
                              </html>";
                  echo"$prints";
                  ?>
            <p>Recovered Cases</p>            
            </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12  ">
            <div class="global">
            <?php
                      
                      $data = file_get_contents('https://api.covid19india.org/data.json');
                      $coranalive = json_decode($data, true);
                      $statescount = count($coranalive['statewise']);
                      $in=  $coranalive['statewise'][0]['lastupdatedtime'] ;
                      $prints =" <html>
                                  <h2>Last Time update $in</h2>
                                  
                              </html>";
                  echo"$prints";
                  ?>
            </div>
            </div>

            </div>
            <div class="text-center">
            <p style="margin-top:10px; font-size:20px;">LockDown <span><i class="fa-1x fa fa-lock" aria-hidden="true"></i></span> In India Till 17th May Ends In</p>
            <p style=" text-align: center;font-size: 19px;font-weight:bold;margin-top: 0px;"id="demo"></p><!--COUNT DOWN-->
            </div>
        </div>

        <!--INDIA DATA SHOW END HERE-->


        <img src="..\images/scr.gif" class="sc" alt="Relode The Page">
  <script>
     var recoveredarray=[];//FOR THE RECOVERED ARRAY
     var confirmarray=[];//FOR THE CONFIRMED DATA ARRAY
     var deathsarray=[];//FOR THE CONFIRMED DATA ARRAY
 </script>
<?php


                      
                      $data = file_get_contents('https://api.covid19india.org/data.json');
                      $coranalive = json_decode($data, true);

                      $statescount = count($coranalive['cases_time_series']);
                      
                  $i=1;
                      while($i < $statescount){
                        $dailyrecover=  $coranalive['cases_time_series'][$i]['dailyrecovered'] ;

                        $dailyconfirm=  $coranalive['cases_time_series'][$i]['dailyconfirmed'] ;
                        $dailydeath=  $coranalive['cases_time_series'][$i]['dailydeceased'] ;
                      echo "<script type='text/javascript'>
                      
                      recoveredarray.push($dailyrecover);
                      confirmarray.push($dailyconfirm);
                      deathsarray.push($dailydeath);

                      </script>";
                      $i++;
                    }

                  ?>


<div id="recoveredchart" ></div>
<div id="confirmchart"></div>
<div id="deathchart"></div>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder=" Search For Name Of States......." title="Type in a name">

<div class="text-center"><p class="slide"><--SLIDE--></p></div>


    <div class="table-responsive table-striped">
        <table class="table  text-center " id="myTable">

        <tr class="header">
      
        
        <th>Location</th>
        <th>Confirmed-Cases</th>
        
        <th>Recovered</th>
        <th>Deaths</th>
        <th>Active-Cases</th>
    
        </tr>

            <?php
                $data = file_get_contents('https://api.covid19india.org/data.json');
                $coronalive =json_decode($data, true);
                $statecount = count($coronalive['statewise'])
            ?>
        <section>
            <?php

        $data = file_get_contents('https://api.covid19india.org/data.json');
        $coranalive = json_decode($data, true);

        $statescount = count($coranalive['statewise']);



        $i=1;
        while($i < $statescount){
            ?>
            <tr>
           
            <td style="color:darkmagenta; font-weight:500;"><?php echo $coranalive['statewise'][$i]['state'] ?></td>
            <td style="color:saddlebrown; font-weight:500;"><?php echo $coranalive['statewise'][$i]['confirmed'] ?> <br> 
            <i class="fa-1x fa fa-arrow-up" aria-hidden="true"></i>  <span style="color:red; font-weight:500;"><?php echo $coranalive['statewise'][$i]['deltaconfirmed'] ?></span>  </td>
            
            <td style="color:green; font-weight:500;"><?php echo $coranalive['statewise'][$i]['recovered'] ?><br><i class="fa-1x fa fa-arrow-up" aria-hidden="true"></i>  <span style="color:red; font-weight:500;"><?php echo $coranalive['statewise'][$i]['deltarecovered'] ?></span></td>
            <td style="color:orange; font-weight:500;"><?php echo $coranalive['statewise'][$i]['deaths'] ?><br><i class="fa-1x fa fa-arrow-up" aria-hidden="true"></i>   <span style="color:red; font-weight:500;"><?php echo $coranalive['statewise'][$i]['deltadeaths'] ?></span></td>
            <td style="color:black; font-weight:500;"><?php echo $coranalive['statewise'][$i]['active'] ?></td>
            </tr>

        <?php
        $i++;
        }
        ?>
        </section>
        </table>
    </div>
        <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    <script src="..\js/countdown.js"></script>
    <script  src="..\js/count.js"></script>
</body>
</html>