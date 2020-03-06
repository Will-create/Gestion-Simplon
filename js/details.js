$(document).ready(()=>{
	var photo=$("#profil");


	function afficherPhoto(self,idPhoto){
		var photo=$("#"+idPhoto);
          photo.src=self.value;

	}

})