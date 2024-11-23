<div id="datakesehatan-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
  <div class="form-section">
        <div class="mt-4">
          <h5>Status Kesehatan Anak</h5>
          <p>(Kondisi atau kejadian yang dialami anak)</p>
          <div class="row">
            <div class="col-md-6">
              <?php $count = 0;?>
              @foreach ($form4 as $fo)
              @if ($count == 8)
              @break
              @else
              <div class="form-check">
                <input class="form-check-input" id="{{$fo->name}}" name="{{$fo->name}}" type="checkbox" />
                <label class="form-check-label" for="{{$fo->name}}">{{$fo->value}}</label>
              </div>
              @endif
              <?php $count++;?>
              @endforeach
            </div>
            <div class="col-md-6">
              @foreach ($form4 as $fo)
              @if ($loop->iteration > 8)
              <div class="form-checkbox">
                <input class="form-check-input" id="{{$fo->name}}" type="checkbox"/>
                <label class="form-check-label" for="{{$fo->name}}">{{$fo->value}}></label>
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
              <dfclass="d-flex justify-content-between">
                <div>
                  <label for="tengkurap"> Tengkurap </label>
                  <input
                    class="form-control"
                    id="tengkurap"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="duduk"> Duduk </label>
                  <input
                    class="form-control"
                    id="duduk"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="merangkak"> Merangkak </label>
                  <input
                    class="form-control"
                    id="merangkak"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="berdiri"> Berdiri </label>
                  <input
                    class="form-control"
                    id="berdiri"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="berjalan"> Berjalan </label>
                  <input
                    class="form-control"
                    id="berjalan"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-4">
              <h6>Riwayat Perkembangan Bahasa</h6>
              <div class="d-flex justify-content-between">
                <div>
                  <label for="bubbling"> Bubbling </label>
                  <input
                    class="form-control"
                    id="bubbling"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="kataPertama"> Kata Pertama </label>
                  <input
                    class="form-control"
                    id="kataPertama"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="mengulangKata"> Mengulang kata </label>
                  <input
                    class="form-control"
                    id="mengulangKata"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
                <div>
                  <label for="kalimatPertama"> Kalimat pertama </label>
                  <input
                    class="form-control"
                    id="kalimatPertama"
                    placeholder="Bulan"
                    type="text"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <h5>Catatan Tambahan</h5>
          <textarea class="form-control w-100" rows="4"></textarea>
        </div>
        <div class="text-end">
        <button class="btn btn-secondary me-2" type="button" onclick="stepper.previous()">Sebelumnya</button>
      <button class="btn btn-primary" type="button" onclick="nextStep()">Selanjutnya</button>
        </div>
    </div>
</div>