<?php
// Function to load player IDs from JSON file
function loadValidPlayerIds($file) {
    $json_data = file_get_contents($file);
    $data = json_decode($json_data, true);

    if ($data && isset($data['valid_player_ids'])) {
        return $data['valid_player_ids'];
    } else {
        return []; // Return empty array if file or data is malformed
    }
}

// Check if player_id is posted
if (isset($_POST['player_id'])) {
    $player_id = $_POST['player_id'];

    // Load valid player IDs from JSON file
    $valid_player_ids = loadValidPlayerIds('player_ids.json');

    // Check if the entered player_id is in the array of valid IDs
    if (in_array($player_id, $valid_player_ids)) {
        // Successful login, redirect to another page (e.g., player_profile.php)
        header("Location: player_profile.php?player_id=" . urlencode($player_id));
        exit;
    } else {
        // Invalid player_id
        echo "<script>alert('Invalid Player ID. Please try again.');</script>";
        echo "<script>window.location.replace('index.html');</script>";
        exit;
    }
} else {
    // Redirect to index.php if accessed directly without POST data
    header("Location: index.html");
    exit;
}
?>
