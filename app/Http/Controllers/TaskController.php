<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;


class TaskController extends Controller
{
    /**
     * Просмотр списка элементов
     *
     * @return View
     */
    public function index()
    {
        $items = Task::all();

        return view('tasks.index', compact('items'));
    }

    /**
     * Вызов формы создания записи
     *
     * @return View
     */
    public function create()
    {
        $juniors = User::where('role', 'junior')->get();

        return view('tasks.create', compact('juniors'));
    }

    /**
     * Сохранение новой записи
     *
     * @param Request $request запрос
     *
     * @return RedirectResponse перенаправление
     */
    public function store(Request $request)
    {
        Task::create($request->all());

        return redirect()->route('tasks.index');
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
        $item = Task::findOrFail($id);

        return view('tasks.show', compact('item'));
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
        $item = Task::findOrFail($id);
        $juniors = User::where('role', 'junior')->get();

        return view('tasks.edit', compact('item', 'juniors'));
    }

    /**
     * Обновление
     *
     * @param Request $request запрос
     * @param int     $id      идентификатор
     *
     * @return RedirectResponse перенаправление
     */
    public function update(Request $request, $id)
    {
        $item = Task::findOrFail($id);
        // обновляем данные
        $item->update($request->all());

        return redirect()->route('tasks.index');
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
        $item = Task::findOrFail($id);
        $item->delete();

        return redirect()->route('tasks.index');
    }
}
