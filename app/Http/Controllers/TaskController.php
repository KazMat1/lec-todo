<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

use App\Models\Folder;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;

class TaskController extends Controller
{
    /**
     * フォルダに紐づくタスクを一覧で返す
     *
     * @param int $folder_id URLパラメータから取得した現在のフォルダID
     * @return \Illuminate\Contracts\View\View
     */
    public function index(int $folder_id): View
    {
        $folders = Folder::all();
        $tasks = Task::where('folder_id', $folder_id)->get();

        return view('tasks.index', compact('folders', 'folder_id', 'tasks'));
    }

    /**
     * フォルダに紐づくタスク作成画面を返す
     *
     * @param int $folder_id URLパラメータから取得した現在のフォルダID
     * @return \Illuminate\Contracts\View\View
     */
    public function create(int $folder_id): View
    {
        return view('tasks.create', compact('folder_id'));
    }

    /**
     * @param int $folder_id URLパラメータから取得した現在のフォルダID
     * @param \Illuminate\Http\StoreTaskRequest $request タスク保存用のバリデーションリクエスト
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(int $folder_id, StoreTaskRequest $request): RedirectResponse
    {
        $current_folder = Folder::findOrFail($folder_id);
        $params = [
            'title' => $request->title,
            'due_date' => $request->due_date,
        ];

        $current_folder->tasks()->create($params);


        return redirect()->route('folders.tasks.index', ['id' => $current_folder->id]);
    }
}
