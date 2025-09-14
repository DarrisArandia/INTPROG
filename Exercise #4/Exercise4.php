<?php
session_start();

// Array of team members
$team = [
    [
        "name" => "KENT ASHLEY SUAREZ",
        "image" => "kent.jpg",
        "location" => "Poblacion, Muntinlupa City",
        "github" => "https://github.com/KentAshley444"
    ],
    [
        "name" => "ALEXIS DARRIS ARANDIA",
        "image" => "darris.jpg",
        "location" => "Alabang, Muntinlupa City",
        "github" => "https://github.com/DarrisArandia"
    ],
    [
        "name" => "CARMICHAEL POLANCOS",
        "image" => "khelo.jpg",
        "location" => "San Pedro, Laguna",
        "github" => "https://github.com/CarMichaelPolancos"
    ]
];

// Get member ID from URL (example: ?id=1)
$memberId = isset($_GET['id']) ? (int)$_GET['id'] : -1;
$selectedMember = ($memberId >= 0 && $memberId < count($team)) ? $team[$memberId] : null;

// Check login state
$loggedIn = isset($_SESSION['user']);
$user = $loggedIn ? $_SESSION['user'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Team Profile</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: url('hello kitty.jpg') no-repeat center center fixed;
        background-size: cover;
        color: #D7303A;
    }
    .team-section {
        max-width: 1100px;
        margin: auto;
        padding: 50px 20px;
        text-align: center;
    }
    .team-section h1 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #ffe6f0; 
        -webkit-text-stroke: 1px #D7303A; 
        text-shadow: 0 0 5px #ff99cc, 0 0 10px #ff66b2,
                     0 0 20px #ff66b2, 0 0 40px #ff3399,
                     0 0 80px #ff3399;
    }
    .auth-buttons {
        margin: 15px 0;
    }
    .auth-buttons a {
        display: inline-block;
        margin: 5px;
        padding: 10px 20px;
        background: #D7303A;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
    }
    .auth-buttons a:hover {
        background: #a8222b;
    }
    .team-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 40px;
        gap: 20px;
    }
    .team-member {
        background-color: #D6E8F4;
        padding: 20px;
        width: 300px;
        border-radius: 8px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .team-member:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    .team-member a {
        color: #D7303A;
        text-decoration: none;    
    }
    .team-member a:hover {
        color: #0C0E0B;
    }
    .team-member img {
        width: 100%;
        height: auto;
        border-radius: 4px;
    }
    .team-member h3 {
        margin-top: 15px;
        font-size: 1.2rem;
    }
    .team-member p {
        font-size: 0.9rem;
        color: #D7303A;
        text-align: left;
    }
</style>
</head>
<body>

<section class="team-section">
    <h1>POWER RANGERS</h1>

    <div class="auth-buttons">
        <?php if ($loggedIn): ?>
            <p>Welcome, <strong><?= htmlspecialchars($user['username']); ?></strong>!</p>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </div>

    <?php if ($selectedMember): ?>
    <!-- Center the selected member -->
    <div style="display:flex; justify-content:center; align-items:center; min-height:60vh;">
        <div class="team-member">
            <img src="<?= $selectedMember['image']; ?>" alt="<?= $selectedMember['name']; ?>">
            <h3><?= $selectedMember['name']; ?></h3>
            <p><?= $selectedMember['location']; ?></p>
            <p><a href="<?= $selectedMember['github']; ?>" target="_blank">Github Account</a></p>
            <p><a href="<?= basename($_SERVER['PHP_SELF']); ?>">← Back to Team</a></p>
        </div>
    </div>
<?php else: ?>
        <!-- Show all members with links -->
        <div class="team-container">
            <?php foreach ($team as $index => $member): ?>
                <div class="team-member">
                    <a href="?id=<?= $index; ?>">
                        <img src="<?= $member['image']; ?>" alt="<?= $member['name']; ?>">
                        <h3><?= $member['name']; ?></h3>
                    </a>
                    <p><?= $member['location']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

</body>
</html>
