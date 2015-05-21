<?php
namespace Hunger\Main;

use pocketmine\player;
use pocketmine\plugin/PluginBase;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener {
public $p;
}

  

public function onEnable(){
                  $this->getLogger()->info("Loaded all plugin configurations! :D");
                }
    
    
    public function onDisable(){
     	$this->getLogger()->info("plugin disabled");
	
    }
    
    
    public function Hunger() {
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
