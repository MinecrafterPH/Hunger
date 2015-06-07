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
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\PlayerJoinEvent;
use pocketmine\scheduler\CallbackTask;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;


class Main extends PluginBase{

  //TODO: add time(schedule) for hunger time

     public function onEnable(){
        $this->getLogger()->info(TextFormat::YELLOW."Hunger has been enabled.");
        $this->getServer()->getScheduler()->scheduleRepeatingTask(new CallbackTask([$this, "hunger"]), 60);
        $this->config = new Config($this->getDataFolder() . "time.yml", Config::YAML, array());
	$this->time=(int)$this->config->get("time");
     }
     public function onDisable(){
     	$this->getLogger()->info(TextFormat::RED."Hunger has been disabled.");
     }
     public function onPlayerDeath(PlayerDeathEvent $event){
        foreach($this->players as &$pl){
		$p = $this->getServer()->getPlayer($pl["id"]);
		Server::getInstance()->broadcastMessage(TextFormat::RED. "".$p->getName(). " died of hunger.");
        }	
     }
     public function hunger(){
     	$p = $this->getServer()->getOnlinePlayers();
		switch($this->time){
			case 19:
			$p->setHealth(19);
			$p->sendMessage("Your health is now 9.5!");
			return true;
			break;
			case 18:
			$p->setHealth(18);	
			$p->sendMessage("Your health is now 9!");
			return true;
			break;
			case 17:
			$p->setHealth(17);
			$p->sendMessage("Your health is now 8.5!");
			return true;
			break;
			case 16:
			$p->setHealth(16);
			$p->sendMessage("Your health is now 8!");
			return true;
			break;
			case 15:
			$p->setHealth(15);
			$p->sendMessage("Your health is now 7.5!");
			return true;
			break;
			case 14:
			$p->setHealth(14);
			$p->sendMessage("Your health is now 7!");
			return true;
			break;
			case 13:
			$p->setHealth(13);
			$p->sendMessage("Your health is now 6.5!");
			return true;
			break;
			case 12:
			$p->setHealth(12);
			$p->sendMessage("Your health is now 6!");
			return true;
			break;
			case 11:
			$p->setHealth(11);
			$p->sendMessage("Your health is now 5.5!");
			return true;
			break;
			case 10:
			$p->setHealth(10);
			$p->sendMessage("Your health is now 5!");
			return true;
			break;
			case 9:
			$p->setHealth(9);
			$p->sendMessage("Your health is now 4.5!");
			return true;
			break;
			case 8:
			$p->setHealth(8);
			$p->sendMessage("Your health is now 4!");
			return true;
			break;
			case 7:
			$p->setHealth(7);
			$p->sendMessage("Your health is now 3.5!");
			return true;
			break;
			case 6:
			$p->setHealth(6);
			$p->sendMessage("Your health is now 3!");
			return true;
			break;
			case 5:
			$p->setHealth(5);
			$p->sendMessage("Your health is now 2.5!");
			return true;
			break;
			case 4:
			$p->setHealth(4);
			$p->sendMessage("Your health is now 2!");
			return true;
			break;
			case 3:
			$p->setHealth(3);
			$p->sendMessage("Your health is now 1.5!");
			return true;
			break;
			case 2:
			$p->setHealth(2);
			$p->sendMessage("Your health is now 1!");
			return true;
			break;
			case 1:
			$p->setHealth(1);
			$p->sendMessage("Your health is now 0.5!");
			return true;
			break;
		}
	}
	public function heal(){
		$p = $this->getServer()->getPlayer();
		($p->getHealth() != 1);{
        $p->setHealth($p->getHealth()+2, "hunger"); 
		$p->sendMessage("You are getting healed!");
		}
	}
}
