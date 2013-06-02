<?php

use \Ivory\GoogleMap\Map as Map;
use \Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Helper\MapHelper;
use Ivory\GoogleMap\Overlays\Animation;
use Ivory\GoogleMap\Overlays\Marker;
use Ivory\GoogleMap\Overlays\InfoWindow;
use Ivory\GoogleMap\Events\MouseEvent;
use Ivory\GoogleMap\Events\Event;

class HomeController extends \BaseController {

	public function getIndex()
	{

		$map = new Map();

		$map->setPrefixJavascriptVariable('map_');
		$map->setHtmlContainerId('map_canvas');

		$map->setAsync(true);
		$map->setAutoZoom(false);

		$map->setCenter(-34.925806,138.605073, true);
		$map->setMapOption('zoom', 12);

		//$map->setBound(1, 1, 1, 1, true, true);

		$map->setMapOption('mapTypeId', MapTypeId::ROADMAP);
		$map->setMapOption('mapTypeId', 'roadmap');

		$map->setMapOption('disableDefaultUI', true);
		$map->setMapOption('disableDoubleClickZoom', true);
		$map->setMapOptions(array(
		    'disableDefaultUI'       => true,
		    'disableDoubleClickZoom' => true,
		));

		$map->setStylesheetOption('width', '501px');
		$map->setStylesheetOption('height', '402px');
		$map->setStylesheetOptions(array(
		    'width'  => '413px',
		    'height' => '328px',
		));

		$map->setLanguage('en');

		/**
		 * Markers
		 */
		foreach(Activity::all() as $activity) {
			$marker = new Marker();

			// Configure your marker options
			$marker->setPrefixJavascriptVariable('marker_');
			$marker->setPosition($activity->venue->latitude,$activity->venue->longitude, true);
			$marker->setAnimation(Animation::DROP);

			$marker->setOptions(array(
			    'clickable' => true,
			    'flat'      => true,
			));

			$marker->setIcon('/img/icons/'.$activity->type->icon);
			

			$event = new Event();
			$event->setInstance($instance = $marker->getJavascriptVariable());
			$event->setEventName('click');
			$event->setHandle('function(){showActivityDetails('.$activity->id.');}');

			$map->getEventManager()->addDomEvent($event);
			//$map->addMarker($marker);

		}

		

		$mapHelper = new MapHelper();

		return View::make('home.index')
			->with('map', $mapHelper->renderHtmlContainer($map))
			->with('mapjs', $mapHelper->renderJavascripts($map))
			->with('mapName', $map->getJavascriptVariable());
	}
}
