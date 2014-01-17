<?php

$fp = fopen('/public_html/v3.demo.az.mn/722020/data/private/tmp.php', 'w');
fwrite($fp, date("Y-m-d H:i:s"));
fclose($fp);

system("git add *");
system("git commit -am '..'");
system("git pull origin master");
system("git push origin master");
