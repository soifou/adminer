<?php

declare(strict_types=1);

if(is_dir(dirname(__FILE__).DIRECTORY_SEPARATOR.'plugins')) {
    function adminer_object()
    {
        // Required to run any plugin
        include_once "./plugins/plugin.php";

        // Autoloader
        foreach (glob("plugins/*.php") as $filename) {
            include_once "./$filename";
        }

        $plugins = [
            new Adminer\DumpBz2(),
            new Adminer\DumpDate(),
            new Adminer\DumpJson(),
            new Adminer\DumpPhp(),
            new Adminer\DumpXml(),
            new Adminer\DumpZip(),
            new Adminer\EditForeign(),
            new Adminer\EditTextarea(),
            new Adminer\EnumOption(),
            new Adminer\ForeignSystem(),
            new Adminer\JsonColumn(),
            new Adminer\LinksDirect(),
            new Adminer\PerfectScrollbar(),
            new Adminer\ReadableDates(),
            new Adminer\Slugify(),
            new Adminer\SqlLog("sql"),
            // Some database system does not support password (ie. sqlite),
            // However, Adminer 4.6.3 and newer does not support accessing a database without a password.
            // See: https://www.adminer.org/en/password/
            // For this kind of system, login with credentials: root / fake
            new Adminer\LoginPasswordLess(
                password_hash("fake", PASSWORD_DEFAULT)
            ),
            new Adminer\VersionNoverify(),
            new Adminer\RestoreMenuScroll(),
            new Adminer\FasterTablesFilter(),
            new Adminer\StickyColumns('id', '', true),

            // new Adminer\Select2(),
            // new AdminerLoginTable(),
            // new AdminerTableStructure(),
            // new AdminerTablesHistory(),
        ];

        // Load custom DB servers
        // $servers = ['localhost'];
        // if (file_exists("./private/DBServer.php")) {
        //     include_once "./private/DBServer.php";
        //     $servers = User\DBServer::$servers;
        //     array_push($plugins, new Adminer\LoginServers($servers));
        // }

        /* It is possible to combine customization and plugins:
        class AdminerCustomization extends AdminerPlugin {}
        return new AdminerCustomization($plugins);
        */

        return new Adminer\AdminerPlugin($plugins);
    }
}

// include original Adminer or Adminer Editor
include dirname(__FILE__).DIRECTORY_SEPARATOR.'adminer.php';
