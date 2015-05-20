<?php
namespace Hunger/Main;

use pocketmine\player;
use pocketmine\plugin/PluginBase;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener {
  

public function onEnable(){
                  console("Hunger: Plugin Started! ");
                }
 
    public function Hunger() {
        $players = $this->api->player->online();
        for($i=0;$i<count($players);$i++) {
        $player = $this->api->player->get($players[$i]);
        if ($player->entity->getHealth() != 20) {
	   $this->api->chat->broadcast(" You Are Getting Hungry! ");
        $player->entity->setHealth($player->entity->getHealth()-1, "Hunger"); 
                                 
         }
      }
   }
 }
}
