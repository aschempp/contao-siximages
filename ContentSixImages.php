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
 * @author     Andreas Schempp <andreas@schempp.ch
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */


class ContentSixImages extends ContentElement
{

	protected $strTemplate = 'ce_siximages';
	
	
	protected function compile()
	{
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/siximages/html/siximages.js';
		
		$arrThumb = deserialize($this->sixThumb, true);
		$arrFull = deserialize($this->sixFull, true);
		$arrBorder = deserialize($this->sixBorder, true);
		
		$arrImages = array();
		
		for( $i=1; $i<=6; $i++ )
		{
			$arrImages[$i] = array
			(
				'src'		=> $this->getImage($this->{'six'.$i}, $arrThumb[0], $arrThumb[1]),
				'alt'		=> '',
				'link'		=> $this->getImage($this->{'six'.$i}, $arrFull[0], $arrFull[1]),
				'imgSize'	=> (' width="' . $arrThumb[0] . '" height="' . $arrThumb[1] . '"'),
				'width'		=> $arrFull[0],
				'height'	=> $arrFull[1],
			);
		}
		
		$this->Template->images = $arrImages;
		$this->Template->colWidth = $arrThumb[0];
		$this->Template->borderX = $arrBorder[0];
		$this->Template->borderY = $arrBorder[1];
		$this->Template->zoom = $this->sixZoom;
	}
}

