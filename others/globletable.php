<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="icon" href="..\images/earth.ico">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css/style.css">
    <link rel="stylesheet" href="..\newstyle.css">
    <title>World Wide Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="..\js/counterup.js"></script>
    <script src="..\js/waypoint.js"></script>
    <script src="..\js/StopCutCopyPeastSelect.js"></script>
</head>
<body>
<ul class="nav nav-tabs nav-justified">
    <li class="nav-item">
      <a target="about:blank" rel="noreferrer noopener" class="nav-link " href="..\index.php" >Quick View</a>
    </li>
    <li class="nav-item">
      <a target="about:blank" rel="noreferrer noopener" class="nav-link" href="indiatable.php" >India Data In Details </a>
    </li>
    <li class="nav-item">
      <a target="about:blank" rel="noreferrer noopener" class="nav-link active" href="globletable.php">World Widw Data In Details </a>
    </li>
    
    <li class="nav-item">
      <a target="about:blank" rel="noreferrer noopener" class="nav-link " href="rescorce.html">Rescorces</a>
    </li>
  </ul>
 <!--GLOBAL DATA SHOW START HERE-->
 <div class="container">
            <div class="showdatatitle"><p class="text-center">Covid-19 Update</p></div>
        
        <p id="title"><span><img src="..\images/world.png" alt="wait" style="width:5%;"></span>Global Data</p>
            <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-6  ">
            <div class="global">
            <?php
                      
                      $data = file_get_contents('https://api.covid19api.com/summary');
                      $coranalive = json_decode($data, true);
                      $in=  $coranalive['Global']['TotalConfirmed'] ;
                      $deilyin=  $coranalive['Global']['NewConfirmed'];
                      
                  
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
                      
                      $data = file_get_contents('https://api.covid19api.com/summary');
                      $coranalive = json_decode($data, true);
                      $in=  $coranalive['Global']['TotalDeaths'] ;
                      $deilyin=  $coranalive['Global']['NewDeaths'];
                      
                  
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
                      
                      $data = file_get_contents('https://api.covid19api.com/summary');
                      $coranalive = json_decode($data, true);
                      $in=  $coranalive['Global']['TotalRecovered'] ;
                      $deilyin=  $coranalive['Global']['NewRecovered'];
                      
                  
                      $prints =" <html>
                                  <h1> $in</h1>
                                  <h4> ^ $deilyin</h4>
                              </html>";
                  echo"$prints";
                  ?>
            <p>Recovered Cases</p>            
            </div>
            </div>
            </div>
        </div>

        <!--GLOBAL DATA SHOW END HERE-->









<input type="text" id="myInput" onkeyup="myFunction()" placeholder=" Search For Name Of Countrys........" title="Type in a name">

<table class="table  text-center " id="myTable">

<tr class="header">

<th>Location</th>
<th>Confirmed-Cases</th>

<th>Recovered</th>
<th>Deaths</th>


</tr>


<section>
    <?php

$data = file_get_contents('https://api.covid19api.com/summary');
$coranalive = json_decode($data, true);
$statescount = count($coranalive['Countries']);



$i=1;
while($i < $statescount){
    ?>
    <tr>
   
    
    <td style="color:darkmagenta; font-weight:500;"><?php echo $coranalive['Countries'][$i]['Country'] ?></td>



            <td style="color:saddlebrown; font-weight:500;"><?php echo $coranalive['Countries'][$i]['TotalConfirmed'] ?> <br> 
            <i class="fa-1x fa fa-arrow-up" aria-hidden="true"></i>  <span style="color:red; font-weight:500;">
            <?php echo $coranalive['Countries'][$i]['NewConfirmed'] ?></span>  </td>
            

            <td style="color:green; font-weight:500;"><?php echo $coranalive['Countries'][$i]['TotalRecovered'] ?><br><i class="fa-1x fa fa-arrow-up" aria-hidden="true"></i>  <span style="color:red; font-weight:500;">
            <?php echo $coranalive['Countries'][$i]['NewRecovered'] ?></span></td>


            <td style="color:orange; font-weight:500;"><?php echo $coranalive['Countries'][$i]['TotalDeaths'] ?><br><i class="fa-1x fa fa-arrow-up" aria-hidden="true"></i>  
             <span style="color:red; font-weight:500;"><?php echo $coranalive['Countries'][$i]['NewDeaths'] ?></span></td>
            
    
    </tr>

<?php
$i++;
}
?>
</section>
</table>










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
<script  src="..\js/count.js"></script>
</body>
</html>