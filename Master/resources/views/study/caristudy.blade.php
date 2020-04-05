@extends('layout/app')

@section('title','Cari Study')

@section('content')

<!-- START BANNER -->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push">

    <ul class="uk-slideshow-items">
        <li>
            <img src="/ICON/lamaranbanner.png"  alt="" uk-cover >
            <div class="uk-position-center uk-position-small uk-text-center">
                <h1 uk-slideshow-parallax="x: 100,-100"><strong>Temukan Kuliah Negeri <br> Terbaikmu</strong></h1>
                <p uk-slideshow-parallax="x: 200,-200">

                    
        <form class="uk-grid"> 
        <div class="uk-grid">
            
        <div uk-form-custom="target: > * > span:first-child" >
            <select>
                <option value="">JURUSAN</option>
                <option value="1">Option 01</option>
                <option value="2">Option 02</option>
                <option value="3">Option 03</option>
                <option value="4">Option 04</option>

            </select>
            <button class="uk-button uk-button-default" type="button" tabindex="-1">
                <span></span>
                <span uk-icon="icon: chevron-down"></span>
            </button>
        
        </div>
        
        <div uk-form-custom="target: > * > span:first-child" >
            <select>
                <option value="">JURUSAN</option>
                <option value="1">Option 01</option>
                <option value="2">Option 02</option>
                <option value="3">Option 03</option>
                <option value="4">Option 04</option>

            </select>
            <button class="uk-button uk-button-default" type="button" tabindex="-1">
                <span></span>
                <span uk-icon="icon: chevron-down"></span>
            </button>
        </div>
    

    </div>

        </form>
                
                
       </div>         

                   
        </li>
        
    </ul>


</div>

<div class="container uk-container-expand ">
<h1 class="uk-text-center">Rekomendasi Kuliah Dari <br> 
Kami..</h1>

<div class="uk-grid-column-small uk-grid-row-medium uk-child-width-1-3@m  uk-padding-large" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body" >
                 <ul class="uk-nav-default uk-nav-parent-icon" uk-nav style="border:1px solid #0064BB">
            <li>
            <div style="height: auto;background-color: #0064BB;color:white;text-align: center;"><h3 style="color: white;padding:9px 0;">Bisnis</h3></div></li>
            
            <li class="">
                <a href="{{ route('info.index') }}">Ilmu Pengetahuan Bisnis</a>
            </li>
            <li class="uk-parent">
                <a href="#">Manajemen</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Akutansi</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Keuangan</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><span class="uk-text-center"><h5><strong> Lihat Semua</strong></h5></span> </a></li>
        </ul>
            </div>
         </div>
    


      <div>
            <div class="uk-card uk-card-default uk-card-body" >
                 <ul class="uk-nav-default uk-nav-parent-icon" uk-nav style="border:1px solid #B22323">
            <li>
            <div style="height: auto;background-color: #B22323;color:white;text-align: center; "><h3 style="color: white;padding:9px 0;">Ilmu Sosial</h3></div></li>
            
            <li class="uk-parent">
                <a href="#">Media</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Ekonomi</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Ilmu Politik</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Sosiologi</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><span class="uk-text-center"><h5><strong> Lihat Semua</strong></h5></span> </a></li>
        </ul>
            </div>
         </div>

     <div>
            <div class="uk-card uk-card-default uk-card-body" >
                 <ul class="uk-nav-default uk-nav-parent-icon" uk-nav style="border:1px solid #FF8B26">
            <li>
            <div style="height: auto;background-color: #FF8B26;color:white;text-align: center;"><h3 style="color: white;padding:9px 0;">Teknik</h3></div></li>
            
            <li class="uk-parent">
                <a href="#">Ilmu Umum dan Teknologi</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Teknik Sipil</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Teknik Kimia dan Material</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Teknik Mesin</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><span class="uk-text-center" ><h5><strong> Lihat Semua</strong></h5></span> </a></li>
        </ul>
            </div>
         </div>


          <div>
            <div class="uk-card uk-card-default uk-card-body" >
                 <ul class="uk-nav-default uk-nav-parent-icon" uk-nav style="border:1px solid #FB8686">
            <li>
            <div style="height: auto;background-color: #FB8686;color:white;text-align: center;"><h3 style="color: white;padding:9px 0;">Ilmu Sains</h3></div></li>
            
            <li class="uk-parent">
                <a href="#">Biologi</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Matematika</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Ilmu Lingkungan Hidup</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Ilmu Alam Umum</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><span class="uk-text-center" ><h5><strong> Lihat Semua</strong></h5></span> </a></li>
        </ul>
            </div>
         </div>



 <div>
            <div class="uk-card uk-card-default uk-card-body" >
                 <ul class="uk-nav-default uk-nav-parent-icon" uk-nav style="border:1px solid #05A400">
            <li>
            <div style="height: auto;background-color: #05A400;color:white;text-align: center;"><h3 style="color: white;padding:9px 0;">Kesehatan & Kedokteran</h3></div></li>
            
            <li class="uk-parent">
                <a href="#">Kedokteran</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Psikologi</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Ilmu Kesehatan</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Kesehatan Masyarakat</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><span class="uk-text-center" ><h5><strong> Lihat Semua</strong></h5></span> </a></li>
        </ul>
            </div>
         </div>


 <div>
            <div class="uk-card uk-card-default uk-card-body"  >
                 <ul class="uk-nav-default uk-nav-parent-icon" uk-nav style="border:1px solid #0064BB">
            <li>
            <div style="height: auto;background-color: #0064BB;color:white;text-align: center;"><h3 style="color: white;padding:9px 0;">Arsitektur & Pembangunan</h3></div></li>
            
            <li class="uk-parent">
                <a href="#">Manajemen Properti</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Perencanaan</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Survei</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-parent">
                <a href="#">Arsitektur</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><span class="uk-text-center" ><h5><strong> Lihat Semua</strong></h5></span> </a></li>
        </ul>
            </div>
         </div>

        


        </div> 
        <!-- END UK-GRID -->

        <a href="" uk-toggle><button class="uk-button uk-width-1-5 uk-button-primary uk-align-center">Lihat Semua</button></a>

        <h1 class="uk-text-center"><strong>Bingung Cari Kuliah Di Negara Mana?</strong></h1>
        <h3 class="uk-text-center"><strong>Negara Pencarian Terpopuler</strong></h3>



        <div class="uk-child-width-1-3 uk-child-width-1-3@m  uk-text-center uk-padding-large" uk-grid>
            <div>
                 <div class="uk-inline">
                      <img src="/ICON/lamarjerman.png" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-overlay uk-position-center uk-light">
                        <h3>JERMAN</h3>
                    </div>
                </div>
            </div>

                <div>
                 <div class="uk-inline">
                      <img src="/ICON/lamaraustralia.png" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-overlay uk-position-center uk-light">
                        <h3>AUSTRALIA</h3>
                    </div>
                </div>
            </div>
                <div>
                 <div class="uk-inline">
                      <img src="/ICON/lamarjepang.png" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-overlay uk-position-center uk-light">
                        <h3>JEPANG</h3>
                    </div>
                </div>
        </div>
                <div>
                 <div class="uk-inline">
                      <img src="/ICON/lamarkorea.png" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-overlay uk-position-center uk-light">
                        <h3>KOREA</h3>
                    </div>
                </div>
        </div>
                <div>
                 <div class="uk-inline">
                      <img src="/ICON/lamarmalaysia.png" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-overlay uk-position-center uk-light">
                        <h3>MALAYSIA</h3>
                    </div>
                </div>
        </div>
                <div>
                 <div class="uk-inline">
                      <img src="/ICON/lamarbelanda.png" alt="">
                    <div class="uk-overlay-primary uk-position-cover"></div>
                    <div class="uk-overlay uk-position-center uk-light">
                        <h3>BELANDA</h3>
                    </div>
                </div>
            </div>

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