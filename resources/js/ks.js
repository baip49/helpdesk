// Title Page 

if(document.addEventListener){
	document.addEventListener("DOMContentLoaded", function(){
		loaded();
	});
} else if(document.attachEvent){
	document.attachEvent("onreadystatechange", function(){
		loaded();
	});
}

function loaded(){

	setInterval(loop, 350);

}

var x = 0;

var titleText = [ "Kyhlus Services", "Kyhlus Service", "Kyhlus Servic", "Kyhlus Servi", "Kyhlus Serv", "Kyhlus Ser", "Kyhlus Se", "Kyhlus S", "Kyhlus", "Kyhlus S", "Kyhlus Se", "Kyhlus Ser", "Kyhlus Serv", "Kyhlus Servi", "Kyhlus Servic", "Kyhlus Service", "Kyhlus Services"];

function loop(){

	document.getElementsByTagName("title")[0].innerHTML = titleText[x++%titleText.length];

} 