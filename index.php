<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Player Portal</title>
<style>
    body {
        background-color: #000;
        color: #fff;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        background-color: #333;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        max-width: 400px;
        width: 100%;
        text-align: center;
    }
    input[type="text"], input[type="submit"] {
        padding: 10px;
        margin: 10px 0;
        width: calc(100% - 22px);
        font-size: 16px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>Player Portal</h2>
        <form action="authenticate.php" method="post">
            <input type="text" name="player_id" placeholder="Enter Player ID" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>