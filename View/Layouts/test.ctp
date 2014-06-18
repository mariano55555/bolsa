<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Roxy file manager</title>
<link href="/jobsearch/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" type="text/css" />
<link href="/jobsearch/css/main.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Jobsearch/js/test/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Jobsearch/js/test/jquery-ui-1.10.4.custom.min.js"></script>
<!--<script type="text/javascript" src="/Jobsearch/js/test/custom.js"></script>
<script type="text/javascript" src="/Jobsearch/js/test/main.min.js"></script>
<script type="text/javascript" src="/Jobsearch/js/test/jquery-dateFormat.min.js"></script>-->
<script src="/jobsearch/js/ckeditor/ckeditor.js"></script>
</head>

<body>

<textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>

<script>
var roxyFileman = '/fileman/index.html?integration=ckeditor';     
$(function(){
  CKEDITOR.replace( 'editor1',{filebrowserBrowseUrl:roxyFileman, filebrowserUploadUrl:roxyFileman,
     filebrowserUploadUrl:roxyFileman, filebrowserImageBrowseUrl:roxyFileman+'&type=image',
     filebrowserImageUploadUrl:roxyFileman+'&type=image'});
});
</script>
</body>
</html>