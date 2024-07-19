<?php
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/gPvRhz8/DOCTOR-STRANGE-10.png">
    <title>JITENDRA'S UNIVERSE</title>
    <link rel="stylesheet" href="style.css" />

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .log {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .log:hover {
            background: #45a049;
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin: 5px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-on {
            background-color: #4CAF50;
            color: white;
        }

        .btn-on:hover {
            background-color: #45a049;
        }

        .btn-off {
            background-color: #f44336;
            color: white;
        }

        .btn-off:hover {
            background-color: #e53935;
        }

        .message-container {
            margin-top: 20px;
        }

        .message {
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease;
            margin: 10px 0;
        }

        .success {
            background-color: #4CAF50;
            color: white;
        }

        .error {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    $jitendraunatti = '';
    $statusMessage = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
        if (isset($_POST['on'])) {
            $result = file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/share.txt", "ON");
            if ($result !== false) {
                $statusMessage = "<div class='message success'>Token Sharing mode ON✅</div>";
            } else {
                $statusMessage = "<div class='message error'>Error setting status</div>";
            }
        } elseif (isset($_POST['off'])) {
            $result = file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/share.txt", "OFF");
            if ($result !== false) {
                $statusMessage = "<div class='message success'>Token Sharing mode OFF❌</div>";
            } else {
                $statusMessage = "<div class='message error'>Error setting status</div>";
            }
        }

       
        if (!empty($_POST['url']) && !empty($_POST['mac'])) {
            $data = [
                'JITENDRAUNATTI' => [
                    'url' => $_POST['url'],
                    'mac' => $_POST['mac'],
                    'sn' => $_POST['sn'],
                    'd1' => $_POST['d1'],
                    'd2' => $_POST['d2'],
                    'sig' => $_POST['sig']
                ]
            ];

            $jsonData = json_encode($data, JSON_PRETTY_PRINT);

            $filePath = "$JITENDRA_PRO_DEV_X_DARK_SIDE/data.txt";

            if (file_put_contents($filePath, $jsonData) !== false) {
                $jitendraunatti = "<div class='message success'>Data saved successfully</div>";
            } else {
                $jitendraunatti = "<div class='message error'>Error saving data</div>";
            }
        }
    }
    ?>

    <div class="frame">
        <div class="login">Login</div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="email">
                <input type="text" id="url" name="url" placeholder="Stalker Portal url" required />
                <img src="img/user.png" width="23px" />
            </div>
            <div class="email">
                <input type="text" id="mac" name="mac" placeholder="Mac Address" required />
                <img src="img/user.png" width="23px" />
            </div>
            <div class="email">
                <input type="text" id="sn" name="sn" placeholder="Serial Number" />
                <img src="img/user.png" width="23px" />
            </div>
            <div class="email">
                <input type="text" id="d1" name="d1" placeholder="Device id 1" />
                <img src="img/user.png" width="23px" />
            </div>
            <div class="email">
                <input type="text" id="d2" name="d2" placeholder="Device id 2" />
                <img src="img/user.png" width="23px" />
            </div>
            <div class="email">
                <input type="text" id="sig" name="sig" placeholder="Signature" />
                <img src="img/user.png" width="23px" />
            </div>
            <button type="submit" class="log">Login</button>
            <div class="message-container">
                <?php echo $jitendraunatti; ?>
            </div>
        </form>
        <div class="button-container">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <button type="submit" name="on" class="btn btn-on">On</button>
                <button type="submit" name="off" class="btn btn-off">Off</button>
            </form>
        </div>
        <div class="message-container">
            <?php echo $statusMessage; ?>
        </div>
        <footer style="background-color: rgba(0, 0, 0, 0.5); color: #fff; padding: 20px; text-align: center;">
  <span class="footer-text" style="font-family: 'Arial', sans-serif; font-size: 1.2em;">
    Coded with <span style="color: #e25555;">❤️</span> by <b>Jitendra Kumar</b>
  </span>
</footer>

  </span>
</footer>

    </div>
</body>
</html>
