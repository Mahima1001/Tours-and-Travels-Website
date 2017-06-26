<html>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="jquery/jquery-latest.min.js"></script>
<script  type="text/javascript" >
	function uploadFile(){
  var input = document.getElementById("file");
  //var te = document.getElementById("txt");
  file = input.files[0];
  if(file != undefined){

    formData= new FormData();
    if(!!file.type.match(/image.*/)){
    //	alert(file);
      formData.append("image", file);
      $.ajax({
        url: "upload.php",
        type: "POST",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        async: false,
        
        success: function(data){
        	alert('heyy');
            next();
        }
      });
    }else{
      alert('Not a valid image!');
    }
  }else{
    alert('Input something!');
  }
}
</script>
<script>
function next()
{
	var cat=document.getElementById("txt").value;
	var xhttp=null;
			 xhttp = new XMLHttpRequest();
			 if(xhttp){      

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		
    }
  };
  xhttp.open("GET", "removeme.php?q="+cat, true);
  xhttp.send();   

}
}
</script>

<body>
<form enctype="multipart/form-data" method="post" >
	<input type="text" name="txt" id="txt"/>
   <input type="file" id="file" />
<button  onclick="uploadFile()">ADD</button>
</form>
</body>
</html>