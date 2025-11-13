<?php
session_start();

// -----------------------------
// Session User (Login System)
// -----------------------------
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

	body::-webkit-scrollbar {
		display: none; /* Chrome, Safari, Edge */
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

    .welcome-text {
        font-size: 1.5rem;
        font-weight: bold;
        color: #ffe6f0;
        -webkit-text-stroke: 1px #D7303A;
        text-shadow: 0 0 5px #ff99cc, 0 0 10px #ff66b2, 0 0 20px #ff3399;
        margin-bottom: 10px;
    }

    .team-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
        overflow: hidden;
        max-height: 0;
        opacity: 0;
        transition: max-height 0.3s ease, opacity 0.3s ease;
    }

    .team-container.show {
        max-height: 2000px; /* large enough to show all members */
        opacity: 1;
		padding-top: 50px;
		padding-bottom: 50px;
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
        color: #000000;
    }

    .team-member p {
        font-size: 0.9rem;
        color: #D7303A;
        text-align: left;
    }

    button {
        margin: 10px;
        padding: 10px 15px;
        background: #D7303A;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }

    button:hover {
        background: #a8222b;
    }
</style>
</head>
<body>

<section class="team-section">
    <h1>POWER RANGERS</h1>

    <!-- Auth / Welcome -->
    <div class="auth-buttons">
        <?php if ($loggedIn): ?>
            <p class="welcome-text">Welcome, <strong><?= htmlspecialchars($user['username']); ?></strong>!</p>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </div>

    <!-- Buttons to load team -->
    <div style="margin-top:20px;">
        <button onclick="loadWithXHR()">Load Team (XMLHttpRequest)</button>
        <button onclick="loadWithFetch()">Load Team (Fetch API)</button>
        <button id="toggleButton" onclick="toggleTeam()" style="display:none;">Hide Team</button>
    </div>

    <!-- Dynamic Team Display -->
    <div id="teamArea" class="team-container"></div>
</section>

<script>
    // Render team members dynamically
    function renderTeam(data) {
        const container = document.getElementById('teamArea');
        container.innerHTML = ''; // Clear previous data

        data.forEach(member => {
            const div = document.createElement('div');
            div.className = 'team-member';
            div.innerHTML = `
                <img src="${member.image}" alt="${member.name}">
                <h3>${member.name}</h3>
                <p>${member.location}</p>
                <p><a href="${member.github}" target="_blank">GitHub</a></p>
            `;
            container.appendChild(div);
        });

        // Show toggle button and smoothly reveal team
        const toggleBtn = document.getElementById('toggleButton');
        toggleBtn.style.display = 'inline-block';
        toggleBtn.textContent = 'Hide Team';
        container.classList.add('show'); // Add class for smooth fade-in
    }

    // Load via XMLHttpRequest
    function loadWithXHR() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'team_data.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                const data = JSON.parse(xhr.responseText);
                renderTeam(data);
            }
        };
        xhr.send();
    }

    // Load via Fetch API
    function loadWithFetch() {
        fetch('team_data.php')
            .then(response => response.json())
            .then(data => renderTeam(data))
            .catch(error => console.error('Error:', error));
    }

    // Toggle show/hide with smooth transition
    function toggleTeam() {
        const container = document.getElementById('teamArea');
        const button = document.getElementById('toggleButton');

        if (container.classList.contains('show')) {
            container.classList.remove('show');
            button.textContent = 'Show Team';
        } else {
            container.classList.add('show');
            button.textContent = 'Hide Team';
        }
    }
</script>

</body>
</html>
