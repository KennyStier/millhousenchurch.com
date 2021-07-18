<?php
$target_dir = "pdftmp/";
shell_exec('rm pdftmp/out.pdf');

for ($i = 0; $i < 3; $i++) {
    $fileType = strtolower(pathinfo($_FILES[$i]["name"],PATHINFO_EXTENSION));
    $target_file = $target_dir . $i . ".pdf";
    $uploadOk = 1;

// Check file size
if ($_FILES[$i]["size"] > 5000000) {
  echo "$i: file is too large.";
  $uploadOk = 0;
}
// Check File Type
if ($fileType != "pdf") {
  echo "Invalid File Type";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "$i: file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES[$i]["tmp_name"], $target_file)) {
    echo "$i: uploaded.";
  } else {
    echo "$i: error uploading file.";
  }
}
}
shell_exec('pdfunite pdftmp/*.pdf pdftmp/out.pdf');
shell_exec('rm pdftmp/0.pdf pdftmp/1.pdf pdftmp/2.pdf');
echo "<a href='pdftmp/out.pdf'>View File Output</a>"


?>
