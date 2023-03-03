<?php

if (isset($_POST["upload"])) {
    //? $_FILES is global array

    $file_name = $_FILES["myfile"]["name"];
    $file_tmp_name = $_FILES["myfile"]["tmp_name"];
    if (move_uploaded_file($file_tmp_name, "uploads/" . $file_name)) {
        echo "<b>File Uploaded Successfully.</b>";
    } else {
        echo "<b>Error... please try again.</b>";
    }
}
?>
<br>
<a download="<?php echo $file_name; ?>" href="uploads/<?php echo $file_name; ?>"> Click here to download file.</a>