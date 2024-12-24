<div id="datakesehatan-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
  <div class="form-section">
    <div class="mt-4">
      <h5>Status Kesehatan Anak</h5>
      <p>(Kondisi atau kejadian yang dialami anak)</p>
      <div class="row">
        <div class="col-md-6">
          <?php $count = 0; ?>
          @if(isset($form4) && $form4->isNotEmpty())
            @foreach ($form4 as $fo)
              @if($count == 9)
                @break
              @else
                <div class="form-check">
                  <input class="form-check-input" id="{{ $fo->name }}" name="{{ $fo->name }}" type="checkbox"
                    @if(old($fo->name, $fo->value)) checked @endif />
                  <label class="form-check-label" for="{{ $fo->name }}">
                    {{ $fo->value }}
                  </label>
                </div>
              @endif
              <?php $count++; ?>
            @endforeach
          @else
            <p>Data tidak tersedia.</p>
          @endif
        </div>
        <div class="col-md-6">
          @if(isset($form4) && $form4->isNotEmpty())
            @foreach ($form4 as $fo)
              @if ($loop->iteration > 9)
                <div class="form-check">
                  <input class="form-check-input" id="{{ $fo->name }}" name="{{ $fo->name }}" type="checkbox"
                    @if(old($fo->name, $fo->value)) checked @endif />
                  <label class="form-check-label" for="{{ $fo->name }}">
                    {{ $fo->value }}
                  </label>
                </div>
              @endif
            @endforeach
          @else
            <p>Data tidak tersedia.</p>
          @endif
        </div>
      </div>
    </div>

    <div class="mt-4">
      <h5>Perkembangan Anak</h5>
      <div class="row">
        <div class="col-md-12">
          <h6>Riwayat Perkembangan Motorik</h6>
          <div class="row">
            @foreach (['tengkurap', 'duduk', 'merangkak', 'berdiri', 'berjalan'] as $motorik)
              <div class="col-12 col-sm-6 col-md-2">
                <label for="{{ $motorik }}">{{ ucfirst($motorik) }}</label>
                <input name="{{ $motorik }}" class="form-control" id="{{ $motorik }}" type="text" placeholder="bulan" required
                  value="{{ old($motorik, $form4->$motorik ?? '') }}"
                  pattern="^-?\d*$" title="Hanya angka yang diperbolehkan" />
              </div>
            @endforeach
          </div>
        </div>

        <div class="col-md-12 mt-4">
          <h6>Riwayat Perkembangan Bahasa</h6>
          <div class="row">
            @foreach (['bubbling', 'kata_pertama', 'mengulang_kata', 'kalimat_pertama'] as $bahasa)
              <div class="col-12 col-sm-6 col-md-3">
                <label for="{{ $bahasa }}">{{ str_replace('_', ' ', ucfirst($bahasa)) }}</label>
                <input name="{{ $bahasa }}" class="form-control" id="{{ $bahasa }}" type="text" placeholder="bulan" required
                  value="{{ old($bahasa, $form4->$bahasa ?? '') }}"
                  pattern="^-?\d*$" title="Hanya angka yang diperbolehkan" />
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4 mb-3">
      <h5>Catatan Tambahan</h5>
      <textarea class="form-control" id="catatanTambahan" name="catatan_tambahan_form4" rows="3" required>{{ old('catatan_tambahan_form4', $form4->catatan_tambahan_form4 ?? '') }}</textarea>
    </div>

    <div class="text-end d-flex justify-content-end gap-2 mt-4">
      <button class="btn btn-secondary me-2" type="button" onclick="stepper.previous()">Sebelumnya</button>
      <button class="btn btn-primary" type="button" onclick="nextStep()">Selanjutnya</button>
    </div>
  </div>
</div>
