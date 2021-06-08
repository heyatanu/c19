function darkmode(){
    $("#sun").css("opacity", "1");
    $("#dark").css("opacity", "0");
    $("body").css("background-color", "rgba(0, 0, 0, 0.89)"); 
    $("p").css("color", "rgba(241, 236, 236, 0.904)"); 
    $("h1").css("color", "rgb(228, 220, 220)"); 
    $("h2").css("color", "rgba(42, 37, 220, 0.911)"); 
    $(".showdatatitle p").css("color", "rgba(41, 248, 14, 0.904)"); 
    $(".sent").css("background-color", "blueviolet"); 
   /* $(".sent").css("border", "none"); 
    $(".reply-chat").css("border", "none");*/
    $(".reply-chat").css("background-color", "rgba(130, 6, 247, 0.788)"); 
     
    $(".modal-content").css("background-color", "black"); 
    $(".result").css("background-color", "teal"); 
    $("#chatbot-title").css("color", "red"); 
    $("#myInput").css("background-color", "transparent");
    $("#myInput").css("border", "none");
    $(".form-back").css("background-color", "transparent");
    $(".form-back").css("border-color", "cyan");
    $("#prevent-dis-care").css("color", "rgb(217,43,43)");
  
    $(".form-control.form-back").css("color", "red");
    $("#myInput").css("color", "yellow");
  
    
}


function lightmode(){
    $("#sun").css("opacity", "0");
    $("#dark").css("opacity", "1");
    $("body").css("background-color", ""); 
    $("p").css("color", ""); 
    $("h1").css("color", ""); 
    $("h2").css("color", ""); 
    $(".showdatatitle p").css("color", ""); 
    $(".sent").css("background-color", ""); 
    $(".sent").css("border", "");
    $(".modal-content").css("background-color", ""); 
    $(".result").css("background-color", ""); 
    $("#chatbot-title").css("color", ""); 
    $("#myInput").css("background-color", "");
    $("#myInput").css("border", "");
    $(".form-back").css("background-color", "");
    $(".form-back").css("border-color", "");
    $("#prevent-dis-care").css("color", ""); 

    $(".form-control.form-back").css("color", "");
   /* $("#myInput").css("color", "");
    $(".reply-chat").css("border", ""); */
    $(".reply-chat").css("background-color", ""); 
    
    
}


