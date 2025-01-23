<?php
include("config.php");
if(!file_exists($DARK_SIDE . "/detail.jitendraunatti")){
    header("Location: login.php");
    exit();
}
?>
    <title><?php echo $MJ["Meta_data"]["title"]; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $MJ["Meta_data"]["favicon"]; ?>">

<!-- CSS -->
<style>
    /* Basic reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        color: #333;
        padding: 20px;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .search-container {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 0;
    }

    .search-input {
        width: 80%;
        max-width: 400px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 25px;
        font-size: 16px;
        outline: none;
        transition: all 0.3s ease;
    }

    .search-input:focus {
        border-color: #4CAF50;
    }

    .playlist-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
     
        margin-top: 10; 
    }

    .playlist-item {
        display: flex;
        margin-top 5px;
        flex-direction: column;
        justify-content: space-between;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 160px;
        height: 160px;
        text-align: center;
        padding: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
        position: relative;
    }

    .playlist-item:hover {
        transform: translateY(-12px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .logo-link {
        display: block;
        width: 100%;
        height: 100%;
        position: relative;
        z-index: 2;
      
    }



    .logo {
        width: 100%;
        height: 100%;
      
        object-fit: cover;

        border-radius: 8px;
        transition: transform 0.3s ease;
    }


    .playlist-item:hover .logo-link {
        transform: scale(1.05);
    }

    .playlist-item:hover .logo {
        transform: scale(1.1);
    }

    .name {
        font-size: 10px;
        font-weight: bold;
        color: #333;
        margin-top: 0px;
        transition: color 0.3s ease;
    }

    .playlist-item:hover .name {
        color: #4CAF50;
    }


    .playlist-item::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(0, 0, 0, 0.2);
        transition: width 0.3s ease, height 0.3s ease;
        transform: translate(-50%, -50%);
    }

    .playlist-item:hover::after {
        width: 100%;
        height: 100%;
    }

    body {
        background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-image: url(<?php echo heaven(); ?>);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }




.button-container {
    margin-top: 5; 
    display: flex;
    gap: 15px; 
}


.modern-button {
    padding: 12px 25px;
    font-size: 10px;
    font-weight: 500;
    color: white;
    background: linear-gradient(145deg, #6e7f7e, #4e5c5c); 
    border: none;
    border-radius: 30px; /
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
    display: inline-block;
    text-align: center;
    text-decoration: none;
    outline: none;
}


.modern-button:hover {
    transform: translateY(-3px); 
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); 
}


.modern-button:active {
    transform: translateY(1px); 
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}


</style>
<?php
        foreach ($MJ["message"] as $BENZ) {
            echo $BENZ["tag_op"] . '<span style="color: ' . $BENZ["color"] . ';">' . $BENZ["message"] . '</span>' . $BENZ["tag_c"];
        }
if (file_exists($DARK_SIDE . "/detail.jitendraunatti")) {
    $ULTRON = @json_decode(json_fetcher(), true);
    if (isset($ULTRON[0]["id"]) &&$ULTRON[0]["logo"] && $ULTRON[0]["genre"] && validation() &&  file_exists($DARK_SIDE . "/playlist.jitendraunatti")) {
        echo '
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <span style="color: red;"><h1>' . $MJ["Meta_data"]["h1_head"] . '</h1></span>
        <div class="search-container">
            <input type="text" id="searchInput" class="search-input" placeholder="Search by Name..." onkeyup="searchPlaylist()">
        </div>
        
        <!-- Buttons for Playlist and Login -->
        <div class="button-container">
            <a href="playlist.php">
                <button class="modern-button">Playlist</button>
            </a>
            <a href="login.php">
                <button class="modern-button">Login</button>
            </a>
                        <a href="config.php?key=JITENDRA-KUMAR">
                <button class="modern-button">Token Sharing</button>
            </a>
                        </a>
                        <a href="cache_jitendraunatti">
                <button class="modern-button">Dumpyard</button>
            </a>
        </div>';
        
        
        
        echo '<div class="playlist-container" id="playlistContainer">';
        foreach ($ULTRON as $AMERICA_CHAVEZ) {
            echo '
     <div class="playlist-item" data-name="' . htmlspecialchars($AMERICA_CHAVEZ["Name"]) . '">
    <a href="play.php?id=' . urlencode($AMERICA_CHAVEZ["playback_url"]) . '" class="logo-link" target="_blank">
        <img class="logo" src="' . $AMERICA_CHAVEZ["logo"] . '" alt="' . htmlspecialchars($AMERICA_CHAVEZ["Name"]) . '">
    </a>
    <h2 class="name">' . htmlspecialchars($AMERICA_CHAVEZ["Name"]) . '</h2>
   </div>';
        }
        echo '</div>';
    } else {
        json_fetcher();
        exit("<h1 style='color: red;'>⚠️Something went wrong while generating the web. Please try using another portal or refresh the page.</h1>");
    }
} else {
    header("Location: login.php");
    exit();
}
?>
<script>
    function searchPlaylist() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const playlistItems = document.querySelectorAll('.playlist-item');

        playlistItems.forEach(item => {
            const name = item.getAttribute('data-name').toLowerCase();
            if (name.includes(input)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>