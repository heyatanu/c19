<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="icon" href="..\images/search.ico">
<title>Advance Search-C19 </title>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js'></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="trycss.css">
    <script src="..\js/StopCutCopyPeastSelect.js"></script>


   
</head>
<body>
<div class="text-center title"><p>Advance Search</p></div>
            <div class="container text-center">
                <div class="row text-center">
              
                    <div class="col-lg-6 col-md-6 col-12 ">
                    <p id="sub-head">Search for any country or state name(hover for more info) </p>
                    <input type="text" name="search" id="search" title="Put The Country Name(GLOBAL) Or State Name(INDIA) In It And Track The  
                     Covid-19 Update">
                        <a onclick="myFunction()" id="c-btn"><i class="fa fa-search"></i></a>
                    
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 pad"id="id">
                    <p>Number:-<span id="demo"></spanrecovered> </p>
                        <p > Name:- <span id="name"></span> </p>
                        <p > Confirmed Cases:- <span id="confirm"></span> </p>
                        <p > Recovered Cases:- <span id="recover"></span> </p>
                        <p > Death Cases:- <span id="death"></span> </p>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-12 ">
                        <p id="sub-head">Search for District name in india(hover for more info)</p>
                    <input type="text" name="search" id="zone" title="Put The District Name In It And Check Wheather It Is a Green , Orange Or Red Zone" >
                        <a onclick="myFunctionzone()" id="c-btn"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 pad"id="zonediv">
                        <p>Number:-<span id="indexfzone"></span> </p>
                        <p > State Name:- <span id="statename"></span> </p>
                        <p > District Name :- <span id="distname"></span> </p>
                        <p > Zone:- <span id="zonename"></span> </p>
                        </div>
                 
                      
                      
                </div>
            </div>



  <script>
     var recoveredarray=[];//FOR THE RECOVERED ARRAY
     var confirmarray=[];//FOR THE CONFIRMED DATA ARRAY
     var deathsarray=[];//FOR THE CONFIRMED DATA ARRAY
     var statearray=[];//FOR THE CONFIRMED DATA ARRAY
     var zonearray=[];//FOR THE zone DATA ARRAY
     var statenameforzonearray=[];//FOR THE state zone DATA ARRAY
     var distnameforzonearray=[];//FOR THE dist DATA ARRAY
 </script>
<?php


                      
                      $data = file_get_contents('https://api.covid19india.org/data.json');
                      $coranalive = json_decode($data, true);

                      $statescount = count($coranalive['statewise']);

                      
                      $i=1;
                      while($i < $statescount){
                        $dailyrecover=  $coranalive['statewise'][$i]['recovered'] ;

                        $dailyconfirm=  $coranalive['statewise'][$i]['confirmed'] ;
                        $dailydeath=  $coranalive['statewise'][$i]['deaths'] ;
                        $statename=  $coranalive['statewise'][$i]['state'] ;
                      echo "<script type='text/javascript'>
                      
                      recoveredarray.push($dailyrecover);
                      confirmarray.push($dailyconfirm);
                      deathsarray.push($dailydeath);
                      statearray.push('$statename');

                      </script>";
                      $i++;
                    }
                    $dataglobal = file_get_contents('https://api.covid19api.com/summary');
                      $coranaliveglobal = json_decode($dataglobal, true);
                      $globalcount = count($coranaliveglobal['Countries']);
                    $j=1;
                    while($j < $globalcount){
                      $globalcountry=  $coranaliveglobal['Countries'][$j]['Country'] ;
                      $globalconfirmed=  $coranaliveglobal['Countries'][$j]['TotalConfirmed'] ;
                      $globalrecover=  $coranaliveglobal['Countries'][$j]['TotalRecovered'] ;
                      $globaldeath=  $coranaliveglobal['Countries'][$j]['TotalDeaths'] ;

                    
                    echo "<script type='text/javascript'>
                    
                    
                    statearray.push('$globalcountry');
                    confirmarray.push($globalconfirmed);
                    deathsarray.push($globaldeath);
                    recoveredarray.push($globalrecover);

                    </script>";
                    $j++;
                  }


                  $data = file_get_contents('https://api.covid19india.org/zones.json');
                      $zonelive = json_decode($data, true);

                      $zonecount = count($zonelive['zones']);

                      
                      $k=1;
                      while($k < $zonecount){
                        $dist=  $zonelive['zones'][$k]['district'] ;

                        $state=  $zonelive['zones'][$k]['state'] ;
                        $zone=  $zonelive['zones'][$k]['zone'] ;
                        
                      echo "<script type='text/javascript'>
                      
                      distnameforzonearray.push('$dist');
                      statenameforzonearray.push('$state');
                      zonearray.push('$zone');
                      

                      </script>";
                      $k++;
                    }
                  ?>

<script>
   $( "#search" ).autocomplete({
      source: statearray
    });
</script>
<script>
   $( "#zone" ).autocomplete({
      source: distnameforzonearray
    });

    $( function() {
    $( document ).tooltip({
      show:{effect:"highlight",duration:5000},
      hide:{effect:"pulsate",duration:0},
      position: {
    my: "center bottom",
    at: "right top"
  }

    });
  } );
  
</script>

<script src="tryjs.js"></script>
<script src="Testing.js"></script>
<script src="Testingzone.js"></script>
</body>

</html>