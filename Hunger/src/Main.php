<?php
namespace Hunger\Main;

use pocketmine\player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener {
}

  //TODO: add time(schedule) for hunger time

public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this);
	$c = new Config($this->getDataFolder()."config.yml", Config::YAML, array
            //(add stuff here);
                  $this->getLogger()->info("Loaded all plugin configurations! :D");
                }
    
    
    public function onDisable(){
    	$this->$c->save();
     	$this->getLogger()->info("plugin disabled");
	
    }
     public function onPlayerDeath(PlayerDeathEvent $event){
          $p = $event->getEntity();
            $this->$p->sendMeassage("u dead boy");
     }
            
    public function hunger(){
        $p = $this->getServer()->$p->online();
        for($i=0;$i<count($p);$i++) {
        $player = $this->getServer()->$p->get($p[$i]);
        if ($p->getHealth() != 20) {
	   	$p->sendMessage("[//TODO: ADD CONFIG FOR PERFIX(for here :P)] EAT SOME FOOD!!! ");
        $p->setHealth($p->getHealth()-1, "Hunger"); 
                                 
         }
      }
   }
 }
}
