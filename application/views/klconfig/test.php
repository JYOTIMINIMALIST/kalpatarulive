<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?=base_url()?>klconfig/uploadData" method='post' enctype="multipart/form-data">
		Upload image file here
		<input type='file' name='file'/> <input type='submit' value='Upload Image'/>
	</form>
</body>
</html>