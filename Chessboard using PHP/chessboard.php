<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-color: #A05A2C ;
        }
        table {
            border: 5px solid black;
            border-collapse: collapse;
            box-shadow: 25px 25px 25px rgba(0, 0, 0, 0.5);
        }

        td {
            padding: 30px;
            border: 1px solid black;
        }

        .bgcolor {
            background-color: #A05A2C;
        }

        .bgcolor1 {
            background-color: #D8B886;
        }
        input
        {
            border-radius: 5px;
            border: 1px solid #ccc; 
        }
    </style>
</head>

<body>
    <center>
        <br><br>
        <form method="POST">
            <input type="text" name="cb">
            <input type="submit" name="submit" value="Genereate Chessboard" required>
        </form>
        <br><br>
        <table>
            <?php
            if (isset($_POST["submit"])) {
                $input = $_POST["cb"];


                for ($row = 1; $row <= $input; $row++) {
                    echo "<tr>";
                    for ($col = 1; $col <= $input; $col++) {
                        if (($row + $col) % 2 == 0) {
                            echo "<td class='bgcolor'></td>";
                        } else {
                            echo "<td class='bgcolor1'></td>";
                        }
                    }
                    echo "</tr>";

                }
            }
            ?>
        </table>
    </center>
</body>

</html>