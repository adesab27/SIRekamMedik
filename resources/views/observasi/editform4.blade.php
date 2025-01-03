<div id="datakesehatan-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
  <div class="form-section">
    
    <!-- Bagian Status Kesehatan Anak -->
    <div class="mt-4">
      <h5>Status Kesehatan Anak</h5>
      <p>(Kondisi atau kejadian yang dialami anak)</p>
      <div class="mb-3">
        <label class="form-label">Keluhan Saat Hamil (Checklist)</label>
        <div class="row">
          <div class="col-md-6">
            @php $count = 0; @endphp
            @foreach ($data['form4'] as $fo)
              @if ($count < 8)
                <div class="form-check">
                  <input class="form-check-input" id="keluhan{{$fo->id}}" name="{{$fo->name}}" type="checkbox" value="1"
                    {{ old($fo->name, isset($data['riwsehatperkembangan']->{$fo->name}) && $data['riwsehatperkembangan']->{$fo->name} ? 'checked' : '') }} />
                  <label class="form-check-label" for="keluhan{{$fo->id}}">{{ $fo->value }}</label>
                </div>
              @endif
              @php $count++; @endphp
            @endforeach
          </div>
          
          <div class="col-md-6">
            @foreach ($data['form4'] as $fo)
              @if ($loop->iteration > 8)
                <div class="form-check">
                  <input class="form-check-input" id="keluhan{{$fo->id}}" name="{{$fo->name}}" type="checkbox" value="1"
                    {{ old($fo->name, isset($data['riwsehatperkembangan']->{$fo->name}) && $data['riwsehatperkembangan']->{$fo->name} ? 'checked' : '') }} />
                  <label class="form-check-label" for="keluhan{{$fo->id}}">{{ $fo->value }}</label>
                </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <!-- Bagian Perkembangan Anak -->
    <div class="mt-4">
      <h5>Perkembangan Anak</h5>
      <div class="row">
        <!-- Riwayat Perkembangan Motorik -->
        <div class="col-md-12">
          <h6>Riwayat Perkembangan Motorik</h6>
          <div class="row">
            @foreach (['tengkurap', 'duduk', 'merangkak', 'berdiri', 'berjalan'] as $field)
              <div class="col-12 col-sm-6 col-md-2">
                <label for="{{ $field }}">{{ ucfirst($field) }}</label>
                <input name="{{ $field }}" class="form-control" id="{{ $field }}" type="text" placeholder="bulan" required
                  value="{{ old($field, $data['riwsehatperkembangan']->$field ?? '') }}" pattern="^-?\d*$" title="Harap masukkan data yang sesuai" />
              </div>
            @endforeach
          </div>
        </div>

        <!-- Riwayat Perkembangan Bahasa -->
        <div class="col-md-12 mt-4">
          <h6>Riwayat Perkembangan Bahasa</h6>
          <div class="row">
            @foreach (['bubbling', 'kata_pertama', 'mengulang_kata', 'kalimat_pertama'] as $field)
              <div class="col-12 col-sm-6 col-md-3">
                <label for="{{ $field }}">{{ ucwords(str_replace('_', ' ', $field)) }}</label>
                <input name="{{ $field }}" class="form-control" id="{{ $field }}" type="text" placeholder="bulan" required
                  value="{{ old($field, $data['riwsehatperkembangan']->$field ?? '') }}" pattern="^-?\d*$" title="Harap masukkan data yang sesuai" />
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <!-- Bagian Catatan Tambahan -->
    <div class="mt-4 mb-3">
      <h5>Catatan Tambahan</h5>
      <textarea class="form-control" id="catatanTambahanForm4" name="catatan_tambahan_form4" rows="4">{{ old('catatan_tambahan_form4', $data['riwsehatperkembangan']->catatan_tambahan ?? '') }}</textarea>
    </div>

    <div class="text-end d-flex justify-content-end gap-2 mt-4">
      <button class="btn btn-secondary me-2" type="button" onclick="stepper.previous()">Sebelumnya</button>
      <button class="btn btn-primary" type="button" onclick="nextStep()">Selanjutnya</button>
    </div>
  </div>
</div>
