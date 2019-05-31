# network-test-server
Docker pod with a simple webserver for network testing writen to Tele2

When you have different accounts and running pysical and cloud servers, having a lot of peronel that dont know how to login to pod's
you need a simple test server with a webgui that they can do test for ping, curl, traceroute, telnet.

Have been seraching for this but had to write a simple pod that could do this.

A Dockerfile that installs php:7.2-apache and the commands, starting up a Apache wwebserver

The catalog /src/app/ are copy in under /var/www/html/

index.php is the ping test to a ip address, show the 3 lines
curl.php make a curl request to a server and present te result by grabbing it.
telnet.php make a telent request to a server and port, show the result max 10 rows
traceroute.php make a 30 jump traceroute and present it.

Maintainer Stellan Eriksson <micro_se@hotmail.com>



A simple how to
----------------------------------------------
Download all files

To build the image:
docker build -t phpserver:v1 .

To start the pod:
docker run --rm -p 8080:80 testserver:v1

you will now see tha access log on the apache server
to get out ctrl + c

To see the pod name:
docker ps -all

To stop the pod:
docker stop <pod name>

To login to the pod with bash shell:
docker exec -i -t <pod name> bash
