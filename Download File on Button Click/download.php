<?php

if (isset($_POST["upload"])) {
    //? $_FILES is global array

    $file_name = $_FILES["myfile"]["name"];
    $file_type = $_FILES["myfile"]["type"];
    $file_size = $_FILES["myfile"]["size"];
    $file_tmp_name = $_FILES["myfile"]["tmp_name"];

    echo "<b>File Name : </b>".$file_name."<br>";
    echo "<b>File Type : </b>".$file_type."<br>";
    echo "<b>File Size : </b>".$file_size."<br>";
    echo "<b>File Temp Name : </b>".$file_tmp_name."<br>";

    if (move_uploaded_file($file_tmp_name, "uploads/" . $file_name)) {
        echo "<b><br><i>File Uploaded Successfully.</i></b>";
    } else {
        echo "<b><br><i>Error... please try again.</i></b>";
    }
}
?>
<br><br>
<a download="<?php echo $file_name; ?>" href="uploads/<?php echo $file_name; ?>">Click here to download file.</a>
