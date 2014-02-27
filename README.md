Update 2014-02-27: Module discontinued.
=======================================

pl_PL, de_DE, ja_jP and ru_RU translations are now merged
into [ZF-Commons/ZfcUser] master branch :-) 

Translation continues [there](https://github.com/ZF-Commons/ZfcUser).



WebsafeZfModZfcUserI18nDeDe
================================================================================

German **de_DE** translation / language pack module for the [ZF-Commons/ZfcUser]
module.

Deutsche Übersetzung / Sprachdatei Modul für das [ZF-Commons/ZfcUser] Modul.

* * *


 + [Installation](#installation)
 + [Configuration](#configuration)
 + [Updating](#updating)
 + [Contributing](#contributing)
 + [Compiling](#compiling-po-files-to-mo-files)


* * *


Installation
--------------------------------------------------------------------------------

Chdir into Your projects root directory (where `composer.json` resides)
and run the following command:

~~~~ bash
composer require websafe/zf-mod-zfc-user-i18n-de-de:dev-master --prefer-dist
~~~~



Configuration
--------------------------------------------------------------------------------

### Enabling the language pack module in Your ZF2 application

In `config/application.conf.php` add `WebsafeZfModZfcUserI18nDeDe` after 
`ZfcUser`:

~~~~ php
<?php
return array(
    'modules' => array(
        // ...
        'ZfcUser',
        'WebsafeZfModZfcUserI18nDeDe',
        // ...
    ),
    // ...
);
~~~~



#### Set the locale

This step is not really required - it depends on how the locale is initialized
in Your application. 

In `config/global.conf` or `module/Application/config/module.conf.php` add:

~~~~ php
    // ...
    'translator' => array(
        'locale'  => 'de_DE',
        // ...
    ),
    // ...
~~~~



Updating
--------------------------------------------------------------------------------

Chdir into projects root directory (where `composer.json` resides)
and run the following commands:

~~~~ bash
rm -rf ~/.composer/cache/files/websafe/zf-mod-zfc-user-i18n-de-de/
composer update websafe/zf-mod-zfc-user-i18n-de-de
~~~~

The `rm -rf ...` part is needed when the module was installed with 
`--prefer-dist`. Without cleaning up the cache before installing - [Composer]
will probably stick to a cached version.



Contributing
--------------------------------------------------------------------------------

If You want to help with the German translation, just [edit de_DE.po] located
in `./language` and after all send a pull request. When You're not familiar
with editing `.po` files - simply [report an issue].



Compiling .po files to .mo files
--------------------------------------------------------------------------------

There's no need to compile `.po` files after the installation or before sending 
pull requests, but if you modify the `.po` file locally, recompile it by 
executing the following command in this modules root directory:

~~~~ bash
msgfmt -cv -o language/de_DE.mo language/de_DE.po
~~~~



[ZF-Commons/ZfcUser]: https://github.com/ZF-Commons/ZfcUser "ZfcUser is a user registration and authentication module for Zend Framework 2."
[edit de_DE.po]: https://github.com/websafe/zf-mod-zfc-user-i18n-de-de/edit/master/language/de_DE.po
[report an issue]: https://github.com/websafe/zf-mod-zfc-user-i18n-de-de/issues/new
[Composer]: http://getcomposer.org/ "Dependency Manager for PHP"
