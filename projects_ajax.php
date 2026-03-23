<?php
// projects_ajax.php
include "db.php";

// Get year from GET request
$year = isset($_GET['year']) ? intval($_GET['year']) : 2025;
if ($year < 2019 || $year > 2025) $year = 2025;

// Table name
$table_name = '"Guest_User_DB".projects_' . $year;

// Fetch projects
$query = "SELECT * FROM $table_name ORDER BY id ASC";
$result = pg_query($conn, $query);

if (!$result) {
    echo "<p>Error: " . pg_last_error($conn) . "</p>";
    exit;
}

// Check if any rows exist
if (pg_num_rows($result) === 0) {
    echo "<p>No projects found for $year.</p>";
    exit;
}

// Output projects HTML
while ($row = pg_fetch_assoc($result)) {

    $title = htmlspecialchars($row['title'] ?? '');
    $subtitle = htmlspecialchars($row['subtitle'] ?? '');
    $description = htmlspecialchars($row['description'] ?? '');
    $explore = htmlspecialchars($row['explore'] ?? '#'); // explore column
    $image_path = htmlspecialchars($row['image_path'] ?? '');

?>
    <div class="yrproj-item" data-year="<?php echo $year; ?>">
        <div class="yrproj-content">

            <h3 class="yrproj-title"><?php echo $title; ?></h3>

            <?php if (!empty($subtitle)): ?>
                <p><?php echo $subtitle; ?></p>
            <?php endif; ?>

            <p><?php echo $description; ?></p>

            <a href="<?php echo $explore; ?>" class="yrproj-btn">Explore</a>

        </div>

        <img src="<?php echo $image_path; ?>" alt="<?php echo $title; ?>">
    </div>

<?php
}
?>