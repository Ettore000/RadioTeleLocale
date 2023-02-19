<!--
ASCII CODE:
Font= BIG
SHA1(160bit)=6A37028402384813127AB34B6D0D7D2724E8593D;
                   ______ _   _                   _____                      _                             _            _   _             
     /\           |  ____| | | |                 |  __ \                    (_)                           | |          | | (_)            
    /  \   _ __   | |__  | |_| |_ ___  _ __ ___  | |__) |_ _ _ __   __ _ ___ _  __ _   _ __  _ __ ___   __| |_   _  ___| |_ _  ___  _ __  
   / /\ \ | '_ \  |  __| | __| __/ _ \| '__/ _ \ |  ___/ _` | '_ \ / _` / __| |/ _` | | '_ \| '__/ _ \ / _` | | | |/ __| __| |/ _ \| '_ \ 
  / ____ \| | | | | |____| |_| || (_) | | |  __/ | |  | (_| | | | | (_| \__ \ | (_| | | |_) | | | (_) | (_| | |_| | (__| |_| | (_) | | | |
 /_/    \_\_| |_| |______|\__|\__\___/|_|  \___| |_|   \__,_|_| |_|\__,_|___/_|\__,_| | .__/|_|  \___/ \__,_|\__,_|\___|\__|_|\___/|_| |_|
                                                                                      | |                                                 
                                                                                      |_|                                                 
-->
<!--
  ______           _____           _ _         _______   _        _                     _      
 |  ____|         |  __ \         | (_)       |__   __| | |      | |                   | |     
 | |__ ___  _ __  | |__) |__ _  __| |_  ___      | | ___| | ___  | |     ___   ___ __ _| | ___ 
 |  __/ _ \| '__| |  _  // _` |/ _` | |/ _ \     | |/ _ \ |/ _ \ | |    / _ \ / __/ _` | |/ _ \
 | | | (_) | |    | | \ \ (_| | (_| | | (_) |    | |  __/ |  __/ | |___| (_) | (_| (_| | |  __/
 |_|  \___/|_|    |_|  \_\__,_|\__,_|_|\___/     |_|\___|_|\___| |______\___/ \___\__,_|_|\___|
                                                                                               
                                                                                               
-->
<!-- PHP part: -->
<?php
/* pagina referente alla principale */
/* selezione pulsanti */
switch ($_GET["x"]) {
	case "home":
		header("location: index.html");
	break;
	case "radio":
		header("location: radio.html");
	break;
	case "news";
		header("location: news.html");
	break;
	case "musica";
		header("location: musica.html");
	break;
	case "programmi";
		header("location: programmi.html");
	break;
	case "animazione";
		header("location: animazione.html");
	break;
	case "extra";
		header("location: extra.html");
	break;
	case "EMAIL COMMERCIALE";
		header("location: pagemail.html");
	break;
}
?>