<div id="datakesehatan-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
  <div class="form-section">
    <div class="mt-4">
      <h5>Status Kesehatan Anak</h5>
      <p>(Kondisi atau kejadian yang dialami anak)</p>
      <div class="row">
      <div class="col-md-6">
        <?php $count = 0; ?>
        @foreach ($data['form4'] as $fo)
          @if($count == 9)
            @break
          @else
            @php
              // Pastikan riwSehatPerkembangan sudah didefinisikan dan tidak null
              $riwSehatPerkembanganArray = isset($riwSehatPerkembangan) && $riwSehatPerkembangan ? $riwSehatPerkembangan->toArray() : [];
            @endphp
            <div class="form-check">
              <input class="form-check-input" id="{{$fo->name}}" name="{{$fo->name}}" type="checkbox" 
                @if(in_array($fo->id, $riwSehatPerkembanganArray)) checked @endif />
              <label class="form-check-label" for="{{$fo->name}}">
                {{$fo->value}}  <!-- Menampilkan nilai yang diambil dari database -->
              </label>
            </div>
          @endif
          <?php  $count++; ?>
        @endforeach
      </div>

    <div class="col-md-6">
      @foreach ($data['form4'] as $fo)
        @if ($loop->iteration > 9)
          @php
            // Pastikan riwSehatPerkembangan sudah didefinisikan dan tidak null
            $riwSehatPerkembanganArray = isset($riwSehatPerkembangan) && $riwSehatPerkembangan ? $riwSehatPerkembangan->toArray() : [];
          @endphp
          <div class="form-check">
            <input class="form-check-input" id="{{$fo->name}}" name="{{$fo->name}}" type="checkbox" 
              @if(in_array($fo->id, $riwSehatPerkembanganArray)) checked @endif />
            <label class="form-check-label" for="{{$fo->name}}">
              {{$fo->value}}  <!-- Menampilkan nilai yang diambil dari database -->
            </label>
          </div>
        @else
          @continue
        @endif
      @endforeach
    </div>
  </div>

    </div>

    <div class="mt-4">
      <h5>Perkembangan Anak</h5>
      <div class="row">
        <div class="col-md-12">
          <h6>Riwayat Perkembangan Motorik</h6>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-2">
              <label for="tengkurap">Tengkurap</label>
              <input name="tengkurap" class="form-control" id="tengkurap" type="text" placeholder="bulan" required
                value="{{ $data['RiwSehatPerkembangan']->tengkurap ?? '' }}" pattern="^-?\d*$" title="Hanya angka dan tanda minus yang diperbolehkan" />
            </div>
            <div class="col-12 col-sm-6 col-md-2">
              <label for="duduk">Duduk</label>
              <input name="duduk" class="form-control" id="duduk" type="text" placeholder="bulan" required
                value="{{ $data['RiwSehatPerkembangan']->duduk ?? '' }}" pattern="^-?\d*$" title="Harap masukkan data yang sesuai" />
            </div>
            <div class="col-12 col-sm-6 col-md-2">
              <label for="merangkak">Merangkak</label>
              <input name="merangkak" class="form-control" id="merangkak" type="text" placeholder="bulan" required
                value="{{ $data['RiwSehatPerkembangan']->merangkak ?? '' }}" pattern="^-?\d*$" title="Harap masukkan data yang sesuai" />
            </div>
            <div class="col-12 col-sm-6 col-md-2">
              <label for="berdiri">Berdiri</label>
              <input name="berdiri" class="form-control" id="berdiri" type="text" placeholder="bulan" required
                value="{{ $data['RiwSehatPerkembangan']->berdiri ?? '' }}" pattern="^-?\d*$" title="Harap masukkan data yang sesuai" />
            </div>
            <div class="col-12 col-sm-6 col-md-2">
              <label for="berjalan">Berjalan</label>
              <input name="berjalan" class="form-control" id="berjalan" type="text" placeholder="bulan" required
                value="{{ $data['RiwSehatPerkembangan']->berjalan ?? '' }}" pattern="^-?\d*$" title="Harap masukkan data yang sesuai" />
            </div>
          </div>
        </div>

        <div class="col-md-12 mt-4">
          <h6>Riwayat Perkembangan Bahasa</h6>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <label for="bubbling">Bubbling</label>
              <input name="bubbling" class="form-control" id="bubbling" type="text" placeholder="bulan" required
                value="{{ $data['RiwSehatPerkembangan']->bubbling ?? '' }}" pattern="^-?\d*$" title="Harap masukkan data yang sesuai" />
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <label for="kataPertama">Kata Pertama</label>
              <input name="kata_pertama" class="form-control" id="kataPertama" type="text" placeholder="bulan" required
                value="{{ $data['RiwSehatPerkembangan']->kataPertama ?? '' }}" pattern="^-?\d*$" title="Harap masukkan data yang sesuai" />
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <label for="mengulangKata">Mengulang kata</label>
              <input name="mengulang_kata" class="form-control" id="mengulangKata" type="text" placeholder="bulan"
                required value="{{ $data['RiwSehatPerkembangan']->mengulangKata ?? '' }}" pattern="^-?\d*$" title="Harap masukkan data yang sesuai" />
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <label for="kalimatPertama">Kalimat pertama</label>
              <input name="kalimat_pertama" class="form-control" id="kalimatPertama" type="text" placeholder="bulan"
                required value="{{ $data['RiwSehatPerkembangan']->kalimatPertama ?? '' }}" pattern="^-?\d*$" title="Harap masukkan data yang sesuai" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4 mb-3">
      <h5>Catatan Tambahan</h5>
      <textarea class="form-control" id="catatanTambahan" name="catatan_tambahan_form4" rows="3" required>{{ $data['RiwSehatPerkembangan']->catatan_tambahan ?? '' }}</textarea>
    </div>

    <div class="text-end d-flex justify-content-end gap-2 mt-4">
      <button class="btn btn-secondary me-2" type="button" onclick="stepper.previous()">Sebelumnya</button>
      <button class="btn btn-primary" type="button" onclick="nextStep()">Selanjutnya</button>
    </div>
  </div>
</div>
