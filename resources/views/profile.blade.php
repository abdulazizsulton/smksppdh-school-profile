@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-5 fw-bold">Profil SMK Swasta Dar El Hikmah Pekanbaru</h2>

    <!-- Tentang Sekolah -->
    <div class="row mb-5 align-items-center">
        <div class="col-md-6">
            <img src="{{ asset('storage/images/smks.jpg') }}" alt="Foto Sekolah" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
    <p><strong>SMK Swasta Dar El Hikmah Pekanbaru</strong> adalah sekolah menengah kejuruan di bawah naungan Yayasan Nur Iman Pekanbaru. Sekolah ini mengintegrasikan pendidikan kejuruan dengan sistem pesantren berasrama untuk membentuk pribadi yang religius dan profesional.</p>

    <p><strong>Akreditasi:</strong> SMK Swasta Dar El Hikmah Pekanbaru telah meraih <span class="text-success fw-bold">Akreditasi A</span> dari BAN-S/M sebagai pengakuan atas mutu dan kualitas pendidikannya.</p>

    <p>Mengusung semangat pendidikan berbasis Islam, SMKS ini memiliki pendekatan pembelajaran berbasis kurikulum nasional dan pondok pesantren.</p>
</div>

    </div>

    <!-- PROGRAM KEAHLIAN -->
    <div class="mb-5">
        <h4 class="fw-bold text-primary mb-3">PROGRAM KEAHLIAN</h4>
        <div class="row g-4">
            @php
                $programs = [
                    ['img' => 'storage/images/dkv.jpg', 'title' => 'Design Komunikasi Visual', 'desc' => 'Program ini berfokus pada pengembangan kemampuan di bidang desain grafis, ilustrasi, fotografi, animasi, serta media interaktif. Lulusan DKV mampu menciptakan karya desain yang efektif untuk menyampaikan pesan melalui media cetak, digital, maupun multimedia, dengan peluang karier di bidang periklanan, branding, media, animasi, dan industri kreatif lainnya.'],
                    ['img' => 'storage/images/akp02.jpg', 'title' => 'Asisten Keperawatan', 'desc' => 'Program ini bertujuan menghasilkan lulusan yang terampil dalam mendukung pelayanan kesehatan, terutama perawatan pasien. Kompetensi utamanya meliputi keperawatan dasar, pemahaman anatomi-fisiologi, asistensi tindakan medis, komunikasi efektif, serta dokumentasi medis. Lulusan memiliki peluang kerja di rumah sakit, klinik, puskesmas, panti jompo, dan layanan home care.'],
                    ['img' => 'storage/images/akl.jpg', 'title' => 'Akuntansi dan Keuangan Lembaga', 'desc' => 'Program ini bertujuan untuk menghasilkan lulusan yang kompeten di bidang pengelolaan keuangan dan berfokus pada penguasaan keterampilan akuntansi, pengelolaan keuangan, penyusunan laporan keuangan, perpajakan, dan administrasi keuangan. Lulusan memiliki peluang kerja sebagai staf akuntansi, analis keuangan, administrasi perbankan, atau wirausaha di bidang keuangan.'],
                ];
            @endphp
            @foreach ($programs as $p)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset($p['img']) }}" class="card-img-top program-img" alt="{{ $p['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p['title'] }}</h5>
                            <p class="card-text">{{ $p['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- PROGRAM UNGGULAN -->
    <div class="mb-5">
        <h4 class="fw-bold text-primary mb-3">PROGRAM UNGGULAN SMKS DEHA</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">📘 Boarding School</li>
            <li class="list-group-item">📖 Tahfidz</li>
            <li class="list-group-item">📚 Kitab Kuning</li>
        </ul>
    </div>

    <!-- PROGRAM KEJURUAN -->
    <div class="mb-5">
        <h4 class="fw-bold text-primary mb-3">PROGRAM KEJURUAN SMKS DEHA</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">🔧 PKL 6 Bulan</li>
            <li class="list-group-item">🏭 Kunjungan Industri</li>
            <li class="list-group-item">👨‍🏫 Guru Tamu yang Kompeten dalam Bidangnya</li>
        </ul>
    </div>

    <!-- FASILITAS -->
    <div class="mb-5">
        <h4 class="fw-bold text-primary mb-3">FASILITAS SMKS DEHA</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">🌐 Full Akses Wifi</li>
            <li class="list-group-item">❄️ Ruangan Belajar Full AC</li>
            <li class="list-group-item">💻 Laptop/Tablet</li>
            <li class="list-group-item">🏫 Ruangan Praktek Setiap Jurusan</li>
        </ul>
    </div>

    <!-- VISI MISI TUJUAN -->
    <div class="p-5 mt-5 rounded" style="background-color: #f2f8ff;">
        <h3 class="fw-bold text-center text-primary mb-4">VISI, MISI & TUJUAN</h3>

        <!-- Visi -->
        <div class="mb-4">
            <h5 class="fw-bold text-secondary">VISI</h5>
            <p class="mb-0">Aktif, Kreatif, Antusias, Bersih dan Religius (A K B A R)</p>
        </div>

        <!-- Misi -->
        <div class="mb-4">
            <h5 class="fw-bold text-secondary">MISI</h5>
            <p>Dalam upaya mewujudkan visi tersebut, Misi SMKS Darel Hikmah adalah:</p>
            <ul class="list-unstyled ps-3">
                @php
                    $misi = [
                        'Mendorong aktifitas dan kreatifitas secara optimal kepada seluruh komponen sekolah terutama para siswa',
                        'Mengoptimalkan pembelajaran dalam rangka meningkatkan keterampilan siswa supaya mereka memiliki prestasi yang dapat dibanggakan.',
                        'Melaksanakan pembelajaran dan bimbingan secara efektif sehingga kecerdasan siswa terus diasah agar terciptanya kecerdasan intelektual dan emosional yang mantap.',
                        'Antusias terhadap perkembangan dan kemajuan ilmu pengetahuan dan teknologi.',
                        'Menanamkan cinta kebersihan dan keindahan kepada semua komponen sekolah.',
                        'Menimbulkan penghayatan yang dalam dan pengalaman yang tinggi terhadap ajaran agama (Religi) sehingga tercipta kematangan dalam berfikir dan bertindak.',
                    ];
                @endphp
                @foreach ($misi as $m)
                    <li class="mb-2">✔️ {{ $m }}</li>
                @endforeach
            </ul>
        </div>

        <!-- Tujuan -->
        <div>
            <h5 class="fw-bold text-secondary">TUJUAN</h5>
            <p>Tujuan SMKS Darel Hikmah Pekanbaru dirancang untuk menciptakan lingkungan pendidikan yang holistik dan berkesinambungan:</p>
            <ul class="list-unstyled ps-3">
                @php
                    $tujuan = [
                        'Meningkatkan Kualitas Akademis: Menciptakan sistem pembelajaran yang efektif dan inovatif untuk meningkatkan prestasi akademis siswa.',
                        'Pembentukan Karakter Mulia: Membentuk pribadi yang berakhlak mulia, disiplin, jujur, dan bertanggung jawab.',
                        'Pengembangan Keterampilan Sosial: Membekali siswa dengan keterampilan kerjasama, komunikasi, dan kepemimpinan.',
                        'Peningkatan Keterampilan Teknologi: Mengintegrasikan teknologi dalam proses belajar menghadapi dunia digital.',
                        'Penguatan Kompetensi Kejuruan: Menyediakan program kejuruan yang relevan dan berkualitas.',
                        'Peningkatan Kepedulian Sosial: Menumbuhkan kepedulian terhadap lingkungan dan masyarakat.',
                        'Mewujudkan Lingkungan Pembelajaran yang Inklusif: Mendukung semua siswa mencapai potensi terbaik.',
                        'Menjalin Kerjasama yang Kuat: Membangun hubungan dengan orang tua, alumni, industri, dan masyarakat.',
                    ];
                @endphp
                @foreach ($tujuan as $t)
                    <li class="mb-2">🎯 {{ $t }}</li>
                @endforeach
            </ul>
            <p class="mt-3">Dengan tujuan-tujuan tersebut, SMKS Darel Hikmah Pekanbaru berkomitmen mencetak generasi unggul, berkarakter kuat, dan siap menghadapi tantangan masa depan.</p>
        </div>
    </div>
</div>
@endsection
