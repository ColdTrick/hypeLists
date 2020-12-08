<?php

namespace hypeJunction\Lists;

use Elgg\DefaultPluginBootstrap;

class Bootstrap extends DefaultPluginBootstrap {

	/**
	 * {@inheritDoc}
	 */
	public function init() {
		$this->registerHooks();
	}
	
	/**
	 * Register plugin hook handlers
	 *
	 * @return void
	 */
	protected function registerHooks() {
		$hooks = $this->elgg()->hooks;
		
		$defaults = [
			'page/components/list',
			'page/components/gallery',
			'page/components/ajax_list',
		];
		
		$views = $hooks->trigger('get_views', 'framework:lists', null, $defaults);
		foreach ($views as $view) {
			$hooks->registerHandler('view', $view, __NAMESPACE__ . '\Views::wrapListView');
			$hooks->registerHandler('view_vars', $view, __NAMESPACE__ . '\Views::filterVars');
		}
	}
}
