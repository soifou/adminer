<?php

if(is_dir(dirname(__FILE__).DIRECTORY_SEPARATOR.'plugins'))
{
	function adminer_object()
    {
	    // required to run any plugin
	    include_once "./plugins/plugin.php";

	    // autoloader
	    foreach (glob("plugins/*.php") as $filename) {
	        include_once "./$filename";
	    }

        // load custom DB servers
        $servers = array('localhost');
        if (file_exists("./private/servers.php")) {
            include_once "./private/servers.php";
            $servers = DBServers::$servers;
        }

	    $plugins = array(
	        // new AdminerCheckboxSelect(),
	        // new AdminerDatabaseHide(),
	        // new AdminerDumpAlter(),
	        new AdminerDumpBz2(),
	        new AdminerDumpDate(),
	        new AdminerDumpJson(),
	        new AdminerDumpPhp(),
	        new AdminerDumpXml(),
	        new AdminerDumpZip(),
	        // new AdminerEditCalendar(),
	        new AdminerEditForeign(),
	        new AdminerEditTextarea(),
	        new AdminerEmailTable(),
	        new AdminerEnumOption(),
	        new AdminerFileUpload("data/"),
	        new AdminerForeignSystem(),
	        // new AdminerFrames(),
	        new AdminerJsonColumn(),
	        new AdminerLinksDirect(),
            // new AdminerLoginServers(
            //     $servers // get all your private servers list (see private/servers.php.dist)
            // ),
            new AdminerSelect2(),
            new AdminerPerfectScrollbar(),
	        // new AdminerLoginTable(),
			// new AdminerMasterSlave(),
			new AdminerReadableDates(),
	        new AdminerSlugify(),
	        new AdminerSqlLog(
                "sql" // folder where to store sql files
            ),
            // Some database system does not support password (ie. sqlite),
            // However, Adminer 4.6.3 and newer does not support accessing a database without a password.
            // See: https://www.adminer.org/en/password/
            // For this kind of system, login with credentials: root / fake
            new AdminerLoginPasswordLess(
                password_hash("fake", PASSWORD_DEFAULT)
            ),
            // new AdminerTableStructure(),
	        // new AdminerTablesFilter(),
	        // new AdminerTinymce(),
	        // new AdminerTranslation(),
	        new AdminerVersionNoverify(),
	        // new AdminerWymeditor(),
	        new AdminerRestoreMenuScroll(),
	        // new AdminerTablesHistory(),
	        new FasterTablesFilter(),
	    );

	    /* It is possible to combine customization and plugins:
	    class AdminerCustomization extends AdminerPlugin {
	    }
	    return new AdminerCustomization($plugins);
	    */

	    return new AdminerPlugin($plugins);
	}
}

// include original Adminer or Adminer Editor
include dirname(__FILE__).DIRECTORY_SEPARATOR.'adminer.php';
