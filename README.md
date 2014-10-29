HTML minify
=============================
Enables Smarty 'trimwhitespace' Outputfilter to minify HTML Code

Installation
------------

1.    Download
 * [download zip](https://github.com/alfredbez/ab_htmlmin/archive/master.zip) and extract zip
 * OR
 * download using git clone ```git clone https://github.com/alfredbez/ab_htmlmin.git```
2.    move folder 'ab_htmlmin' to your 'modules'-folder
3.    Activate module in the OXID backend

### Install via composer
download composer https://getcomposer.org/download/

1. use oxid with composer: ```git clone https://github.com/robinlehrmann/oxideshop_ce.git```
2. add the module to your composer.json
 * via command line ```composer.phar require alfredbez/ab_htmlmin dev-master```
 * OR
 * manually
````
{
    "require": {
        "alfredbez/ab_htmlmin": "dev-master"
    }
}
```

----

After uploading the module, your directory should look like this:

```
├── index.php
├── bootstrap.php
├── config.inc.php
├── ...
└── modules
    └── ab_htmlmin
        ├── README.md
        ├── metadata.php
        └── models
```
