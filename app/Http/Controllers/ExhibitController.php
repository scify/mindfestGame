<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\ExhibitService;
use App\Services\QuestionService;

class ExhibitController extends Controller {

    private $exhibitService;
    private $questionService;

    public function __construct() {
        $this->exhibitService = new ExhibitService();
        $this->questionService = new QuestionService();
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
        $alreadyAnswered = $this->questionService->checkIfAlreadyAnswered($exhibit->question->id);

        return view('exhibits.one', compact('exhibit', 'alreadyAnswered'));
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
        //check if question has already been answered
        $exhibit = $this->exhibitService->getByIdWithQuestion($id);
        $alreadyAnswered = $this->questionService->checkIfAlreadyAnswered($exhibit->question->id);

        return view('exhibits.question', compact('exhibit', 'alreadyAnswered'));
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
