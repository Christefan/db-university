<?php
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/departments.php";


$sql = "SELECT `id`, `name` FROM `departments`;";
$result = $conn->query($sql);

$departments = [];

if($result && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $curr_department = new departments($row["id"], $row["name"]);
        $departments[] = $curr_department;
    }
}elseif($result) {
    echo "DB vuoto";
    die();
}else{
    echo "DB non trovato";
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Risultati</h1>

    <?php foreach($departments as $department) {?>
        <h2><?php echo $department->name; ?></h2>
        <a href="info.php?id=<?php echo $department->id; ?>">Vedi informazione</a>
    <?php } ?>
</body>
</html>