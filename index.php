<?php

/**
 * Написание CMS из видео урока на Youtube
 * https://www.youtube.com/watch?v=4Eb8M4WFMGk&list=PLC27DxYnUFKKupV9HS0t2es0n_WO-3MqK&index=1
 */

include_once "scripts/main_scripts.php";
include_once "scripts/database_scripts.php";
include_once  "scripts/profile_scripts.php";
include_once  "scripts/goods_scripts.php";


session_start();

user_reg($connect);
user_login($connect);
ses_destroy();
buy_goods($connect);

//session_destroy();

include_once get_path_to_page();