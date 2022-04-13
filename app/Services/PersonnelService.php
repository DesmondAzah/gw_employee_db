<?php 

namespace App\Services;

use App\Domains\PersonnelDomain;

class PersonnelService extends Service {

    public function __construct() {
        parent::__construct();
    }

    public function getPersonnelDetails($personnel) {
            return  PersonnelDomain::getPersonnel($personnel);
           
    }

    public function getPersonnel($personnel) {
           return PersonnelDomain::getPersonnelDetails($personnel);
    }

    public function getPersonnelRequest($personnel) {
            return PersonnelDomain::getPersonnelRequest($personnel);
    }
    
    public function addPersonnel($personnel) {
        return PersonnelDomain::addPersonnel($personnel);
    }

    public function addPersonnelDetails($personnel_details) {
        return PersonnelDomain::addPersonnelDetails($personnel_details);
    }

    public function updatePersonnel( $request, $personnel) {
        return PersonnelDomain::updatePersonnel($request, $personnel);
    }

    public function updatePersonnelDetails( $request, $id) {
        return PersonnelDomain::updatePersonnelDetails($request, $id);
    }

    public function deletePersonnel($personnel_id) {
        return PersonnelDomain::deletePersonnel($personnel_id);
    }

    public function getPersonnelList($request) {
        return PersonnelDomain::getPersonnelList($request);
    }

    public function getAllPersonnelDetails(){
        return PersonnelDomain::getAllPersonnel();
    }

    public function findPersonnel ($request)
    {
        return PersonnelDomain::findPersonnel($request);
    }

}