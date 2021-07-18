<!DOCTYPE html>
<html lang="en">

<head>
  {{include "/templates/head.html"}}
  <title>Bulletins - Immaculate Conception Church</title>
  <meta name="description" content="View the current bulletin that contains the latest parish news.">
</head>

<body>
  {{include "/templates/header.html"}}
  <div class="container bulletin-embed">
    <h1>Current Bulletin</h1>
<?php
        $files = scandir('files/2021', SCANDIR_SORT_DESCENDING);
        $newest_file = $files[0];

	echo "<iframe width='100%' height='800' frameBorder='0'
      src='/js/pdfjs/web/viewer.html?file=/bulletins/files/2021/$newest_file'></iframe>"
?>

    <p>If you are in need of a paper copy of the bulletin, pick one up from the Bulletin Box in front of church.</p>
    <h3>Need an older bulletin?</h3>
    <p>If you are in need of a past bulletin, <a href="/bulletins/files/">browse our archives</a>.</p>
  </div>
  {{include "/templates/footer.html"}}
</body>

</html>
