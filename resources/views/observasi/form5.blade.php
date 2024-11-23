<div id="datapola-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
  <div class="form-section">
    <div class="mb-3">
      <label class="form-label" for="sleepPattern">
        Apakah anak memiliki gangguan pola tidur? Jam berapa anak tidur
        malam? Jelaskan!
      </label>
      <textarea class="form-control" id="sleepPattern" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label" for="wakeUpPattern">
        Berapa kali dalam semalam anak terbangun? Apa yang anak kerjakan
        ketika terbangun? Jelaskan!
      </label>
      <textarea class="form-control" id="wakeUpPattern" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">
        Centang kebiasaan yang dimiliki anak!
      </label>
      @foreach ($form5 as $form)
      <div class="form-check">
      <input class="form-check-input" name="{{$form->name}}" id="{{$form->name}}" type="checkbox" />
      <label class="form-check-label" for="habit1">
        {{$form->value}}
      </label>
      </div>
      @endforeach
    </div>
    <div class="mb-3">
      <label class="form-label" for="additionalNotes">
        Catatan Tambahan
        <span class="text-muted">
          (Berikan penjelasan terkait pernyataan diatas)
        </span>
      </label>
      <textarea class="form-control" id="additionalNotes" rows="3"></textarea>
    </div>
    <div class="text-end">
      <button class="btn btn-secondary me-2" type="button" onclick="stepper.previous()">Sebelumnya</button>
      <button class="btn btn-primary" type="submit">Simpan Data</button>
    </div>
  </div>
</div>