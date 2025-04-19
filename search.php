<?php
include 'navigation.php';
require_once('utils/sanitize-inputs.php');

$hasSearched = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($hasSearched) {
    include('db/config.php');

    $filteredServices = [];

    $search = sanitize_input($_REQUEST['search']);

    $sql = "SELECT * FROM fitness_classes
    JOIN trainers ON fitness_classes.trainer_id = trainers.trainer_id
    WHERE class_name LIKE '%$search%' OR description LIKE '%$search%' OR trainers.name LIKE '%$search%' OR max_capacity LIKE '%$search%'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $filteredServices[] = $row;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Fitness Center</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Font Awesome Free CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>

<body>

    <form method="POST">
        <input type="text" name="search" placeholder="Search services or trainers">
        <button type="submit">Search</button>
    </form>

    <?php if ($hasSearched): ?>
        <h2>Search Results for "<?= htmlspecialchars($_REQUEST['search']) ?>"</h2>
        <table>
            <thead>
                <th>Class name</th>
                <th>Description</th>
                <th>Trainer</th>
                <th>Date/Time</th>
                <th>Maximum Capacity</th>
            </thead>
            <tbody>
                <?php if (!empty($filteredServices)): ?>
                    <?php foreach ($filteredServices as $service): ?>
                        <tr>
                            <td><?= $service['class_name'] ?></td>
                            <td><?= $service['description'] ?></td>
                            <td><?= $service['name'] ?></td>
                            <td><?= $service['schedule_day'] ?></td>
                            <td><?= $service['schedule_time'] ?></td>
                            <td><?= $service['max_capacity'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No services found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>

</html>