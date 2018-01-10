<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Markocupic',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'Markocupic\ModuleNewsListTagsInfiniteScroll'         => 'system/modules/tags-newslist-infinite-scroll/modules/ModuleNewsListTagsInfiniteScroll.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	//'event_default_tags'     => 'system/modules/tags/templates/events',
));
