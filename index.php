<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/virus.ico">
    
    <link rel="stylesheet" href="preloader.css">
    <link rel="stylesheet" href="newstyle.css">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="css/scrollup.css">
    
    
    <link rel="icon" href="images/virus.ico">
    <title>COVID19TRACKER</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src='js/jquery.js'></script>
    

    <script src="js/bootstrap.js"></script>
    <script src="js/counterup.js"></script>
    <script src="js/waypoint.js"></script>
    <script src="js/StopCutCopyPeastSelect.js"></script>
    
        <!-- Modal BOX START HERE -->
    <script>
	$(document).ready(function(){
		$("#myModalload").modal('show');
	});
</script>
 <!-- Modal BOX START HERE -->
   
</head>
<body style="transition: 0.6s;">
      <!-- Modal BOX START HERE -->
  <div class="modal fade" id="myModalload" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" style="color:green;"data-aos="slide-right">Quick Disclaimer</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p data-aos="fade-up"style="text-transform: capitalize;
    font-family: monospace; font-size:20px;">
        <span>&#10146;</span>      
if the data is not visible then refresh the page please <br>
              <span>&#10146;</span>This Website Data Is fetch through the apis given in the <a href="others/rescorce.html" target="-blank">Rescorces</a> section
            <br> 
            <span>&#10146;</span>the data is not verified by the creator
            <br><span style="color:red; font-size:28px;">Thank You</span>
        </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

 <!-- Modal BOX END HERE -->
    <a id="button"></a> <!-- GOTO TOP BUTTON DIV -->
<div class="se-pre-con" >  <!-- PRELOADER DIV -->
</div>
    <!--NAV BAR START HERE -->
<ul class="nav nav-tabs nav-justified">
    <li class="nav-item ">
      <a target="about:blank" rel="noreferrer noopener" class="nav-link  active-for-dark-mode" href="index.php" target="-blank">Quick View</a>
    </li>
    <li class="nav-item">
      <a target="about:blank" rel="noreferrer noopener"  class="nav-link" href="others/indiatable.php" target="-blank">India Data In Details </a>
    </li>
    <li class="nav-item">
      <a target="about:blank" rel="noreferrer noopener" class="nav-link" href="others/globletable.php" target="-blank">World Wide Data In Details </a>
    </li>
    
    <li class="nav-item">
      <a target="about:blank" rel="noreferrer noopener" class="nav-link " href="others/rescorce.html" target="-blank">Rescorces</a>
    </li>
  </ul>
    <!--NAV BAR END HERE -->





    <div class=".main"><!--THIS IS THE MAIN DIV OF THIS PAGE-->

        <div class="mainheading">
            <div class="mainheading-text">
                <p>covid-19 tracker</p>
            </div>
                <div class="darkmodediv">
                    <img src="images/moon.png" width="6%" id="dark" alt="dark" onclick="darkmode();"style="transition:  0.5s;">            
                    <img src="images/sun.png" width="7%" id="sun" alt="light" onclick="lightmode();"style="transition:  0.5s;">            
                </div>

        </div>



        <!-- INTRO STRAT HERE-->
        <div class="container start" >
            <div class="row">
                <div class="col-lg-4 col-md-4 col-4 img-right">
                <img src="images/bacteria.png" id="head-img" alt="headimage"  >
                
                </div>
                <div class="col-lg-8 col-md-8 col-8 logo">
                    <p style="font-size:25px; text-aline:center;">STAY HOME <span><img src="images/prevent/home.png" width="6%" alt="home"id="home" ></span> , STAY SAFE <span><img src="images/prevent/healthcare.png" width="6%" alt="heart"id="home" ></span> </p>
                    <p style="font-size:20px;">Let's Stay Safe & Fight Together Against <br> C <span><img class="image" src="images/cb.png" width="3.5%"></span> r <span><img class="image" src="images/cb.png" alt="rotatevirusimage" width="3.5%%"></span>
                            na Virus</p>
                       
                </div>
            </div>
        </div><!--INTRO END HERE -->

        <!--GLOBAL DATA SHOW START HERE-->
        <div class="container">
        <div class="showdatatitle"><p class="text-center">Covid-19 Update</p></div>
        
        
        <p id="title"><span><img src="images/world.png" alt="wait" style="width:5%;"></span>Global Data</p>
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




            <!--INDIA DATA SHOW START HERE-->
            <div class="container">
            <p id="title" class="text-left" style="margin-top:10px;"> <span><img src="images/mainindia.png" alt="wait" style="width:5%;"></span> India data</p>
            <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-6  ">
            <div class="global"data-aos="fade-right">
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
            <p data-aos="fade-in">Confirmed Cases</p>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
            <div class="global"data-aos="fade-up">
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
            <p data-aos="fade-in">Deaths Cases</p>            
            </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 recover">
            <div class="global" data-aos="fade-down">
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
            <p data-aos="fade-in" >Recovered Cases</p>            
            </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12  ">
            <div class="global"data-aos="fade-in">
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
        </div>

        <!--INDIA DATA SHOW END HERE-->

        <!--ADVANCE SEARCH DIV START FROM HERE-->
        <div class="container">
            <p id="chatbot-title" class="text-left"data-aos="fade-up" style="margin-top:10px;">Advance Search Engine</p>
            <div class="row ">
                <div class="col-lg-8 col-md-8 col-8  text-left">
                    <p id="chatbot-dis"style="padding:10px;"data-aos="slide-right"> <span>&#10146;</span>this is a advance search option
                    <br> <span>&#10146;</span>in this you can easily find the no of cases of any country <br>World wide and all the state(india spacific)
                    <br> <span>&#10146;</span>You can also find the <br>zone(green,orange or red) details of any District in india 
                    <br> <span>&#10146;</span>to check click on the right hand side 
                </p>
                </div>
                <div class="col-lg-4 col-md-4 col-4  text-center"data-aos="fade-in">
                   
                    <a target="about:blank" rel="noreferrer noopener" href="..\advancesearch" target="-blank"><span><img src="images/search.png" width="25%" alt="search" srcset=""><br>CLICK HERE</span> </a>
                </div>

            </div>
        </div>


        <!--ADVANCE SEARCH DIV END  HERE-->

        <!--CHCECK RISK START FROM HERE-->


        <div class="chatbot-container">
            <div class="chatbot-row" >
            <div class=" text-left chatbot-text">
                <p id="chatbot-title"data-aos="fade-in"> Chat Bot <span><img  src="images/ai.png" width="8%" alt="AI"id="home" ></span> </p>
                <p id="chatbot-dis" data-aos="fade-right"> <br> <span>&#10146;</span>your chat-Bot calculate your risk Persentage from covid-19 <br>
                <span>&#10146;</span> scroll down after each question <br>
                <span>&#10146;</span> to activate the chat-Bot click on the right side <br>
                <span>&#10146;</span> you can also submit your name 
                </p>
                <input type="text" data-aos="slide-right" placeholder="Enter Your Name...." id="myInput" style="padding:3px;">
                <button type="button" data-aos="slide-right" onclick="getInputValue();"  class="btn btn-success">Submit</button>

            </div>
            <div class=" text-center chatbot-button ">
                                    <div class="container">
                        <button style="outline:none;" data-aos="zoom-in" data-toggle="modal" data-target="#myModal" id="myBtn"></button>
                        

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                <p class="modal-title" style:"font-size:20px;">Risk Calculator Of COVID-19</p>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                                <p>Choose on screen option <br> Click on the correct option <br>To start again test click restart button </p>
                            <button id="start" class="btn btn-primary">Start The Test <span id="namestart"></span> </button>

                            <div class="containerchat text-left sent" id="firsr">
                            <img src="images/rd.gif" alt="Avatar" style="width:100%;">
                            <p>Are you experiencing any of the following symptoms??? <button id="y"class="btn btn-warning">Cough</button>  
                                <button class="btn btn-warning" id="yes">Fever</button> 
                                <button id="yess"class="btn btn-warning">Difficulty in Breathing</button>
                                <button class="btn btn-success"id="n">None of This</button>
                                <button id="mtos"class="btn btn-danger">More then 1 symptoms</button> </p>

                            <span class="time-right" >11:00</span>
                            </div>

                            
                            <div class="containerchat darker text-left reply-chat" id="firsta">
                            <img src="images/av.gif" alt="Avatar" class="right" style="width:100%;">
                            <p id="firstans"></p>
                            <span class="time-left" >11:01</span>
                            </div>






                            <div class="containerchat text-left sent" id="yo">
                            <img src="images/rd.gif" alt="Avatar" style="width:100%;">
                            <p>Have you ever had any of this: <button id="a"class="btn btn-warning">Heart Diseases</button>  
                                <button id="aes"class="btn btn-warning">Lung Diseases</button> 
                                <button id="aess"class="btn btn-warning">Hypertension</button> 
                                <button id="an"class="btn btn-success">None of This</button>
                                <button id="mtod"class="btn btn-danger">More then 1 Diseases</button>  </p>
                            
                            <span class="time-right">11:02</span>
                            </div>

                            <div class="containerchat darker text-left reply-chat" id="seca">
                            <img src="images/av.gif" alt="Avatar" class="right" style="width:100%;">
                            <p id="secans"></p>
                            <span class="time-left">11:01</span>
                            </div>
                            
                            <div class="containerchat text-left sent" id="third">
                            <img src="images/rd.gif" alt="Avatar" style="width:100%;">
                            <p>have you traveled any where in last 14 days?? <button id="ty"class="btn btn-warning">Yes</button> 
                                <button id="tno"class="btn btn-success">No</button></p>
                            <span class="time-right">11:03</span>
                            </div>
                            

                            <div class="containerchat darker text-left reply-chat" id="thirda">
                            <img src="images/av.gif" alt="Avatar" class="right" style="width:100%;">
                            <p id="thirdans"></p>
                            <span class="time-left">11:04</span>
                            </div>

                            <div class="containerchat text-left sent" id="forth">
                            <img src="images/rd.gif" alt="Avatar" style="width:100%;">
                            <p>Which of this following apply to you??? <button id="fy"class="btn btn-danger">I recently meet or lived with someone who has tested positive.</button>  <button id="fyes"class="btn btn-warning">I meet a helthcare worker.</button>  <button class="btn btn-success" id="fn">None of This</button></p>
                            <span class="time-right">11:05</span>
                            </div>
                            
                            <div class="containerchat darker text-left reply-chat" id="fortha">
                            <img src="images/av.gif" alt="Avatar" class="right" style="width:100%;">
                            <p id="forthans"></p>
                            <span class="time-left">11:06</span>
                            </div>



                            <div class="containerchat text-left sent" id="five">
                            <img src="images/rd.gif" alt="Avatar" style="width:100%;">
                            <p>When did the interaction take place??? <button id="gy"class="btn btn-warning">Less Then 5 days Ago</button>  <button id="gyes"class="btn btn-warning">Less Then 10 days Ago</button>  <button class="btn btn-warning" id="gyess">Greater Then 14 days Ago</button></p>
                                <span class="time-right">11:07</span>
                                </div>


                                <div class="containerchat darker text-left reply-chat" id="lasta">
                                <img src="images/av.gif" alt="Avatar" class="right" style="width:100%;">
                                <p id="lastans"></p>
                                <span class="time-left">11:08</span>
                                </div>





                                <div class="containerchat text-left sent" id="g">
                                <img src="images/rd.gif" alt="Avatar" style="width:100%;">
                                <p>Ok Wait.....</p>
                                <img src="images/w.gif" class="img-right" alt="need" srcset="">
                                <span class="time-right">11:09</span>
                                    </div>

                                    
                                <div class="containerchat text-left sent" id="gf">
                                <img src="images/rd.gif" alt="Avatar" style="width:100%;">
                                <p > Your Risk Persentage is :-<span id="risk"></span> </p>
                                <p id="dj"></p>
                                <span class="time-right">11:10</span>
                                    </div>



                            
                                </div>



                                <!-- Modal footer -->
                                <div class="modal-footer text-center">
                                <div class="result text-center">


                            <p>For Better Result Download Aarogya Setu App Now</p>
                            <p> <a href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu"><span><i class="fa-3x fa fa-android" aria-hidden="true"></i></span> </a>                   <a href="https://apps.apple.com/in/app/aarogyasetu/id1505825357"> <span><i class="fa-3x fa fa-apple" aria-hidden="true"></i></span></a>  </p>
                            <p>Inspired By Aarogya Setu App  </p>
                        </div>
                            <button type="button" class="btn btn-success" id="restart" >Restart</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>


                                </div>

                            </div>
                            </div>
                        </div>

                        </div><!--RISK CHECKER CONTAINER END HERW-->






            </div><!--RISK CHECKER COLOUM END HERW-->
            </div><!--RISK CHECKER ROW END HERW-->
        </div><!--RISK CHECKER MAIN CONTAINER END HERW-->


        <!--CHCECK RISK END HERE-->



        <!--ABOUT COVID-19 START HERE-->

        <div class="container">
            <div class="showdatatitle"><p class="text-center"data-aos="fade-down">About Covid-19</p></div>
                <div class="row text-center">
                    <div class="col-lg-4 col-md-4 col-12  ">

                    <img src="images\covidimgabout.png" class="img-center about-img" alt="covid-19 about image" style="width:40%;" data-aos="zoom-in">

                    </div>
                    <div class="col-lg-8 col-md-8 col-12  ">
                    <p id="aboutcovidtext" class="text-left"data-aos="slide-right"> <span>&#10149;</span> Coronaviruses (CoV) are a large family of viruses that cause
                         illness ranging from the common cold to more severe diseases such as
                          Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV). <br>
                          <span>&#10149;</span>  A novel coronavirus (nCoV) is a new strain that has not been previously identified in humans.
                        <br>
                        <span>&#10149;</span>Coronaviruses are zoonotic, meaning they are transmitted between animals and people. <br>
                        <span>&#10149;</span>Detailed investigations found that SARS-CoV was transmitted from civet cats to humans and MERS-CoV 
                        from dromedary camels to humans.
                        <br><span>&#10149;</span> Several known coronaviruses are circulating in animals that have not yet infected humans.
                        
                    </p>
                                            

                    </div>
                </div>
        </div>
        <!--ABOUT COVID-19 END HERE-->




        <!--SYMPTOMS OF COVID-19 START HERE-->

        <div class="container">
            <div class="showdatatitle"><p class="text-center"data-aos="fade-down">Symptoms Of Covid-19</p></div>
            <p id="symptoms-info" class="text-center"data-aos="fade-down">there are mainly six Symptoms of corona virus </p>
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-6  text-center img-center"data-aos="fade-up">
                <img src="images/symptoms/cold.png" id="symptoms-img" >
                    <p id="symptoms-dis">cold</p>
                </div>
                <div class="col-lg-4 col-md-4 col-6 text-center img-center "data-aos="fade-down">
                <img src="images/symptoms/breathing.png" id="symptoms-img" >
                    <p id="symptoms-dis">breathing problam</p>

                </div>
                <div class="col-lg-4 col-md-4 col-6 text-center img-center  "data-aos="fade-up">
                <img src="images/symptoms/cough.png" id="symptoms-img" >
                    <p id="symptoms-dis">cough</p>
                </div>
                <div class="col-lg-4 col-md-4 col-6  text-center img-center"data-aos="fade-down">
                <img src="images/symptoms/fever.png" id="symptoms-img" >
                    <p id="symptoms-dis">fever</p>

                </div>
                <div class="col-lg-4 col-md-4 col-6 text-center img-center "data-aos="fade-up">
                <img src="images/symptoms/nose.png" id="symptoms-img" >
                    <p id="symptoms-dis">running nose</p>
                </div>
                <div class="col-lg-4 col-md-4 col-6 text-center img-center "data-aos="fade-down">
                <img src="images/symptoms/tird.png" id="symptoms-img" >
                    <p id="symptoms-dis">tiredness</p>

                </div>
            </div>
        </div>
        <!--SYMPTOMS OF COVID-19 END HERE-->




    


        <!--PREVENT OF COVID-19 START HERE-->

        <div class="container">
            <div class="showdatatitle"><p class="text-center" data-aos="slide-down">How To Prevent Covid-19</p></div>
            <p id="symptoms-info" class="text-center" data-aos="fade-right">9 steps prevention against covid-19 </p>
            <div class="row ">
            <div class="col-lg-4 col-md-4 col-6  text-left img-center">
                    <div class="prevent-div"data-aos="fade-down">
                    <img src="images/prevent/handwash.png" id="prevent-img" >
                    <p id="prevent-dis">wash your hands regularly for 20 sec with sope and water or alcohal based hand rub</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6  text-left img-center">
                    <div class="prevent-div"data-aos="fade-down">
                    <img src="images/prevent/home.png" id="prevent-img" >
                    <p id="prevent-dis">stay home and stay safe . isolate from others in the household if you feel unwell</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6  text-left img-center">
                    <div class="prevent-div"data-aos="fade-down">
                    <img src="images/prevent/mask.png" id="prevent-img" >
                    <p id="prevent-dis">cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6  text-left img-center">
                    <div class="prevent-div"data-aos="fade-in">
                    <img src="images/prevent/news.png" id="prevent-img" >
                    <p id="prevent-dis">stay infromed by watching news and follow the recommemended practices</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6  text-left img-center">
                    <div class="prevent-div" data-aos="fade-in">
                    <img src="images/prevent/distance.png" id="prevent-img" >
                    <p id="prevent-dis">avoid close contact (1 meter or 3 feet) with people who are unwell</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6  text-left img-center">
                    <div class="prevent-div"data-aos="fade-in">
                    <img src="images/prevent/notravel.png" id="prevent-img" >
                    <p id="prevent-dis">do not travel any where in this pandemic situation</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6  text-left img-center">
                    <div class="prevent-div "data-aos="fade-up">
                    <img src="images/prevent/yoga.png" id="prevent-img" >
                    <p id="prevent-dis">do regular yoga it helps you to stay fresh and strong your immunity system</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-6  text-left img-center">
                    <div class="prevent-div"data-aos="fade-up">
                    <img src="images/prevent/veg.png" id="prevent-img" >
                    <p id="prevent-dis">drink water several times in a day and eat green vagitables </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12  text-left img-center"data-aos="fade-up">
                    <div class="prevent-div">
                    <img src="images/prevent/doctor.png" id="prevent-img" >
                    <p id="prevent-dis" >if you feel unwell then take a doctor advice immediately</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12   img-center">
                    <div class="prevent-div">
                    <img src="images/prevent/healthcare.png" id="prevent-img-care"data-aos="fade-up" >
                    <p id="prevent-dis-care" data-aos="fade-right">take care of yourself and your loved one</p>
                    </div>
                </div>
                

            </div>
        </div>
        <!--PREVENT OF COVID-19 END HERE-->






        <!--CONTACT US END HERE-->

	
        <div class="container">
       <div class="showdatatitle"><p class="text-center">Have Any Problam ?? Contact Us</p></div>
            <div class="row ">
            <div class="col-lg-4 col-md-4 col-4  ">
            <img src="images/doctor.png" id="doctor" class="img-left" alt="doctor"data-aos="slide-right" srcset="">
            </div>
            <div class="col-lg-8 col-md-8 col-8  ">
                <div class="contact-form" >
		<form action="mail_handler.php" method="post" name="form" class="form-box" id="contact-form">
			<label for="name"></label><br>
			<input type="text" name="name" class="form-control form-back" placeholder="Enter Your Full Name...." required><br>
			<label for="email"></label><br>
			<input type="email" name="email" class="form-control form-back" placeholder="Enter Your Email..." required><br>
			<label for="phone"></label><br>
			<input type="tel" name="phone" class="form-control form-back" placeholder="Where From You(Pincode)" required><br>
			<label for="message"></label><br>
			<textarea name="msg" class="form-control form-back" placeholder="Tell Us Your Problam..." required></textarea><br>
			<input type="submit" name="submit" value="Send" class="form-control submit btn btn-outline-success">
			
		</form>
		<p >*Youe Email Is Not Share With Any One</p>
	</div>
    </div>
    </div>
    <p style="font-size:25px; font-weight:600;" class="text-center" >We Stand With Everyone Fighting On The Frontline</p>
    </div>


        <!--CONTACT US END HERE-->




        <!--FOOTER START HERE-->
        <p id="footer">Created By <a target="about:blank" rel="noreferrer noopener" href="https://m.facebook.com/atanu.dutta.735?ref=bookmarks">Atanu Dutta</a> </p>

        <!--FOOTER END HERE-->









    </div><!--MIAN DIV OF THIS WHOLE PAGE-->

    <!--DISPLAY THE NAME ON THE START BUTTON JS START-->
    <script>
        function getInputValue(){
    // Selecting the input element and get its value 
    var inputVal = document.getElementById("myInput").value;
    
    // Displaying the value
    document.getElementById("namestart").innerHTML=inputVal.slice(0, 1).toUpperCase()+inputVal.slice(1);
    }
    </script><!--DISPLAY THE NAME ON THE START BUTTON JS END-->
<script  src="preloader.js"></script>
<script src="app.js"></script>
<script  src="js/count.js"></script>
<script>
    

var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 100) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
</script>
<script src='js/darkmode.js'></script>
    
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
          duration:800,
      });
    </script>
</body>
</html>