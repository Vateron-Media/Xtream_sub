<?php

if ($argc) {
    define("USE_CACHE", false);
    require str_replace("\\", "/", dirname($argv[0])) . "/../wwwdir/init.php";
    cli_set_process_title("XtreamCodes[Cache Builder]");
    $D3b211a38e2eb607ab17f4f6770932e5 = TMP_DIR . md5(cF78a30169E3F4A75226712Bf3f1a141() . __FILE__);
    Efc0Aeb4b245B992B0F2a749dac55820($D3b211a38e2eb607ab17f4f6770932e5);
    ini_set("memory_limit", -1);
    e2d73953a5089b9c7983838f61F23aCF::bD24dc62845546c5Ddf2397a8fBb654b("settings_cache", E2d73953A5089b9C7983838f61f23aCF::$settings);
    e2d73953a5089b9c7983838F61F23aCF::Bd24dc62845546C5DDF2397a8Fbb654b("bouquets_cache", e2D73953a5089B9c7983838F61f23acF::$Bouquets);
    e2d73953A5089B9c7983838F61F23ACF::BD24DC62845546C5dDF2397A8FbB654b("servers_cache", e2d73953A5089b9c7983838f61F23aCf::$StreamingServers);
    @unlink($D3b211a38e2eb607ab17f4f6770932e5);
} else {
    exit(0);
}
