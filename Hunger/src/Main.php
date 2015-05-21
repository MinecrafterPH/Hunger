<?php
namespace Hunger\Main;

use pocketmine\player;
use pocketmine\plugin/PluginBase;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener {


  

public function onEnable(){
                  $this->getLogger()->info("Loaded all plugin configurations! :D");
                }
  
    

    public function Alert () {     
        $players = $this->api->player->online();
        for($i=0;$i<count($players);$i++) {
        $player = $this->api->player->get($players[$i]);
	if ($player->entity->getHealth() == 20) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]   Your Health Is Full! ");
						$this->api->chat->broadcast(" ");
	                                        } 
 elseif ($player->entity->getHealth() == 19) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 19! ");
						$this->api->chat->broadcast(" ");
                                            }
 elseif ($player->entity->getHealth() == 18) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 18! ");
						$this->api->chat->broadcast(" ");
	                                        }
 elseif ($player->entity->getHealth() == 17) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 17! ");	
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 16) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 16! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 15) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 15! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 14) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 14! ");	
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 13) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 13! ");	
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 12) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 12! ");	
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 11) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 11! ");	
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 10) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]   Your Health Is At 10! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 9) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 9! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 8) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 8! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 7) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 7! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 6) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 6! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 5) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 5! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 4) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 4! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 3) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 3! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 2) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]  Your Health Is At 2! ");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 1) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]   Your Health Is At 1! ");	
						$this->api->chat->broadcast("[Quantum Network]   Your Health Is Very Low!");
						$this->api->chat->broadcast(" ");
                                             }
 elseif ($player->entity->getHealth() == 0) {
						$this->api->chat->broadcast(" ");
						$this->api->chat->broadcast("[Quantum Network]    Your Health Is At 0! ");	
						$this->api->chat->broadcast(" ");
                                             }
              }           
              }
    public function Danger () {
	$players = $this->api->player->online();
        for($i=0;$i<count($players);$i++) {
        $player = $this->api->player->get($players[$i]);
        if ($player->entity->getHealth() != 2) {
            $data['player']->sendChat(" Warning! Very Low Health Detected!");
         }
              }
    
    
    public function onDisable(){
     	$this->getLogger()->info("plugin disabled");
	
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
