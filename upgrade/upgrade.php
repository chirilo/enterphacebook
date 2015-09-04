<?php
/**
 * Open Source Social Network
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.org>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
//upgrade proccess 
$upgrading = dirname(dirname(__FILE__)). '/_upgrading_process';
file_put_contents($upgrading, 1);

require_once(dirname(dirname(__FILE__)) . '/system/start.php');
//redirect user after all upgrades
if(ossn_trigger_upgrades()){
	 ossn_kill_upgrading();
	 redirect('administrator');
}
