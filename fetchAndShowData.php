<?php 
require_once 'DBConnect.php';
$query="SELECT students.`name`, students.email, students.images,department.name as dept_name
FROM students
RIGHT JOIN department ON students.dept_id = department.id;"; 
$result=$connect->query($query); 
//$result->fetchAll(); 
$students = $result->fetchAll(PDO::FETCH_ASSOC);
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
            <?php foreach($students as $student) {?>
            <tr>
                <td><?php echo $student['name'] ?></td>
                <td><?php echo $student['email'] ?></td>
                <td><img src="assets/images/<?php echo $student['images'] ?>" alt=""></td>
                <td><?php echo $student['dept_name'] ?></td>
                <td><a href="showOneRow.php">show</a>
            <button>delete</button></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>