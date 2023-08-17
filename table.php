<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table for data collecting</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>name</th>
                <th>phoneno</th>
                <th>email</th>
                <th>message</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "php/mycon.php";
            $select_query = "SELECT * FROM `form`";
            $data = mysqli_query($mycon , $select_query);
             for ($i=0; $i < mysqli_num_rows($data) ; $i++) { 
                $row = mysqli_fetch_assoc($data);
                echo "<tr>
                          <td>".($i + 1)."</td>
                          <td>".$row['name']."</td>
                          <td>".$row['phoneno']."</td>
                          <td>".$row['email']."</td>
                          <td>".$row['message']."</td>
                      </tr>";
             }
            
            ?>
        </tbody>
    </table>
    
</body>
</html>
