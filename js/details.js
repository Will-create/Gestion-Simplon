


	function afficherPhoto(self,idPhoto){
	  
		var photo=document.getElementById(idPhoto);
		var fReader= new FileReader();
		fReader.readAsDataURL(self.files[0]);
		fReader.onloadend =function(e){
		  
		if(e.target.result!=photo.src){
          photo.src=e.target.result;
          console.log(e.target.result);
	  }else{
	    alert("veillez choisir une photo");
	  }
		}


	}
	
	







