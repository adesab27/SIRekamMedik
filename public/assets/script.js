// mengatur tab aktif di navbar
function setActiveTab() {
    // Mengambil semua elemen nav-link
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Menambahkan event listener ke setiap link
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Menghapus kelas 'active' dari semua nav-link
            navLinks.forEach(item => item.classList.remove('active'));
            
            // Menambahkan kelas 'active' pada link yang diklik
            this.classList.add('active');
        });
    });
}

// Memanggil fungsi setActiveTab saat halaman dimuat
window.onload = setActiveTab;


// tambah data 
function handleSubmit(event) {
    event.preventDefault(); // Mencegah reload halaman

    // Ambil nilai dari input
    const namaPasien = document.getElementById('namaPasien').value;
    const tanggalLahir = document.getElementById('tanggalLahir').value;
    const alamatPasien = document.getElementById('alamatPasien').value;
    const nomorHandphone = document.getElementById('nomorHandphone').value;
    const keluhan = document.getElementById('keluhan').value;
    const keperluan = document.getElementById('keperluan').value;

    // Membuat objek data pasien
    const pasienData = {
        nama: namaPasien,
        tanggalLahir: tanggalLahir,
        alamat: alamatPasien,
        nomorHandphone: nomorHandphone,
        keluhan: keluhan,
        keperluan: keperluan
    };

    // Ambil data pasien yang sudah ada dari localStorage
    let pasienList = JSON.parse(localStorage.getItem('pasienList')) || [];

    // Tambahkan pasien baru ke dalam list
    pasienList.push(pasienData);

    // Simpan kembali ke localStorage
    localStorage.setItem('pasienList', JSON.stringify(pasienList));

    // Reset form setelah menyimpan data
    document.querySelector('form').reset();

    // Tampilkan pesan sukses (opsional)
    alert('Data pasien berhasil disimpan!');
}


function handleSubmit(event) {
    event.preventDefault(); // Mencegah pengiriman formulir
    
    // Tampilkan notifikasi
    alert("Data pasien telah disimpan!");

    // Di sini Anda bisa menambahkan kode untuk menyimpan data
    // Misalnya menggunakan fetch untuk mengirim data ke server
}

// hapus data 


// lama kehamilan

function checkPregnancyDuration() {
    const preMatureChecked = document.getElementById("persalinan5").checked;
    const postMatureChecked = document.getElementById("persalinan6").checked;
    const lamaKehamilanContainer = document.getElementById("lamaKehamilanContainer");
    const lamaKehamilanInput = document.getElementById("lamaKehamilan");

    // Tampilkan atau sembunyikan input lama kehamilan
    if (preMatureChecked || postMatureChecked) {
        lamaKehamilanContainer.style.display = "block";
    } else {
        lamaKehamilanContainer.style.display = "none";
        lamaKehamilanInput.value = ""; // Reset input
    }

    // Reset semua checkbox lainnya jika satu di-check
    const checkboxes = document.getElementsByName("persalinan");
    checkboxes.forEach((checkbox) => {
        if (checkbox !== document.activeElement) {
            checkbox.checked = false;
        }
    });
}


// pagination
const dataPasien = [
    { no: 1, nama: "Tegar Rajendra", tanggalLahir: "23/03/19", alamat: "Banjarnegara", noTelp: "080000000000", keluhan: "Belum Bicara", keperluan: "-" },
    { no: 2, nama: "Budi Santoso", tanggalLahir: "15/04/18", alamat: "Jakarta", noTelp: "081234567890", keluhan: "Sakit Kepala", keperluan: "-" },
    { no: 3, nama: "Ani Maulana", tanggalLahir: "10/01/20", alamat: "Bandung", noTelp: "082233445566", keluhan: "Batuk", keperluan: "-" },
    { no: 4, nama: "Rina Wulandari", tanggalLahir: "12/12/19", alamat: "Semarang", noTelp: "085678901234", keluhan: "Demam", keperluan: "-" },
    { no: 5, nama: "Dani Kurniawan", tanggalLahir: "05/02/21", alamat: "Yogyakarta", noTelp: "089876543210", keluhan: "Flu", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    { no: 6, nama: "Fajar Pratama", tanggalLahir: "18/06/22", alamat: "Surabaya", noTelp: "081234123412", keluhan: "Pusing", keperluan: "-" },
    // Tambahkan data pasien lainnya sesuai kebutuhan
];

const rowsPerPage = 7;
let currentPage = 1;

function displayData(page) {
    const tbody = document.getElementById("dataPasienBody");
    tbody.innerHTML = ""; // Kosongkan isi tbody

    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    const paginatedItems = dataPasien.slice(start, end);

    paginatedItems.forEach(item => {
        const row = `
            <tr>
                <td>${item.no}</td>
                <td>${item.nama}</td>
                <td>${item.tanggalLahir}</td>
                <td>${item.alamat}</td>
                <td>${item.noTelp}</td>
                <td>${item.keluhan}</td>
                <td>${item.keperluan}</td>
                <td class="action-icons">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-alt" onclick="deleteData(${item.no})" style="cursor: pointer;"></i>
                    <a href="form1.html" class="icon-link">
                        <i class="fas fa-file-alt"></i>
                    </a>
                </td>
                <td><i class="fas fa-info-circle"></i></td>
            </tr>
        `;
        tbody.innerHTML += row;
    });

    updatePagination(page);
}

function deleteData(no) {
    // Hapus data pasien dari array berdasarkan no
    const index = dataPasien.findIndex(item => item.no === no);
    if (index > -1) {
        dataPasien.splice(index, 1); // Hapus dari array
        displayData(currentPage); // Tampilkan ulang data
    }
}

function updatePagination(page) {
    const pagination = document.getElementById("pagination");
    pagination.innerHTML = ""; // Kosongkan isi pagination

    const totalPages = Math.ceil(dataPasien.length / rowsPerPage);
    const paginationInfo = document.getElementById("paginationInfo");
    paginationInfo.innerText = `Showing ${((page - 1) * rowsPerPage) + 1} to ${Math.min(page * rowsPerPage, dataPasien.length)} of ${dataPasien.length} entries`;

    for (let i = 1; i <= totalPages; i++) {
        const pageItem = document.createElement("li");
        pageItem.className = `page-item ${i === page ? 'active' : ''}`;
        pageItem.innerHTML = `<a class="page-link" href="#" onclick="changePage(${i})">${i}</a>`;
        pagination.appendChild(pageItem);
    }
}

function changePage(page) {
    currentPage = page;
    displayData(currentPage);
}

// Menampilkan data awal
displayData(currentPage);
