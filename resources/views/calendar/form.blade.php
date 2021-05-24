<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Giorno</label>
  <select name="giorno" class="form-select" id="inputGroupSelect01">
   <option selected value="">Seleziona un giorno</option>
   <option value="lunedi">Lunedì</option>
   <option value="martedi">Martedì</option>
   <option value="mercoledì">Mercoledì</option>
   <option value="giovedi">Giovedì</option>
   <option value="venerdi">Venerdi</option>
   <option value="sabato">Sabato</option>
   <option value="domenica">Domenica</option>
  </select>
</div>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Tipologia</label>
  <select name="tipologia" class="form-select" id="inputGroupSelect01">
    <option selected value="">Seleziona la tipologia di rifiuto</option>
    <option value="organico">Organico</option>
   <option value="Vetro">Vetro</option>
   <option value="plastica e metallo">Plastica e metallo</option>
   <option value="carta">Carta</option>
   <option value="indifferenziato">Indifferenziato</option>
  </select>
</div>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Giorno raccolta</label>
  <select name="giorno_raccolta" class="form-select" id="inputGroupSelect01">
    <option selected value="">Seleziona un giorno</option>
    <option value="lunedi">Lunedì</option>
   <option value="martedi">Martedì</option>
   <option value="mercoledì">Mercoledì</option>
   <option value="giovedi">Giovedì</option>
   <option value="venerdi">Venerdi</option>
   <option value="sabato">Sabato</option>
   <option value="domenica">Domenica</option>
  </select>
</div>
<div class="input-group mb-3">
  <label class="input-group-text">Ora inizio</label>
  <input type="time" name="ora_inizio">
</div>
<div class="input-group mb-3">
  <label class="input-group-text">Ora fine</label>
  <input type="time" name="ora_fine">
</div>


@csrf