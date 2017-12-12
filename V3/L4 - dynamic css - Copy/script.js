var getId = function (id) {
	return document.getElementById(id);
};
var contentWrite = function (e, txt) {
	e.innerHTML = txt;
}
var contentAppend = function (e, txt) {
	e.innerHTML += txt;
};

var isEmpty = function (o) {
	return o === undefined || o === null || o === "";
}

var index = 1;

window.onload = function () {
	console.log("Working");
}

function dynamicAdd(btn){
	
	
	var placeholder = getId("place-holder");
	var mainContent = getId("main-content");

	placeholder.innerHTML += "<div class='clear'></div><br><h1>Adding Index : " + index + "</h1>" + mainContent.innerHTML;

	index++;
}



function changeCSS(btn){
	
	
	
	var mainContent = document.getElementsByClassName("content-fixed-place");


	if(mainContent.length > 0){
		var list =mainContent[0].classList;
		if(!list.contains("bg-red")) {
			list.add("bg-red");
			list.remove("bg-skyblue");
		} else {
			list.add("bg-skyblue");
			list.remove("bg-red");
			
		}
		
		console.log(mainContent[0]);
		console.log(mainContent[0].classList);
	}
	
}