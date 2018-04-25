
**This is Full Algorithm on Detection of Real IP behind Cloudflare**

![Cloudflare Failed](https://image.ibb.co/c1vw6x/cloudflare.png)
1) subdomain bruteforce ( https://github.com/aboul3la/Sublist3r ) and https://github.com/appsecco/bugcrowd-levelup-subdomain-enumeration &
https://github.com/Elsfa7-110/Sfa7sub

2) sslyzer ( get ssl cert and info about other domains and extract their ip comparing with our domain in order to get real ip)
https://github.com/iSECPartners/sslyze

3) send email to wrong dddddd@domain.com email and wait for answer, get info about header and extract ip

4) dns enumiration https://github.com/mandatoryprogrammer/cloudflare_enum (works fine, extracts csv) ( 1038@p33.org login and 1038@p33.org password)

5) LIST of cloudflare ns http://www.crimeflare.info/cfnsdump.html , 
http://www.crimeflare.com/cfs.html get info about this bases and work with it ( use to resolve real ip)

6)  Can be helpful https://github.com/SageHack/cloud-buster and https://github.com/hasanemrebeyy/cloudflare-resolver

7) Get domain history of ip changing https://github.com/neocorv/rdns.py , extract it and check

8) access https://webresolver.nl/tools/cloudflare this website and check their api, after integrate it as long as they having database for resolvation

9) https://github.com/m0rtem/CloudFail look here in order to see if we missed something ( DNSDumpster.com )

10) Go to https://www.netcraft.com/ and see domain history - we can find it from there. ( https://github.com/PaulSec/API-netcraft.com )

11) https://github.com/danneu/cloudflare-ip cloudflare range

12) CHECK dns of subdomain - it can give us real DNS and IP
http://support.simpledns.com/kb/a196/how-to-delegate-a-sub-domain-to-other-dns-servers.aspx

13) https://builtwith.com/relationships/lol.com lookup other domains,get their IP and try this ip on interested domain

find all alternative services as cloudflare and list them in issues so they will be added.

Example of **OK** header from cloudflare:

(lol.com)

HTTP/1.1 200 OK
Date: Thu, 27 Jul 2017 23:31:20 GMT
Content-Type: text/html; charset=utf-8
Connection: keep-alive
Set-Cookie: __cfduid=d842d0725fb36d19e5e633eb675960d5e1501198280; expires=Fri, 27-Jul-18 23:31:20 GMT; path=/; domain=.lol.com; HttpOnly
Last-Modified: Sun, 18 Mar 2012 16:28:13 GMT
Vary: Accept-Encoding
Server: cloudflare-nginx
CF-RAY: 38536443d38f56bd-IAD

**BAD** request example (ebanoe.it)

HTTP/1.1 503 Service Temporarily Unavailable
Date: Thu, 27 Jul 2017 23:45:55 GMT
Content-Type: text/html; charset=UTF-8
Connection: close
Set-Cookie: __cfduid=d6061892dab2231d5c139577a0719f9101501199155; expires=Fri, 27-Jul-18 23:45:55 GMT; path=/; domain=.ebanoe.it; HttpOnly
X-Frame-Options: SAMEORIGIN
Cache-Control: no-cache
X-Content-Type-Options: nosniff
Server: cloudflare-nginx
CF-RAY: 385379a323175693-IAD

headers send using dog.py ( recondog)
