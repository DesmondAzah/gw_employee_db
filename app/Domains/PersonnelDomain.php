<?php

namespace App\Domains;

class PersonnelDomain extends Domain {
    public function __construct() {
        parent::__construct("ds_personnel");
    }

    public static function getPersonnel($id){
        return (new PersonnelDomain)->internalRequest('GET', "/personnelDetail/$id");
    }

    public static function getPersonnelDetails ($id){
        return (new PersonnelDomain)->internalRequest('GET', "/personnel/$id");
    }

    public static function getPersonnelRequest($id) {
        return (new PersonnelDomain)->internalRequest('GET', "/$id/personnel/request");
    }

    public static function addPersonnel($personnel) {
        return (new PersonnelDomain)->internalRequest('POST', "/personnel", $personnel);
    }

    public static function addPersonnelDetails($personnelDetail) {
        return (new PersonnelDomain)->internalRequest('POST', "/personnel/details", $personnelDetail);
    }

    public static function updatePersonnel($request, $personnel) {
        return (new PersonnelDomain)->internalRequest('PUT', "/personnel/{$personnel}", $request);
    }

    public static function updatePersonnelDetails($request, $id) {
        return (new PersonnelDomain)->internalRequest('PUT', "/personnel/details/{$id}", $request);
    }

    public static function deletePersonnel($id){
        return (new PersonnelDomain)->internalRequest('DELETE', "/personnel/$id");
    }

    public static function getPersonnelList($request){
        return (new PersonnelDomain)->internalRequest('GET', "/personnel", $request);
    }

    public static function getAllPersonnel(){
        return (new PersonnelDomain)->internalRequest('GET', "/allPersonnel");
    }

    public static function findPersonnel($request){
        return (new PersonnelDomain)->internalRequest('GET', "/findPersonnel", $request);
    }
}