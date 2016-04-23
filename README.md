# Kint debugging helper plugin for Opencart 1.5.x (VQMOD)

Plugin adds Kint (https://github.com/raveren/kint)  debugging tool to Opencart1.5.x.

Requirements
---

* Vqmod.
* PHP 5

Installation
---

1. Download plugin.
2. Upload contents of `/upload/` folder to Opencart root.
3. Change configuration file to set allowed debugging IP addresses.

> By default, Kint debug output will be visible, if Client computer IP address is:

> `127.0.0.1`

> `192.168.0.XXX`

> `192.168.1.XXX`

Add or remove IP addresses from
`system/library/helper/kint/config.php`


Uninstall
---

Be aware not to leave debugging functions in Production mode.
Otherwise - if You will remove Kint from Production server, Opencart will fail with Fatal error for "non-existing functions".

You can always turn off any Kint output by setting:

`$_kintSettings['enabled'] = false;`

in `system/helper/kint/config.php`.

If You really need to remove it,

1. Delete `vqmod/xml/debug---kint-oc.xml` file
2. Delete `system/library/helper/kint/` folder.
