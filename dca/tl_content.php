<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2009
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['siximages'] = '{type_legend},type,headline;{source_legend},six1,six2,six3,six4,six5,six6;{image_legend},sixThumb,sixFull,sixBorder,sixZoom;{protected_legend:hide},protected;{expert_legend:hide},guests,align,space,cssID';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['six1'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['six1'],
	'inputType'			=> 'fileTree',
	'eval'				=> array('mandatory'=>true, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'jpg,jpeg,png,gif'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['six2'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['six2'],
	'inputType'			=> 'fileTree',
	'eval'				=> array('mandatory'=>true, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'jpg,jpeg,png,gif'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['six3'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['six3'],
	'inputType'			=> 'fileTree',
	'eval'				=> array('mandatory'=>true, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'jpg,jpeg,png,gif'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['six4'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['six4'],
	'inputType'			=> 'fileTree',
	'eval'				=> array('mandatory'=>true, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'jpg,jpeg,png,gif'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['six5'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['six5'],
	'inputType'			=> 'fileTree',
	'eval'				=> array('mandatory'=>true, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'jpg,jpeg,png,gif'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['six6'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['six6'],
	'inputType'			=> 'fileTree',
	'eval'				=> array('mandatory'=>true, 'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'jpg,jpeg,png,gif'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['sixThumb'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['sixThumb'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'multiple'=>true, 'size'=>2, 'maxlength'=>5, 'rgxp'=>'digits', 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['sixFull'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['sixFull'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'multiple'=>true, 'size'=>2, 'maxlength'=>5, 'rgxp'=>'digits', 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['sixBorder'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['sixBorder'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'multiple'=>true, 'size'=>2, 'maxlength'=>5, 'rgxp'=>'digits', 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['sixZoom'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['sixZoom'],
	'exclude'			=> true,
	'default'			=> 'right',
	'inputType'			=> 'radio',
	'options'			=> array('right', 'left'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content']['sixZoom'],
	'eval'				=> array('mandatory'=>true, 'tl_class'=>'w50'),
);
