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
     * @param int $folder_id フォルダID
     * @return \Illuminate\Contracts\View\View
     */
    public function index(int $folder_id): View
    {
        $folders = Folder::all();

        $tasks = Task::where('folder_id', $folder_id)->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $folder_id,
            'tasks'  => $tasks,
        ]);
    }
}
