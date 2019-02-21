<?php

include '../src/Phois/Whois/Whois.php';

$domainx = $_GET['domain'];

$domain = new Phois\Whois\Whois($domainx);

$re_uk = '/\b((?=ns1.).*(?=\s\d)).*((?=ns2.).*(?=(?<=.[a-zA-Z]).*WHOIS lookup))/m';
$re_com = '/\b((?=NS1).*(?=Name Server:)).*((?=NS2).*(?=DNSSEC))/m';

if (preg_match('/(.uk)/m', $domainx)) {
    $re = $re_uk;
} elseif (preg_match('/(.com)/m', $domainx)) {
    $re = $re_com;
    $env_com = "1";
} else {
    echo "<pre>";
    echo "Code failed at TLD validation..";
    echo "This typically means the TLD is either incorrectly spelt or is not supported...";
    echo "</pre>";
}

$whois_answer = $domain->info();
$str = $whois_answer;

/*echo $str;*/

$stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $str);
preg_match_all($re, $stripped, $matched, PREG_PATTERN_ORDER);

/*echo "<pre>";*/
/*var_dump($matched);*/

if ($env_com == "1") {
    echo $matched[1][0], $matched[2][0] . "\n";
} else echo $matched[1][0] . " " . $matched[2][0] . "\n";

/*echo "</pre>";*/

?>