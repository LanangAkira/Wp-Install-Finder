#!/usr/bin/php
<?php
@ini_set('log_errors',0);
@ini_set('display_errors', 0);

system("clear");

function head() {
	echo "## Mass Wp-Install Finder | By UNKNOWN45 <3\nhttps://github.com/whoami-45";
}
head();

$wordlist = file_get_contents("wordlist.txt");
if (empty($wordlist) && filesize($wordlist) == "0") {
	echo "\nWordlist Kosong !!!\n";
	exit();
}
if (isset($argv[1])) {
	$tod = $argv[1];
} else {
	echo "\n\nUsage : php ".$argv[0]." list.txt\n";
	exit();
};
$list = file_get_contents($tod);
if (!empty($list)) {
	$url = explode("\n", $list);
	$wordlists = explode("\n", $wordlist);
	echo "\n\n";
	foreach ($wordlists as $wl) {
		foreach ($url as $urls) {
			$gabung = $urls."/".$wl;
			$gabung = str_replace("/////", "/", $gabung);
			$gabung = str_replace("////", "/", $gabung);
			$gabung = str_replace("///", "/", $gabung);
			$gabung = str_replace("//", "/", $gabung);
			$gabung = str_replace("https:/", "https://", $gabung);
			$gabung = str_replace("http:/", "http://", $gabung);
			$ekse = shell_exec("curl -Lsk --ipv4 ".$gabung." --max-time 7 | grep -e 'Unknown error'");
			if (!empty($ekse)) {
				echo "[\e[1;32;48mFound\e[0m] ".$gabung."\n";
				file_put_contents("found.txt", $gabung."\n", FILE_APPEND);
			} else {
				echo "[\e[0;31;48mNot Found\e[0m] ".$gabung."\n";
			}
		}
	}
} else {
	system("clear");
	echo "File Not Found !\n";
	exit();
}
?>
	echo "File Not Found !\n";
	exit();
}
?>
