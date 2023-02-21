<div class="mb-3">
  <label for="name" class="form-label">
    Название задачи
  </label>
  <input type="text" class="form-control" id="name" name="name">
</div>

<div class="mb-3">
  <label for="description" class="form-label">
    Описание задачи
  </label>
  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
</div>

<div class="mb-3">
  <label for="priority" class="form-label">
    Приоритет задачи
  </label>
  <input type="number" class="form-control" id="priority" name="priority">
</div>

<div class="mb-3">
  <label for="user_id" class="form-label">
    Исполнитель
  </label>
  <select class="form-select" name="user_id">
    @forelse($juniors as $junior)
      <option value="{{ $junior->id }}">
        {{ $junior->name }}
      </option>
    @empty
    @endforelse
  </select>
</div>

<div class="mb-3">
  <label for="completed" class="form-label">
    Статус задачи
  </label>
  <select class="form-select" name="completed">
    <option value="0">В работе</option>
    <option value="1">Выполнено</option>
  </select>
</div>

<hr>
<button type="submit" class="btn btn-primary">Сохранить</button>
