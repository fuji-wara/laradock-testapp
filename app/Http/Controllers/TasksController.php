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

        return redirect('/');
    }

    /**
     *タスクの詳細ページ
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);

        return view('main_content.show',[
            'task' => $task,
        ]);
    }

    /**
     * 編集フォーム
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('main_content.edit',[
            'task' => $task,
        ]);
    }

    /**
     * タスクの編集処理
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->content = $request->content;
        $task->save();

        return redirect('/');
 
    }

    /**
     * タスクを削除
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        return redirect('/');

    }
}
