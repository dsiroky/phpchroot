<?
// @license: public domain
// @author: david@siroky.cz

$user = "alice";
$group = "alice";
$root = "/var/www";

$t = posix_getpwnam($user);
$req_uid = $t["uid"];
$t = posix_getgrnam($group);
$req_gid = $t["gid"];
chdir($root);
chroot($root);
posix_setuid($req_uid);
posix_setgid($req_gid);

//echo "<!--chrut-->";

?>
