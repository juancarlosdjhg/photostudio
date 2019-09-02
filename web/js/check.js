function validar()
{

    var a=document.contactf['modularidad[]'];
	var p=0;
	
	if(a.length==1){
	for(i=0;i==a.length;i++){
		if(a[i].checked){
			p=1;
		}
	}
	if (p==0){
		alert('Seleccione por lo menos una Modalidad para el evento');
		return false;
	}
			
	return true;
}
	
	else{
	for(i=0;i<a.length;i++){
		if(a[i].checked){
			p=1;
		}
	}
	if (p==0){
		alert('Seleccione por lo menos una Modalidad para el evento');
		return false;
	}
			
	return true;
}}

function validar2()
{

    var a=document.contactf['pnf[]'];
	var p=0;
	for(i=0;i<=a.length;i++){
		if(a[i].checked){
			p=1;
		}
	}
	if (p==0){
		alert('Seleccione por lo menos un (1) Programa');
		return false;
	}
			
	return true;
}