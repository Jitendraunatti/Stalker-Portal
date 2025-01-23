<?php
include("config.php");
if (file_exists($DARK_SIDE . "/detail.jitendraunatti")) {
    header('Content-Type: application/json');
    $ROCKET_RACCOON = date('l jS \of F Y h:i:s A');
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
    $THANOS = parse_url($_SERVER["REQUEST_URI"]);
    $THANOS = str_replace("playlist.php", "jitendraunatti.php",  $THANOS["path"]);
    $JITENDRAUNATTI = "#EXTM3U\n#DEVELOPED_BY_JITENDRA_KUMAR\n#AUTHOR:-JITENDRA_KUMAR\n#DATE:-" . $ROCKET_RACCOON . "\n#【J】【I】【T】【E】【N】【D】【R】【A】【A】【K】【U】【M】【A】【R】\n" . PHP_EOL;
    $ULTRON = @json_decode(json_fetcher(), true);
    //The script can be downloaded from here: https://github.com/Jitendraunatti/
    if (isset($ULTRON[0]["id"]) &&$ULTRON[0]["logo"]&&$ULTRON[0]["genre"]&& validation()) {
        foreach ($ULTRON as $VISION) {
            $JITENDRAUNATTI .= '#EXTINF:-1 tvg-id="' . $VISION["id"] . '" tvg-logo="' . $VISION["logo"] . '" group-title="' . $VISION["genre"] . '",' . $VISION['Name'] . "\r\n";
            $JITENDRAUNATTI .= "{$protocol}{$host}$THANOS?id=" . $VISION["playback_url"] . "\r\n" . PHP_EOL;
        }
        file_put_contents($LIGHT_SIDE . "/playlist.m3u", $JITENDRAUNATTI);
    } else {
          json_fetcher();
            $JITENDRAUNATTI .= '#EXTINF:-1 tvg-id="DOCTOR_STRANGE" tvg-logo="' . htmlspecialchars($MJ["Meta_data"]["channel_img"]) . '" group-title="JITENDRA_PRO_DEV",JITENDRA_KUMAR' . "\r\n";
            $JITENDRAUNATTI .= $MJ["Meta_data"]["channel_video"] . "\n" . PHP_EOL;
        }
        //The script can be downloaded from here: https://github.com/Jitendraunatti/
        echo $JITENDRAUNATTI;
        $DANAV = explode(".", $WANDA["HOST"]);
        file_put_contents($LIGHT_SIDE . "/" . $DANAV[1] . ".m3u", $JITENDRAUNATTI);
} else {
    header("Location: login.php");
    exit();
}
