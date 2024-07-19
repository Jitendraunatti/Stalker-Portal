<?php
include "config.php";
?>
<html>
<head>
<title><?php echo @$ASUR['hname']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $ASUR["bgpic"]; ?>">
  <script disable-devtool-auto='true' src='https://cdn.jsdelivr.net/npm/disable-devtool' clear-log='true'
  disable-select='true' disable-copy='true' disable-cut='true' disable-paste='true'></script>

  <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }
    header {
        background-color: #212529;
        color: #fff;
        text-align: center;
        padding: 1rem;
    }
    main {
        padding: 1rem;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
    }
    .channel-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #fff;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }
    .channel-item:hover {
        transform: translateY(-5px);
    }
    .channel-logo-container {
        width: 150px;
        height: 150px;
        background-color: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        border: 2px solid #dee2e6;
        border-radius: 50%;
        overflow: hidden;
    }
    .channel-logo {
        max-width: 100%;
        max-height: 100%;
    }
    .channel-name {
        font-weight: bold;
        text-align: center;
        margin-top: 0.5rem;
    }
    a.play-link {
        color: #007bff;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
        margin-top: 0.5rem;
    }
    a.play-link:hover {
        color: #0056b3;
    }
    .search-form {
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }
    .search-input {
        padding: 10px;
        font-size: 18px;
        border: 2px solid #ced4da;
        border-radius: 5px;
        flex-grow: 1;
        margin-right: 10px;
    }
    .search-button {
        padding: 10px 20px;
        font-size: 18px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }
    .search-button:hover {
        background-color: #0056b3;
    }

    @media (max-width: 768px) {
        main {
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        }
        .channel-logo-container {
            width: 120px;
            height: 120px;
        }
    }

    @media (max-width: 480px) {
        main {
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        }
        .channel-logo-container {
            width: 100px;
            height: 100px;
        }
    }
</style>

</head>
<body>

    </header>




    <main>
        <form class="search-form" method="get" action="">
        <input type="text" class="search-input" name="search" placeholder="Search channel..."> 
            <button type="submit" class="search-button">Search</button>
        </form>

        <?php
$m3uUrl = "playlist.m3u";
$m3uContent = file_get_contents($m3uUrl);

$lines = explode("\n", $m3uContent);
$currentChannel = '';
$channelCount = 0;

foreach ($lines as $line) {
    $line = trim($line);

    if (empty($line)) {
        continue;
    }

    if (preg_match('/#EXTINF:-1 tvg-id="(.*?)" tvg-logo="(.*?)" group-title="(.*?)",(.*?)$/i', $line, $matches)) {
        $channelNumber = $matches[1];
        $logoUrl = isset($matches[2]) ? $matches[2] : '';
        $channelGroup = isset($matches[3]) ? $matches[3] : '';
        $channelName = isset($matches[4]) ? $matches[4] : '';

        if (!empty($_GET['search']) && stripos($channelName, $_GET['search']) === false) {
            continue; 
        }

        $currentChannel = [
            'number' => $channelNumber,
            'logo' => $logoUrl,
            'group' => $channelGroup,
            'name' => $channelName,
        ];
        
        if ($channelCount % 12 === 0) {
            echo '</main><main>'; 
        }
        echo '<div class="channel-item">';
        echo '<div class="channel-logo-container">';
        if (!empty($currentChannel['logo'])) {
            echo '<img src="' . $currentChannel['logo'] . '" alt="' . $currentChannel['name'] . '" class="channel-logo">';
        }
        echo '</div>';
        echo '<div class="channel-name">' . $currentChannel['number'] . ' - ' . $currentChannel['name'] . '</div>';
        echo '<a href="play.php?id=' . $currentChannel['number'] . '" class="play-link">PLAY</a>';
        echo '</div>';

        $currentChannel = '';
        $channelCount++;
    }
}
?>

    </main>

</body>
</html>