<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Download File on Button Click </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <br><br>
    <center>
        <form action="download.php" method="post" enctype="multipart/form-data">
            <input type="file" name="myfile" />
            <br><br>
            <input type="submit" name="upload" value="Upload File" />
        </form>
    </center>
</body>

</html>