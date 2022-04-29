<?php 

namespace App\Domains;

class HatDomain extends Domain {
    public function __construct() {
        parent::__construct("ds_hat");
    }

    // Hat specific methods

    public static function getHats () {
        return (new HatDomain)->internalRequest('GET', "/hats");
    }
    public static function getHat($id){
        error_log("HatDomain::getHat($id)");
        return (new HatDomain)->internalRequest('GET', "/hats/{$id}");
    }

    public static function addHat($hat) {
        return (new HatDomain)->internalRequest('POST', "/hats", $hat);
    }

    public static function updateHat($request, $hat) {
        return (new HatDomain)->internalRequest('PUT', "/hats/{$hat}", $request);
    }

    public static function deleteHat($id) {
        return (new HatDomain)->internalRequest('DELETE', "/$id/hat");
    }

    public static function deletePersonnelHats($id) {
        return(new HatDomain)->internalRequest('DELETE', "/hats/personnelHats/{$id}");
    }
    public static function addHatLevelRank($hatLevelRank) {
        return (new HatDomain)->internalRequest('POST', "/hats/setUpLR", $hatLevelRank);
    }

    public static function addHatPerentChild($hatPerentChild) {
        return (new HatDomain)->internalRequest('POST', "/hats/setUpPc", $hatPerentChild);
    }

    public static function setUpPersonnelToHat($request){
        return (new HatDomain)->internalRequest('POST', "/hats/setUpPersonnel", $request);
    }

    public static function getOrgChart() {
        return (new HatDomain)->internalRequest('GET', "/hats/org_chart");
    }

    public static function hattingChart(){
        return (new HatDomain)->internalRequest('GET', "/hattingChart");
    }
    public static function hattingTable(){
        return (new HatDomain)->internalRequest('GET', "/hattingTable");
    }

    public static function completeHat() {
        return (new HatDomain)->internalRequest('GET', "/hats/completeHat");
    }

    public static function addCompleteHat($request) {
        return (new HatDomain)->internalRequest('POST', "/hats/create", $request);
    }

    public static function updateCompleteHat($id,$request) {
        return (new HatDomain)->internalRequest('PUT', "/hats/update/{$id}", $request);
    }

    // Hat level specific methods

    public static function getHatLevels() {
        return (new HatDomain)->internalRequest('GET', "/hatlevels");
    }

    public static function getHatLevel($id) {
        return (new HatDomain)->internalRequest('GET', "/hatlevels/{$id}");
    }

    public static function addHatLevel($hatLevel) {
        return (new HatDomain)->internalRequest('POST', "/hatlevels", $hatLevel);
    }

    public static function updateHatLevel($request, $id) {
        return (new HatDomain)->internalRequest('PUT', "/hatlevels/{$id}", $request);
    }

    public static function deleteHatLevel($id) {
        return (new HatDomain)->internalRequest('DELETE', "/hatlevels/{$id}");
    }

    // Hat rank specific methods

    public static function getHatRanks() {
        return (new HatDomain)->internalRequest('GET', "/hatranks");
    }

    public static function getHatRank($id) {
        return (new HatDomain)->internalRequest('GET', "/hatranks/{$id}");
    }

    public static function addHatRank($hatRank) {
        return (new HatDomain)->internalRequest('POST', "/hatranks", $hatRank);
    }

    public static function updateHatRank($request, $id) {
        return (new HatDomain)->internalRequest('PUT', "/hatranks/{$id}", $request);
    }

    public static function deleteHatRank($id) {
        return (new HatDomain)->internalRequest('DELETE', "/hatranks/{$id}");
    }
    public static function getHatDetails($id) {
        return (new HatDomain)->internalRequest('GET', "/hatDetails/{$id}");
    }
    public static function getAllHats() {
        return (new HatDomain)->internalRequest('GET', "/getAllHats");
    }
}