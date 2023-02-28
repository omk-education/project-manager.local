<fieldset @can('junior') disabled @endcan>
  <div class="mb-3">
    <label for="name" class="form-label">
      Название задачи
    </label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
      value="{{ $item->name ?? old('name') }}">
    @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">
      Описание задачи
    </label>
    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
      rows="3">{{ $item->description ?? old('description') }}</textarea>
    @error('description')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="priority" class="form-label">
      Приоритет задачи
    </label>
    <input type="number" class="form-control @error('priority') is-invalid @enderror" id="priority" name="priority"
      value="{{ $item->priority ?? old('priority') }}">
    @error('priority')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="user_id" class="form-label">
      Исполнитель
    </label>
    <select class="form-select" name="user_id">
      @forelse($juniors as $junior)
        <option value="{{ $junior->id }}" {{ ($item->user_id ?? old('user_id')) == $junior->id ? 'selected' : '' }}>
          {{ $junior->name }}
        </option>
      @empty
      @endforelse
    </select>
  </div>

</fieldset>

<fieldset {{ ($item->completed ?? old('completed')) && Auth::user()->can('junior') ? 'disabled' : '' }}>
  <div class="mb-3">
    <label for="completed" class="form-label">
      Статус задачи
    </label>
    <select class="form-select" name="completed">
      <option value="0" {{ ($item->completed ?? old('completed')) == 0 ? 'selected' : '' }}>
        В работе
      </option>
      <option value="1" {{ ($item->completed ?? old('completed')) == 1 ? 'selected' : '' }}>
        Выполнено
      </option>
    </select>
  </div>

</fieldset>
<hr>
<button type="submit" class="btn btn-primary">Сохранить</button>
