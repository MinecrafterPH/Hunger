<?php
namespace Hunger\Main;

use pocketmine\player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase{
const CAUSE_ENTITY_ATTACK = 1;
private $cause;
   private $modifiers;
   private $originals;

  //TODO: add time(schedule) for hunger time

public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this);
	
$this->getLogger()->info("Loaded all plugin configurations! :D");
                }
    
   public function __construct(Entity $entity, $cause, $damage){
            $this->entity = $entity;
            $this->cause = $cause;
            if(is_array($damage)){
                $this->modifiers = $damage;
            }else{
                $this->modifiers = [
                    self::CAUSE_ENTITY_ATTACK => $damage
                ];
            }
     return $this->cause;
        }
    
        public function getOriginalDamage($type = self::CAUSE_ENTITY_ATTACK){
            if(isset($this->originals[$type])){
                return $this->originals[$type];
            }
    
           return 0;
       }
   
       public function getDamage($type = self::CAUSE_ENTITY_ATTACK){
           if(isset($this->modifiers[$type])){
               return $this->modifiers[$type];
           }
   
           return 0;
       }
     
    public function onDisable(){
   
     	$this->getLogger()->info("plugin disabled");
	
    }
     public function onPlayerDeath(PlayerDeathEvent $event){
          $p = $event->getEntity();
            $this->$p->sendMeassage("u dead boy");
     }
	 
     public function setDamage($damage, $type = self::CASUE_ENTITY_ATTACK){
  $this->$p->getHealth()->setDamage(CASUE_ENTITY_ATTACK);
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
