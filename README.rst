Poor man's PHP chroot
=====================
Following guide is for apache2 + CGI but it might work with FastCGI as well.

#. ``make``
#. ``sudo make install``
#. Copy chrut.php somewhere outside the intended chroot directory and alter
   it to your chroot directory and UID/GID needs.
#. Create ``/etc/php5/cgi/php.ini-chrut`` with directive ``auto_prepend_file``
   set to ``/someoutsidechroot/chrut.php``.
#. Configure apache::

    AddType application/x-httpd-php .php
    AddHandler php5-cgi .php
    SetEnv PHPCFG_EXE /usr/lib/cgi-bin/php5
    SetEnv PHPCFG_CFG /etc/php5/cgi/php.ini-chrut
    Action php5-cgi /cgi-bin/php_cfg

#. Restart apache.
