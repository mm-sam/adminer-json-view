<?php
function adminer_object() {
    // required to run any plugin
    include_once(dirname(__DIR__).'/src/plugins/plugin.php');
    
    // autoloader
    include_once(dirname(__DIR__).'/src/plugins/json-view.php');
    
    $plugins = array(
        new AdminerJsonView,
    );
    
    /* It is possible to combine customization and plugins:
    class AdminerCustomization extends AdminerPlugin {
    }
    return new AdminerCustomization($plugins);
    */
    
    return new AdminerPlugin($plugins);
}

// include original Adminer or Adminer Editor
include_once(dirname(__DIR__).'/src/adminer.php');