<?php 
require_once 'DBConnect.php';
$query="SELECT students.`name`, students.email, students.images,department.name as dept_name
FROM students
RIGHT JOIN department ON students.dept_id = department.id;"; 
$result=$connect->query($query); 
//$result->fetchAll(); 
$students = $result->fetch(PDO::FETCH_ASSOC);
//var_dump($students);
//$result->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab day 4</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <table class='styled-table'>
            <th>name</th>
            <th>email</th>
            <th>image</th>
            <th>departName</th>
            <th>show</th>
            <tr>
                <td><?php echo $students['name'] ?></td>
                <td><?php echo $students['email'] ?></td>
                <td><img src="assets/images/<?php echo $students['images'] ?>" alt=""></td>
                <td><?php echo $students['dept_name'] ?></td>
                <td><button>delete</button></td>
            </tr>
    </table>
</body>
</html>