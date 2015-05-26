<?php
namespace Hunger;

use pocketmine\player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase{

  //TODO: add time(schedule) for hunger time

public function onEnable(){
	
	
$this->getLogger()->info("Hunger Enabled");
                }
    
    
   
      
     
    public function onDisable(){
   
     	$this->getLogger()->info("Hunger Disabled");
	
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
