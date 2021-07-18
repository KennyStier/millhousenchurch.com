<!DOCTYPE html>
<html lang="en">

<head>
  {{include "/templates/head.html"}}
  <title>Admin - Immaculate Conception Church</title>
</head>

<body>
  {{include "/templates/header.html"}}
  <div class="container">

<h1>Hello, {{ placeholder "http.auth.user.name" }}</h1>
<hr />
<div class="row">
<div class="col-md-3">
    <h1>Upload Bulletin</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" id="location" name="location" value="bulletin">
	Bulletin Date:
<input type="text" name="date" id="date" placeholder="YYYY-MM-DD" required
pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" title="Enter a date in this format YYYY-MM-DD"/>
<br />
<input type="file" name="fileToUpload" id="fileToUpload">
<br />
	<input type="submit" value="Upload PDF" name="submit">
    </form>
</div>
<div class="col-md-3">
    <h1>Upload Ministry List</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" id="location" name="location" value="ministry">
        List Date:
<input type="text" name="date" id="date" placeholder="YYYY-MM" required
pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])" title="Enter a date in this format YYYY-MM"/>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br />
        <input type="submit" value="Upload PDF" name="submit">
    </form>
</div>
<div class="col-md-3">
    <h1>Merge PDF</h1>
    <form action="merge.php" method="post" enctype="multipart/form-data">
<input type="file" name="0" id="0">
<input type="file" name="1" id="1">
<input type="file" name="2" id="2">
<br />
<input type="submit" value="Get Merged PDF" name="submit">
    </form>
</div>
<div class="col-md-3">
    <h1>Add Urgent Notice</h1>
    <form action="alert.php" method="post" enctype="multipart/form-data">
  Alert Expiration:
<input type="text" name="date" id="date" placeholder="YYYY-MM-DD HH:MM:SS" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))\s([01]?[0-9]{1}|2[0-3]{1}):[0-5]{1}[0-9]{1}:[0-5]{1}[0-9]{1}" required
 title="Enter a date in this format YYYY-MM-DD HH:MM:SS"/><br/>
Message:
<textarea name="message" id="message" rows="2" cols="30" maxlength="60" placeholder="Insert up to 60 chars" required></textarea>  <br /><br />
<input type="submit" value="Set Alert" name="submit">
</div>
</div>
  </div>
  {{include "/templates/footer.html"}}
</body>

</html>
