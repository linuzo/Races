<?php

namespace xfury\races;

use pocketmine\scheduler\PluginTask;
use pocketmine\utils\TextFormat;
use pocketmine\entity\Effect;

class EffectTask extends PluginTask{

	public function __construct(MainClass $plugin){
		parent::__construct($plugin);
		$this->plugin = $plugin;
	}

	public function onRun($currentTick){
		foreach($this->plugin->getServer()->getOnlinePlayers() as $p){
			if($this->plugin->hasRace($p->getName()) == true){
				if($this->plugin->getRace($p->getName()) == 0){
					$p->addEffect(Effect::getEffect(Effect::FIRE_RESISTANCE)->setDuration(20)->setAmplifier(1)->setVisible(false));
				}
				if($this->plugin->getRace($p->getName()) == 1){
					$p->addEffect(Effect::getEffect(Effect::HEALTH_BOOST)->setDuration(20)->setAmplifier(1)->setVisible(false));
				}
				if($this->plugin->getRace($p->getName()) == 2){
					$p->addEffect(Effect::getEffect(Effect::REGENERATION)->setDuration(20)->setAmplifier(0)->setVisible(false));
				}
	                        if($this->plugin->getRace($p->getName()) == 3){
					$p->addEffect(Effect::getEffect(Effect::SPEED)->setDuration(20)->setAmplifier(2)->setVisible(false));
			}
		}
	}
}
