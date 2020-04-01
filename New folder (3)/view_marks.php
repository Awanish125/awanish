<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPU</title>
</head>
<body> 
    <button onclick="window.location='./calculator.php'">Back</button>
    <table border="1" cellpadding="5" style="border-collapse: collapse;width:100%;height:100%;text-align:centre;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Roll</th>
                <th>Maths</th>
                <th>Science</th>
                <th>Computer</th>
                <th>Social</th>
                <th>English</th>
                <th>Total</th>
                <th>Percentage</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
                require_once './sqlcon.php';

                $query = "SELECT * FROM history";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<tr>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['roll'].'</td>';
                    echo '<td>'.$row['maths'].'</td>';
                    echo '<td>'.$row['science'].'</td>';
                    echo '<td>'.$row['computer'].'</td>';
                    echo '<td>'.$row['socail'].'</td>';
                    echo '<td>'.$row['english'].'</td>';
                    echo '<td>'.$row['total'].'</td>';
                    echo '<td>'.$row['per'].'</td>';
                    echo '</tr>';
                }
            ?>

        </tbody>
    </table>
</body>
</html>