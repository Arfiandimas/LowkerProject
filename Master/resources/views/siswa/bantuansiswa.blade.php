@extends('layout/app')

@section('title','Informasi Siswa')

@section('content')



        <div class="container" uk-grid>

                    <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-push" style="height: 3em;
            background-color: #0088FF;width: 8em;border-bottom-right-radius: 23px;border-top-right-radius: 23px;color: white;margin: 3em 0 0 0;"><i class="fas fa-arrow-right"></i></button>
                
                    <div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
                <div class="uk-offcanvas-bar uk-background-primary">

                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <!-- isi dashboard -->
                    <div class="uk-width-1-4@m uk-background-primary " style="width: 100%;">

                        <h2 class="uk-text-bold uk-text-left uk-margin-medium-left" style="color: white;">Dashboard</h2>
                        <img class="uk-align-center" src="/ICON/information.png" alt="">
                        <h3 class="uk-text-bold uk-text-center" style="color: white;">Annisa Kumalasari</h3>
                        <p class="uk-text-center uk-margin-large-bottom" style="color: white;">0812-3456-789</p>

                        <div class="dashboard-siswa uk-margin-medium-left">

                        <a href="{{ route('siswa.index') }}"><h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/infologo1.png" alt="">Information</h4></a>
                        <a href="{{ route('siswafavorite.index') }}"><h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/infologo2.png" alt="">Favorite</h4></a>
                        <a href="{{ route('siswatawaran.index') }}"><h4 class="uk-text-bold" style="color: white;text-align: left;width:max-content;"><img class="uk-margin-small-right" src="/ICON/infologo3.png" alt="">Pasang Tawaran</h4></a>
                        <a href="{{ route('siswabantuan.index') }}"><h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/infologo4.png" alt="">Bantuan</h4></a>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <a onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <button class="uk-button uk-button-text">
                        <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/infologo5.png" alt="">Exit</h4></button></a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>    
                </div>
                </div>    
                </div>



            <div class="uk-width-expand@m uk-padding-large uk-margin-medium-left" style="margin: -1em 0 0 4em;">
                <h1 class=" uk-margin-medium-bottom uk-text-bold uk-margin-xlarge-bottom">Bantuan</h1>
                <h2 class=" uk-margin-medium-bottom uk-text-bold ">Bagaimana Cara Ambil Kelas?</h2>
                <p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam provident doloribus, accusamus numquam tenetur consectetur consequuntur, eos quae aut! Quam dignissimos nihil dicta! Veritatis aspernatur quod quibusdam perferendis, voluptatem odit?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente iure, quis asperiores vitae, rerum quod quisquam ratione distinctio debitis porro. Amet doloribus ut, quae culpa. Consectetur natus minus laborum perspiciatis?</p>

                <h2 class=" uk-margin-medium-bottom uk-text-bold">Bagaimana Cara Mengisi Testimoni?</h2>
                <p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam provident doloribus, accusamus numquam tenetur consectetur consequuntur, eos quae aut! Quam dignissimos nihil dicta! Veritatis aspernatur quod quibusdam perferendis, voluptatem odit?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente iure, quis asperiores vitae, rerum quod quisquam ratione distinctio debitis porro. Amet doloribus ut, quae culpa. Consectetur natus minus laborum perspiciatis?</p>

                

            </div>
        </div>

@endsection

@section('footer')

    <div class="uk-container-expand">

    <footer>
        <div class="footer uk-container uk-container-expand">
            <div class="footer-isi uk-child-width-expand@s" uk-grid>
                <div>
                    <ul>
                        <li class="uk-text-bold">Perusahaan</li>
                        <li>Beranda</li>
                        <li>Harga&Paket</li>
                    </ul>
                </div>
                    <div>
                        <ul>
                        <li class="uk-text-bold">Produk dan Layanan</li>
                        <li>Lowongan Kerja</li>
                        <li>Pembelajaran</li>
                        <li>Magang</li>
                    </ul>
                    </div>
                    <div>
                        <ul>
                        <li class="uk-text-bold">Bantuan</li>
                        <li>Hubungi Kami</li>
                        <li>FAQ</li>
                    </ul>
                    </div>
                    <div>
                        <ul>
                        <li class="uk-text-bold">Informasi Lainnya</li>
                        <li>Testimoni</li>
                    </ul>
                    </div>
                    <div>
                        <ul class="uk-align-center">
                        <li class="uk-text-bold">Temukan Kami di</li>
                        
                    </ul>
                        <img src="/ICON/facebook.png" alt="">
                        <img src="/ICON/google.png" alt="">
                        <img src="/ICON/twitter.png" alt="">

                    <form>

                            <div class="bahasa uk-margin">
                                <div  uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        
                                        <option value="1">Indonesia</option>
                                        <option value="2">Inggris</option>
                                        <option value="3">Jepang</option>
                                        <option value="4">Korea</option>
                                    </select>
                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>

                        </form>
                        </div>
            </div>
                </div>

        </footer>
</div>

@endsection