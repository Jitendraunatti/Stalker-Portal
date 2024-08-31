<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/gPvRhz8/DOCTOR-STRANGE-10.png">
    <title>JITENDRA'S UNIVERSE</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('<?php echo $ASUR["bgpic"]; ?>');
            background-size: cover; 
            background-attachment: fixed; 
            background-position: center; 
            color: #f3f3f3;
            text-align: center;
            padding: 0;
            margin: 0;
            min-height: 100vh; 
        }

        .container {
            padding: 100px 20px;
        }

        .pro-user {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            padding: 30px;
            max-width: 800px;
            margin: auto;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7);
            transition: all 0.4s ease;
            transform: translateY(0);
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            0% { transform: translateY(20px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        .pro-user:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.9);
        }

        .pro-user h1 {
            font-size: 28px;
            margin: 30px 0;
            color: #ffffff;
        }

        .pro-user .link-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .pro-user .link-container a {
            margin: 10px;
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            background: linear-gradient(135deg, #12c2e9, #c471ed, #f64f59);
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .pro-user .link-container a:hover {
            background: linear-gradient(135deg, #f64f59, #c471ed, #12c2e9);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }

        footer {
            margin-top: 40px;
            color: #f3f3f3;
            font-size: 18px;
        }

        .footer-text {
            display: block;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="pro-user">
        <h1>Explore Our Features</h1>
        <div class="link-container">
            <a class="playlist-link" href="login.php">Login</a>
            <a class="playlist-link" href="web.php">Web</a>
            <a class="playlist-link" href="config.php?key=JITENDRA_PRO_DEV">Token</a>
            <a class="playlist-link" href="playlist.php">Playlist</a>
            <a class="playlist-link" href="admin.php">Admin</a>
            <a class="playlist-link" href="data/jitendraunatti/PLAYLIST/">Previous Dump Playlist</a>
            <p style="color: red;">Before using any stalker portal, check its functionality on OTT Navigator. If it works correctly, you can proceed to use it.</p>

        </div>
        <h1><?php echo $ASUR["error"]; ?></h1>
        <h1><?php echo $ASUR["message1"];  ?></h1>
        <h1><?php echo $ASUR["message2"]; ?></h1>
        <h1><?php echo $ASUR["message3"];?></h1>
        <h1><?php echo $ASUR["message4"]; ?></h1>
       
    </div>
</div>

<footer>
    <span class="footer-text">
        Coded with <span style="color: #e25555;">❤️</span> by <b>Jitendra Kumar</b>
    </span>
</footer>

</body>
</html>
