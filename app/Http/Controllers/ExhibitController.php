<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\ExhibitService;

class ExhibitController extends Controller {

    private $exhibitService;

    public function __construct() {
        $this->exhibitService = new ExhibitService();
    }

    public function show($id) {
        $exhibit = $this->exhibitService->getById($id);

        return view('exhibits.one', compact('exhibit'));
    }

    public function question($id) {
        $exhibit = $this->exhibitService->getByIdWithQuestion($id);

        return view('exhibits.question', compact('exhibit'));
    }

}
