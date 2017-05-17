
//Hämat produkterna från xml-filen
var ajax = new XMLHttpRequest();

ajax.open("GET", "products.xml", false);
ajax.send(); 

	
var xml=ajax.responseXML;


//Knapp som skickar beställningsformuläret
var orderButton = document.getElementById("submitBtn");
orderButton.addEventListener("click", order);


