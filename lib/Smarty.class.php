<?php

// +----------------------------------------------------------------------+
// | PHP version 4.2.1                                                    |
// +----------------------------------------------------------------------+
// | Copyright (c) 2002, 1998, Kemper & Schlomski GmbH                    |
// +----------------------------------------------------------------------+
// | This source file is subject to version 1.0 of the K&S license, that  |
// | is bundled with this package in the file LICENSE, and is available   |
// | at through the world-wide-web at http://www.myebiss.de/LICENSE.txt.  |
// | If you did not receive a copy of the K&S license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@myebiss.de so we can mail you a copy immediately.            |
// +----------------------------------------------------------------------+
// | Version: 0.5                                                         |
// | last Version from : 10.7.2002                                        |
// +----------------------------------------------------------------------+
// | Authors: Bertrand DUNOGIER <bdunogier@wanadoo.fr>                    |
// |          Marcel Guettler <guettler@ynnor.de>              |
// +----------------------------------------------------------------------+
// | Beschreibung:                                                        |
// | Erweiterung der Smarty- Klasse. Es werden keine Verzeichnisse mehr   |
// | erstellt und init der Pfade wird gesetzt.                            |
// | http://marc.theaimsgroup.com/?l=smarty-general&m=102363432130628&w=2 |
// +----------------------------------------------------------------------+

/*
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */


/*
 * This file creates SmartySingleDir, a smarty variant using only
 * one directory level for all magic names
 */
define('WWW_DOCUMENT_ROOT', '/opt/www/jquerykurs');
$_POST['SMARTYGLOBAL'] = array();
require_once("/usr/share/php/smarty/Smarty.class.php");

class SmartySingleDir extends Smarty
{
			var $template_dir; // path if you have common templates or only one dir
			var $compile_dir; // path for template caching (parsed/compiled templates) 
			var $config_dir;  // config template constants ando other template related stuff
			var $plugins_dir; // path relative from smarty.class.php !!!
			var $cache_dir;   // path for output buffering results (parsed and rendered)
			var $debug_tpl;	// a debuging template
			var $php_handling;  // I don't know about ?!?!
		
		function SmartySingleDir () {
		
			$this->template_dir = WWW_DOCUMENT_ROOT."/templates/";
			$this->compile_dir  = WWW_DOCUMENT_ROOT."/templates/complied";
			$this->cache_dir    = WWW_DOCUMENT_ROOT."/templates/cache";
			$this->php_handling = SMARTY_PHP_REMOVE;
			$this->plugins_dir = "plugins";
							
		}
				
	/**
	*setzt eine "Globale" variable, die dann in jedem Template existiert
	* @return Array Modul
	*/
	function setSMARTYGlobalParam($param) {
		array_push($_POST['SMARTYGLOBAL'],$param);
		return true;
	}
	/**
	*	zuweisung von Globalen Template variablen, die in allen untertemplates verfügbar sein sollen
	* 
	*/
	function assignAllGlobalSMARTY() {
		while (list($k,$v) = each ($_POST['SMARTYGLOBAL'])) {
			$this->mysmarty->assign($v[0],$v[1]);
		}
	}

	function assignAllGlobalSMARTY2(&$smartyobj) {
		
	while (list($k,$v) = each ($_POST['SMARTYGLOBAL'])) {
			$smartyobj->assign($v[0],$v[1]);
		}
	reset ($_POST['SMARTYGLOBAL']);	 //zeiger wieder auf anfang stellen!!!
	return;
	}
		
	function Smarty_debugging () {
		$this->debugging = true;	
	}
/*======================================================================*\
    Function: _get_auto_base
    Purpose:  Get a base name for automatic files creation
\*======================================================================*/
    function _get_auto_base($auto_base, $auto_source)
    {
        $source_md5 = md5($auto_source);

        $res = $auto_base . DIR_SEP .  $source_md5;

        return $res;
    }

/*======================================================================*\
    Function: _get_auto_filename
    Purpose:  get a concrete filename for automagically created content
\*======================================================================*/
    function _get_auto_filename($auto_base, $auto_source, $auto_id = null)
    {	$res = $this->_get_auto_base($auto_base, $auto_source) .
                '-' . md5($auto_id) . '.php';

        return $res;
    }

/*======================================================================*\
    Function: _rm_auto
    Purpose: delete an automagically created file by name and id
\*======================================================================*/
    function _rm_auto($auto_base, $auto_source = null, $auto_id = null)
    {
        if (!is_dir($auto_base))
          return false;

        if (!isset($auto_source)) {
            $res = $this->_rmdir($auto_base, 0);
        } else {
            if (isset($auto_id)) {
                $tname = $this->_get_auto_filename($auto_base, $auto_source, $auto_id);
                $res = is_file($tname) && unlink( $tname);
            } else {
                $tname = $this->_get_auto_base($auto_base, $auto_source);
                $tdir  = dirname( $tname );
                $tbase = basename( $tname );

                $dh = opendir( $tdir );
                while( $entry = readdir( $dh ) ) {
                 if( substr( $entry, 0, strlen( $tbase ) ) == $tbase )
                   unlink( $tdir . DIR_SEP . $entry );
                }
                $res = true;
            }
        }

        return $res;
    }
}
//########################################################

function remove_dw_comments($tpl_source, &$smarty)
{
	return preg_replace("/<!--#.*-->/U","",$tpl_source);
}

/*
globale Tage werden in allen Dateinen eingesetzt
*/
function assign_global_tags($tpl_source, &$smarty)
{ 
	while (list($k,$v) = each ($_POST['SMARTYGLOBAL'])) {
			$smarty->assign($v[0],$v[1]);
		}
	reset ($_POST['SMARTYGLOBAL']);	 //zeiger wieder auf anfang stellen!!!
	return;
}



?>
