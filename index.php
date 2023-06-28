<?php
# Memulakan fungsi SESSION
session_start();

# Memanggil fail header.php dan fail fungsi.php
include('indheader.php');
include('fungsi.php');
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="indextables.css">

<!-- Memaparkan pautan (hyperlink) -->
        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><i class="bi bi-bullseye"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="nav nav-tabs" style="dis;">
                            <li class="nav-item">
                                <a class="nav-link" href="peserta-login-borang.php">Participant Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="hakim-login-borang.php">Judge Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="peserta-signup-borang.php">Participant Registration</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
<hr>
<p>Competition Enquiry</p>
<li>Every participant can only have one ENTRY only</li>
<li>Upload your short video to youtube and submit the link to the video
    during registration
</li>
<li>There are 2 categories namely school and individual.</li>
<li>For the individual category, the winner of places 1 to 5 will receive a medal and certificate of appreciation</li>
<li>Every participant will receive a certificate to commend of their efforts in this competition.</li>
<li>For the school category, there is no limit for students to submit entries</li>
<li>The winner will be calculated from the total points accumulated by the students from the school who participated in the competition</li>
<li>Results will only be displayed after all participants have been evaluated</li>
<hr>

<div class="t_title">
    Individual Results</div>
<?PHP
$k = semak();
if ($k == "Semua peserta telah dinilai.") {
    keputusan_individu();
} else {
    echo "<br>The results are being tabulated";
}

?>
<hr>
<div class="t_title">
    School Results</div>
<?php
$k = semak();
if ($k == "Semua peserta telah dinilai.") {
    keputusan_sekolah();
} else {
    echo "<br>The results are being tabulated";
}
?>
</div>

<?php include('indfooter.php'); ?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>