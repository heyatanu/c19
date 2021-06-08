statearray=statearray.map(a => a.toUpperCase());




search.addEventListener("keydown", function (e) {
  if (e.keyCode === 13) {
    myFunction(e);
  }
});

function myFunction(e) {
    $("#id").css("opacity", "1");
var index = statearray.indexOf(document.getElementById("search").value.toUpperCase());
var i=-1;
if(index== -1){
    document.getElementById("demo").innerHTML = "WRONG INPUT PLEASE CHECK";
  document.getElementById("name").innerHTML = "WRONG INPUT PLEASE CHECK";
  document.getElementById("confirm").innerHTML ="WRONG INPUT PLEASE CHECK";
  document.getElementById("recover").innerHTML = "WRONG INPUT PLEASE CHECK";
  document.getElementById("death").innerHTML = "WRONG INPUT PLEASE CHECK";
  }
  else{
  document.getElementById("demo").innerHTML = index;
  document.getElementById("name").innerHTML = statearray[index];
  document.getElementById("confirm").innerHTML = confirmarray[index];
  document.getElementById("recover").innerHTML = recoveredarray[index];
  document.getElementById("death").innerHTML = deathsarray[index];
  }
}


distnameforzonearray=distnameforzonearray.map(a => a.toUpperCase());




zone.addEventListener("keydown", function (a) {
  if (a.keyCode === 13) {
    myFunctionzone(a);
  }
});

function myFunctionzone(a) {
    $("#zonediv").css("opacity", "1");
var indexzone = distnameforzonearray.indexOf(document.getElementById("zone").value.toUpperCase());
if(indexzone== -1){
    document.getElementById("indexfzone").innerHTML = "WRONG INPUT PLEASE CHECK";
  document.getElementById("statename").innerHTML = "WRONG INPUT PLEASE CHECK";
  document.getElementById("distname").innerHTML ="WRONG INPUT PLEASE CHECK";
  document.getElementById("zone").innerHTML ="WRONG INPUT PLEASE CHECK";

  }
  else{
  document.getElementById("indexfzone").innerHTML = indexzone;
  document.getElementById("statename").innerHTML = statenameforzonearray[indexzone];
  document.getElementById("distname").innerHTML = distnameforzonearray[indexzone];
  document.getElementById("zonename").innerHTML =zonearray[indexzone];
  }


}