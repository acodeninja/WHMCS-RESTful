<?php

/**
 * RESTful WHMCS
 *
 * A module to provide a RESTful interface to the WHMCS billing system
 *
 * @author Lawrence Goldstien
 * @package restful-whmcs
 * @version 0.1
 * @since 0.1
 */

function restful_config() {
        
    $configarray = array(
        "name" => "RESTful WHMCS",
        "description" => "This module provides a RESTful interface to the client side of WHMCS.",
        "version" => "0.1",
        "author" => "<a href='https://github.com/lgoldstien/WHMCS-RESTful'>Lawrence Goldstien</a>",
        "language" => "english",
        "fields" => array(
            "use_htaccess" => array ("FriendlyName" => "Use htaccess", "Type" => "yesno", "Description" => "Enable to use fully RESTful urls. Requires changes to the www root .htaccess file.", ),
        )
    );
    return $configarray;
}

function restful_activate() {

    # Return Result
    return array('status'=>'success','description'=>"The module has been activated successfully!");
    return array('status'=>'error','description'=>'There has been a problem.');

}

function restful_deactivate() {
        
    # Return Result
    return array('status'=>'success','description'=>'The module has been deactivated successfully! (You are no longer secure)');
    return array('status'=>'error','description'=>'There has been a problem, contact support@ipgeek.co.uk.');

}

function restful_output($vars) {

    $modulelink = $vars['modulelink'];
    $version = $vars['version'];

    $LANG = $vars['_lang'];
    
    echo "Admin area";

}

function restful_sidebar($vars) {

    $modulelink = $vars['modulelink'];
    $version = $vars['version'];
    $LANG = $vars['_lang'];
    
    $sidebar = '<span class="header">RESTful API</span>
    			<ul class="menu">
	                <li><a href="https://github.com/lgoldstien/WHMCS-RESTful" target="_blank">Github Page</a></li>
    			</ul>
    ';
    
    return $sidebar;

}
                
function restful_clientarea($vars) {

    $modulelink = $vars['modulelink'];
    $version = $vars['version'];
    $LANG = $vars['_lang'];
        
    return array(
        'pagetitle' => 'RESTful API',
        'forcessl' => true,
        'templatefile' => 'templates/default',
        'requirelogin' => false,
        'vars' => array(
            'lang' => $LANG,
        ),
    );
        
}