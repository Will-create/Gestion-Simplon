$(document).ready(()=>{
	var glob=$(".fils");
	cachertout();
	glob[0].show();
	


function cachertout(){
	for(var i=0;i<glob.length;i++){
		glob[i].hide();
	}
}
function afficher(quoi){
	cachertout();
	if(quoi=="list" || quoi=="tableau" || quoi=="tab" || quoi=="liste"){
		glob[0].css("animation: ani1 1s ease-out;");
        glob[0].show();
	}else if (quoi=="formulaire" || quoi=="formulair" || quoi=="form" || quoi=="forme") {
		glob[1].css("animation: ani1 1s ease-out;");
        glob[1].show();  
	}else if (quoi=="details" || quoi=="detailles" || quoi=="detailles" || quoi=="detaill") {
		glob[2].css("animation: ani1 1s ease-out;");
        glob[2].show();  
	}else{
		var MsgErreur="Argument incorrecte\n '"+quoi+"' n'est pas un argument valid";
		alert(MsgErreur);
	}
}

})