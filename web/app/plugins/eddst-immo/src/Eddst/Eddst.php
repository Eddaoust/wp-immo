<?php


namespace Eddst;

if ( ! defined( 'ABSPATH' ) ) exit;

use Eddst\Models\HooksInterface;

class Eddst implements HooksInterface{

	protected $actions   = [];

	/**
	 * @param array $actions
	 */
	public function __construct($actions = []){
		$this->actions = $actions;
	}

	/**
	 * @return boolean
	 */
	protected function canBeLoaded(){
		return true;
	}


	/**
	 * Execute plugin
	 */
	public function execute(){
		if ($this->canBeLoaded()){
			add_action( 'plugins_loaded' , [$this,'hooks'], 0);
		}
	}

	/**
	 * @return array
	 */
	public function getActions(){
		return $this->actions;
	}

	/**
	 * Implements hooks from HooksInterface
	 *
	 * @see Eddst\Models\HooksInterface
	 *
	 * @return void
	 */
	public function hooks(){
		foreach ($this->getActions() as $key => $action) {
            $action->hooks();
		}
	}
}