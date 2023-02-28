<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
// use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Просмотр списка элементов
     *
     * @return View
     */
    public function index()
    {
        $items = User::all();

        return view('users.index', compact('items'));
    }

    /**
     * Вызов формы создания записи
     *
     * @return View
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Сохранение новой записи
     *
     * @param UserRequest $request запрос
     *
     * @return RedirectResponse перенаправление
     */
    public function store(UserRequest $request)
    {
        $request['password'] = bcrypt($request['password']);

        User::create($request->all());

        return redirect()->route('users.index');
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
        $item = User::findOrFail($id);

        return view('users.show', compact('item'));
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
        $item = User::findOrFail($id);

        return view('users.edit', compact('item'));
    }

    /**
     * Обновление
     *
     * @param UserRequest $request запрос
     * @param int     $id      идентификатор
     *
     * @return RedirectResponse перенаправление
     */
    public function update(UserRequest $request, $id)
    {
        $item = User::findOrFail($id);

        if ($request['password'] == '') {
            // если нет пароля исключаем поле
            $item->update($request->except('password'));
        } else {
            // если есть пароль хеш и обновить
            $request['password'] = bcrypt($request['password']);
            // обновляем данные
            $item->update($request->all());
        }

        return redirect()->route('users.index');
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
        $item = User::findOrFail($id);
        $item->delete();

        return redirect()->route('users.index');
    }
}
