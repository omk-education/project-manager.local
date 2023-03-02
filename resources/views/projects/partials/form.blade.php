<fieldset>
  <div class="mb-3">
    <label for="name" class="form-label">
      Название проекта
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
      Описание проекта
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
    <label for="budget" class="form-label">
      Бюджет проекта
    </label>
    <input type="number" class="form-control @error('budget') is-invalid @enderror" id="budget" name="budget"
      value="{{ $item->budget ?? old('budget') }}">
    @error('budget')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="start" class="form-label">
      Дата начала проекта
    </label>
    <input type="date" class="form-control @error('start') is-invalid @enderror" id="start" name="start"
      value="{{ $item->start ?? old('start') }}">
    @error('start')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="user_id" class="form-label">
      Ведущий разработчик
    </label>
    <select class="form-select" name="user_id">
      @forelse($seniors as $senior)
        <option value="{{ $senior->id }}" {{ ($item->user_id ?? old('user_id')) == $senior->id ? 'selected' : '' }}>
          {{ $senior->name }}
        </option>
      @empty
      @endforelse
    </select>
  </div>

</fieldset>
<hr>
<button type="submit" class="btn btn-primary">Сохранить</button>
