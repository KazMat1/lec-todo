<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

use App\Models\Folder;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * フォルダに紐づくタスクを一覧で返す
     *
     * @param int $current_folder_id URLパラメータから取得した現在のフォルダID
     * @return \Illuminate\Contracts\View\View
     */
    public function index(int $current_folder_id): View
    {
        $folders = Folder::all();
        $tasks = Task::where('folder_id', $current_folder_id)->get();

        return view('tasks.index', compact('folders', 'current_folder_id', 'tasks'));
    }

    public function create()
    {

    }

    public function store()
    {

    }
}
