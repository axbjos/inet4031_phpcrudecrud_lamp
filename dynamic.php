<html>
<head>
<title>Dynamic Web Page</title>
</head>
<body>
<h2>This is a Heading</h2>
<p>This is a paragraph</p>

<!--This is an HTML Comment. It will not be displayed-->

<!--Print a date using server-side PHP.-->
<?php
echo date(DATE_RFC2822);
?>

<br>
<br>

<!--Print a date using client-side JavaScript.-->
<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time using JavaScript.</button>

<p id="demo"></p>

</body>
</html>
