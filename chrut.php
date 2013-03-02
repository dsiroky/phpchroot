<?
// @license: public domain
// @author: david@siroky.cz

$t = posix_getpwnam("alice");
$req_uid = $t["uid"];
$t = posix_getgrnam("alice");
$req_gid = $t["gid"];
chroot("/var/www");
posix_setuid($req_uid);
posix_setgid($req_gid);

//echo "<!--chrut-->";

?>
