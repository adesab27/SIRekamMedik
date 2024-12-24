<div id="datapola-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
  <div class="form-section">
    <!-- Pertanyaan Pola Tidur -->
    <div class="mb-3">
      <label class="form-label" for="sleepPattern">
        Apakah anak memiliki gangguan pola tidur? Jam berapa anak tidur malam? Jelaskan!
      </label>
      <textarea name="gangguan_pola_tidur" class="form-control" id="sleepPattern" rows="3" required>
        {{ old('gangguan_pola_tidur', $form5->gangguan_pola_tidur ?? '') }}
      </textarea>
    </div>

    <!-- Pertanyaan Bangun Malam -->
    <div class="mb-3">
      <label class="form-label" for="wakeUpPattern">
        Berapa kali dalam semalam anak terbangun? Apa yang anak kerjakan ketika terbangun? Jelaskan!
      </label>
      <textarea name="terbangun_malam" class="form-control" id="wakeUpPattern" rows="3" required>
        {{ old('terbangun_malam', $form5->terbangun_malam ?? '') }}
      </textarea>
    </div>

    <!-- Centang Kebiasaan Anak -->
    <div class="mb-3">
      <label class="form-label">
        Centang kebiasaan yang dimiliki anak!
      </label>
      @if(isset($form5->habits) && $form5->habits->isNotEmpty())
        @foreach ($form5->habits as $habit)
          <div class="form-check">
            <input class="form-check-input" name="{{ $habit->name }}" id="{{ $habit->name }}" type="checkbox"
              @if(old($habit->name, $habit->checked ?? false)) checked @endif />
            <label class="form-check-label" for="{{ $habit->name }}">
              {{ $habit->value }}
            </label>
          </div>
        @endforeach
      @else
        <p class="text-muted">Tidak ada kebiasaan yang tercatat.</p>
      @endif
    </div>

    <!-- Catatan Tambahan -->
    <div class="mb-3">
      <label class="form-label" for="additionalNotes">
        Catatan Tambahan
        <span class="text-muted">(Berikan penjelasan terkait pernyataan di atas)</span>
      </label>
      <textarea class="form-control" id="catatanTambahan" name="catatan_tambahan_form5" rows="3" required>
        {{ old('catatan_tambahan_form5', $form5->catatan_tambahan_form5 ?? '') }}
      </textarea>
    </div>
  </div>

  <!-- Tombol Navigasi -->
  <div class="text-end d-flex justify-content-end gap-2 mt-4">
    <button class="btn btn-secondary me-2" type="button" onclick="stepper.previous()">Sebelumnya</button>
    <button class="btn btn-primary" type="submit">Simpan Data</button>
  </div>
</div>
