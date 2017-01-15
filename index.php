<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PNZH &mdash; </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","./customerSearchlive.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<div class="container" style="margin-top: 50px;">
<img src="pnzh.png" style="margin-bottom: 20px;" />
<div class="panel panel-primary">
  <div class="panel-heading">PNZH Customer Search</div>
  	<div class="panel-body">
	  	<form><input type="text" class="form-control" id="customerSearch" size="30" onkeyup="showResult(this.value)" placeholder="Customer Name" autocomplete="false"></form>
	  	</div>
		<div id="livesearch"></div>
	</div>
</div>
</body>
</html>	