<?php
<html>
<script src="jquery/jquery-latest.min.js"></script>
<script src="jquery/jquery-latest.min.js"></script>
<script  type="text/javascript" >
	function uploadFile(){
  var input = document.getElementById("file");
  var input2 = document.getElementById("file2");
  //var te = document.getElementById("txt");
  file = input.files[0];
 	file2 = input2.files[0];
  if(file != undefined && file2 != undefined){

    formData= new FormData();
    if(!!file.type.match(/image.*/) && !!file2.type.match(/image.*/)){
    //	alert(file);
      formData.append("image", file);
      formData.append("image2", file2);
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
  xhttp.open("GET", "removeme.php?q="+cat + "&c="+"mahi", true);
  xhttp.send();   

}
}
</script>

<body>
<form enctype="multipart/form-data" method="post" >
	<input type="text" name="txt" id="txt"/>
   <input type="file" id="file" /><br/>
   <input type="file" id="file2" />
<button  onclick="uploadFile()">ADD</button>
</form>
</body>
</html>