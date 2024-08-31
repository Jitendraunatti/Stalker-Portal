<?php
include "config.php";
session_start();


define('ADMIN_PASSWORD', 'JITENDRAUNATTI');

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password'])) {
        if ($_POST['password'] === ADMIN_PASSWORD) {
            $_SESSION['authenticated'] = true; 
            header("Location: admin.php"); 
            exit;
        } else {
            $loginError = "Invalid password. Please try again.";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title><?php echo @$ASUR['hname']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $ASUR["bgpic"]; ?>">
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
                background: url("https://i.ibb.co/NKdZSQN/bg.jpg") no-repeat;
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
            <h1>Admin Login</h1>
            <?php if (isset($loginError)) echo '<div class="error">' . $loginError . '</div>'; ?>
            <form method="POST" action="">
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


$statusMessage = '';  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['on'])) {
        $result = file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/share.txt", "ON");
        if ($result !== false) {
            $statusMessage = "<div class='message success'>Token Sharing mode ON ✅</div>";
        } else {
            $statusMessage = "<div class='message error'>Error setting status</div>";
        }
    } elseif (isset($_POST['off'])) {
        $result = file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/share.txt", "OFF");
        if ($result !== false) {
            $statusMessage = "<div class='message success'>Token Sharing mode OFF ❌</div>";
        } else {
            $statusMessage = "<div class='message error'>Error setting status</div>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo @$ASUR['hname']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $ASUR["bgpic"]; ?>">
  <script disable-devtool-auto='true' src='https://cdn.jsdelivr.net/npm/disable-devtool' clear-log='true'
  disable-select='true' disable-copy='true' disable-cut='true' disable-paste='true'></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .admin-panel {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 12px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
            text-align: center;
            position: relative;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #fff;
        }
        .message {
            padding: 15px;
            margin: 15px auto;
            border-radius: 8px;
            max-width: 500px;
            font-weight: bold;
        }
        .message.success {
            background-color: rgba(76, 175, 80, 0.9);
            color: #fff;
        }
        .message.error {
            background-color: rgba(244, 67, 54, 0.9);
            color: #fff;
        }
        .button-container {
            margin-top: 30px;
        }
        .button-container form {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .btn {
            padding: 14px 28px;
            font-size: 18px;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            text-transform: uppercase;
            font-weight: 700;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-on {
            background: linear-gradient(135deg, #4CAF50, #388E3C);
            color: white;
        }
        .btn-on:hover {
            background: linear-gradient(135deg, #45a049, #2c6e1f);
        }
        .btn-off {
            background: linear-gradient(135deg, #f44336, #d32f2f);
            color: white;
        }
        .btn-off:hover {
            background: linear-gradient(135deg, #e53935, #c62828);
        }
        .footer {
        margin-top: auto; 
        background-color: #333;
        color: #ffffff;
        text-align: center;
        padding: 10px 0;
        font-family: Arial, sans-serif;
        font-size: 16px;
    }

    </style>
</head>
<body>

<div class="admin-panel">
    <h1>Admin Panel</h1>

    <?php echo $statusMessage; ?>

    <div class="button-container">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <button type="submit" name="on" class="btn btn-on">Turn ON Token Sharing</button>
            <button type="submit" name="off" class="btn btn-off">Turn OFF Token Sharing</button>
        </form>
        </div>
        <footer>
        <span style="color: #ffffff; font-family: Arial, sans-serif; font-size: 20px;">
            Coded with <span>❤️</span> by <b>Jitendra Kumar</b>
        </span>
    </footer>
</body>

</html>
