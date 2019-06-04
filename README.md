Network-test-server ![License MIT](https://go-shields.herokuapp.com/license-MIT-blue.png)
===============
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


## Author
Maintainer Stellan Eriksson <micro_se@hotmail.com>



## A simple how to

2019-06-04 Docker.io added login
To be able to download images from https://www.docker.com/ you need to register a account (it's free)
After created a account you can login true a console with the command:
docker login -u <Username> -p <Password>

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



## License
===============
Copyright (c) 2019 Stellan Eriksson <micro_seh@hotmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
