/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var hello = "Hello";
var nome = "Riccardo";

document.write("<b>" +hello+ " " +nome+ "</b>");

var variabile;

variabile = 8;
document.write("Assegno 8, variabile" +variabile+ "</br>");

variabile += 2;
document.write("Sommo 2, variabile" +variabile+ "</br>");

variabile -= 4;
document.write("Sottraggo 4, variabile" +variabile+ "</br>");

variabile += 5;
document.write("Moltiplico per 5, variabile" +variabile+ "</br>");

variabile /= 3;
document.write("Divido per 3, variabile" +variabile+ "</br>");

var date = new Date();
var m = date.getMonth();

if(m==2){
    document.write("<i>Siamo a marzo!</i>");
}

var mesi = new Array("Gennaio","Febbraio","Marzo","Aprile","Maggio","Giugno","Luglio","Agosto","Settembre","Ottobre","Novembre","Dicembre");

var months = new Array("January","February","March","April","May","June","July","August","September","October","November","December");

document.write("<ol>")
for(var i in mesi){
    document.write("<li>"+mesi[i]+ "corrisponde a "+months[i]+"</li>");
}
document.write("</ol>");

var undef;

if(undef==undefined){
    document.write("<h3> La variabile non è definita</h3>");
} else{
    document.write("<h3> La variabile è definita</h3>");
}