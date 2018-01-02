window.onload=function(){	
	$.ajax({
      url: "assets/js/get_info.js",
      dataType: "script",
    });
	
	$.ajax({
      url: "assets/js/logout.js",
      dataType: "script",
    });
	
    let table = document.getElementById("messages");
    let request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState === 4 && request.status === 200){
            table.innerHTML+= request.responseText;
        }
    };
    request.open("GET","assets/php/getnotif.php",true);
    request.send();
};