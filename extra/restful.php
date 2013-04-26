<?php

/**
 * RESTful WHMCS
 *
 * The main routing page through which 
 *
 * @author Lawrence Goldstien
 * @package restful-whmcs
 * @version 0.1
 * @since 0.1
 */

define("CLIENTAREA",true);
define("FORCESSL",true);
 
require("init.php");

echo json_encode($_GET);
