<?php
/*
  osCommerce Online Merchant $osCommerce-SIG$
  Copyright (c) 2010 osCommerce (http://www.oscommerce.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License v2 (1991)
  as published by the Free Software Foundation.
*/

  use osCommerce\OM\OSCOM;
  use osCommerce\OM\Registry;

// HPDL to delete ///////
  define('PAGE_PARSE_START_TIME', microtime());
  define('PROJECT_VERSION', 'osCommerce Online Merchant $osCommerce-SIG$');
  $request_type = (isset($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on')) ? 'SSL' : 'NONSSL';
////////////////////

  define('OSCOM_TIMESTAMP_START', microtime());

  error_reporting(E_ALL | E_STRICT);

  define('OSCOM_BASE_DIRECTORY', dirname(__FILE__) . '/osCommerce/OM/');

  require(OSCOM_BASE_DIRECTORY . 'SplClassLoader.php');
  $classLoader = new SplClassLoader('osCommerce\OM');
  $classLoader->register();

  OSCOM::initialize();

  require(OSCOM::BASE_DIRECTORY . 'Site/' . OSCOM::getSite() . '/templates/' . Registry::get('Template')->getCode() . '.php');

//  require('includes/application_bottom.php');
?>
