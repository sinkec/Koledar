<!DOCTYPE html>
<header>

<title>Test</title>
<meta charset="UTF-8" />
<link href="Calendar.css" type="text/css" rel="stylesheet" /> 
</header>

<body>
<h1>Test</h1>
<p>Lepo lepo se imam,... lep je dan.</p>

<?php
 
 include 'Calendar.php';
 
 $calendar = new Calendar();
 
 $calendar -> Show();

?>
</body>

