<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .big{
            font-size: 40px; 
        }
    </style>
    <link rel="stylesheet" href="table.css">
</head>
<body>
<div><a style="float:right" href="logout.php"><button>Log out</button></a></div><br/></br>
      <div> <?php
        include 'studentnav.php';
        ?></div>




        <table>
        <h2>FORM 4 TIMETABLE</h3>
            <thead>
                <tr>
                    <td></td>
                    <td>8:00am-9:00am</td>
                    <td>9:00am-10:00am</td>
                    <td>10:00am-10:30am</td>
                    <td>10:30am-11:30am</td>
                    <td>11:30am-12:30pm</td>
                    <td>12:30pm-1:00pm</td>
                    <td>1:00pm-2:00pm</td>
                    <td>2:00pm-3:00pm</td>
                    <td>3:00pm-4:00pm</td>
                </tr>
            </thead>
            <?php
            include 'connect.php';
            $sql="SELECT * FROM class_timetable WHERE class_id = 4;";
            $result=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td style=\"font-weight:bold;  font-size:20px;\">";  echo "MON"; echo "</td>";
                echo "<td>";  echo $row['mon_8_00']; echo "</td>";
                echo "<td>";  echo $row['mon_9_00']; echo "</td>";
                echo "<td class=\"big\">";  echo "B"; echo "</td>";
                echo "<td >";  echo $row['mon_10_30']; echo "</td>";
                echo "<td>";  echo $row['mon_11_30']; echo "</td>";
                echo "<td class=\"big\">";  echo "L"; echo "</td>";
                echo "<td>";  echo $row['mon_1_00']; echo "</td>";
                echo "<td>";  echo $row['mon_2_00']; echo "</td>";
                echo "<td>";  echo $row['mon_3_00']; echo "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td style=\"font-weight:bold;  font-size:20px;\">";  echo "TUE"; echo "</td>";
                echo "<td>";  echo $row['tue_8_00']; echo "</td>";
                echo "<td>";  echo $row['tue_9_00']; echo "</td>";
                echo "<td class=\"big\">";  echo "R"; echo "</td>";
                echo "<td>";  echo $row['tue_10_30']; echo "</td>";
                echo "<td>";  echo $row['tue_11_30']; echo "</td>";
                echo "<td class=\"big\">";  echo "U"; echo "</td>";
                echo "<td>";  echo $row['tue_1_00']; echo "</td>";
                echo "<td>";  echo $row['tue_2_00']; echo "</td>";
                echo "<td>";  echo $row['tue_3_00']; echo "</td>";
                echo "</tr>";


                echo "<tr>";
                echo "<td style=\"font-weight:bold;  font-size:20px;\">";  echo "WED"; echo "</td>";
                echo "<td>";  echo $row['wed_8_00']; echo "</td>";
                echo "<td>";  echo $row['wed_9_00']; echo "</td>";
                echo "<td class=\"big\">";  echo "E"; echo "</td>";
                echo "<td>";  echo $row['wed_10_30']; echo "</td>";
                echo "<td>";  echo $row['wed_11_30']; echo "</td>";
                echo "<td class=\"big\">";  echo "N"; echo "</td>";
                echo "<td>";  echo $row['wed_1_00']; echo "</td>";
                echo "<td>";  echo $row['wed_2_00']; echo "</td>";
                echo "<td>";  echo $row['wed_3_00']; echo "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td style=\"font-weight:bold;  font-size:20px;\">";  echo "THU"; echo "</td>";
                echo "<td>";  echo $row['thu_8_00']; echo "</td>";
                echo "<td>";  echo $row['thu_9_00']; echo "</td>";
                echo "<td class=\"big\">";  echo "A"; echo "</td>";
                echo "<td>";  echo $row['thu_10_30']; echo "</td>";
                echo "<td>";  echo $row['thu_11_30']; echo "</td>";
                echo "<td class=\"big\">";  echo "C"; echo "</td>";
                echo "<td>";  echo $row['thu_1_00']; echo "</td>";
                echo "<td>";  echo $row['thu_2_00']; echo "</td>";
                echo "<td>";  echo $row['thu_3_00']; echo "</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td style=\"font-weight:bold;  font-size:20px;\">";  echo "FRI"; echo "</td>";
                echo "<td>";  echo $row['fri_8_00']; echo "</td>";
                echo "<td>";  echo $row['fri_9_00']; echo "</td>";
                echo "<td class=\"big\">";  echo "K"; echo "</td>";
                echo "<td>";  echo $row['fri_10_30']; echo "</td>";
                echo "<td>";  echo $row['fri_11_30']; echo "</td>";
                echo "<td class=\"big\">";  echo "H"; echo "</td>";
                echo "<td>";  echo $row['fri_1_00']; echo "</td>";
                echo "<td>";  echo $row['fri_2_00']; echo "</td>";
                echo "<td>";  echo $row['fri_3_00']; echo "</td>";
                echo "</tr>";
            }
            ?>
    
</body>
</html>