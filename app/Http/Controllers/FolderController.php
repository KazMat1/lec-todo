<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests\StoreFolderRequest;
use App\Models\Folder;

class FolderController extends Controller
{
    /**
     * フォルダ作成画面を返す
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        return view('folders.create');
    }

    /**
     * フォルダを作成し、DBに保存する
     *
     * @param \Illuminate\Http\StoreFolderRequest $request フォルダ保存用のバリデーションリクエスト
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreFolderRequest $request): RedirectResponse
    {
        $params = [
            'title' => $request->title,
        ];
        $folder = Folder::create($params);

        return redirect()->route('folders.tasks.index', ['id' => $folder->id]);
    }
}
