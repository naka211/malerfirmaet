<?php
/*
 * @package Joomla 1.5
 * @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 *
 * @component Phoca Gallery
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport('joomla.application.component.helper');

class PhocaGalleryRoute
{
	public static function getCategoriesRoute() {
		
		// TEST SOLUTION
		$app 		= JFactory::getApplication();
		$menu 		= $app->getMenu();
		$active 	= $menu->getActive();
		
		
		$activeId 	= 0;
		if (isset($active->id)){
			$activeId    = $active->id;
		}
		
		$itemId 	= 0;
		// 1) get standard item id if exists
		if (isset($item->id)) {
			$itemId = (int)$item->id;
		}
		
		$option			= $app->input->get( 'option', '', 'string' );
		$view			= $app->input->get( 'view', '', 'string' );
		if ($option == 'com_phocagallery' && $view == 'category') {
			if ((int)$activeId > 0) {
				// 2) if there are two menu links, try to select the one active
				$itemId = $activeId;
			}
		}
		
		$needles = array(
			'categories' => ''
		);
		
		$link = 'index.php?option=com_phocagallery&view=categories';

		if($item = PhocaGalleryRoute::_findItem($needles, 1)) {
			if(isset($item->query['layout'])) {
				$link .= '&layout='.$item->query['layout'];
			}
			
			// TEST SOLUTION
			if ((int)$itemId > 0) {
				$link .= '&Itemid='.(int)$itemId;
			}
			
			/*if (isset($item->id)) {
				$link .= '&Itemid='.$item->id;
			}*/
		};

		return $link;
	}
	
	public static function getFeedRoute($view = 'categories', $catid = 0, $catidAlias = '') {
			
		if ($view == 'categories') {
			$needles = array(
				'categories' => ''
			);
			$link = 'index.php?option=com_phocagallery&view=categories&format=feed';
		
		} else if ($view == 'category') {
			if ($catid > 0) {
				$needles = array(
					'category' => (int) $catid,
					'categories' => ''
				);
				if ($catidAlias != '') {
					$catid = (int)$catid . ':' . $catidAlias;
				}
				
				$link = 'index.php?option=com_phocagallery&view=category&format=feed&id='.$catid;
				
			} else {
				$needles = array(
				'categories' => ''
				);
				$link = 'index.php?option=com_phocagallery&view=categories&format=feed';
			}
		} else {
			$needles = array(
				'categories' => ''
			);
			$link = 'index.php?option=com_phocagallery&view=feed&format=feed';
		}

			
		if($item = PhocaGalleryRoute::_findItem($needles, 1)) {
			if(isset($item->query['layout'])) {
				$link .= '&layout='.$item->query['layout'];
			}
			if (isset($item->id)) {
				$link .= '&Itemid='.$item->id;
			}
		};

		return $link;
	}
	
	public static function getCategoryRoute($catid, $catidAlias = '') {
		
		// TEST SOLUTION
		$app 		= JFactory::getApplication();
		$menu 		= $app->getMenu();
		$active 	= $menu->getActive();
		
		$activeId 	= 0;
		if (isset($active->id)){
			$activeId    = $active->id;
		}
		if ((int)$activeId > 0) {
			$needles 	= array(
				'category' => (int)$catid,
				'categories' => (int)$activeId
			);
		} else {
			$needles = array(
				'category' => (int)$catid,
				'categories' => ''
			);
		}

		if ($catidAlias != '') {
			$catid = $catid . ':' . $catidAlias;
		}

		//Create the link
		$link = 'index.php?option=com_phocagallery&view=category&id='. $catid;

		if($item = PhocaGalleryRoute::_findItem($needles)) {
			if(isset($item->query['layout'])) {
				$link .= '&layout='.$item->query['layout'];
			}
			if(isset($item->id)) {
				$link .= '&Itemid='.$item->id;
			}
		};

		return $link;
	}
	

	
	
	
	public static function getCategoryRouteByTag($tagId) {
		$needles = array(
			'category' => '',
			//'section'  => (int) $sectionid,
			'categories' => ''
		);
		
		$db =JFactory::getDBO();
				
		$query = 'SELECT a.id, a.title, a.link_ext, a.link_cat'
		.' FROM #__phocagallery_tags AS a'
		.' WHERE a.id = '.(int)$tagId;

		$db->setQuery($query, 0, 1);
		$tag = $db->loadObject();
		
		

		//Create the link
		if (isset($tag->id)) {
			$link = 'index.php?option=com_phocagallery&view=category&id=tag&tagid='.(int)$tag->id;
		} else {
			$link = 'index.php?option=com_phocagallery&view=category&id=tag&tagid=0';
		}

		if($item = PhocaGalleryRoute::_findItem($needles)) {
			if(isset($item->query['layout'])) {
				$link .= '&layout='.$item->query['layout'];
			}
			if(isset($item->id)) {
				$link .= '&Itemid='.$item->id;
			}
		};

		return $link;
	}
	


	public static function getImageRoute($id, $catid = 0, $idAlias = '', $catidAlias = '', $type = 'detail', $suffix = '')
	{
		$needles = array(
			'detail'  => (int) $id,
			'category' => (int) $catid,
			'categories' => ''
		);
		
		
		if ($idAlias != '') {
			$id = $id . ':' . $idAlias;
		}
		if ($catidAlias != '') {
			$catid = $catid . ':' . $catidAlias;
		}
		
		//Create the link
		
		switch ($type)
		{
			case 'detail';
				$link = 'index.php?option=com_phocagallery&view=detail&catid='. $catid .'&id='. $id;
				break;
			Default;
				$link = '';
		}

		if ($item = PhocaGalleryRoute::_findItem($needles)) {
			if (isset($item->id)) {
				$link .= '&Itemid='.$item->id;
			}
		}
		
		if ($suffix != '') {
			$link .= '&'.$suffix;
		}

		return $link;
	}

	protected static function _findItem($needles, $notCheckId = 0) {
		//$component =& JComponentHelper::getComponent('com_phocagallery');

		$app	= JFactory::getApplication();
		$menus	= $app->getMenu('site', array());
		$items	= $menus->getItems('component', 'com_phocagallery');
		
		

		if(!$items) {
			return JRequest::getVar('Itemid', 0, '', 'int');
			//return null;
		}
		
		$match = null;
		
		foreach($needles as $needle => $id) {
			
			if ($notCheckId == 0) {
				foreach($items as $item) {
					if ((@$item->query['view'] == $needle) && (@$item->query['id'] == $id)) {
						$match = $item;
						break;
					}
				}
			} else {
				foreach($items as $item) {
				
					if (@$item->query['view'] == $needle) {
						$match = $item;
						break;
					}
				}
			}

			if(isset($match)) {
				break;
			}
		}

		return $match;
	}
}
?>
