<?php
/**
 * hypeLists
 * Developer tools for managing and ajaxifying lists
 *
 * @package    Elgg
 * @subpackage hypeJunction\Lists
 *
 * @author      Ismayil Khayredinov <ismayil@hypejunction.com>
 * @copyright   Copyright (c) 2014 Ismayil Khayredinov
 *
 * hypeLists is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, it can be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

use hypeJunction\Lists\Bootstrap;

return [
	'bootstrap' => Bootstrap::class,
	'views' => [
		'default' => [
			'hypeList.js' => __DIR__ . '/views/default/components/list.js',
			'js/framework/lists/init.js' => __DIR__ . '/views/default/components/list/init.js',
			'js/framework/lists/require' => __DIR__ . '/views/default/components/list/require.php',
		],
	],
	'view_extensions' => [
		'elgg.css' => [
			'forms/lists/sort.css' => [],
			'components/list/pagination.css' => [],
		],
	],
];
