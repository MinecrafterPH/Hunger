<?php

/*
 * Hunger plugin for PocketMine-MP
 * Copyright (C) 2014 SavionLegendZzz (SavionLegendZzz)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
*/

namespace Hunger;
use pocketmine\player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase{

  //TODO: add time(schedule) for hunger time

     public function onEnable(){
     	$this->saveDefaultConfig();
     	$this->reloadConfig();
        $this->getLogger()->info("Hunger has been enabled.");
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new CallbackTask([$this, "time"]), 60);
     }
     public function onDisable(){
     	$this->getLogger()->info("Hunger has been disabled.");
     }
     public function onPlayerDeath(PlayerDeathEvent $event){
        $p = $event->getEntity();
        $this->$p->sendMessage("You died of hunger.");
     }
     public function time(){
     //TODO	
     }
     public function hunger(){
     	$cfg = $this->getConfig();
     	$prefix = $cfg->get("prefix");
     	
        $p = $this->getServer()->$p->online();
        for($i=0;$i<count($p);$i++) {
        $player = $this->getServer()->$p->get($p[$i]);
        if ($p->getHealth() != 20) {
	$p->sendMessage("$prefix You're getting hungry. You need to eat now!");
        $p->setHealth($p->getHealth()-1, "Hunger");
     }
   }
 }
}
