<?php
include("config.php");
$ROLEX = [
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'Connection: Keep-Alive',
    'Accept-Encoding: gzip',
];
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
$THANOS = parse_url($_SERVER["REQUEST_URI"]);
$THANOS =  $THANOS["path"];
if (isset($_REQUEST['id']) && validation()) {
    header('Access-Control-Allow-Origin: *');
    header('Connection: keep-alive');
    header("DEVELOPED-BY: JITENDRA_PRO_DEV");
    header('Cache-Control: no-cache');
    header('Pragma: no-cache');
    //The script can be downloaded from here: https://github.com/Jitendraunatti/
    $SCARLET_WITCH = json_decode(doctor_strange($_REQUEST["id"]), true);
    if (is_numeric($_REQUEST["id"]) && strlen($_REQUEST["id"]) < 10) {
        $DOCTOR_STRANGE = jitendraunatti($SCARLET_WITCH["JITENDRAUNATTI"]["data"]["main_url"], $ROLEX, "GET", $KANG = null, 0, 1, 0, 0, false);
        $ULTRON = ULTRON($DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["url"]);
        header('Content-Type: application/vnd.apple.mpegurl');
        if(!empty($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"]) && strpos($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"],"m3u8")!==false  &&  ($WANDA["Proxy"]=="AUTO" || $WANDA["Proxy"]=="ON")){
        echo str_replace([base64_decode($MJ["En_data"]["hold"]), ".m3u8"], [$protocol.$host.$THANOS."?rolex=" . $ULTRON .base64_decode($MJ["En_data"]["hold"]), base64_decode($MJ["En_data"]["seg"])], $DOCTOR_STRANGE["JITENDRAUNATTI"]["data"]);
        }else{
        header("Location:" . $SCARLET_WITCH["JITENDRAUNATTI"]["data"]["main_url"]);
        exit();
        }
    } else {
        if (strpos($_REQUEST["id"], "http") !== false) {
            header("Location:" . $_REQUEST["id"]);
        } else {
            header("Location:" . base64_decode($_REQUEST["id"]));
        }
        exit();
    }
}else if (isset($_REQUEST["rolex"])) {
    header('Content-Type: video/MP2T');
    $DOCTOR_STRANGE = jitendraunatti(str_replace(base64_decode($MJ["En_data"]["seg"]), ".m3u8", $_REQUEST["rolex"]), $ROLEX, "GET", $KANG = null, 0, 1, 0, 0, false);
    echo str_replace([date("Y") . "/", ".ts"], [$protocol.$host.$THANOS."?wanda=" . ULTRON($DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["url"]) . date("Y") . "/", base64_decode($MJ["En_data"]["seg"])], $DOCTOR_STRANGE["JITENDRAUNATTI"]["data"]);
} else if (!empty($_REQUEST["wanda"])) {
    header('Content-Type: video/MP2T');
    echo jitendraunatti(str_replace(base64_decode($MJ["En_data"]["seg"]), ".ts", $_REQUEST["wanda"]), $ROLEX, "GET", $KANG = null, 0, 1, 0, 0, false)["JITENDRAUNATTI"]["data"];
}
elseif(empty($_REQUEST["wanda"])&& !isset($_REQUEST["rolex"])){
    header("Location: " . $_SERVER["REQUEST_URI"]);
    //The script can be downloaded from here: https://github.com/Jitendraunatti/
    exit();    
}else{
    header("Location:" . $SCARLET_WITCH["JITENDRAUNATTI"]["data"]["main_url"]);
    exit();
}
