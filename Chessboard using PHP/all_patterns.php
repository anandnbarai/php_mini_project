<html>

<head>
    <style>
        body{
            background-color: #abdbe3;
        }

        td {
            padding: 20px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <tr>
        <?php

        echo "<h2>Basic  Rules to Print All Pattern</h2><br>";
        echo "1) Run the outer FOR LOOP the number of times you are having the lines. <b>Outer FOR LOOP is for ROWS and Inner FOR LOOP is for COLUMNS.</b><br> 
              2) How many colums are there with each row => Identify for every ROW numbers how many colums are there.<br>
              3) What do you need to print?<br><br>";
        ?>
    </tr>
    <table>
        </tr>
        <tr>
            <th>
                <?php
                echo "<b>Pattern 1<br></b>";
                ?>
            </th>
            <td>
                <?php
                for ($i = 0; $i <= 4; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 2<br></b>";
                ?>
            </th>
            <td>
                <?php
                for ($i = 0; $i <= 5; $i++) {
                    for ($j = 1; $j <= 5; $j++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 3<br></b>";
                ?>
            </th>
            <td>
                <?php
                for ($i = 5; $i >= 1; $i--) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 4<br></b>";
                ?>
            </th>
            <td>
                <?php
                $size = 5;
                for ($i = 1; $i <= $size; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>
        </tr>
    </table>

</body>

</html>