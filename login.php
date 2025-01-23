<?php
include "config.php";
session_start();
define('ADMIN_PASSWORD', 'JITENDRAUNATTI');
define('USER_NAME', 'DOCTOR_STRANGE');
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password']) && (isset($_POST['username']))) {
        if ($_POST['password'] === ADMIN_PASSWORD && $_POST['username'] === USER_NAME) {
            $_SESSION['authenticated'] = true;
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            $loginError = "Invalid username or password. Please try again.";
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title><?php echo $MJ["Meta_data"]["title"]; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $MJ["Meta_data"]["favicon"]; ?>">
        <script disable-devtool-auto='true' src='https://cdn.jsdelivr.net/npm/disable-devtool' clear-log='true'
            disable-select='true' disable-copy='true' disable-cut='true' disable-paste='true'></script>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: url(<?php echo heaven(); ?>) no-repeat;
                background-size: cover;
                background-position: center;
            }

            .login-wrapper {
                width: 420px;
                background: rgba(0, 0, 0, 0.5);
                border: 2px solid rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(8px);
                color: #fff;
                border-radius: 12px;
                padding: 30px 40px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                text-align: center;
            }

            .login-wrapper h1 {
                font-size: 36px;
                margin-bottom: 20px;
            }

            .login-wrapper .input-box {
                position: relative;
                width: 100%;
                height: 50px;
                margin: 20px 0;
            }

            .input-box input {
                width: 100%;
                height: 100%;
                background: transparent;
                border: none;
                outline: none;
                border: 2px solid rgba(255, 255, 255, 0.3);
                border-radius: 40px;
                font-size: 16px;
                color: #fff;
                padding: 15px 45px;
            }

            .input-box input::placeholder {
                color: #fff;
            }

            .input-box i {
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translateY(-50%);
                font-size: 20px;
                color: #fff;
            }

            .login-wrapper .btn {
                width: 100%;
                height: 45px;
                background: #fff;
                border: none;
                border-radius: 40px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                cursor: pointer;
                font-size: 16px;
                color: #333;
                font-weight: 600;
                margin-top: 20px;
            }

            .error {
                color: #e74c3c;
                margin-bottom: 15px;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="login-wrapper">
            <h1>Jitendra's Universe</h1>
            <?php if (isset($loginError)) echo '<div class="error">' . $loginError . '</div>'; ?>
            <form method="POST" action="">
                <div class="input-box">
                    <input type="username" name="username" placeholder="Enter username" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Enter password" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </body>

    </html>
<?php
    exit;
}

$message = "";
$error_message = "";
$WANDA_MAXIMOFF = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['url']) && !empty($_POST['mac'])) {
        $data = array(
            "JITENDRAUNATTI" =>
            array(
            'URL' => $_POST['url'],
            'HOST' => parse_url($_POST['url'])["host"],
            'MAC' => $_POST['mac'],
            'SN' => $_POST['sn'],
            'D1' => $_POST['d1'],
            'D2' => $_POST['d2'],
            'SG' => $_POST['sig'],
            'Model' => $_POST['device'],
            'Proxy' => $_POST['Proxy'],
            'API' => $_POST['API'],
            'Share' => $_POST['Share'],

            ));
//The script can be downloaded from here: https://github.com/Jitendraunatti/
         if (file_put_contents($DARK_SIDE . "/detail.jitendraunatti", scarlet_witch('encrypt', json_encode($data), ["DOCTOR_STRANGE","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]))) {
      
            $WANDA_MAXIMOFF = json_decode(generate_token(), true);
    
            if (isset($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["message"])) {
                $message = $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["message"];
            }
            if (isset($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Token"])) {
                file_put_contents($DARK_SIDE . "/show.jitendraunatti", scarlet_witch('encrypt', json_encode($WANDA_MAXIMOFF), ["JITENDRAUNATTI","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]));
            }
      
            if (isset($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Error_message"])) {
                $error_message = $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Error_message"];
                if (file_exists($DARK_SIDE . "/temp.jitendraunatti")) {
                    file_put_contents($DARK_SIDE . "/detail.jitendraunatti",file_get_contents($DARK_SIDE . "/temp.jitendraunatti"));
                }
            }
        } else {
            $error_message = 'Failed to save data.';
        }
    } else {
        $error_message = 'URL and MAC Address are required!';
    }
} else {
    // If the form is not submitted, try to load data from show.jitendraunatti if it exists
    if (file_exists($DARK_SIDE . "/show.jitendraunatti")) {
        $WANDA_MAXIMOFF = json_decode(scarlet_witch('decrypt', file_get_contents($DARK_SIDE . "/show.jitendraunatti"), ["JITENDRAUNATTI","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]), true);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title><?php echo $MJ["Meta_data"]["title"]; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $MJ["Meta_data"]["favicon"]; ?>">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow-y: auto;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-image: url(<?php echo heaven(); ?>);
        }

        .login-container {
            background: rgba(255, 255, 255, 0.2); /* 75% transparency */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }


        .input-group {
            margin-bottom: 15px;
            
        }

        .input-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.5); /* 75% transparency */
            /* background-color: #f9f9f9; */
        }

        .input-group input:focus {
            border-color: #5c6bc0;
            background-color: #fff;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #5c6bc0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #4e5b9b;
        }

        /* Message Modal */
        .message-container {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            color: white;
            text-align: center;
            font-size: 18px;
            max-width: 500px;
            width: 100%;
        }

        .message-container.active {
            display: block;
        }

        .message-container.success {
            background-color: #4caf50;
            /* Green for success */
        }

        .message-container.error {
            background-color: #f44336;
            /* Red for error */
        }

        .message-container .icon {
            font-size: 36px;
            margin-bottom: 10px;
        }

        /* Metadata Container */
        .metadata-container {
            display: none;
            margin-top: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.5); /* 75% transparency */
            border-radius: 8px;
            font-size: 16px;
            color: #333;
        }

        .metadata-container .metadata-item {
            margin-bottom: 10px;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        .form-footer a {
            color: #5c6bc0;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <center>
            <h1>Stalker Portal Login</h1>
        </center>
        <form action="" method="POST">
            <!-- Stalker Portal URL -->
            <div class="input-group">
                <label for="url">Stalker Portal URL:</label>
                <input type="text" id="url" name="url" placeholder="Enter Stalker Portal URL" autocomplete="off" required />
            </div>

            <!-- MAC Address -->
            <div class="input-group">
                <label for="mac">MAC Address:</label>
                <input type="text" id="mac" name="mac" placeholder="Enter MAC Address" autocomplete="off" required />
            </div>

            <!-- Serial Number -->
            <div class="input-group">
                <label for="sn">Serial Number:</label>
                <input type="text" id="sn" name="sn" placeholder="Enter Serial Number" autocomplete="off" required />
            </div>

            <!-- Device ID 1 -->
            <div class="input-group">
                <label for="d1">Device ID 1:</label>
                <input type="text" id="d1" name="d1" placeholder="Enter Device ID 1" autocomplete="off" />
            </div>

            <!-- Device ID 2 -->
            <div class="input-group">
                <label for="d2">Device ID 2:</label>
                <input type="text" id="d2" name="d2" placeholder="Enter Device ID 2" autocomplete="off" />
            </div>

            <!-- Signature -->
            <div class="input-group">
                <label for="sig">Signature:</label>
                <input type="text" id="sig" name="sig" placeholder="Enter Signature" autocomplete="off" />
            </div>

            <!-- Device Selection -->
            <div class="input-group">
                <label for="device">Device Type:</label>
                <select id="device" name="device" required>
                    <option value="MAG250">MAG250</option>
                    <option value="MAG254">MAG254</option>
                    <option value="MAG270">MAG270</option>
                </select>
            </div>

                    <!-- Proxy Selection -->
                    <div class="input-group">
                <label for="Proxy">Streaming(Proxy) Mode:</label>
                <select id="Proxy" name="Proxy" required>
                    <option value="AUTO">AUTO</option>
                    <option value="ON">ON</option>
                    <option value="OFF">OFF</option>
                </select>
            </div>
                    <!-- Proxy Selection -->
                    <div class="input-group">
                <label for="API">Api Signature:</label>
                <select id="API" name="API" required>
                    <option value="263">263</option>
                    <option value="262">262</option>
                </select>
            </div>
            <div class="input-group">
                <label for="Share">TOKEN SHARING:</label>
                <select id="Share" name="Share" required>
                    <option value="OFF">DISABLE</option>
                    <option value="ON">ENABLE</option>
                </select>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="submit-btn">Submit</button>
        </form>

        <div id="messageContainer" class="message-container">
            <div class="icon" id="messageIcon"></div>
            <span id="messageContent"></span>
        </div>

        <!-- Metadata Container -->
        <div id="metadataContainer" class="metadata-container">
            <div class="metadata-item"><strong>Name:</strong> <span id="name"></span></div>
            <div class="metadata-item"><strong>Expiry Date:</strong> <span id="expiryDate"></span></div>
            <div class="metadata-item"><strong>Stalker Portal URL:</strong> <span id="Url"></span></div>
            <div class="metadata-item"><strong>MAC Address:</strong> <span id="macAddress"></span></div>
            <div class="metadata-item"><strong>Parent Password:</strong> <span id="parentPassword"></span></div>
        </div>
    </div>

    <script>
        <?php if (!empty($message) || !empty($error_message)): ?>
            let messageText = "";
            let iconClass = "";
            let messageContainerClass = "";


            if ("<?php echo $message; ?>" !== "") {
                messageText += "<?php echo $message; ?>";
                iconClass = "✓"; 
                messageContainerClass = "success"; 
            }


            if ("<?php echo $error_message; ?>" !== "") {
                messageText += "<br><strong>Error:</strong> <?php echo $error_message; ?>";
                iconClass = "✗"; 
                messageContainerClass = "error"; 
            }


            document.getElementById("messageContent").innerHTML = messageText;
            document.getElementById("messageIcon").innerText = iconClass;


            document.getElementById("messageContainer").classList.add("active", messageContainerClass);


            <?php if (empty($error_message)): ?>
                document.getElementById("name").innerText = "<?php echo isset($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Name"]) ? $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Name"] : "N/A"; ?>";
                document.getElementById("expiryDate").innerText = "<?php echo isset($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["expirydate"]) ? $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["expirydate"] : "N/A"; ?>";
                document.getElementById("macAddress").innerText = "<?php echo isset($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["mac"]) ? $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["mac"] : "N/A"; ?>";
                document.getElementById("Url").innerText = "<?php echo isset($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Url"]) ? $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Url"] : "N/A"; ?>";
                document.getElementById("parentPassword").innerText = "<?php echo isset($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["parent_password"]) ? $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["parent_password"] : "N/A"; ?>";
                document.getElementById("metadataContainer").style.display = "block";
            <?php endif; ?>


            setTimeout(function() {
                document.getElementById("messageContainer").classList.remove("active", messageContainerClass);
            }, 5000);
        <?php endif; ?>


        <?php if (!empty($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Name"] && isset($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["parent_password"]))): ?>
            let WandaData = <?php echo json_encode($WANDA_MAXIMOFF); ?>;


            if (WandaData && WandaData.JITENDRAUNATTI && WandaData.JITENDRAUNATTI.data) {
                document.getElementById("name").innerText = WandaData.JITENDRAUNATTI.data.Name || "N/A";
                document.getElementById("expiryDate").innerText = WandaData.JITENDRAUNATTI.data.expirydate || "N/A";
                document.getElementById("macAddress").innerText = WandaData.JITENDRAUNATTI.data.mac || "N/A";
                document.getElementById("Url").innerText = WandaData.JITENDRAUNATTI.data.Url || "N/A";
                document.getElementById("parentPassword").innerText = WandaData.JITENDRAUNATTI.data.parent_password || "N/A";
                document.getElementById("metadataContainer").style.display = "block";
            }
        <?php endif; ?>
    </script>
</body>

</html>