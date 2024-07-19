<?php
include "config.php";
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

echo "<center>";
echo '<div class="pro-user">';
echo '<h1>Login Page :- <a class="playlist-link" href="login.php">LOGIN</a></h1>';
echo '<h1>Web Page :- <a class="playlist-link" href="web.php">WEB</a></h1>';
echo '<h1>Token Sharing Feature:- <a class="playlist-link" href="config.php?key=JITENDRA_PRO_DEV">Token</a></h1>';
echo '<h1>Playlist :-  <a class="playlist-link" href="playlist.php">Playlist</a></h1>';
echo '<h1> Previous Dump playlist :-  <a class="playlist-link" href="data/jitendraunatti/PLAYLIST/">Playlist</a></h1>';
echo '<h1>'. $ASUR["error"] .'</h1>';
echo '<h1>'. $ASUR["message1"] .'</h1>';
echo '<h1>'. $ASUR["message2"] .'</h1>';
echo '<h1>'. $ASUR["message3"] .'</h1>';
echo '<h1>'. $ASUR["message4"] .'</h1>';
echo '<h1>THE LATEST VERSION OF SCRIPT:- <span>' . $ASUR["latest_script"] . '</span> <a class="download-link" href="https://github.com/Jitendraunatti/">Download the latest update from here</a></h1>';
echo '<footer>©️ All copyrights reserved to their respective owners.</footer>';
echo '</div>';
echo "<footer style=\"background-color: rgba(0, 0, 0, 0.5); color: #fff; padding: 20px; text-align: center;\">
  <span class=\"footer-text\" style=\"font-family: 'Arial', sans-serif; font-size: 1.2em;\">
    Coded with <span style=\"color: #e25555;\">❤️</span> by <b>Jitendra Kumar</b>
  </span>
</footer>";


echo "</center>";