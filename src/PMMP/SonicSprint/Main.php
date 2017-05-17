<?php

/*
 _______  _______  ______   _______  _______   
|       ||       ||      | |       ||       |  
|       ||   _   ||  _    ||    ___||  _____|  
|       ||  | |  || | |   ||   |___ | |_____   
|      _||  |_|  || |_|   ||    ___||_____  |  
|     |_ |       ||       ||   |___  _____| |  
|_______||_______||______| |_______||_______| 
Copyright © 2003～2017 nadare All Rights Reserved. 
*/

namespace PMMP\SonicSprint; 
use pocketmine\event\Listener;
use pocketmine\Server;
 use pocketmine\Player;
use pocketmine\entity\Effect;

class Main extends \pocketmine\plugin\PluginBase implements Listener{
public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getServer()->getLogger()->info("§bSonic_Sprint will Activate.");
}

public function Sprint(\pocketmine\event\player\PlayerToggleSprintEvent $event)
{
	$player = $event->getPlayer();
		$effect = Effect::getEffect(1);
		$effect->setDuration(3333333333333333333333333333333333333333333333333333);
		$effect->setAmplifier(2);
		$effect->setColor(144, 255, 118);
		$player->addEffect($effect);
}

}