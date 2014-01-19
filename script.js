

/*
$(document).ready(function() {
    "use strict";
    //Echo statements cannot be seen if PHP script placed outside 'div home'. Need to place it in the 'div home' in order to see it.
    
    $("#submit_btn").click(function() {
        //alert("Submit search query");
        //$("#home").html("Submit button speaks to you!");
        
        //alert(phpstring);
        //$("#home").append(phpstring);
        //$.mobile.changePage($("#results"), "slide", true, true);
        
        
        getexpr();
    });
});
*/

function getexpr(str) {
    //Changes the page in the app
    document.location.href="#results";
    
    if(window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();   
    }
    else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");   
    }
    
    xmlhttp.onreadystatechange=function() {
        if(xmlhttp.readyState==4 && xmlhttp.status==200) {
            $("#res_content").html(xmlhttp.responseText);
        }
    }
    
    var expr = ($("#expression").val() == null) ? "" : $("#expression").val();
    var feeling = ($("#feelings").val() == null) ? "" : $("#feelings").val();
    var bodypart = ($("#bodyPart").val() == null) ? "" : $("#bodyPart").val();
    var url = "?expression="+expr+"&feelings="+feeling+"&bodypart="+bodypart;
    
    xmlhttp.open("GET", "getexpr.php"+url, true);
    xmlhttp.send();
}