<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gym Members Dashboard</title>
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>
    <div class="sidebar">
        <h2>FitZone Admin</h2>
        <ul>
            <li class="active">Dashboard</li>
            <li><a href="logout.php" style="color: white; text-decoration: none;">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Gym Members</h1>

        <!-- <form method="GET">
            <input type="text" name="search" placeholder="Search by name or email" value="<?= htmlspecialchars($search) ?>">
            <button type="submit">Search</button>
        </form> -->

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date Joined</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($filteredMembers)): ?>
                    <?php foreach ($filteredMembers as $member): ?>
                        <tr>
                            <td><?= htmlspecialchars($member['name']) ?></td>
                            <td><?= htmlspecialchars($member['email']) ?></td>
                            <td><?= htmlspecialchars($member['joined']) ?></td>
                            <td>
                                <span class="badge <?= strtolower($member['status']) ?>">
                                    <?= htmlspecialchars($member['status']) ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No members found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
