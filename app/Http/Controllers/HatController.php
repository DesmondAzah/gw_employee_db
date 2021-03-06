<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;
use App\Services\HatService;

class HatController extends Controller {

    public function __construct() {

    }

    /**
     * PROCESS a request to add a new hat
     * @param HatService $hatService
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function addHat(HatService $hatService){
        return $hatService->addHat(request()->all());
    }

    /**
     * PROCESS a request to update an existing hat
     * @param HatService $hatService
     * @param Request $request
     * @param $id
     * @return Illuminate\Http\Response
     */
    public function  updateHat($id, HatService $hatService){
        return $hatService->updateHat(request()->all(), $id);
    }

    /**
     * PROCESS a request to set up  hat parent child relationships
     * @param HatService $hatService
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function setUpHatPC(HatService $hatService){
        return $hatService->addHatPerentChild(request()->all());
    }

    /**
     * PROCESS a request to set up hat, level, and rank relationships
     * @param HatService $hatService
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function setUpHatLR(HatService $hatService){
        return $hatService->addHatLevelRank(request()->all());
    }

    public function setUpPersonnel(HatService $hatService){
        return $hatService->setUpPersonnelToHat(request()->all());
    }
    /**
     * PROCESS a request to get org chart
     * @param HatService $hatService
     * @return Illuminate\Http\Response
     */
    public function getOrgChart(HatService $hatService){
        return $hatService->getOrgChart();
    }

    public function hattingChart(HatService $hatService){
        return $hatService->hattingChart();
    }

    public function hattingTable(HatService $hatService){
        return $hatService->hattingTable();
    }
     /**
     * PROCESS a request to get hats
     * @param HatService $hatService
     * @return Illuminate\Http\Response
     */
    public function completeHat(HatService $hatService){
        return $hatService->completeHat();
    }
    /**
     * PROCESS a request to add complete hat
     * @param HatService $hatService
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function addCompleteHat(HatService $hatService){
        return $hatService->addCompleteHat(request()->all());
    }

      /**
     * PROCESS a request to add complete hat
     * @param HatService $hatService
     * @param $id
     * @param Request $request
     * @return Illuminate\Http\Response
     */
    public function updateCompleteHat($id, HatService $hatService){
        return $hatService->updateCompleteHat($id,request()->all());
    }
    /**
     * PROCESS a request to delete a hat
     * @param HatService $hatService
     * @param Request $request
     * @param $id
     * @return Illuminate\Http\Response
     */
    public function deleteHat($id ,HatService $hatService){
        return $hatService->deleteHat($id);

    }

    public function deleteHatLR(){

    }

    public function deleteHatPC(){

    }
/**
     * PROCESS a request to delete a hat assignment 
     * @param HatService $hatService
     * @param $id 
     * @return Illuminate\Http\Response
     */
    public function deletePersonnelHats($id,HatService $hatService){
        return $hatService->deletePersonnelHats($id);
    }

    /**
     * PROCESS a request to get all hats
     * @param HatService $hatService
     * @param  $id
     * @return Illuminate\Http\Response
     */
    public function getHat($id, HatService $hatService){
        return $hatService->getHat($id);

    }

    /**
     * PROCESS a request to get all hats
     * @param HatService $hatService
     * @return Illuminate\Http\Response
     */
    public function getHats(HatService $hatService){
        return $hatService->getHats();
    }

/**
     * PROCESS a request to get all hat details
     * @param HatService $hatService
     * * @param  $id
     * @return Illuminate\Http\Response
     */

    public function getHatDetails(HatService $hatService, $id){
        return $hatService->getHatDetails($id);
    }
    /**
     * PROCESS a request to get all hats
     * @param HatService $hatService
     * @return Illuminate\Http\Response
     */

    public function getAllHats(HatService $hatService){
        return $hatService->getAllHats();
    }


}