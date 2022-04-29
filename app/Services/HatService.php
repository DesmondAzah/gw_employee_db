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

    public function hattingTable(){
        return HatDomain::hattingTable();
    }
    public function completeHat() {
        return HatDomain::completeHat();
    }
    public function addCompleteHat($request) {
        return HatDomain::addCompleteHat($request);
    }
    public function updateCompleteHat($id,$request) {
        return HatDomain::updateCompleteHat($id,$request);
    }
    
    public function deleteHat($id) {
        // delete hat level
        return HatDomain::deleteHat($id);
    }

    public function deletePersonnelHats($id){
        error_log($id);
        return HatDomain::deletePersonnelHats($id);
    }
    public function getHatDetails($id) {
        return HatDomain::getHatDetails($id);
    }
    public function getAllHats() {
        // get all hat levels
        return HatDomain::getAllHats();
    }
}