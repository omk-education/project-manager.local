<div class="mb-3">
  <label for="name" class="form-label">
    Имя пользователя
  </label>
  <input type="text" class="form-control" id="name" name="name" value="{{ $item->name ?? old('name') }}">
</div>

<div class="mb-3">
  <label for="email" class="form-label">
    Адрес электронной почты
  </label>
  <input type="email" class="form-control" id="email" name="email" value="{{ $item->email ?? old('email') }}">
</div>

<div class="mb-3">
  <label for="password" class="form-label">
    Пароль
  </label>
  <input type="password" class="form-control" id="password" name="password">
</div>

<div class="mb-3">
  <label for="role" class="form-label">
    Роль пользователя
  </label>
  <select class="form-select" name="role">

    @if ($item->role == 'user')
      {{--  --}}
      <option value="user" {{ ($item->role ?? old('role')) == 'user' ? 'selected' : '' }}>
        Пользователь
      </option>
      <option value="junior" {{ ($item->role ?? old('role')) == 'junior' ? 'selected' : '' }}>
        Программист
      </option>
    @elseif ($item->role == 'junior')
      {{--  --}}
      <option value="junior" {{ ($item->role ?? old('role')) == 'junior' ? 'selected' : '' }}>
        Программист
      </option>
      <option value="senior" {{ ($item->role ?? old('role')) == 'senior' ? 'selected' : '' }}>
        Ведущий программист
      </option>
    @elseif ($item->role == 'senior')
      {{--  --}}
      <option value="senior" {{ ($item->role ?? old('role')) == 'senior' ? 'selected' : '' }}>
        Ведущий программист
      </option>
    @endif
  </select>
</div>

<hr>
<button type="submit" class="btn btn-primary">Сохранить</button>
