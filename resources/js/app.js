import './bootstrap';

// Mengatur tab aktif di navbar
function setActiveTab() {
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });
}

window.onload = setActiveTab;

// Fungsi untuk menangani penyimpanan data pasien
function handleSubmit(event) {
    event.preventDefault();
    const namaPasien = document.getElementById('namaPasien').value;
    const tanggalLahir = document.getElementById('tanggalLahir').value;
    const alamatPasien = document.getElementById('alamatPasien').value;
    const nomorHandphone = document.getElementById('nomorHandphone').value;
    const keluhan = document.getElementById('keluhan').value;
    const keperluan = document.getElementById('keperluan').value;

    const pasienData = {
        nama: namaPasien,
        tanggalLahir: tanggalLahir,
        alamat: alamatPasien,
        nomorHandphone: nomorHandphone,
        keluhan: keluhan,
        keperluan: keperluan
    };

    let pasienList = JSON.parse(localStorage.getItem('pasienList')) || [];
    pasienList.push(pasienData);
    localStorage.setItem('pasienList', JSON.stringify(pasienList));
    document.querySelector('form').reset();
    alert('Data pasien berhasil disimpan!');
}

// Fungsi untuk menampilkan lama kehamilan berdasarkan pilihan
function checkPregnancyDuration() {
    const preMatureChecked = document.getElementById("persalinan5").checked;
    const postMatureChecked = document.getElementById("persalinan6").checked;
    const lamaKehamilanContainer = document.getElementById("lamaKehamilanContainer");
    const lamaKehamilanInput = document.getElementById("lamaKehamilan");

    if (preMatureChecked || postMatureChecked) {
        lamaKehamilanContainer.style.display = "block";
    } else {
        lamaKehamilanContainer.style.display = "none";
        lamaKehamilanInput.value = "";
    }

    const checkboxes = document.getElementsByName("persalinan");
    checkboxes.forEach((checkbox) => {
        if (checkbox !== document.activeElement) {
            checkbox.checked = false;
        }
    });
}

// delete 
function confirmDelete(event) {
    const userConfirmed = confirm("Are you sure you want to delete this data?");
    if (userConfirmed) {
        alert("Data will be deleted."); // Show alert confirming deletion
        return true; // Allow form submission
    } else {
        event.preventDefault(); // Prevent form submission if the user cancels
        alert("Data deletion canceled."); // Show alert canceling deletion
        return false;
    }
}
