/*global $*/
window.onload = function(){ 
    let data= {
        text : "logout"
    };
    $("a.log").click(function(event){
        event.preventDefault();
         if(confirm("Are you sure you want to log out?")){
         $.post("/assets/php/logout.php",data,function(data,status,xhr){
            window.location.href = "/index.php";
        });
    
    }
});
};