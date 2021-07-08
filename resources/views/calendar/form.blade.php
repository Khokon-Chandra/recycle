<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Giorno</label>
  <select name="day_id" class="form-select" id="inputGroupSelect01">
   @foreach ($days as $day)
        <option value="{{$day->id}}" {{$note->day_id == $day->id ? 'selected' : ''}} >{{$day->name}}</option>
      @endforeach
  </select>
    @error('day_id')
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>


<div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">Tipologia</label>
    <select name="category_id" class="form-select" id="inputGroupSelect01">
        @foreach ($categories as $c)
            <option value="{{$c->id}}" {{$note->category_id == $c->id ? 'selected' : ''}} >{{$c->name}}</option>
        @endforeach
    </select>
    @error('category_id')
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>


<div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">Giorno raccolta</label>
    <select name="giorno_raccolta_id" class="form-select" id="inputGroupSelect01">
    @foreach ($days as $day)
        <option value="{{$day->id}}" {{$note->giorno_raccolta_id == $day->id ? 'selected' : ''}} >{{$day->name}}</option>
    @endforeach
    </select>
    @error('giorno_raccolta_id')
    <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>




<div class="input-group mb-3">
    <label class="input-group-text">Ora inizio</label>
    <input type="time" name="ora_inizio" value="{{old('ora_inizio')}}">
    @error('ora_inizio')
    <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>


<div class="input-group mb-3">
  <label class="input-group-text">Ora fine</label>
  <input type="time" name="ora_fine" value="{{old('ora_fine')}}">
  @error('ora_fine')
    <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>

@csrf
