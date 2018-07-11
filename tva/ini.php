<?php
/**
 * --------------------------------------------------
 * CORE PREDEFINED CONSTANTS
 * http://php.net/manual/fr/reserved.constants.php
 * --------------------------------------------------
 */
if( strtoupper( substr( PHP_OS, 0, 3 ) ) == 'WIN' ) : // If the version of the operating system (provided by the pre-defined constants PHP_OS) corresponds to a Windows kernel,
    if( !defined( 'PHP_EOL') ) : define( 'PHP_EOL', "\r\n" ); endif;
    if( !defined( 'DIRECTORY_SEPARATOR') ) : define( 'DIRECTORY_SEPARATOR', "\\" ); endif;
else :
    if( !defined( 'PHP_EOL') ) : define( 'PHP_EOL', "\n" ); endif;
    if( !defined( 'DIRECTORY_SEPARATOR') ) : define( 'DIRECTORY_SEPARATOR', "/" ); endif;
endif;

if( !defined( 'DS' ) )
    define( 'DS', DIRECTORY_SEPARATOR ); // Defines the folder separator connected to the system
/**  */



if( !defined( 'ABSPATH' ) )
    define( 'ABSPATH', __DIR__ . DS ); // Defines the root folder
if( !defined( 'VENDORPATH' ) )
    define( 'VENDORPATH', ABSPATH . 'vendor' . DS ); // Defines the path to the folder containing the third-party dependencies

    
define('TVA', array( 20, 5.5, 10.15));// defines differents constant