var formbtton=document.getElementById('Formbutton');
var tablebtton=document.getElementById('formtable');
var formform=document.getElementById('datafrom');
var tableform=document.getElementById('table');
tablebtton.addEventListener("click",function(){
   tableform.style.display="block";
   formform.style.display="none";
});
formbtton.addEventListener("click",function(){
   tableform.style.display="none";
   formform.style.display="block";
});