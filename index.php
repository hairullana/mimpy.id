<!-- header -->
<?php
    $title = "Mimpy.ID";
    include '_header.php';
?>
<!-- end header -->


<?php if (isset($_SESSION["admin"])) : ?>
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid bg jumbotron-index">
        <div class="container text-center">
            <h1 class="display-1">Mimpy.ID</h1>
            <p class="lead">Solusi untuk Pengangguran Tanpa Mimpi Seperti Anda.</p>
            
            <div class="row text-center mb-3">
                <div class="col-md-3 offset-md-3">
                    <a href="profil_admin.php"><button type="button" class="btn btn-primary btn-block font-weight-bold">Profil Admin</button></a>
                </div>
                <div class="col-md-3">
                    <a href="dashboard.php"><button type="button" class="btn btn-primary btn-block font-weight-bold">Dashboard Admin</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end jumbotron -->
<?php elseif (isset($_POST["perusahaan"])) : ?>
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid bg jumbotron-index">
        <div class="container text-center">
            <h1 class="display-1">Mimpy.ID</h1>
            <p class="lead">Solusi untuk Pengangguran Tanpa Mimpi Seperti Anda.</p>
            
            <div class="row text-center mb-3">
                <div class="col-md-3 offset-md-3">
                    <a href="profil_perusahaan.php"><button type="button" class="btn btn-primary btn-block font-weight-bold">Profil Saya</button></a>
                </div>
                <div class="col-md-3">
                    <a href="buat-loker.php" class="btn btn-primary btn-block font-weight-bold">Buat Loker</a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 offset-md-3">
                    <a href="data-loker_perusahaan.php"><button type="button" class="btn btn-primary btn-block font-weight-bold">Kelola Loker</button></a>
                </div>
                <div class="col-md-3">
                    <a href="data-pelamar_perusahaan.php"><button type="button" class="btn btn-primary btn-block font-weight-bold">Kelola Pelamar</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end jumbotron -->
<?php elseif ($_POST["pelamar"]) : ?>
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid bg jumbotron-index">
        <div class="container text-center">
            <h1 class="display-1">Mimpy.ID</h1>
            <p class="lead">Solusi untuk Pengangguran Tanpa Mimpi Seperti Anda.</p>
            
            <div class="row text-center mb-3">
                <div class="col-md-3 offset-md-3">
                    <a href="profil_pelamar.php"><button type="button" class="btn btn-primary btn-block font-weight-bold">Profil Saya</button></a>
                </div>
                <div class="col-md-3">
                    <a href="edit-cv.php"><button type="button" class="btn btn-primary btn-block font-weight-bold">CV Saya</button></a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 offset-md-3">
                    <a href="data-lamaran_pelamar.php"><button type="button" class="btn btn-primary btn-block font-weight-bold">Kelola Lamaran</button></a>
                </div>
                <div class="col-md-3">
                    <a href="cari-loker.php"><button type="button" class="btn btn-primary btn-block font-weight-bold">Cari Loker Lanjutan</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end jumbotron -->
<?php else : ?>
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid bg jumbotron-index">
        <div class="container text-center">
            <h1 class="display-1">Mimpy.ID</h1>
            <p class="lead">Solusi untuk Pengangguran Tanpa Mimpi Seperti Anda.</p>
            <div class="row center">
                <div class="col text-center">
                    <a href="registrasi.php" type="button" class="btn btn-primary align-content-center">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end jumbotron -->
<?php endif; ?>



<!-- tampilan loker -->
<div class="container">

    <!-- heading -->
    <div class="row">
        <div class="col text-center">
            <h1 class="display3 mb-4">Daftar Lowongan Kerja</h1>
        </div>
    </div>
    <!-- end heading -->

    <!-- search -->
    <form action="">
        <div class="row mx-5">
            <div class="col">
                <div class="form-group">
                    <input class="form-control" type="search" placeholder="Masukkan Keyword" aria-label="Search">
                </div>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
    </form>
    <!-- end search -->


    <!-- list loker -->
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="205" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Kumon Denpasar</h3>
                    <div class="mb-1 text-muted">Jl. Kampus Unud No.99, Kuta Selatan, Badung, Bali</div>
                    <p class="card-text mb-auto">Dibutuhkan segera Guru Matematika SMP, Minimal S1 Matematika</p>
                    <a href="detail-loker.php" class="stretched-link">read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="205" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Kumon Denpasar</h3>
                    <div class="mb-1 text-muted">Jl. Kampus Unud No.99, Kuta Selatan, Badung, Bali</div>
                    <p class="card-text mb-auto">Dibutuhkan segera Guru Matematika SMP, Minimal S1 Matematika</p>
                    <a href="detail-loker.php" class="stretched-link">read more</a>
                </div>
            </div>
        </div>   
    </div>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="205" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Kumon Denpasar</h3>
                    <div class="mb-1 text-muted">Jl. Kampus Unud No.99, Kuta Selatan, Badung, Bali</div>
                    <p class="card-text mb-auto">Dibutuhkan segera Guru Matematika SMP, Minimal S1 Matematika</p>
                    <a href="detail-loker.php" class="stretched-link">read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="205" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Kumon Denpasar</h3>
                    <div class="mb-1 text-muted">Jl. Kampus Unud No.99, Kuta Selatan, Badung, Bali</div>
                    <p class="card-text mb-auto">Dibutuhkan segera Guru Matematika SMP, Minimal S1 Matematika</p>
                    <a href="detail-loker.php" class="stretched-link">read more</a>
                </div>
            </div>
        </div>   
    </div><div class="row mb-2">
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="205" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Kumon Denpasar</h3>
                    <div class="mb-1 text-muted">Jl. Kampus Unud No.99, Kuta Selatan, Badung, Bali</div>
                    <p class="card-text mb-auto">Dibutuhkan segera Guru Matematika SMP, Minimal S1 Matematika</p>
                    <a href="detail-loker.php" class="stretched-link">read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="205" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Kumon Denpasar</h3>
                    <div class="mb-1 text-muted">Jl. Kampus Unud No.99, Kuta Selatan, Badung, Bali</div>
                    <p class="card-text mb-auto">Dibutuhkan segera Guru Matematika SMP, Minimal S1 Matematika</p>
                    <a href="detail-loker.php" class="stretched-link">read more</a>
                </div>
            </div>
        </div>   
    </div>
</div>


<!-- pagination -->
<div class="row">
    <div class="col">
        <nav aria-label="...">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item" aria-current="page"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- end pagination -->


<!-- footer -->
<?php include '_footer.php'; ?>
<!-- end footer -->