<div id="datakesehatan-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
  <div class="form-section">
    <div class="mt-4">
      <h5>Status Kesehatan Anak</h5>
      <p>(Kondisi atau kejadian yang dialami anak)</p>
      <div class="row">
        <div class="col-md-6">
          <?php $count = 0; ?>
          @foreach ($form4 as $fo)
          @if($count == 9)
          @break
          @else
          <div class="form-check">
            <input
              class="form-check-input"
              id="{{$fo->name}}"
              name="{{$fo->name}}"
              type="checkbox" />
            <label class="form-check-label" for="{{$fo->name}}">
              {{$fo->value}}
            </label>
          </div>
          @endif
          <?php $count++; ?>
          @endforeach
        </div>
        <div class="col-md-6">
          @foreach ($form4 as $fo)
          @if ($loop->iteration > 9)
          <div class="form-check">
            <input
              class="form-check-input"
              id="{{$fo->name}}"
              name="{{$fo->name}}"
              type="checkbox" />
            <label class="form-check-label" for="{{$fo->name}}">
              {{$fo->value}}
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
              <input
                name="tengkurap"
                class="form-control"
                id="tengkurap"
                placeholder="Bulan"
                type="text" required />
            </div>
            <div class="col-12 col-sm-6 col-md-2">
              <label for="duduk">Duduk</label>
              <input
                name="duduk"
                class="form-control"
                id="duduk"
                placeholder="Bulan"
                type="text" required />
            </div>
            <div class="col-12 col-sm-6 col-md-2">
              <label for="merangkak">Merangkak</label>
              <input
                name="merangkak"
                class="form-control"
                id="merangkak"
                placeholder="Bulan"
                type="text" required />
            </div>
            <div class="col-12 col-sm-6 col-md-2">
              <label for="berdiri">Berdiri</label>
              <input
                name="berdiri"
                class="form-control"
                id="berdiri"
                placeholder="Bulan"
                type="text" required />
            </div>
            <div class="col-12 col-sm-6 col-md-2">
              <label for="berjalan">Berjalan</label>
              <input
                name="berjalan"
                class="form-control"
                id="berjalan"
                placeholder="Bulan"
                type="text" required />
            </div>
          </div>
        </div>
        <div class="col-md-12 mt-4">
          <h6>Riwayat Perkembangan Bahasa</h6>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <label for="bubbling">Bubbling</label>
              <input
                name="bubbling"
                class="form-control"
                id="bubbling"
                placeholder="Bulan"
                type="text" required />
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <label for="kataPertama">Kata Pertama</label>
              <input
                name="kata_pertama"
                class="form-control"
                id="kataPertama"
                placeholder="Bulan"
                type="text" required />
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <label for="mengulangKata">Mengulang kata</label>
              <input
                name="mengulang_kata"
                class="form-control"
                id="mengulangKata"
                placeholder="Bulan"
                type="text" required />
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <label for="kalimatPertama">Kalimat pertama</label>
              <input
                name="kalimat_pertama"
                class="form-control"
                id="kalimatPertama"
                placeholder="Bulan"
                type="text" required />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4 mb-3">
      <h5>Catatan Tambahan</h5>
      <textarea class="form-control" id="catatanTambahan" name="catatan_tambahan_form4" rows="3" required></textarea>
    </div>

    <div class="text-end d-flex justify-content-end gap-2 mt-4">
      <button class="btn btn-secondary me-2" type="button" onclick="stepper.previous()">Sebelumnya</button>
      <button class="btn btn-primary" type="button" onclick="nextStep()">Selanjutnya</button>
    </div>
  </div>
</div>
