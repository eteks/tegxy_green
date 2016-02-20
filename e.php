<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<!-- Keyword Related script -->

<link rel="StyleSheet" href="Tagedit-master/css/ui-lightness/jquery-ui-1.9.2.custom.min.css" type="text/css" media="all"/>
<link rel="StyleSheet" href="Tagedit-master/css/jquery.tagedit.css" type="text/css" media="all"/>

<script type="text/javascript" src="Tagedit-master/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery.autoGrowInput.js"></script>
<script type="text/javascript" src="Tagedit-master/js/jquery.tagedit.js"></script>

<script type="text/javascript">

$(function() {

// Fullexample
$( "#tagform-full" ).find('input.tag').tagedit({
autocompleteURL: 'Tagedit-master/server/autocomplete.php',
//checkToDeleteURL: 'server/checkToDelete.php'
});
});
</script>
<!-- Keyword related script -->
</head>

<body>
<p id="tagform-full"><input type="text" name="tag[19-a]"  class="tag"/>
</p>
</body>
</html>