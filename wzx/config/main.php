<?php
define('localaddress', "http://rhcom.cn/wzx/");
define('ALLADDRESS', str_replace('\\','/',realpath('../'.dirname(__FILE__).'/'))."/");
define('NEWSPATH', str_replace('\\', '/', 'news'));
define('CSSPATH', str_replace('\\', '/', ALLADDRESS.'css'));
define('JSPATH', str_replace('\\', '/', ALLADDRESS.'js'));
define('IMGPATH', str_replace('\\', '/', ALLADDRESS.'img'));
 ?>