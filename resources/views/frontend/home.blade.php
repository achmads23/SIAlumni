@extends('frontend.template.main')

@section('title')
Home
@stop

@section('toppage')
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <div class="row">
                <h1>Save Our Earth</h1>
                <hr>
                <p>protect our earth today for our children's tomorrow</p>
                <a href="#about" class="btn btn-success btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </div>
</header>
@stop

@section('content')
<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">We've got what you need!</h2>
                <hr class="light">
                <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                <a href="#" class="btn btn-default btn-xl">Get Started!</a>
            </div>
        </div>
    </div>
</section>

<section id="article" class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Article</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body disablepadding divarticle">
                        <img src="img/article/1.jpg" class="img-responsive photoarticle" alt="">
                    </div>
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                    </div>
                    <div class="panel-body">
                        <p class="bodyarticle">Lorem ipsum dolor sit amet, consectetur adipisicing  elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body disablepadding divarticle">
                        <img src="img/article/1.jpeg" class="img-responsive photoarticle" alt="">
                    </div>
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                    </div>
                    <div class="panel-body">
                        <p class="bodyarticle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body disablepadding divarticle">
                        <img src="img/article/3.jpg" class="img-responsive photoarticle" width="100%">
                    </div>
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                    </div>
                    <div class="panel-body">
                        <p class="bodyarticle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="#" class="btn btn-success btn-xl ">More Article</a>
            </div>
        </div>
    </div>
</section>

<section id="news" class="bg-success green">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading white">News</h2>
                <hr class="light">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="news">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="panel-body disablepadding photonews">
                                        <img src="img/news/1.jpg" class="img-responsive photonews" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-8 disablepaddingleft">
                                    <p class="body-news">Bahan Dapur Ini Jadi Andalan Pamela Anderson agar Kulit Awet Muda</p>
                                    <div class="timestamp">
                                        25 Januari 2015 13:00:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="news">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="panel-body disablepadding photonews">
                                        <img src="img/news/2.jpg" class="img-responsive photonews" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-8 disablepaddingleft">
                                    <p class="body-news">Suka Kucing dan Mau Dibayar Rp. 100 Ribu per Jam? Jadilah Pegawai Kafe Ini</p>
                                    <div class="timestamp">
                                        25 Januari 2015 13:00:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="news">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="panel-body disablepadding photonews">
                                        <img src="img/news/3.jpg" class="img-responsive photonews" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-8 disablepaddingleft">
                                    <p class="body-news">Kesepian di Tahun Pertama Pimpin Batang, Bupati Yoyok: Mending Perang Lagi</p>
                                    <div class="timestamp">
                                        25 Januari 2015 13:00:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="news">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="panel-body disablepadding photonews">
                                        <img src="img/news/1.jpg" class="img-responsive photonews" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-8 disablepaddingleft">
                                    <p class="body-news">Bahan Dapur Ini Jadi Andalan Pamela Anderson agar Kulit Awet Muda</p>
                                    <div class="timestamp">
                                        25 Januari 2015 13:00:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="news">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="panel-body disablepadding photonews">
                                        <img src="img/news/2.jpg" class="img-responsive photonews" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-8 disablepaddingleft">
                                    <p class="body-news">Suka Kucing dan Mau Dibayar Rp. 100 Ribu per Jam? Jadilah Pegawai Kafe Ini</p>
                                    <div class="timestamp">
                                        25 Januari 2015 13:00:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="news">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="panel-body disablepadding photonews">
                                        <img src="img/news/3.jpg" class="img-responsive photonews" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-8 disablepaddingleft">
                                    <p class="body-news">Kesepian di Tahun Pertama Pimpin Batang, Bupati Yoyok: Mending Perang Lagi</p>
                                    <div class="timestamp">
                                        25 Januari 2015 13:00:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="#" class="btn btn-success btn-xl ">More news</a>
            </div>
        </div>
    </div>
</section>

 <section id="team" class="bg-success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Member</h2>
                    <hr class="primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/member/people.png" class="img-responsive img-circle" alt="">
                        <h4>Kay Garland</h4>
                        <p>2012</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/member/people.png" class="img-responsive img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p>2012</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/member/people.png" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p>2012</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="img/member/people.png" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p>2012</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn btn-success btn-xl ">More Member</a>
                </div>
            </div>
        </div>
    </section>

<section id="gallery" class="bg-success green">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading white">Gallery</h2>
                    <hr class="light">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 gallery-item">
                    <a href="#galleryModal1" class="gallery-link" data-toggle="modal">
                        <div class="gallery-hover">
                            <div class="gallery-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/gallery/1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="gallery-caption">
                        <h4>Round Icons</h4>
                        <p>Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 gallery-item">
                    <a href="#galleryModal2" class="gallery-link" data-toggle="modal">
                        <div class="gallery-hover">
                            <div class="gallery-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/gallery/2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="gallery-caption">
                        <h4>Startup Framework</h4>
                        <p>Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 gallery-item">
                    <a href="#galleryModal3" class="gallery-link" data-toggle="modal">
                        <div class="gallery-hover">
                            <div class="gallery-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/gallery/3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="gallery-caption">
                        <h4>Treehouse</h4>
                        <p>Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 gallery-item">
                    <a href="#galleryModal4" class="gallery-link" data-toggle="modal">
                        <div class="gallery-hover">
                            <div class="gallery-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/gallery/4.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="gallery-caption">
                        <h4>Golden</h4>
                        <p>Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 gallery-item">
                    <a href="#galleryModal5" class="gallery-link" data-toggle="modal">
                        <div class="gallery-hover">
                            <div class="gallery-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/gallery/1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="gallery-caption">
                        <h4>Escape</h4>
                        <p>Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 gallery-item">
                    <a href="#galleryModal6" class="gallery-link" data-toggle="modal">
                        <div class="gallery-hover">
                            <div class="gallery-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/gallery/2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="gallery-caption">
                        <h4>Dreams</h4>
                        <p>Graphic Design</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="btn btn-success btn-xl ">More Gallery</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

<section id="vacancy" class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Job Vacancy</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
             <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="jobvacancy">
                            <div class="row">
                                <div class="col-xs-8">
                                    <h3 class="body-news disablemargin">Safety And Health Officer</h3>
                                    <h4 class="body-news disablemargin namaperusahaan">PARAGON MASTERY SDN BHD</h4>
                                    <div class="locationvacancy">
                                        <table>
                                            <tr>
                                                <td class="col-md-1">
                                                    <i class="fa fa-money"></i>
                                                </td>
                                                <td>
                                                    5.000.000 IDR to 10.000.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-1">
                                                    <i class="fa fa-map-marker"></i>
                                                </td>
                                                <td>
                                                    Surabaya, Jawa Timur, Indonesia
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <p class="body-news fontvacancy">Promote safety awareness thoughout the duration of the construction and ensure that it is observed and adhered by all relevant parties at all times</h3>
                                    <div class="timestamp">
                                        25 Januari 2015 13:00:00
                                    </div>
                                </div>
                                <div class="col-xs-4 logovacancy">
                                    <div class="panel-body disablepadding">
                                        <img src="img/vacancy/1.jpg" class="img-responsive photovacancy" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="jobvacancy">
                            <div class="row">
                                <div class="col-xs-8">
                                    <h3 class="body-news disablemargin">SAFETY &amp; HEALTH MANAGER</h3>
                                    <h4 class="body-news disablemargin namaperusahaan">Gadang Engineering (M) Sdn Bhd</h4>
                                    <div class="locationvacancy">
                                        <table>
                                            <tr>
                                                <td class="col-md-1">
                                                    <i class="fa fa-money"></i>
                                                </td>
                                                <td>
                                                    5.000.000 IDR to 10.000.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-1">
                                                    <i class="fa fa-map-marker"></i>
                                                </td>
                                                <td>
                                                    Surabaya, Jawa Timur, Indonesia
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <p class="body-news fontvacancy">Responsibilities : Responsible for planning, formulating and enforcing safety policies and regulations. Investigate industrial accidents to determine causes and make recommendations to management for making working conditions as safe as possible.</h3>
                                    <div class="timestamp">
                                        25 Januari 2015 13:00:00
                                    </div>
                                </div>
                                <div class="col-xs-4 logovacancy">
                                    <div class="panel-body disablepadding">
                                        <img src="img/vacancy/2.jpg" class="img-responsive photovacancy" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="jobvacancy">
                            <div class="row">
                                <div class="col-xs-8">
                                    <h3 class="body-news disablemargin">REGULATORY LIASION OFFICER</h3>
                                    <h4 class="body-news disablemargin namaperusahaan">KNM Process Systems Sdn. Bhd.</h4>
                                    <div class="locationvacancy">
                                        <table>
                                            <tr>
                                                <td class="col-md-1">
                                                    <i class="fa fa-money"></i>
                                                </td>
                                                <td>
                                                    5.000.000 IDR to 10.000.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-1">
                                                    <i class="fa fa-map-marker"></i>
                                                </td>
                                                <td>
                                                    Surabaya, Jawa Timur, Indonesia
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <p class="body-news fontvacancy">RESPONSIBILITIES : At least 15 years working experience with application of licenses with Malaysia authority e.g. DOSH, NIOSH, CIDB, MITI, MIDA</h3>
                                    <div class="timestamp">
                                        25 Januari 2015 13:00:00
                                    </div>
                                </div>
                                <div class="col-xs-4 logovacancy">
                                    <div class="panel-body disablepadding">
                                        <img src="img/vacancy/4.jpg" class="img-responsive photovacancy" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="jobvacancy">
                            <div class="row">
                                <div class="col-xs-8">
                                    <h3 class="body-news disablemargin">Safety Product Specialist (Technical Support)</h3>
                                    <h4 class="body-news disablemargin namaperusahaan">Am Sales & Marketing Sdn Bhd</h4>
                                    <div class="locationvacancy">
                                        <table>
                                            <tr>
                                                <td class="col-md-1">
                                                    <i class="fa fa-money"></i>
                                                </td>
                                                <td>
                                                    5.000.000 IDR to 10.000.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-1">
                                                    <i class="fa fa-map-marker"></i>
                                                </td>
                                                <td>
                                                    Surabaya, Jawa Timur, Indonesia
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <p class="body-news fontvacancy">Responsibilities: Technical support to sales team on products. Collaborates with Sales and Marketing teams to deliver training programs / modules</h3>
                                    <div class="timestamp">
                                        25 Januari 2015 13:00:00
                                    </div>
                                </div>
                                <div class="col-xs-4 logovacancy">
                                    <div class="panel-body disablepadding">
                                        <img src="img/vacancy/3.jpg" class="img-responsive photovacancy" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="btn btn-success btn-xl ">More Job Vacancy</a>
                    </div>
                </div>
        </div>
    </div>
</section>

<section id="bisnis" class="bg-success green">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Business</h2>
                <hr class="light">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body  divbusiness">
                        <img src="img/vacancy/7.png" class="img-responsive photobusiness">
                    </div>
                    <div class="panel-heading">
                        <h4>Naztama Bumi Raya</h4>
                    </div>
                    <div class="panel-body">
                        <p class="bodyarticle">Naztama Bumi Raya berdiri sebagai konsultan lingkungan yang berkomitmen tinggi untuk memberikan solusi terbaik terhadap setiap permasalahan lingkungan yang ada. Responsif dan cepat merupakan prinsip kami dalam bekerja.</p>
                        <a href="#" class="btn btn-default">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body  divbusiness">
                        <img src="img/vacancy/6.png" class="img-responsive photobusiness">
                    </div>
                    <div class="panel-heading">
                        <h4>PT. UNILAB PERDANA</h4>
                    </div>
                    <div class="panel-body">
                        <p class="bodyarticle">PT. UNILAB PERDANA didirikan pada tanggal 30 oktober 1990, merupakan laboratorium swasta pertama yang memberikan jasa layanan bidang lingkungan hidup. Pada tanggal 21 Januari 2004 mendapat sertifikat sebagai Laboratorium Penguji dari Komite Akreditasi Nasional (KAN) No.LP-195-IDN</p>
                        <a href="#" class="btn btn-default">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="panel panel-default">
                    <div class="panel-body  divbusiness">
                        <img src="img/vacancy/5.png" class="img-responsive photobusiness">
                    </div>
                    <div class="panel-heading">
                        <h4>PT Tjakrindo Mas</h4>
                    </div>
                    <div class="panel-body">
                        <p class="bodyarticle">PT Tjakrindo Mas always strives to fulfill the needs and to give satisfaction to the customers with good quality products and punctual delivery. Our rapid and steady business grows up due to the management’s observation and innovation in overseeing strategic steps to face local and product quality enhancement that affects customer’s satisfaction.</p>
                        <a href="#" class="btn btn-default">Read More</a>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn btn-success btn-xl ">More Business</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="gallery-modal modal fade scrollbar" id="galleryModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro white">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/gallery/1.jpg" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this gallery item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- gallery Modal 2 -->
    <div class="gallery-modal modal fade scrollbar" id="galleryModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro white">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/gallery/2.jpg" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- gallery Modal 3 -->
    <div class="gallery-modal modal fade scrollbar" id="galleryModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro white">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/gallery/3.jpg" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this gallery sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- gallery Modal 4 -->
    <div class="gallery-modal modal fade scrollbar" id="galleryModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro white">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/gallery/4.jpg" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great gallery, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this gallery sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- gallery Modal 5 -->
    <div class="gallery-modal modal fade scrollbar" id="galleryModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro white">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/gallery/1.jpg" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this gallery sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- gallery Modal 6 -->
    <div class="gallery-modal modal fade scrollbar" id="galleryModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro white">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/gallery/2.jpg" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this gallery sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul class="scroll-top">
      <li><a href="#"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
    </ul>
@stop

@section('jsfooter')
    <script>
        a = $(".photonews").width();
        $(".photonews").css("height",a);
        console.log(a);

        a = $(".logovacancy").width();
        // b = $(".logovacancy").height();
        $(".photovacancy").css("width",a);
        $(".photovacancy").css("text-align","right");
        console.log(a);
    </script>

    <script>
        a = $(".news").width();
        height = a * 20 / 100;
        $(".news").css("height",height);
        $(".news").css("overflow");
    </script>

    <script>
        $('.scroll-top').click(function(){
          $('body','html').animate({scrollTop:0},1000);
        })
    </script>

    <script>
        a = $(".divarticle").width();
        height = a * 60 / 100;
        $(".divarticle").css("height",height);

        $('.photoarticle').width(a); // Units are assumed to be pixels
        $('.photoarticle').height(height);

        height = a * 50 / 100;
        $(".divbusiness").css("height",height);

        padd = $(".divbusiness").css("padding");
        var pad = padd.split("p");
        console.log(Number(pad[0]));

        var $img = $('.photobusiness');
        $img.on('load', function(){
            h = $(this).height();
            w = $(this).width();
            tinggigambar = Number(height) - Number(pad[0]);
            if(h > height){
                $(this).css("height",tinggigambar);
                w = $(this).width();
                $(this).css("padding-bottom",Number(pad[0]));
            } else {
                paddingtop = ((Number(height) - Number(h)) / 2 ) - (Number(pad[0]));
                $(this).css("padding-top",paddingtop);
            }
            width = Number(a) - (Number(pad[0])*2);
            if(w < width){
                paddingleft = (Number(width) - Number(w)) /2;
                $(this).parent().css("margin-left",paddingleft);
            };
        });

        

        var heights = $(".bodyarticle").map(function ()
        {
            return $(this).height();
        }).get(),

        maxHeight = Math.max.apply(null, heights);
        $('.bodyarticle').height(maxHeight);
    </script>

    <script>
        $(window).resize(function () {
            a = $(".divarticle").width();
            height = a * 60 / 100;
            $(".divarticle").css("height",height);

            $('.photoarticle').width(a); // Units are assumed to be pixels
            $('.photoarticle').height(height);

            var heights = $(".bodyarticle").map(function ()
            {
                return $(this).height();
            }).get(),

            maxHeight = Math.max.apply(null, heights);
            $('.bodyarticle').height(maxHeight);
        });
    </script>


    <script>
        $(window).scroll( function(){
            $('#about').each( function(i){
                windows = $(window).height();
                var bottom_of_window = $(window).scrollTop() + $(window).height();

                if( bottom_of_window > windows + 100 ){
                    $(".scroll-top").animate({'opacity':'1'},0);
                } else {
                    $(".scroll-top").animate({'opacity':'0'},0);
                }
            }); 
        });
    </script>
@stop

    