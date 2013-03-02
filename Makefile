all: php_cfg

php_cfg: php_cfg.c
	gcc php_cfg.c -o php_cfg

install: php_cfg
	cp php_cfg /usr/lib/cgi-bin
	chown root:root /usr/lib/cgi-bin/php_cfg
	chmod u+s /usr/lib/cgi-bin/php_cfg
