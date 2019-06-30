<!DOCTYPE html>
<html>
<head>
    <title>Al Qur'an - Juz 'Amma</title>
    <meta charset="utf-8">
    <link rel="icon" type="img/x-icon" href="aset/image/Quran2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 user-scalable=no">
    <meta name="author" content="kelompok iii rpl 2019">
    <meta name="keyword" content="alquran,qur'an,koran,al-quran,baca quran,baca alquran">
    <meta name="description" content="dengan QuranQue membaca qur'an dengan mudah">
    <link rel="stylesheet" type="text/css" href="aset/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="aset/style.css">
    <link rel="stylesheet" type="text/css" href="aset/js/animate/animate.min.css">
    <script type="text/javascript" src="aset/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="aset/js/popper.min.js"></script>
    <script type="text/javascript" src="aset/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>
    <body>
        <div class="wrap-container">
        <div class="container">
            <nav class="navbar navbar-weedid navbar-expand-sm navbar-light">
                <a href="#" class="navbar-brand"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menukita">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menukita">
                    <ul class="navbar-nav nav-li-weedid ml-auto">
                        <li><a class="nav-link" href="index.php">Indonesia</a></li>
                        <li><a class="nav-link" href="index2.php">English</a></li>
                    </ul>
                </div>
            </nav>
            <div class="row">
                <div class="col-md-12 home-weedid text-center animated fadeInDownBig delay-1s">
                    <div class="showcase d-md-block">
                        <img src="aset/image/Quran2.png" />
                    </div>
                    <div class="row-padding animated bounceInLeft delay-2s">
                        <a href="ian.php" class="btn btn-lg btn-primary">Ayo Membaca</a><br><br>
                    </div>
                </div>
            </div>
                <div class="row border-line">
        <div class="col-md-12">
            <div class="card card-floating">
                <div class="card-body card-padding d-md-flex align-items-center">
                    <div><h5 class="card-title no-margin">Sudahkah anda baca Qur'an hari ini?</h5>
                        <p class="no-margin text-muted">Ikhwahfillah, Semoga Aplikasi Juz 'amma ini dapat membantu anda membaca Al-Qur'an hanya dengan sekali klik.</p>
                    </div>
                    <div class="ml-auto">
                        <a href="ian.php" class="btn btn-warning">Baca Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <section>
                    <div class="row row-padding-quote row-divider">
                        <div class="col-md-6 offset-md-3 text-center">
                            <h2>Tentang Juz 'Amma</h2>
                            <p> Aplikasi Alqur'an adalah Al Qur'an digital yang dibangun untuk memenuhi tugas mata kuliah Rekayasa Perangkat Lunak.</p>
                        </div>
                    </div>  
                </section>
                <footer class="page-footer font-small bg-info text-light">
                            <div class="footer-copyright text-center py-2">
                        <p><br>&copy; 2019 - Juz 'Amma HADINI BASNA 170170063</p>
                            </div>
                        </footer>
  

        </div>
    </div>

    <!-- Modal -->
    <div id="jadwalsholat" class="modal" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <h6>Jadwal Sholat</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- body modal -->
                <div class="modal-body d-flex align-items-end">
                    <div id="table"></div>

                    <!-- <script type="text/javascript" src="aset/js/praytimes.js"></script>
                <script type="text/javascript">

                var date = new Date(); // today
                var times = prayTimes.getTimes(date, [5.1801, 97.1507], 7.00);
                var list = ['Fajr', 'Sunrise', 'Dhuhr', 'Asr', 'Maghrib', 'Isha', 'Midnight'];

                var html = '<div class="container"><table id="timetable" class="table table-stripped">';
                    html += '<tr><th colspan="2" class="text-center">Lhokseumawe, '+ date.toLocaleDateString()+ '</th></tr>';
                    for(var i in list)  {
                        html += '<tr><td>'+ list[i]+ '</td>';
                        html += '<td>'+ times[list[i].toLowerCase()]+ '</td></tr>';
                    }
                    html += '</table></div>';
                    document.getElementById('table').innerHTML = html;

                </script> -->
                   
                        </div>
                </div>
            </div>
        </div>

    </body>
</html>