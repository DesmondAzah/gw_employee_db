<?php 

namespace App\Services;

use App\Domains\HatDomain;

class HatService extends Service {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getHats() {
        return HatDomain::getHats();
    }
    
    public function getHat($id) {
        return HatDomain::getHat($id);
    }
    
    public function addHat($hat) {
        return HatDomain::addHat($hat);
    }

    public function addHatLevelRank($request){
        return HatDomain::addHatLevelRank($request);
    }

    public function addHatPerentChild($hatPerentChild) {
        return HatDomain::addHatPerentChild($hatPerentChild);
    }

    public function getOrgChart(){
        return HatDomain::getOrgChart();
    }
    
    public function updateHat($request, $id) {
        // update hat level
        return HatDomain::updateHat($request, $id);
    }

    public function setUpPersonnelToHat($request) {
        return HatDomain::setUpPersonnelToHat($request);
    }

    public function hattingChart(){
        return HatDomain::hattingChart();
    }
    
    public function deleteHat($id) {
        // delete hat level
        return HatDomain::deleteHat($id);
    }
}