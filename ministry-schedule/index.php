<!DOCTYPE html>
<html lang="en">

<head>
  {{include "/templates/head.html"}}
  <title>Ministry Schedule - Immaculate Conception Church</title>
  <meta name="description" content="Find out when you are on the schedule to assist in Mass.">
</head>

<body>
  {{include "/templates/header.html"}}
  <div class="container bulletin-embed">
    <h1>Ministry Schedule</h1>
	<?php
        $files = scandir('files/2021', SCANDIR_SORT_DESCENDING);
        $newest_file = $files[0];

        echo "<iframe width='100%' height='800' frameBorder='0'
        src='/js/pdfjs/web/viewer.html?file=/ministry-schedule/files/2021/$newest_file'></iframe>"
	?>

    <h3>Need an older list?</h3>
    <p>If you are in need of an older ministry list, <a href="/ministry-schedule/files/">browse our archives</a>.</p>
  </div>
  {{include "/templates/footer.html"}}
</body>

</html>
