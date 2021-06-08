


document.getElementById('start').onclick = function() {
    document.getElementById('start').style.background="red";


    document.getElementById('firsr').style.display="block" ;

    test();


}





document.getElementById('restart').onclick = function() {

  document.getElementById('firsr').style.display="none" ;
    document.getElementById('yo').style.display="none" ;
      document.getElementById('third').style.display="none" ;
        document.getElementById('forth').style.display="none" ;
          document.getElementById('five').style.display="none" ;


          document.getElementById('y').style.display="block" ;
          document.getElementById('yes').style.display = "block";
          document.getElementById('yess').style.display = "block";
          document.getElementById('n').style.display = "block";
      document.getElementById('mtos').style.display = "block";
          document.getElementById('mtod').style.display = "block";


          document.getElementById('a').style.display = "block";
          document.getElementById('aes').style.display = "block";
          document.getElementById('aess').style.display = "block";
          document.getElementById('an').style.display = "block";


          document.getElementById('ty').style.display="block" ;
          document.getElementById('tno').style.display = "block";



          document.getElementById('fy').style.display = "block";
          document.getElementById('fyes').style.display = "block";
          document.getElementById('fn').style.display = "block";

          document.getElementById('gyes').style.display = "block";
          document.getElementById('gyess').style.display = "block";
          document.getElementById('gy').style.display = "block";
        
          

          document.getElementById('firsta').style.display = "none";
          document.getElementById('seca').style.display = "none";

          document.getElementById('thirda').style.display = "none";
          document.getElementById('fortha').style.display = "none";
          document.getElementById('lasta').style.display = "none";
          document.getElementById('g').style.display = "none";
          document.getElementById('gf').style.display = "none";


          document.getElementById('dj').innerHTML = " ";
          document.getElementById('risk').innerHTML = " ";


          var s=0;
          var a =0;
          test();


}







function test(){
    var s=0;

    var a=0;
document.getElementById('y').onpointerup = function() {
    s=1;
    a=1;
    document.getElementById('yo').style.display="block" ;
    document.getElementById('yes').style.display = "none";
    document.getElementById('yess').style.display = "none";
    document.getElementById('n').style.display = "none";
    document.getElementById('firstans').innerHTML = "Cough";
    document.getElementById('firsta').style.display = "block";
    document.getElementById('y').style.display = "none";
    document.getElementById('mtos').style.display="none";
    
    

}
document.getElementById('yes').onpointerup = function() {
    s=1;
    a=1;
    document.getElementById('yo').style.display="block" ;
    document.getElementById('y').style.display = "none";
    document.getElementById('yess').style.display = "none";
    document.getElementById('n').style.display = "none";
    document.getElementById('firstans').innerHTML = "Fever";
    document.getElementById('firsta').style.display = "block";
    document.getElementById('yes').style.display = "none";
    document.getElementById('mtos').style.display="none";

}
document.getElementById('yess').onpointerup = function() {
    s=1;
    a=1;
    document.getElementById('yo').style.display="block" ;
    document.getElementById('yes').style.display = "none";
    document.getElementById('y').style.display = "none";
    document.getElementById('n').style.display = "none";
    document.getElementById('firstans').innerHTML = "Difficulty in Breathing";
    document.getElementById('firsta').style.display = "block";
    document.getElementById('yess').style.display = "none";
    document.getElementById('mtos').style.display="none";

}
document.getElementById('mtos').onpointerup = function() {
    s=2.5;
    a=2.5;
    document.getElementById('yo').style.display="block" ;
    document.getElementById('yes').style.display = "none";
    document.getElementById('mtos').style.display = "none";
    document.getElementById('y').style.display = "none";
    document.getElementById('n').style.display = "none";
    document.getElementById('firstans').innerHTML = "More then one Symptoms";
    document.getElementById('firsta').style.display = "block";
    document.getElementById('yess').style.display = "none";
    document.getElementById('mtos').style.display="none";

}
document.getElementById('n').onpointerup = function() {
    s=0;
    a=0;
    document.getElementById('yo').style.display="block" ;
    document.getElementById('yes').style.display = "none";
    document.getElementById('yess').style.display = "none";
    document.getElementById('y').style.display = "none";
    document.getElementById('firstans').innerHTML = "None Of This";
    document.getElementById('firsta').style.display = "block";
    document.getElementById('n').style.display = "none";
    document.getElementById('mtos').style.display="none";

}











document.getElementById('a').onpointerup = function() {
    s=s+1;
    a=a+1;
    document.getElementById('third').style.display="block" ;
    document.getElementById('aes').style.display = "none";
    document.getElementById('aess').style.display = "none";
    document.getElementById('an').style.display = "none";
    document.getElementById('secans').innerHTML = "Heart Diseases";
    document.getElementById('seca').style.display = "block";
    document.getElementById('a').style.display = "none";
    document.getElementById('mtod').style.display="none";


}
document.getElementById('mtod').onpointerup = function() {
    s=s+2.5;
    a=a+2.5;
    document.getElementById('third').style.display="block" ;
    document.getElementById('aes').style.display = "none";
    document.getElementById('mtod').style.display = "none";
    document.getElementById('aess').style.display = "none";
    document.getElementById('an').style.display = "none";
    document.getElementById('secans').innerHTML = "More then one Diseases";
    document.getElementById('seca').style.display = "block";
    document.getElementById('a').style.display = "none";
    


}

document.getElementById('aes').onpointerup = function() {
    s=s+1;
    a=a+1;
    document.getElementById('third').style.display="block" ;
    document.getElementById('a').style.display = "none";
    document.getElementById('aess').style.display = "none";
    document.getElementById('an').style.display = "none";
    document.getElementById('secans').innerHTML = "Lung Diseases";
    document.getElementById('seca').style.display = "block";
    document.getElementById('aes').style.display = "none";
    document.getElementById('mtod').style.display="none";

}
document.getElementById('aess').onpointerup = function() {
    s=s+1;
    a=a+1;
    document.getElementById('third').style.display="block" ;
    document.getElementById('aes').style.display = "none";
    document.getElementById('a').style.display = "none";
    document.getElementById('an').style.display = "none";
    document.getElementById('secans').innerHTML = "Hypertension";
    document.getElementById('seca').style.display = "block";
    document.getElementById('aess').style.display = "none";
    document.getElementById('mtod').style.display="none";

}
document.getElementById('an').onpointerup = function() {
    s=s+0;
    a=a+0;
    document.getElementById('third').style.display="block" ;
    document.getElementById('aes').style.display = "none";
    document.getElementById('aess').style.display = "none";
    document.getElementById('an').style.display = "none";
    document.getElementById('secans').innerHTML = "None Of This";
    document.getElementById('seca').style.display = "block";
    document.getElementById('an').style.display = "none";
    document.getElementById('mtod').style.display="none";

}



var b=0;
document.getElementById('ty').onpointerup = function() {
    s=s+2;
    a=a+2;
    document.getElementById('forth').style.display="block" ;
    document.getElementById('tno').style.display = "none";
    document.getElementById('thirdans').innerHTML = "Yes";
    document.getElementById('thirda').style.display = "block";
    document.getElementById('ty').style.display = "none";


}
document.getElementById('tno').onpointerup = function() {
    s=s+0;
    a=a+0;
    document.getElementById('forth').style.display="block" ;
    document.getElementById('ty').style.display = "none";
    document.getElementById('thirdans').innerHTML = "No";
    document.getElementById('thirda').style.display = "block";
    document.getElementById('tno').style.display = "none";



}






document.getElementById('fy').onpointerup = function() {
    s=s+3;
    a=a+3;
    document.getElementById('five').style.display = "block";
    document.getElementById('fyes').style.display = "none";
    document.getElementById('fn').style.display = "none";
    document.getElementById('forthans').innerHTML = "I recently meet or lived with someone who has tested positive.";
    document.getElementById('fortha').style.display = "block";
    document.getElementById('fy').style.display = "none";


}
document.getElementById('fyes').onpointerup = function() {
    s=s+1.2;
    a=a+1.2;
    document.getElementById('five').style.display = "block";
    document.getElementById('fy').style.display = "none";
    document.getElementById('fn').style.display = "none";
    document.getElementById('forthans').innerHTML = "I am a helthcare worker.";
    document.getElementById('fortha').style.display = "block";
    document.getElementById('fyes').style.display = "none";


}
document.getElementById('fn').onpointerup = function() {
    s=s+0;
    a=a+0;
    document.getElementById('fy').style.display = "none";
    document.getElementById('fyes').style.display = "none";
    document.getElementById('forthans').innerHTML = "None Of This";
    document.getElementById('fortha').style.display = "block";
    document.getElementById('fn').style.display = "none";
    fun();
    document.getElementById('g').style.display = "block";
    document.getElementById('gf').style.display = "block";
}






document.getElementById('gy').onpointerup = function() {
    s=s+2.5;
    a=a+2.5;
    document.getElementById('gyes').style.display = "none";
    document.getElementById('gyess').style.display = "none";
    document.getElementById('lastans').innerHTML = "Less Then 5 days Ago";
    document.getElementById('lasta').style.display = "block";
    document.getElementById('gy').style.display = "none";

    fun();
    document.getElementById('g').style.display = "block";
    document.getElementById('gf').style.display = "block";

}
document.getElementById('gyes').onpointerup = function() {
    s=s+1;
    a=a+1;
    document.getElementById('gy').style.display = "none";
    document.getElementById('gyess').style.display = "none";
    document.getElementById('lastans').innerHTML = "Less Then 10 days Ago";
    document.getElementById('lasta').style.display = "block";
    document.getElementById('gyes').style.display = "none";

    fun();
    document.getElementById('g').style.display = "block";
    document.getElementById('gf').style.display = "block";
}
document.getElementById('gyess').onpointerup = function() {
    s=s+0.5;
    a=a+0.5;
    document.getElementById('gy').style.display = "none";
    document.getElementById('gyes').style.display = "none";
    document.getElementById('lastans').innerHTML = "Greater Then 14 days Ago";
    document.getElementById('lasta').style.display = "block";
    document.getElementById('gyess').style.display = "none";
    fun();
    document.getElementById('g').style.display = "block";
    document.getElementById('gf').style.display = "block";

    
}




function fun(){
    var t = document.getElementById('risk').innerHTML=Math.floor(((a/12.5)*100))+"%";
      if (Math.floor(((s/12.5)*100)) >=80){
    document.getElementById('dj').innerHTML="Risk Is High......Contact A Doctor Immediately";
  }
  else if (Math.floor(((s/12.5)*100))>=50 &&  Math.floor(((s/12.5)*100)) <= 79){
    document.getElementById('dj').innerHTML="Risk Is Slightly High Take a 14 days Quarantine & Take a advice of a Doctor";
  }
  else if (Math.floor(((s/12.5)*100)) >=30 && Math.floor(((s/12.5)*100)) <= 49 ){
    document.getElementById('dj').innerHTML="Risk Is Medium Take care of Yourself";
  }
  else{
    document.getElementById('dj').innerHTML="Risk Is Low You are safe"; 
  }

}




}
