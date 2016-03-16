<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\ExhibitService;

class ExhibitController extends Controller {

    private $exhibitService;

    public function __construct() {
        $this->exhibitService = new ExhibitService();
        $this->middleware('auth');
    }

    /**
     * Show an exhibit by id
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id) {
        $exhibit = $this->exhibitService->getById($id);

        return view('exhibits.one', compact('exhibit'));
    }

    /**
     * Get an exhibit by code
     * @return mixed
     */
    public function getByCode() {
        $exhibit = $this->exhibitService->getByCode(\Request::get('code'));

        return $exhibit;
    }

    /**
     * Find an exhibit question
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function question($id) {
        $exhibit = $this->exhibitService->getByIdWithQuestion($id);

        return view('exhibits.question', compact('exhibit'));
    }

    /**
     * View the scan or code page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function scanOrCode() {
        return view('scanOrCode');
    }
}
