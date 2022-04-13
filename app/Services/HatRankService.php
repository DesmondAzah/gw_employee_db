<?php 

namespace App\Services;

use App\Domains\HatDomain;

class HatRankService extends Service {

        public function __construct() {
            // setup debug info
        }
        
        public function getHatRanks() {
            // get all hat ranks
            return HatDomain::getHatRanks();
        }
        
        public function getHatRank($id) {
            // get a hat rank by id
            return HatDomain::getHatRank($id);
        }
        
        public function addHatRank($request) {
            // add a new hat rank
            return HatDomain::addHatRank($request);
        }
        
        public function updateHatRank($request, $id) {
            // update a hat rank
            return HatDomain::updateHatRank($request, $id);
        }
        
        public function deleteHatRank($id) {
            // delete a hat rank
            return HatDomain::deleteHatRank($id);
        }
        
}
