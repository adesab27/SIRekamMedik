<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">-->
    <style>
        .text-center {
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .m-2 {
            margin: 10px;
        }
    </style>
    <title>Cetak data Observasi</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Laporan Hasil Observasi</h1>
        <p>Tanggal Dibuat: {{ $observation->created_at }}</p>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 100%;">
                        <h2 class="m-2">Data Anak</h2>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Nama Anak</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->nama_anak}}</p>
                </td>

            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Tempat Lahir</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->tempat_lahir}}</p>
                </td>

            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Nama Panggilan</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->nama_panggilan}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Tanggal Lahir</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->tanggal_lahir}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Jenis Kelamin</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->jenis_kelamin}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Umur Anak</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->umur_anak}}</p>
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 100%;">
                        <h2 class="m-2">Data Wali</h2>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Nama Ayah</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->nama_ayah}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Nama Ibu</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->nama_ibu}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Usia Ayah</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->usia_ayah}} Tahun</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Usia Ibu</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->usia_ibu}} Tahun</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Agama Ayah</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->agama_ayah}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Agama Ibu</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->agama_ibu}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Pekerjaan Ayah</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->pekerjaan_ayah}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Pekerjaan Ibu</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->pekerjaan_ibu}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Alamat Lengkap</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->alamat_lengkap}}</p>
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 100%;">
                        <h2 class="m-2">Data Tambahan</h2>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Diagnosa diberikan oleh</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->diagnosaOleh}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Diusia berapa diagnosa diberikan</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->diagnosaUsia}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Diagnosa yang diberikan</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->diagnosaDiberikan}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Nama Saudara Kandung</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->namaSaudara}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Usia Saudara Kandung</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->usiaSaudara}} Tahun</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Jenis Kelamin Saudara Kandung</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->jenisKelaminSaudara}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Special Need Saudara Kandung</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->specialNeedSaudara}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Nama sekolah</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->namaSekolah}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Kelas</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->kelas}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Nama Guru</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->namaGuru}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Telp</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->telpGuru}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Jenis Terapi</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->jenisTerapi}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Nama Terapis / klinik</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->namaTerapis}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Durasi</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->durasiTerapi}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Telp</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->telpTerapis}}</p>
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 100%;">
                        <h2 class="m-2">Riwayat Kehamilan dan Kelahiran</h2>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Usia Ibu Ketika Hamil</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->usia_ibu}} Tahun</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Berat Badan Ibu Ketika Hamil</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->berat_badan_ibu}} Kg</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Hasil Pemeriksaan TORSCH (Jika Ada)</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->hasil_pemeriksaan}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Keluhan Saat Hamil</p>
                </td>
                <td style="width: 50%;">
                    {!!$observation->keluhan_keguguran == 0 ? '' : 'Pernah Mengalami Keguguran <br>'!!}
                    {!!$observation->keluhan_stress == 0 ? '' : 'Mengalami stress psikologis, sakit atau komplikasi <br>'!!}
                    {!!$observation->keluhan_obat == 0 ? '' : 'Mengkonsumsi obat-obatan selama kehamilan <br>'!!}
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Proses Persalinan</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->proses_persalinan}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Berat Badan</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->berat_badan_lahir}} Kg</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Panjang Badan</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->panjang_badan_lahir}} Cm</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Lingkar Kepala</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->lingkar_kepala_lahir}} Cm</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Skor APGAR</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->skor_apgar}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Kondisi Lahir</p>
                </td>
                <td style="width: 50%;">
                    {!!$observation->komplikasi_kelahiran == 0 ? '' : 'Komplikasi / Kesulitan selama proses kelahiran <br>'!!}
                    {!!$observation->menangis_lahir == 0 ? '' : 'Langsung menangis ketika lahir <br>'!!}
                    {!!$observation->perawatan_khusus == 0 ? '' : 'Memerlukan perawatan khusus setelah masa kelahiran <br>'!!}
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Catatan Tambahan</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->catatan_tambahan}}</p>
                </td>
            </tr>
        </table>

        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 100%;">
                        <h2 class="m-2">Kesehatan dan Perkembangan</h2>
                    </td>
                </tr>
                <tr>
                    <td style="width: 100%;">
                        <h4 class="m-2">Status Kesehatan Anak</h4>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Status Kesehatan Anak</p>
                </td>
                <td style="width: 50%;">
                    {!!$observation->penyakit_serius == 0 ? '' : 'Penyakit Serius <br>'!!}
                    {!!$observation->benturan_kepala == 0 ? '' : 'Benturan Di kepala <br>'!!}
                    {!!$observation->dirawat_rs == 0 ? '' : 'Dirawat di RS <br>'!!}
                    {!!$observation->pengobatan_jangka_panjang == 0 ? '' : 'Pernah atau sedang mendapat pengobatan jangka panjang <br>'!!}
                    {!!$observation->riwayat_kejang == 0 ? '' : 'Memiliki riwayat kejang <br>'!!}
                    {!!$observation->riwayat_flu == 0 ? '' : 'Memiliki riwayat Flu <br>'!!}
                    {!!$observation->riwayat_pneumonia == 0 ? '' : 'Memiliki riwayat pneumonia <br>'!!}
                    {!!$observation->masalah_perkembangan == 0 ? '' : 'Masalah perkembangan pada pada usia 0 - 2 tahun <br>'!!}
                    {!!$observation->riwayat_alergi == 0 ? '' : 'Riwayat alergi <br>'!!}
                    {!!$observation->infeksi_telinga == 0 ? '' : 'Infeksi telinga <br>'!!}
                    {!!$observation->diet_suplemen == 0 ? '' : 'Melakukan diet / suplemen tertentu <br>'!!}
                    {!!$observation->menggunakan_kacamata == 0 ? '' : 'Menggunakan kacamata <br>'!!}
                    {!!$observation->riwayat_asma == 0 ? '' : 'Memiliki riwayat Asma <br>'!!}
                    {!!$observation->riwayat_sinusitis == 0 ? '' : 'Memiliki riwayat sinusitis <br>'!!}
                    {!!$observation->tes_pendengaran_penglihatan == 0 ? '' : 'Melakukan tes (pendengaran / penglihatan) <br>'!!}
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 100%;">
                        <h4 class="m-2">Perkembangan Anak</h4>
                    </td>
                </tr>
                <tr>
                    <td style="width: 100%;">
                        <h5 class="m-2">Riwayat Perkembangan Motorik</h5>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Tengkurap</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->tengkurap}} Bulan</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Duduk</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->duduk}} Bulan</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Merangkak</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->merangkak}} Bulan</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Berdiri</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->berdiri}} Bulan</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Berjalan</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->berjalan}} Bulan</p>
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 100%;">
                        <h5 class="m-2">Riwayat Perkembangan Bahasa</h5>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Bubbling</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->bubbling}} Bulan</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Kata Pertama</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->kata_pertama}} Bulan</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Mengulang kata</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->mengulang_kata}} Bulan</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Kalimat pertama</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->kalimat_pertama}} Bulan</p>
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Catatan Tambahan
                    </p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->catatan_tambahan}}</p>
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="width: 100%;">
                        <h2 class="m-2">Pola Kebiasaan Anak</h2>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Apakah anak memiliki gangguan pola tidur? Jam berapa anak tidur malam?</p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->gangguan_pola_tidur}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Berapa kali dalam semalam anak terbangun? Apa yang anak kerjakan ketika terbangun?
                    </p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->terbangun_malam}}</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">

                    <p class="m-2">Kebiasaan yang dimiliki anak</p>
                </td>
                <td style="width: 50%;">
                    {!!$observation->kemampuan_sedot_kuat == 0 ? '' : 'Kemampuan sedot yang kuat di masa bayi <br>'!!}
                    {!!$observation->riwayat_reflux == 0 ? '' : 'Memiliki riwayat sering muntah, tersedak (reflux) <br>'!!}
                    {!!$observation->masalah_nafsu_makan == 0 ? '' : 'Memiliki riwayat masalah nafsu makan atau sulit menaikkan Berat badan <br>'!!}
                    {!!$observation->menghindari_pemilihan_makanan == 0 ? '' : 'Memiliki kecenderungan menghindari / memilih makanan berdasarkan karakteristik tertentu <br>'!!}
                </td>
            </tr>
            <tr>
                <td style="width: 20%;">
                    <p class="m-2">Catatan Tambahan </p>
                </td>
                <td style="width: 50%;">
                    <p class="m-2">{{$observation->catatan_tambahan}}</p>
                </td>
            </tr>
        </table>
        <div style="margin-top: 20px; display: flex; justify-content: space-between;">
            <div style="text-align: right;">
                <p>Banjarnegara, {{ now()->format('d F Y') }}</p>
            </div>
            <div style="text-align: right;">
                <p>Kepala Klinik Rumah Terapi Pelangi Insan</p>
            </div>
        </div>
</body>

</html>