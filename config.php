<?php
//=============================================================================//
//                    शेर शिकार पर निकले तो जंगल खुशहाल होना चाहिए
//        𝐈𝐅 𝐓𝐇𝐄 𝐋𝐈𝐎𝐍 𝐆𝐎𝐄𝐒 𝐎𝐔𝐓 𝐇𝐔𝐍𝐓𝐈𝐍𝐆, 𝐓𝐇𝐄 𝐅𝐎𝐑𝐄𝐒𝐓 𝐒𝐇𝐎𝐔𝐋𝐃 𝐁𝐄 𝐇𝐀𝐏𝐏𝐘.
//=============================================================================//
error_reporting(0);
$ASUR = jitendra_pro_dev();

$JITENDRA_PRO_DEV_X_DARK_SIDE = "app/data/jitendraunatti";
$JITENDRA_PRO_DEV_X_WHITE_SIDE = "data/jitendraunatti/PLAYLIST";
if (!is_dir($JITENDRA_PRO_DEV_X_DARK_SIDE) && !is_dir($JITENDRA_PRO_DEV_X_WHITE_SIDE)) {
  mkdir($JITENDRA_PRO_DEV_X_DARK_SIDE, 0777, true);
  mkdir($JITENDRA_PRO_DEV_X_WHITE_SIDE, 0777, true);
  if (!file_exists($JITENDRA_PRO_DEV_X_DARK_SIDE . "/.htaccess")) {
      @file_put_contents($JITENDRA_PRO_DEV_X_DARK_SIDE . "/.htaccess", "deny from all");
  }
  if (!file_exists($JITENDRA_PRO_DEV_X_DARK_SIDE . "/index.php")) {
      @file_put_contents($JITENDRA_PRO_DEV_X_DARK_SIDE . "/index.php", "<?php http_response_code(401); exit('Access Denied'); ?>");
  }
}

date_default_timezone_set("Asia/Kolkata");
$BLOODY_SWEET = @json_decode(file_get_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/data.txt"),true);
if($ASUR["latest_script"]  === "Stalker Portal 1.0_19-07-24✅" )
{
//=============================================================================//
//                            𝐒𝐓𝐀𝐋𝐊𝐄𝐑_𝐏𝐎𝐑𝐓𝐀𝐋_𝐃𝐀𝐓𝐀
//=============================================================================//


$ROLEX = parse_url($BLOODY_SWEET["JITENDRAUNATTI"]["url"]);
$JITENDRA_PRO_DEV_X_HOST = $ROLEX["host"]; 
$JITENDRA_PRO_DEV_X_MAC = $BLOODY_SWEET["JITENDRAUNATTI"]["mac"]; 
$JITENDRA_PRO_DEV_X_SN = $BLOODY_SWEET["JITENDRAUNATTI"]["sn"]; 
$JITENDRA_PRO_DEV_X_DEVICE_ID_1 = $BLOODY_SWEET["JITENDRAUNATTI"]["d1"]; 
$JITENDRA_PRO_DEV_X_DEVICE_ID_2 = $BLOODY_SWEET["JITENDRAUNATTI"]["d2"]; 
$JITENDRA_PRO_DEV_X_API = "263";
$JITENDRA_PRO_DEV_X_SIG = $BLOODY_SWEET["JITENDRAUNATTI"]["sig"]; 
 
//=============================================================================//
//                             𝐇𝐀𝐍𝐃𝐒𝐇𝐀𝐊𝐄
//=============================================================================//
function handshake()
{
    global $JITENDRA_PRO_DEV_X_HOST;
    $JITENDRA_PRO_DEV_X_URL = "http://$JITENDRA_PRO_DEV_X_HOST/stalker_portal/server/load.php?type=stb&action=handshake&token=&JsHttpRequest=1-xml";
    $JITENDRA_PRO_DEV_X_ROLEX = [
        'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
        'Connection: Keep-Alive',
        'Accept-Encoding: gzip',
        'X-User-Agent: Model: MAG250; Link: WiFi',
        "Referer: http://$JITENDRA_PRO_DEV_X_HOST/stalker_portal/c/",
        "Host: $JITENDRA_PRO_DEV_X_HOST",
        "Connection: Keep-Alive",
    ];

    $JITENDRA_PRO_DEV_X_LOKI = doctor_strange($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX);
    $JITENDRA_PRO_DEV_X_STATUS = $JITENDRA_PRO_DEV_X_LOKI["JITENDRAUNATTI"]["info"];
    $JITENDRA_PRO_DEV_X_LOKI =  $JITENDRA_PRO_DEV_X_LOKI["JITENDRAUNATTI"]["data"];
    $JITENDRA_PRO_DEV_X_SYLIVE = json_decode($JITENDRA_PRO_DEV_X_LOKI,true);
    $JITENDRA_PRO_DEV_X_JSON_ENCODE = array(
      "JITENDRAUNATTI" => array(
          "token" => $JITENDRA_PRO_DEV_X_SYLIVE["js"]["token"],
          "random" => $JITENDRA_PRO_DEV_X_SYLIVE["js"]["random"],
          "Status Code" => $JITENDRA_PRO_DEV_X_STATUS
      )
    );

    return $JITENDRA_PRO_DEV_X_JSON_ENCODE;

}

//=============================================================================//
//                             𝐆𝐄𝐍𝐄𝐑𝐀𝐓𝐄_𝐓𝐎𝐊𝐄𝐍
//=============================================================================//
function generate_token() 
{
  global $JITENDRA_PRO_DEV_X_DARK_SIDE, $JITENDRA_PRO_DEV_X_HOST, $JITENDRA_PRO_DEV_X_MAC;
  if (!file_exists("$JITENDRA_PRO_DEV_X_DARK_SIDE/mac.txt") && !file_exists("$JITENDRA_PRO_DEV_X_DARK_SIDE/host.txt")) {
      file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/mac.txt", $JITENDRA_PRO_DEV_X_MAC);
      file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/host.txt", $JITENDRA_PRO_DEV_X_HOST);
      
  }

  if (!file_exists("$JITENDRA_PRO_DEV_X_DARK_SIDE/token.txt")) {
      $JITENDRA_PRO_DEV_X_DECODE = handshake();
      $jitendraunatti = $JITENDRA_PRO_DEV_X_DECODE["JITENDRAUNATTI"]["token"];
      $jitendraunatti = iron_man($jitendraunatti);
      $jitendraunatti = $jitendraunatti["JITENDRAUNATTI"]["token"];
      get_profile($jitendraunatti);
      file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/token.txt", $jitendraunatti);
      file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/mac.txt", $JITENDRA_PRO_DEV_X_MAC);
      file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/host.txt", $JITENDRA_PRO_DEV_X_HOST);
  } 
  if ($JITENDRA_PRO_DEV_X_HOST === file_get_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/host.txt") && $JITENDRA_PRO_DEV_X_MAC === file_get_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/mac.txt")) {
      $jitendraunatti = file_get_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/token.txt");
      $jitendraunatti = iron_man($jitendraunatti);
      $jitendraunatti = $jitendraunatti["JITENDRAUNATTI"]["token"];
      get_profile($jitendraunatti);
      file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/token.txt", $jitendraunatti);
  } else 
  {
    
      $JITENDRA_PRO_DEV_X_DECODE = handshake();
      $jitendraunatti = $JITENDRA_PRO_DEV_X_DECODE["JITENDRAUNATTI"]["token"];
      $jitendraunatti = iron_man($jitendraunatti);
      $jitendraunatti = $jitendraunatti["JITENDRAUNATTI"]["token"];
      get_profile($jitendraunatti);
      file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/token.txt", $jitendraunatti);
      file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/mac.txt", $JITENDRA_PRO_DEV_X_MAC);
      file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/host.txt", $JITENDRA_PRO_DEV_X_HOST);
  }

return $jitendraunatti;
}


//=============================================================================//
//                            𝐏𝐋𝐀𝐘𝐁𝐀𝐂𝐊_𝐔𝐑𝐋_𝐄𝐗𝐓𝐑𝐀𝐂𝐓𝐎𝐑
//=============================================================================//
function jitendra_kumar($id)
{
    global $JITENDRA_PRO_DEV_X_HOST,$JITENDRA_PRO_DEV_X_DARK_SIDE;
    $JITENDRA_PRO_DEV_X_URL = "http://$JITENDRA_PRO_DEV_X_HOST/stalker_portal/server/load.php?type=itv&action=create_link&cmd=ffrt+http%3A%2F%2Flocalhost%2Fch%2F$id&JsHttpRequest=1-xml";
    $JITENDRA_PRO_DEV_X_ROLEX = [
      'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
      'Connection: Keep-Alive',
      'Accept-Encoding: gzip',
      'X-User-Agent: Model: MAG250; Link: WiFi',
      "Referer: http://$JITENDRA_PRO_DEV_X_HOST/stalker_portal/c/",
      "Authorization: Bearer " . generate_token(),
      "Host: $JITENDRA_PRO_DEV_X_HOST",
      "Connection: Keep-Alive",
    ];
  $JITENDRA_PRO_DEV_X_LOKI = doctor_strange($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX);
  $JITENDRA_PRO_DEV_X_STATUS = $JITENDRA_PRO_DEV_X_LOKI["JITENDRAUNATTI"]["info"];
  $JITENDRA_PRO_DEV_X_LOKI =  $JITENDRA_PRO_DEV_X_LOKI["JITENDRAUNATTI"]["data"];
  $JITENDRA_PRO_DEV_X_SYLIVE = json_decode($JITENDRA_PRO_DEV_X_LOKI,true);
  file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/playback.txt",$JITENDRA_PRO_DEV_X_SYLIVE);
  $JITENDRA_PRO_DEV_X_JSON_ENCODE = array(
    "JITENDRAUNATTI" => array(
        "rolex" =>$JITENDRA_PRO_DEV_X_SYLIVE["js"]["cmd"],
        "Status Code" =>  $JITENDRA_PRO_DEV_X_STATUS,
    )
  );

  return $JITENDRA_PRO_DEV_X_JSON_ENCODE;


}

//=============================================================================//
//                             𝐑𝐄_𝐓𝐎𝐊𝐄𝐍_𝐆𝐄𝐍𝐄𝐑𝐀𝐓𝐎𝐑
//=============================================================================//
function iron_man($jitendraunatti)
{
    global $JITENDRA_PRO_DEV_X_HOST;
    $JITENDRA_PRO_DEV_X_URL = "http://$JITENDRA_PRO_DEV_X_HOST/stalker_portal/server/load.php?type=stb&action=handshake&token=$jitendraunatti&JsHttpRequest=1-xml";
    $JITENDRA_PRO_DEV_X_ROLEX = [
        'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
        'Connection: Keep-Alive',
        'Accept-Encoding: gzip',
        'X-User-Agent: Model: MAG250; Link: WiFi',
        "Referer: http://$JITENDRA_PRO_DEV_X_HOST/stalker_portal/c/",
        "Host: $JITENDRA_PRO_DEV_X_HOST",
        "Connection: Keep-Alive",
    ];

    $JITENDRA_PRO_DEV_X_LOKI = doctor_strange($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX);
    $JITENDRA_PRO_DEV_X_LOKI =  $JITENDRA_PRO_DEV_X_LOKI["JITENDRAUNATTI"]["data"];
    $JITENDRA_PRO_DEV_X_SYLIVE = json_decode($JITENDRA_PRO_DEV_X_LOKI,true);
    $JITENDRA_PRO_DEV_X_JSON_ENCODE = array(
      "JITENDRAUNATTI" => array(
          "token" => $JITENDRA_PRO_DEV_X_SYLIVE["js"]["token"],
          "random" => $JITENDRA_PRO_DEV_X_SYLIVE["js"]["random"],
      )
  );

  return $JITENDRA_PRO_DEV_X_JSON_ENCODE;

}
//=============================================================================//
//                             𝐆𝐄𝐓_𝐏𝐑𝐎𝐅𝐈𝐋𝐄
//=============================================================================//

function get_profile($jitendraunatti)
{
  global $JITENDRA_PRO_DEV_X_HOST,$JITENDRA_PRO_DEV_X_MAC,$JITENDRA_PRO_DEV_X_SN,$JITENDRA_PRO_DEV_X_DEVICE_ID_1,$JITENDRA_PRO_DEV_X_DEVICE_ID_2,$JITENDRA_PRO_DEV_X_SIG,$JITENDRA_PRO_DEV_X_API;
  $timestamp = time();
  $JITENDRA_PRO_DEV_X_DECODE = handshake();
  $jitendraunatti_random = $JITENDRA_PRO_DEV_X_DECODE["JITENDRAUNATTI"]["random"];
  $JITENDRA_PRO_DEV_X_URL = "http://$JITENDRA_PRO_DEV_X_HOST/stalker_portal/server/load.php?type=stb&action=get_profile&hd=1&ver=ImageDescription%3A+0.2.18-r14-pub-250%3B+ImageDate%3A+Fri+Jan+15+15%3A20%3A44+EET+2016%3B+PORTAL+version%3A+5.1.0%3B+API+Version%3A+JS+API+version%3A+328%3B+STB+API+version%3A+134%3B+Player+Engine+version%3A+0x566&num_banks=2&sn=$JITENDRA_PRO_DEV_X_SN&stb_type=MAG250&image_version=218&video_out=hdmi&device_id=$JITENDRA_PRO_DEV_X_DEVICE_ID_1&device_id2=$JITENDRA_PRO_DEV_X_DEVICE_ID_2&signature=$JITENDRA_PRO_DEV_X_SIG&auth_second_step=1&hw_version=1.7-BD-00&not_valid_token=0&client_type=STB&hw_version_2=08e10744513ba2b4847402b6718c0eae&timestamp=$timestamp&api_signature=$JITENDRA_PRO_DEV_X_API&metrics=%7B%22mac%22%3A%22$JITENDRA_PRO_DEV_X_MAC%22%2C%22sn%22%3A%22$JITENDRA_PRO_DEV_X_SN%22%2C%22model%22%3A%22MAG250%22%2C%22type%22%3A%22STB%22%2C%22uid%22%3A%22%22%2C%22random%22%3A%22$jitendraunatti_random%22%7D&JsHttpRequest=1-xml";
  $JITENDRA_PRO_DEV_X_ROLEX = [
    'User-Agent: Mozilla/5.0 (QtEmbedded; U; Linux; C) AppleWebKit/533.3 (KHTML, like Gecko) MAG200 stbapp ver: 2 rev: 250 Safari/533.3',
    'Connection: Keep-Alive',
    'Accept-Encoding: gzip',
    'X-User-Agent: Model: MAG250; Link: WiFi',
    "Referer: http://$JITENDRA_PRO_DEV_X_HOST/stalker_portal/c/",
    "Authorization: Bearer " . $jitendraunatti,
    "Host: $JITENDRA_PRO_DEV_X_HOST",
    "Connection: Keep-Alive",
  ];
  doctor_strange($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX);
}
//=============================================================================//
//                           𝐉𝐈𝐓𝐄𝐍𝐃𝐑𝐀'𝐒_𝐔𝐍𝐈𝐕𝐄𝐑𝐒𝐄
//=============================================================================//
function doctor_strange($JITENDRA_PRO_DEV_X_URL,$JITENDRA_PRO_DEV_X_ROLEX)
{
  global $JITENDRA_PRO_DEV_X_MAC;
  $JITENDRA_PRO_DEV_X_IRON_MAN = curl_init();
  curl_setopt_array($JITENDRA_PRO_DEV_X_IRON_MAN, [
    CURLOPT_URL => $JITENDRA_PRO_DEV_X_URL,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => 'gzip',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_COOKIE => "mac=$JITENDRA_PRO_DEV_X_MAC; stb_lang=en; timezone=GMT",
    CURLOPT_HTTPHEADER => $JITENDRA_PRO_DEV_X_ROLEX,
  ]);
  $JITENDRA_PRO_DEV_X_LOKI = curl_exec($JITENDRA_PRO_DEV_X_IRON_MAN);
  curl_close($JITENDRA_PRO_DEV_X_IRON_MAN);
  $JITENDRA_PRO_DEV_X_STATUS = curl_getinfo($JITENDRA_PRO_DEV_X_IRON_MAN);
  $JITENDRA_PRO_DEV_X_JSON_ENCODE = array(
    "JITENDRAUNATTI" => array(
        "data" => $JITENDRA_PRO_DEV_X_LOKI,
        "info" => $JITENDRA_PRO_DEV_X_STATUS,
    )
  );
  return  $JITENDRA_PRO_DEV_X_JSON_ENCODE;
}
    function video(){
      $LOKI = file_get_contents("https://video.twimg.com/amplify_video/1797150287292981248/pl/-GLBpWJuiNKBrdvp.m3u8");
      $LOKI = str_replace("/amplify_video/","https://video.twimg.com/amplify_video/",$LOKI);
      return $LOKI;
    }
//=============================================================================//
//                   𝐏𝐋𝐀𝐘𝐁𝐀𝐂𝐊𝐀𝐁𝐋𝐄 𝐂𝐑𝐄𝐃𝐄𝐍𝐓𝐈𝐀𝐋𝐒 𝐒𝐇𝐀𝐑𝐈𝐍𝐆 𝐅𝐄𝐀𝐓𝐔𝐑𝐄𝐒.
//=============================================================================//
$key = @$_REQUEST["key"];
if(@$_REQUEST["key"] != "")
{
  $JITENDRA_PRO_DEV_X_TIMESTAMP = date('l jS \of F Y h:i:s A');
      $JITENDRA_PRO_DEV_X_SHARING = file_get_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/share.txt");
      if ($JITENDRA_PRO_DEV_X_SHARING === "ON" && strlen($JITENDRA_PRO_DEV_X_SHARING) === 2) {
          if ($key == 'JITENDRA_PRO_DEV' || $key == 'JAY_SHREE_RAM') {
              $JITENDRA_PRO_DEV_X_JSON_ENCODE = array(
                  "JITENDRAUNATTI" => array(
                      "Author" => "JITENDRA KUMAR",
                      "message" => "success",
                      "Status Code" => 200,
                      "token" => generate_token(),
                      "mac" => file_get_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/mac.txt"),
                      "host" => file_get_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/host.txt"),
                      "Date" => $JITENDRA_PRO_DEV_X_TIMESTAMP,
                  )
              );
              header("Content-Type: application/json");
              echo json_encode($JITENDRA_PRO_DEV_X_JSON_ENCODE);
          }
      }
      elseif ($JITENDRA_PRO_DEV_X_SHARING === "OFF" && strlen($JITENDRA_PRO_DEV_X_SHARING) === 3) {
          header("Content-Type: application/json");
          echo json_encode(array(
            "Author" => "JITENDRA KUMAR",
            "message" => "Currently, sharing mode is off. Contact the  owner and tell them to turn it on from your side.",
            "Status Code" => 403,
            "Date" => $JITENDRA_PRO_DEV_X_TIMESTAMP,
          ));
      } 
      else 
      {
          header("Content-Type: application/json");
          file_put_contents("$JITENDRA_PRO_DEV_X_DARK_SIDE/share.txt", "OFF");
          echo json_encode(array(
            "Author" => "JITENDRA KUMAR",
            "Status Code" => 500,
            "message" => "Something went wrong. Please try again after some time or refresh it again.",
            "Date" => $JITENDRA_PRO_DEV_X_TIMESTAMP,
          ));
      }
}
}else {
  echo '<style>
  body {
      font-family: Arial, sans-serif;
      background: url("' . $ASUR["bgpic"] . '") no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      text-align: center;
      padding: 50px;
      margin: 0;
  }
  .pro-user {
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
      display: inline-block;
      max-width: 600px;
      margin: auto;
  }
  .pro-user h1 {
      font-size: 24px;
      margin: 20px 0;
  }
  .pro-user .download-link, .pro-user .playlist-link {
      display: inline-block;
      padding: 12px 24px;
      font-size: 18px;
      background: linear-gradient(135deg, #007bff, #0056b3);
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-family: Arial, sans-serif;
      margin-bottom: 18px;
      margin-right: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
  }
  .pro-user .download-link:hover, .pro-user .playlist-link:hover {
      background: linear-gradient(135deg, #0056b3, #003d80);
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
  }
  footer {
      font-size: 16px;
      margin-top: 20px;
  }
  </style>';
echo '<div class="pro-user">';
echo "<center>";
echo '<h1>🆕UPDATE IS AVAILABLE NOW</h1>';
echo '<h1>YOUR SCRIPT IS NOW OUTDATED. PLEASE UPDATE YOUR SCRIPT FROM HERE: <span>' . $ASUR["latest_script"] . '</span> <a class="download-link" href="https://github.com/Jitendraunatti/">Download the latest update from here</a></h1>';
echo '<h1>'. $ASUR["message1"] .'</h1>';
echo '<h1>'. $ASUR["message2"] .'</h1>';
echo '<h1>'. $ASUR["message3"] .'</h1>';
echo '<h1>'. $ASUR["message4"] .'</h1>';
echo '<p>'. $ASUR["message5"] .'</p>';
echo '<p>'. $ASUR["message6"] .'</p>';
echo '<p>'. $ASUR["message7"] .'</p>';
echo '<p>'. $ASUR["message8"] .'</p>';
echo "<center>";
echo '</div>';
}
function jitendra_pro_dev()
{
  $ROLEX = @json_decode(file_get_contents("https://stalker-portal.developed-by-doctor-strange.workers.dev/"),true);
  return $ROLEX;
}

function tv_id(){
  global $JITENDRA_PRO_DEV_X_HOST;
  $JITENDRA_PRO_DEV_X_URL = "http://$JITENDRA_PRO_DEV_X_HOST/stalker_portal/server/load.php?type=itv&action=get_genres&JsHttpRequest=1-xml";
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
$JITENDRA_PRO_DEV_X_LOKI = $JITENDRA_PRO_DEV_X_LOKI["JITENDRAUNATTI"]["data"];
$JITENDRA_PRO_DEV_X_SYLIVE = json_decode($JITENDRA_PRO_DEV_X_LOKI,true);
$JITENDRA_PRO_DEV_X_ROLEX = [];
foreach ($JITENDRA_PRO_DEV_X_SYLIVE["js"] as $JITENDRA_PRO_DEV_X_DEVARA){
  $JITENDRA_PRO_DEV_X_ROLEX[$JITENDRA_PRO_DEV_X_DEVARA["id"]] = $JITENDRA_PRO_DEV_X_DEVARA["title"];
}
return $JITENDRA_PRO_DEV_X_ROLEX;
}