<?php
	$result = array();
	if(isset($_GET["param"])){
		$result["status"] = "OK";
		$result["message"] = "Input is valid!";
	} else {
		$result["status"] = "ERROR";
		$result["message"] = "Input IS NOT valid";
	}

	echo json_encode($result);
?>


<body>
	<h1>Validating form using Ajax</h1>

	<form class="simpleValidation">
		<div class="fieldRow">
		<label>Title *</label>
		<input type="text" id="title" name="title" class="required"/>
		</div>

		<div class="fieldRow">
		<label>Url</label>
		<input type ="text" id="url" name="url" value="http://" />
		<label>Labels</label>
		<input type="text" name="labels" name="label" />
		</div>
		<div class="fieldRow">

		<label>Text *</label>
		<textarea id="textarea" class="required"></textarea>
		</div>

		<div class="fieldRow">
			<input type="submit" id="formSubmitter" value="Submit" disabled="disabled" />
		</div>
	</form>
</body>

<style>
	label{ width:70px; float:left; }
	form { width:320px; }

	input, textarea{ width: 200px;  border:1px solid black; float: right; padding:5px;}
	input[type=submit] { cursor:pointer;
     background-color:green; color:#FFF; }
   input[disabled=disabled], input[disabled] {
   background-color:#d1d1d1; }
   fieldRow { margin:10px 10px; overflow:hidden; }
   failed { border: 1px solid red; }
</style>