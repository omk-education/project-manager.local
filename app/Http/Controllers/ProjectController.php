<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Project;
use App\Models\User;

class ProjectController extends Controller
{
    /**
     * Просмотр списка элементов
     *
     * @return View
     */
    public function index()
    {
        $items = Project::all();

        return view('projects.index', compact('items'));
    }

    /**
     * Вызов формы создания записи
     *
     * @return View
     */
    public function create()
    {
        $seniors = User::where('role', 'senior')->get();

        return view('projects.create', compact('seniors'));
    }

    /**
     * Сохранение новой записи
     *
     * @param ProjectRequest $request запрос
     *
     * @return RedirectResponse перенаправление
     */
    public function store(ProjectRequest $request)
    {
        Project::create($request->all());

        return redirect()->route('projects.index');
    }

    /**
     * Просмотр фотографии
     *
     * @param int $id идентификатор фотографии
     *
     * @return View
     */
    public function show($id)
    {
        $item = Project::findOrFail($id);

        return view('projects.show', compact('item'));
    }

    /**
     * Вызов формы редактирования
     *
     * @param int $id идентификатор
     *
     * @return View
     */
    public function edit($id)
    {
        $item = Project::findOrFail($id);
        $seniors = User::where('role', 'senior')->get();

        return view('projects.edit', compact('item', 'seniors'));
    }

    /**
     * Обновление
     *
     * @param ProjectRequest $request запрос
     * @param int     $id      идентификатор
     *
     * @return RedirectResponse перенаправление
     */
    public function update(ProjectRequest $request, $id)
    {
        $item = Project::findOrFail($id);
        // обновляем данные
        $item->update($request->all());

        return redirect()->route('projects.index');
    }

    /**
     * Удаление
     *
     * @param int $id идентификатор
     *
     * @return RedirectResponse перенаправление
     */
    public function destroy($id)
    {
        $item = Project::findOrFail($id);
        $item->delete();

        return redirect()->route('projects.index');
    }
}
