#!/bin/bash
sed -i "s/#ips/set \$php_fpm_ip_7 $MLP_PHP7_PORT_9000_TCP_ADDR;\n set \$php_fpm_ip_5_6 $MLP_PHP5_6_PORT_9000_TCP_ADDR;\n set \$php_fpm_ip_5_5 $MLP_PHP5_5_PORT_9000_TCP_ADDR;\n set \$php_fpm_ip_hhvm $MLP_HHVM_PORT_9000_TCP_ADDR; /g" /etc/nginx/conf.d/php.loc
sed -i "s/#include/include conf.d\/php.loc;/g" /etc/nginx/conf.d/default.conf;