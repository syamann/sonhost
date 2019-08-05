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
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = 0)
    {
        //
         $question = QuestionsModel::find($id);
         return view('question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response-
     */
    public function update($id, Request $request )
    {
        //
        $question = QuestionsModel::find($id);
        $question->baslik=request('baslik');
        $question->konu=request('konu');
        $question->aciklama=request('aciklama');
        $question->email=request('email');
        $question->update();

        return view('question.33', compact('question'));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //

         if ($id != 0) {
             $questiondelete = QuestionsModel::where('id', '=', $id)->delete();
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
