<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fund;

class FundController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $funds;

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {

        $funds = Fund::all();

        return view('research.fund.index', ['funds' => $funds]);
    }
    public function current(Request $request)
    {
        $funds = Fund::all();

        return view('research.fund.current', ['funds' => $funds]);
    }

        /**
         * Create a new fund instance.
         *
         * @param  Request  $request
         * @return Response
         */
        public function store(Request $request)
    {
        // Validate the request...

        $fund = new Fund;

        $fund->基地_id= $request->基地_id;
        $fund->年份 = $request->年份;
        $fund->投入渠道_中央财政 = $request->投入渠道_中央财政;
        $fund->投入渠道_地方财政 = $request->投入渠道_地方财政;
        $fund->投入渠道_其他 = $request->投入渠道_其他;
        $fund->投入类别_年度运行费 = $request->投入类别_年度运行费;
        $fund->投入类别_固定资产投入 = $request->投入类别_固定资产投入;
        $fund->投入类别_科研项目经费 = $request->投入类别_科研项目经费;
        $fund->投入类别_其他 = $request->投入类别_其他;
        $fund->save();

        return redirect('/research/fund/current');
    }




    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Fund $fund)
    {
        $this->authorize('destroy', $fund);

        $fund->delete();

        return redirect('/research/fund/current');
    }
}
