
	var glob=document.getElementsByClassName("fils");
	
  cachertout();
	affiche(glob[0]);
	


function cachertout(){
	for(var i=0;i<glob.length;i++){
		glob[i].style.display="none";
	}
}
function affiche(elem){
  elem.style="animation: ani1 1s ease-out";
  elem.style.display="flex";
}
function afficher(quoi){
	cachertout();
	if(quoi=="list" || quoi=="tableau" || quoi=="tab" || quoi=="liste"){
glob[0].style="animation: ani1 1s ease-out;";
        affiche(glob[0]);
	}else if (quoi=="formulaire" || quoi=="formulair" || quoi=="form" || quoi=="forme") {
glob[1].style="animation: ani1 1s ease-out;";
affiche(glob[1]);
	}else if (quoi=="details" || quoi=="detailles" || quoi=="detailles" || quoi=="detaill") {
		glob[2].style="animation: ani1 1s ease-out;";
affiche(glob[2]);
	}else{
		var MsgErreur="Argument incorrecte\n '"+quoi+"' n'est pas un argument valid";
		alert(MsgErreur);
	}
}

