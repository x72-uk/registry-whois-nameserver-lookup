# registry-whois-nameserver-lookup


**Currently, *.co.uk, .uk, .org.uk and .com* domains have only been tested and the script is still in active devopment**

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

In order to ultilise this script, you will need to download and install the php-whois class created by @regru: https://github.com/regru/php-whois

Once downloaded, extract the `src/Phois/Whois` folder from the archive and install it on the root system of your webserver (/home/xxxx**/src/Phois/Whois/**)

I would recommend always storing this script above your website folder.

### Installing

Download `nsl.php` from this master.

Install the php script at the root of the website folder (/home/xxxx/**public_html**/ *OR* /var/www/vhosts/xxxx/**httpdocs**/).

To use the tool, visit your domain followed by the domain you wish to query (replacing my domain x72.uk):
```
https://x72.uk/nsl.php?domain=yourdomainhere
```

## Built With

* Visual Studio Code: (https://code.visualstudio.com/) - Programming software used.
* WinSCP: (https://winscp.net/eng/download.php) - Connection to the webserver to deploy changes.


## Acknowledgments

* **regru** for creating the php-whois class which allowed me to get reliable results:
- https://github.com/regru

## To-Do list

- Add comments to code
- Add screen-shots
- Add more TLD support *(Soon)*
- Add method if domain is invalid or incorrect
- Fix blank page on re-direct domains
- Finalise Google Sheets support
