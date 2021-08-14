<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    /*
     * タスク一覧表示
     */
    public function index()
    {
        $tasks = Task::all();

        return view('main_content.index',[
            'tasks' => $tasks,
        ]);
    }

    /*
     * 新規投稿の送信フォーム
     */
    public function create()
    {
        $task = Task::all();

        return view('main_content.create',[
            'task' => $task,
        ]);
    }

    /*
     *フォームから受け取った処理
     */
    public function store(Request $request)
    {
        $newTask = new Task;
        $newTask->content = $request->content;
        $newTask->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
