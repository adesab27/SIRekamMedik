<ul class="nav nav-tabs justify-content-center w-100">
    <li class="nav-item">
        <a class="nav-link {{ Request::is('registrasi') ? 'active' : '' }}" href="{{ url('/registrasi') }}">Pasien Baru</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('datapasien') ? 'active' : '' }}" href="{{ url('/datapasien') }}">Data Pasien</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('laporanpasien') ? 'active' : '' }}" href="{{ url('/laporanpasien') }}">Laporan</a>
    </li>
</ul>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll('.nav-link');
    const currentPath = window.location.pathname;

    navLinks.forEach(link => {
      if (link.href.includes(currentPath)) {
        link.classList.add('active');
      }
    });
  });
</script>