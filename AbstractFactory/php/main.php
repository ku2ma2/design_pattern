<?php

if (!isset($argv) || count($argv) != 2) {
    echo "Usage: php main.php classname_of_concretefactory\n";
    echo "  Exapmple: php main.php '\\listfactory\\ListFactory'\n\n";
}

require_once "factory/Factory.php";

$factory = \factory\Factory::getFactory($argv[1]);

// リンクの作成
$asahi = $factory->createLink("朝日新聞", "http://www.asahi.com");
$yomiuri = $factory->createLink("読売新聞", "http://www.yomiuri.co.jp");
$us_yahoo = $factory->createLink("Yahoo!", "http://www.yahoo.com");
$jp_yahoo = $factory->createLink("Yahoo!Japan", "http://www.yahoo.co.jp");
$excite = $factory->createLink("Excite", "http://www.excite.com");
$google = $factory->createLink("Google", "http://www.google.com");

$traynews = $factory->createTray("新聞");
$traynews->add($asahi);
$traynews->add($yomiuri);

$trayyahoo = $factory->createTray("Yahoo!");
$trayyahoo->add($us_yahoo);
$trayyahoo->add($jp_yahoo);

$traysearch = $factory->createTray("サーチエンジン");
$traysearch->add($trayyahoo);
$traysearch->add($excite);
$traysearch->add($google);

$page = $factory->createPage("LinkPage", "お名前氏名");
$page->add($traynews);
$page->add($traysearch);
$page->output();
