<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\Task;
use Illuminate\Contracts\View\View;

class TaskController extends Controller
{
    //
    public function index(int $id): View
    {
        $folders = Folder::all();

        // $current_folder = Folder::find($id);
        // $tasks = $current_folder->tasks()->get();

        $tasks = Task::where('folder_id', $id)->get();

        return view('tasks/index', [
            'folders' => $folders,
            // 'current_folder_id' => $current_folder->id,
            'current_folder_id' => $id,
            'tasks'  => $tasks,
        ]);
    }
}
