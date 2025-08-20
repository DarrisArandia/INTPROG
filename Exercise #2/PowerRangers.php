<?php
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
        text-shadow:
            0 0 5px #ff99cc,
            0 0 10px #ff66b2,
            0 0 20px #ff66b2,
            0 0 40px #ff3399,
            0 0 80px #ff3399;
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
	
	button {
        background: #FFC0CB;
        color: #FF2E51;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
        margin-top: 20px;
        font-size: 1rem;
		font-weight: bold;
        color: #ffe6f0; 
        -webkit-text-stroke: 1px #FF2E51; 
        text-shadow:
            0 0 5px #ff99cc,
            0 0 10px #ff66b2,
            0 0 20px #ff66b2,
            0 0 40px #ff3399,
            0 0 80px #ff3399;
    }

    button:hover {
        background: #FF2E51;
    }
	
</style>
</head>
<body>

<section class="team-section">
    <h1>POWER RANGERS</h1>
	<button onclick="toggleTeam()">Show/Hide Team</button>
	
    <div class="team-container" id="teamContainer">
        <?php foreach ($team as $member): ?>
            <div class="team-member">
                <img src="<?= $member['image']; ?>" alt="<?= $member['name']; ?>">
                <h3><?= $member['name']; ?></h3>
                <p><?= $member['location']; ?></p>
                <p><a href="<?= $member['github']; ?>" target="_blank">Github Account</a></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<script>

function toggleTeam() {
    const teamContainer = document.getElementById("teamContainer");
    if (teamContainer.style.display === "none") {
        teamContainer.style.display = "flex";
    } else {
        teamContainer.style.display = "none";
    }
}

</script>

</body>
</html>

