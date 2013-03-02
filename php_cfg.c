// @license: public domain
// @author: david@siroky.cz
// This is a CGI wrapper for PHP to provide other configuration file then the default.

#include <unistd.h>
#include <stdlib.h>
#include <stdio.h>

int main(int argc, char **argv)
{
  char *phpexe = getenv("PHPCFG_EXE"); // original executable
  char *phpcfg = getenv("PHPCFG_CFG"); // new configuration file
  if ((phpexe == NULL) || (phpcfg == NULL))
  {
    printf("Content-type: text/html\n\ncfgerror\n%s\n%s", phpexe, phpcfg);
    return 0;
  }
  execl(phpexe, phpexe, "-c", phpcfg, NULL);
  return 0;
}
