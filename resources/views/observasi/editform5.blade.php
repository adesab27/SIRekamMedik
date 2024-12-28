<div id="datapola-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
  <div class="form-section">
    
    <!-- Gangguan Pola Tidur -->
    <div class="mb-3">
      <label class="form-label" for="sleepPattern">
        Apakah anak memiliki gangguan pola tidur? Jam berapa anak tidur
        malam? Jelaskan!
      </label>
      <textarea name="gangguan_pola_tidur" class="form-control" id="sleepPattern" rows="3" required>{{ old('gangguan_pola_tidur', $data['riwpolakebiasaan']->gangguan_pola_tidur ?? '') }}</textarea>
    </div>
    
    <!-- Terbangun Malam -->
    <div class="mb-3">
      <label class="form-label" for="wakeUpPattern">
        Berapa kali dalam semalam anak terbangun? Apa yang anak kerjakan
        ketika terbangun? Jelaskan!
      </label>
      <textarea name="terbangun_malam" class="form-control" id="wakeUpPattern" rows="3" required>{{ old('terbangun_malam', $data['riwpolakebiasaan']->terbangun_malam ?? '') }}</textarea>
    </div>
    
    <!-- Kebiasaan Anak -->
    <div class="mb-3">
      <label class="form-label">
        Centang kebiasaan yang dimiliki anak!
      </label>
      <div class="mb-3">
        @foreach ($data['form5'] as $form)
          <div class="form-check">
            <input class="form-check-input" id="kebiasaan{{$form->id}}" name="{{$form->name}}" type="checkbox"
              value="1" {{ old($form->name, isset($data['riwpolakebiasaan']->{$form->name}) && $data['riwpolakebiasaan']->{$form->name} ? 'checked' : '') }} />
            <label class="form-check-label" for="kebiasaan{{$form->id}}">{{ $form->value }}</label>
          </div>
        @endforeach
      </div>
    </div>
    
    <!-- Catatan Tambahan -->
    <div class="mb-3">
      <label class="form-label" for="additionalNotes">
        Catatan Tambahan
        <span class="text-muted">
          (Berikan penjelasan terkait pernyataan diatas)
        </span>
      </label>
      <textarea class="form-control" id="catatanTambahan" name="catatan_tambahan_form5" rows="3" required>{{ old('catatan_tambahan_form5', $data['riwpolakebiasaan']->catatan_tambahan ?? '') }}</textarea>
    </div>

  </div>
  
  <!-- Tombol Navigasi -->
  <div class="text-end d-flex justify-content-end gap-2 mt-4">
    <button class="btn btn-secondary me-2" type="button" onclick="stepper.previous()">Sebelumnya</button>
    <button class="btn btn-primary" type="submit">Tambah Data</button>
  </div>
</div>
