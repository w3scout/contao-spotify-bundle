<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2013
 * @author     Leo Feyer <https://contao.org>
 * @package    Listing
 * @license    LGPL
 * @filesource
 */

namespace W3Scout\Spotify;

/**
 * Class ModuleSpotifyButton
 *
 * @copyright  Darko Selesi
 * @author     Darko Selesi <https://w3scouts.com>
 * @package    spotify
 */
class ModuleSpotifyButton extends \Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_spotify_button';


	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
            /** @var \BackendTemplate|object $objTemplate */
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['spotify'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
		}

		return parent::generate();
	}


	/**
	 * Generate the module
	 */
	protected function compile()
	{
        $strType = $this->w3s_spotify_type;

        if($strType == '' || $strType == null) {
            trigger_error('No Spotify button type selected.', E_NOTICE);
            return false;
        }

        if($strType == 'uri') {
            $this->Template->play = $this->w3s_spotify_btn_uri;
        }
        else {
            $arrTracks = deserialize($this->w3s_spotify_btn_trackset);
            $this->Template->play = 'spotify:trackset:PREFEREDTITLE:'.implode(',', $arrTracks);
        }

        $this->Template->view       = $this->w3s_spotify_btn_view;
		$this->Template->theme      = $this->w3s_spotify_btn_theme;
        $this->Template->width      = $this->w3s_spotify_btn_width ? $this->w3s_spotify_btn_width : null;
        $this->Template->height     = $this->w3s_spotify_btn_height ? $this->w3s_spotify_btn_height : null;

	}

}
