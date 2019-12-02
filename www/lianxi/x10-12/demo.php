<?php

echo disk_free_space('c:').'<br>';
echo disk_total_space('c:');
// mkdir('./laowang');
// mkdir('./laowang1/laoliu/canglaoshi/xiaoze',0777,true);
// rmdir('./laowang');
// rmdir('./laowang');
touch('houzi.avi');
unlink('./houzi.avi');