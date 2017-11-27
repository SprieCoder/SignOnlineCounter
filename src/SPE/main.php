<?php

namespace SPE;

use pocketmine\plugin\PluginBase;

class main extends PluginBase{

	public function onEnable(){
		$this->getLogger()->info("§a+ SignOnlineCounter");
	}
	
	public function onDisable(){
		$this->getLogger()->info("§c- SignOnlineCounter");
		//Bald..
	}
}
