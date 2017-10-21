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


/**
 * Add palettes to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['__selector__'][] = 'w3s_spotify_type';
$GLOBALS['TL_DCA']['tl_module']['palettes']['spotify']  = '{title_legend},name,headline,type;{config_legend},w3s_spotify_type;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['subpalettes']['default'] = '';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['w3s_spotify_type_uri']      = 'w3s_spotify_btn_uri,w3s_spotify_btn_theme,w3s_spotify_btn_width';
$GLOBALS['TL_DCA']['tl_module']['subpalettes']['w3s_spotify_type_trackset'] = 'w3s_spotify_btn_trackset,w3s_spotify_btn_theme,w3s_spotify_btn_view,w3s_spotify_btn_height';



/**
 * Add fields to tl_module
 */

$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_spotify_type'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['w3s_spotify_type'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('uri', 'trackset'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
    'sql'                     => "varchar(10) NOT NULL default ''",
    'eval'                    => array('mandatory'=>true, 'includeBlankOption'=>true, 'submitOnChange'=>true)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_spotify_btn_uri'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['w3s_spotify_btn_uri'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'sql'                     => "text NULL",
    'eval'                    => array('mandatory'=>true)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_spotify_btn_trackset'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['w3s_spotify_btn_trackset'],
    'exclude'                 => true,
    'inputType'               => 'listWizard',
    'sql'                     => "text NULL",
    'eval'                    => array('mandatory'=>true, 'allowHtml'=>false)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_spotify_btn_width'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['w3s_spotify_btn_width'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'sql'                     => "varchar(255) NOT NULL default ''",
    'eval'                    => array('tl_class'=>'w50', 'mandatory'=>false, 'maxlength'=>64)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_spotify_btn_height'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['w3s_spotify_btn_height'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'sql'                     => "varchar(255) NOT NULL default ''",
    'eval'                    => array('tl_class'=>'w50', 'mandatory'=>false, 'maxlength'=>64)
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_spotify_btn_theme'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['w3s_spotify_btn_theme'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('black', 'white'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
    'sql'                     => "varchar(5) NOT NULL default ''",
    'eval'                    => array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_module']['fields']['w3s_spotify_btn_view'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['w3s_spotify_btn_view'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('list', 'coverart'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
    'sql'                     => "varchar(8) NOT NULL default ''",
    'eval'                    => array('tl_class'=>'w50')
);

