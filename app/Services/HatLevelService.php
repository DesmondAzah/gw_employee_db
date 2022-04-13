<?php 

namespace App\Services;

use App\Domains\HatDomain;
class HatLevelService extends Service {


    public function __construct() {
        // setup debug info
    }
    
    public function getHatLevels() {
        // get all hat levels
        return HatDomain::getHatLevels();
    }
    
    public function getHatLevel($id) {
        // get a hat level by id
        return HatDomain::getHatLevel($id);
    }
    
    public function addHatLevel( $request) {
        // add a new hat level
        return HatDomain::addHatLevel($request);
    }
    
    public function updateHatLevel($request, $id) {
        // update a hat level
        return HatDomain::updateHatLevel($request, $id);
    }
    
    public function deleteHatLevel($id) {
        // delete a hat level
        return HatDomain::deleteHatLevel($id);
    }
}