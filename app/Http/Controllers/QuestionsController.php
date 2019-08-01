<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Request;
use App\QuestionsModel;
class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questions = QuestionsModel::all();
        return view('index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$question->baslik ='test';
return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $question = New QuestionsModel();
        $question::create(Request::all());


        return view('create', compact('question'));
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($qid)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($qid = 0)
    {
        //
         $question = QuestionsModel::find($qid);
         return view('question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $qid)
    {
        //
        $question = QuestionsModel::all();
        $question::edit(Request($qid));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($qid)
    {
        //

         if ($qid != 0) {
             $questiondelete = QuestionsModel::where('qid', '=', $qid)->delete();
             if ($questiondelete) {
                 return 'Silindi :))';

             } else {
                 return null;
             }
         } else {
             return null;
         }
     }

}
