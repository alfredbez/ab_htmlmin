<?php
/**
 * ab HTML minify
 * Copyright (C) 2014  Alfred Bez
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 */
class ab_htmlmin extends ab_htmlmin_parent {

    protected function _fillCommonSmartyProperties($oSmarty)
    {
        parent::_fillCommonSmartyProperties($oSmarty);
        $cfg = oxRegistry::getConfig();

        $aPluginsDir = $oSmarty->plugins_dir;
        $aPluginsDir[] = $cfg->getModulesDir()."/ab_htmlmin/smarty/plugins/";
        $oSmarty->load_filter('output' , 'trimwhitespace');

        $oSmarty->plugins_dir = $aPluginsDir;
    }
}
