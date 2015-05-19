<?php
class HungerMegga implements Plugin{
private $api;
public function __construct(ServerAPI $api, $server = false){
$this->api = $api;
}
public function init(){
                  console("Hunger: Plugin Started! ");
                $this->api->schedule(20* 20, array($this, "Alert"), array(), true);
                $this->api->schedule(80* 100, array($this, "Clear"), array(), true);
                $this->api->schedule(40* 100, array($this, "Chat1"), array(), true);
                $this->api->schedule(50* 100, array($this, "Chat2"), array(), true);
                $this->api->schedule(60* 100, array($this, "Chat3"), array(), true);
                $this->api->schedule(70* 100, array($this, "Chat4"), array(), true);
                $this->api->schedule(80* 100, array($this, "Chat5"), array(), true);
                $this->api->schedule(90* 100, array($this, "Chat5"), array(), true);
                $this->api->schedule(100* 100, array($this, "Chat6"), array(), true);
                $this->api->schedule(100* 100, array($this, "Chat7"), array(), true);
                $this->api->schedule(20* 90, array($this, "Hunger"), array(), true);
                $this->api->addHandler('entity.health.change', array($this, 'entityHurt'));
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
    ?>
