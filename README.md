# Kint debugging helper plugin for Opencart (VQMOD)

Plugin adds Kint (https://github.com/raveren/kint)  debugging tool to Opencart with configuration.


Installation
---

1. Download plugin 
2. Upload contents of `/upload/` folder to Opencart root
3. Change configuration file to set allowed debugging IP addresses

> By default, Kint debug output will be visible, if Client computer IP address is:

> `127.0.0.1`

> `192.168.0.XXX`  

> `192.168.1.XXX`

Add or remove IP addresses from
`system/library/helper/kint/config.php`
