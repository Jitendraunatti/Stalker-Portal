<?php
//=============================================================================//
//                          जब शेर भूखा रहा तो जंगल भी भूख से मरेगा
//    𝐖𝐇𝐄𝐍 𝐓𝐇𝐄 𝐋𝐈𝐎𝐍 𝐑𝐄𝐌𝐀𝐈𝐍𝐒 𝐇𝐔𝐍𝐆𝐑𝐘, 𝐓𝐇𝐄 𝐉𝐔𝐍𝐆𝐋𝐄 𝐖𝐈𝐋𝐋 𝐀𝐋𝐒𝐎 𝐃𝐈𝐄 𝐎𝐅 𝐇𝐔𝐍𝐆𝐄𝐑
//=============================================================================//
include "config.php";

    function id_generator($cmd)
    {
    $JITENDRA_PRO_DEV_X_THOR = explode("/", "$cmd");
    if ($JITENDRA_PRO_DEV_X_THOR[2] === "localhost") {
        $cmd = str_ireplace('ffrt http://localhost/ch/', '', "$cmd");
    } else if ($JITENDRA_PRO_DEV_X_THOR[2] === "") {
        $cmd = str_ireplace('ffrt http:///ch/', '', $cmd);
    } else {
        $cmd = $cmd;
    }
    return $cmd;
    }

    function image($JITENDRA_PRO_DEV_X_WANDA, $JITENDRA_PRO_DEV_X_HOST)
{ 
    global $ASUR;
    $DEVARA = [
        ".png",
        ".jpg",
    ];

    $WANDA  = [
        '',
        "",
    ];
    $JITENDRAUNATTI = $JITENDRA_PRO_DEV_X_WANDA['logo'];
    $JITENDRA_PRO_DEV_X_WANDA['logo'] = str_replace($DEVARA,$WANDA,$JITENDRA_PRO_DEV_X_WANDA['logo']);
    if (is_numeric($JITENDRA_PRO_DEV_X_WANDA['logo'])) {
        $jitendraunatti = 'http://' . $JITENDRA_PRO_DEV_X_HOST . '/stalker_portal/misc/logos/320/' . $JITENDRAUNATTI;
    } else {
        $jitendraunatti = $ASUR["bgpic"];
    }
    
    return $jitendraunatti;
}

$JITENDRA_PRO_DEV_X_URL = "http://$JITENDRA_PRO_DEV_X_HOST/stalker_portal/server/load.php?type=itv&action=get_all_channels&JsHttpRequest=1-xml";
$JITENDRA_PRO_DEV_X_ROLEX = [
    "User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3",
    "Authorization: Bearer " . generate_token(),
    "X-User-Agent: Model: MAG250; Link: WiFi",
    "Referer: http://$JITENDRA_PRO_DEV_X_HOST/stalker_portal/c/",
    "Accept: */*",
    "Host: $JITENDRA_PRO_DEV_X_HOST",
    "Connection: Keep-Alive",
    "Accept-Encoding: gzip",
];
$JITENDRA_PRO_DEV_X_LOKI = doctor_strange($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX);
$JITENDRA_PRO_DEV_X_STATUS = $JITENDRA_PRO_DEV_X_LOKI["JITENDRAUNATTI"]["info"];
$JITENDRA_PRO_DEV_X_LOKI = $JITENDRA_PRO_DEV_X_LOKI["JITENDRAUNATTI"]["data"];
$JITENDRA_PRO_DEV_X_SYLIVE = json_decode($JITENDRA_PRO_DEV_X_LOKI,true);
$JITENDRA_PRO_DEV_X_TIMESTAMP = date('l jS \of F Y h:i:s A');
$JITENDRA_PRO_DEV_X_DOCTOR_STRANGE = tv_id();
if (!empty($JITENDRA_PRO_DEV_X_SYLIVE)) {
    $JITENDRA_PRO_DEV_X_PLAYLIST_DATA = "#EXTM3U\n#DEVELOPED_BY_JITENDRA_PRO_DEV\n#AUTHOR:-JITENDRA_KUMAR\n#DATE:- $JITENDRA_PRO_DEV_X_TIMESTAMP\n
#
# ───░█ ▀█▀ ▀▀█▀▀ ░█▀▀▀ ░█▄─░█ ░█▀▀▄ ░█▀▀█ ─█▀▀█ ── ░█─▄▀ ░█─░█ ░█▀▄▀█ ─█▀▀█ ░█▀▀█ 
# ─▄─░█ ░█─ ─░█── ░█▀▀▀ ░█░█░█ ░█─░█ ░█▄▄▀ ░█▄▄█ ▀▀ ░█▀▄─ ░█─░█ ░█░█░█ ░█▄▄█ ░█▄▄▀ 
# ░█▄▄█ ▄█▄ ─░█── ░█▄▄▄ ░█──▀█ ░█▄▄▀ ░█─░█ ░█─░█ ── ░█─░█ ─▀▄▄▀ ░█──░█ ░█─░█ ░█─░█\n";
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
    $JITENDRA_PRO_DEV_X_THANOS = parse_url($_SERVER["REQUEST_URI"]);
    $JITENDRA_PRO_DEV_X_THANOS = str_replace("playlist.php","portal.php",$JITENDRA_PRO_DEV_X_THANOS["path"]);


    foreach ($JITENDRA_PRO_DEV_X_SYLIVE["js"]["data"] as $JITENDRA_PRO_DEV_X_WANDA) {
        foreach ($JITENDRA_PRO_DEV_X_DOCTOR_STRANGE as $JITENDRA_PRO_DEV_X_CHRISTINE => $JITENDRA_PRO_DEV_X_MARVEL_CINEMATIC_UNIVERSE) {
            if ($JITENDRA_PRO_DEV_X_WANDA['tv_genre_id'] == $JITENDRA_PRO_DEV_X_CHRISTINE) {
                $cmd = $JITENDRA_PRO_DEV_X_WANDA['cmd'];
                $JITENDRA_PRO_DEV_X_PLAYLIST_DATA .= '#EXTINF:-1 tvg-id="' . id_generator($cmd) . '" tvg-logo="' .image($JITENDRA_PRO_DEV_X_WANDA, $JITENDRA_PRO_DEV_X_HOST) . '" group-title="' . $JITENDRA_PRO_DEV_X_MARVEL_CINEMATIC_UNIVERSE . '",' . $JITENDRA_PRO_DEV_X_WANDA['name'] . "\r\n";
                $JITENDRA_PRO_DEV_X_PLAYLIST_DATA .= "{$protocol}{$host}$JITENDRA_PRO_DEV_X_THANOS?id=" . id_generator($cmd) . "\r\n" . PHP_EOL;
            }
        }
    }
    header("Content-Type: application/json");
    echo  $JITENDRA_PRO_DEV_X_PLAYLIST_DATA;
    $JITENDRA_PRO_DEV_X_PLAYLIST = explode(".",$JITENDRA_PRO_DEV_X_HOST);
    file_put_contents("playlist.m3u",$JITENDRA_PRO_DEV_X_PLAYLIST_DATA);
    file_put_contents("{$JITENDRA_PRO_DEV_X_WHITE_SIDE}/{$JITENDRA_PRO_DEV_X_PLAYLIST[0]}.m3u", $JITENDRA_PRO_DEV_X_PLAYLIST_DATA);
} else 
{
    header("Content-Type: application/json");
    echo 'Empty or invalid response from the server.';
    var_dump($JITENDRA_PRO_DEV_X_STATUS);
}
