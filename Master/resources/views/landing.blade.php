@extends('layout/app')

@section('title','Nama Website')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@section('content')
<!-- BAGIAN BANNER -->

    <div  id="section-a" class="uk-container-expand">
        <div class="bg-image"></div>
            <h1 class="judul">Search and hire <br>
                talented independent <br>
                <strong>Professionals</strong></h1>

    

    <div class="search uk-margin">
        
        <div class="boundary-align uk-panel uk-placeholder" style="margin: auto;
    padding: 0;width: 100%;border:none;"> 
            <div class="uk-inline-clip">
                    <input id="pencarian" class="uk-input uk-form-width-medium uk-light" type="text" placeholder="Find a worker" style="background-color:#ffffff;color:grey;">
                    
               <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: triangle-down"></a>
               </div>
                
               <div class="pencarian-dropdown" uk-dropdown="pos: bottom-justify; boundary: .boundary-align; boundary-align: true">
            
                
                <div class="uk-panel uk-panel-scrollable" style="border: none">

                    <div class=" uk-grid uk-padding-small" id="myTable">
                        
                
                    </div>
                </div>
                
                </div>
            
                
            </div>

            @guest
                <div class="uk-grid uk-align-center">
                    <h5 class="uk-text-bold LoginTxt" style="text-align: center;color: white;">Login as</h5>
                <a href="#login" uk-toggle><button class="uk-button uk-button-default uk-width-1-4  button1 uk-text-bold" style="background-color:#B22323;color: #ffffff">Perusahaan</button></a>
                <a href="#loginsiswa" uk-toggle><button class="uk-button uk-button-default uk-width-1-4 button1 uk-margin-medium-left"style="background-color:#B22323;color: #ffffff">Siswa</button></a>
                </div>
            @else 

            @endguest
        </div>    
</div>

<!-- END BAGIAN BANNER -->

<!-- START CONTENT KOLOM -->

<div class="uk-section uk-section-info uk-preserve-color" >
    <div class="uk-container" >

        <!-- <div class="uk-panel uk-light uk-margin-medium">
            <h3>Section Primary with cards</h3>
        </div> -->

        <div class="uk-grid-match uk-child-width-expand@m" uk-grid uk-scrollspy="cls: uk-animation-scale-up uk-transform-origin-bottom-center; target: .uk-card; delay: 250; repeat: true" >
            

            <div>
                <!-- konten -->
                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-text-center">
                    <img class="iconContent1" src="image/dunia.png">
                    <h3 class="bolder">Search a Job</h3>
                    <p class="pSecA">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>

                <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                <p>
                    <a class="uk-button uk-button-secondary uk-align-center modalBtn1" href="#dalam" uk-toggle>Dalam Negeri</a>
                    
                    <a class="uk-button uk-button-secondary uk-align-center modalBtn1" href="#luarnegeri" uk-toggle>Luar Negeri</a>
                </p>



            </div>

                </div>
                <!-- end konten -->

            </div>


                     <div>
                            <!-- konten -->
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <a href="{{ route('caristudy.index') }}">
                            <div class="uk-card uk-card-default uk-card-body uk-text-center">
                                <img class="iconContent2" src="image/graduation.png">
                                        <h3  class="bolder">Study</h3>
                                        <p class="pSecA">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>

                                    <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                    <p>
                                        
                                       
                                    </p>
                                </div>
                            </a>
                            </div>
                            <!-- end konten -->
                    </div>

              <div>
                <!-- konten -->
                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                    <a href="#">
                <div class="uk-card uk-card-default uk-card-body uk-text-center">
                    <img class="iconContent3" src="image/menara.png">
                    <h3  class="bolder">Watch Companies</h3>
                    <p class="pSecA">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>

                <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                <p>
                    
                    
                </p>
            </div>
                </a>
                </div>
                <!-- end konten -->
            </div>


        </div>
    </div>
   

<!-- END CONTENT KOLOM -->

<!-- START KONTEN 2 -->
<div  class="cardContent1 uk-container-expand uk-margin-medium-top"  uk-grid uk-scrollspy="cls:uk-animation-slide-bottom; target: .uk-card; delay: 230; repeat: true;hiden:true;">

       

            <div class="card1 uk-card uk-card-default uk-grid-collapse uk-child-width-1-1@s uk-margin border" uk-grid>

                    <div>
                    <h2 class="uk-text-center headContent2"><strong>(Your Company) Menawarkan anda lebih banyak
lowongan Pekerjaan dari berbagai negara</strong></h2>

                    <div class="cardContent2 uk-card uk-card-default uk-grid-collapse uk-child-width-1-1@s uk-child-width-1-2@m uk-margin" uk-grid>
                        
                        <div class="uk-inline-clip uk-transition-toggle  uk-flex-last@m  uk-card-media-right uk-cover-container"  tabindex="0">
                            
                            <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
            <img class="imgContent2" src="image/content.jpg" alt="">
            <div class="uk-position-center">
                <div class="uk-transition-slide-top-small"><h4 class="txtContent2 uk-margin-remove"><strong>Higlob Menawarkan anda </strong></h4></div>
                <div class="uk-transition-slide-bottom-small"><h4 class="txtContent2 uk-margin-remove">lebih banyak lowongan Pekerjaan dari berbagai negara</h4></div>
            </div>
        </div>
                        </div>


                        <div>
                            <div class="uk-card-body ">
                                <h3 class="h3SecA cardText uk-card-title"><strong>Butuh Pekerjaan?</strong></h3>
                                <p class="pSecA">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                            </div>
                        </div>
            </div>
 </div> 
</div>

 </div> 
 <!-- END CONTENT 2 -->


 <!-- START CONTENT AKHIR -->
<div class="uk-container-expand bg2">    <h2 class="uk-text-center"><strong> Lowongan Kerja Terbaru</strong></h2>
<div class="uk-position-relative uk-visible-toggle uk-dark uk-margin-medium-top" tabindex="-1" uk-slider="autoplay: false; infinite: true; autoplay-interval : 3000;">
    <ul class="ul-slider uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-child-width-1-5@xl uk-text-center"   uk-scrollspy="cls: uk-animation-slide-top; target: .uk-card; delay: 100; repeat: true">
        <li>
             <div class="uk-card uk-card-default uk-card-body uk-card-info uk-card-hover cardSliderLowker">
                    <img class="imgSliderLowker" src="image/mcd.png">
                    <h4 style="margin-top: 15px;" class="headSliderLowker"><strong>McDonalds</strong></h4>
                    <hr style="margin-top:5px;">
                    <p class="uk-text-danger postSliderLowker" style="margin-top:-10px;" >Marketing</p>
                    <p class="uk-text-small txtSilderLowker ">Jgn lupa teks deskripsi ini tidak bisa lebih dari 155 character karena merusak tampilan berikan fungsi limit character lorem30</p>
                    <hr style="margin-top:5px;">
                    <p class="marginTop">
                        <button class="uk-button uk-button-danger uk-button-small btnSliderLowker">Apply</button>
                        <button class="uk-button uk-button-primary uk-button-small btnSliderLowker">Detail</button>
                    </p>

                </div>
        </li>
        <li>
        <div class="uk-card uk-card-default uk-card-body uk-card-info uk-card-hover cardSliderLowker">
                    <img class="imgSliderLowker" src="image/mcd.png">
                    <h4 style="margin-top: 15px;" class="headSliderLowker"><strong>McDonalds</strong></h4>
                    <hr style="margin-top:5px;">
                    <p class="uk-text-danger postSliderLowker"style="margin-top:-10px;" >Marketing</p>
                    <p class="uk-text-small txtSilderLowker">Jgn lupa teks deskripsi ini tidak bisa lebih dari 155 character karena merusak tampilan berikan fungsi limit character lorem30</p>
                    <hr style="margin-top:5px;">
                    <p class="marginTop">
                        <button class="uk-button uk-button-danger uk-button-small btnSliderLowker">Apply</button>
                        <button class="uk-button uk-button-primary uk-button-small btnSliderLowker">Detail</button>
                    </p>

                </div>
        </li>
        <li>
        <div class="uk-card uk-card-default uk-card-body uk-card-info uk-card-hover cardSliderLowker">
                    <img class="imgSliderLowker" src="image/mcd.png">
                    <h4 style="margin-top: 15px;" class="headSliderLowker"><strong>McDonalds</strong></h4>
                    <hr style="margin-top:5px;">
                    <p class="uk-text-danger postSliderLowkerr"style="margin-top:-10px;" >Marketing</p>
                    <p class="uk-text-small txtSilderLowker">Jgn lupa teks deskripsi ini tidak bisa lebih dari 155 character karena merusak tampilan berikan fungsi limit character lorem30</p>
                    <hr style="margin-top:5px;">
                    <p class="marginTop">
                        <button class="uk-button uk-button-danger uk-button-small btnSliderLowker">Apply</button>
                        <button class="uk-button uk-button-primary uk-button-small btnSliderLowker">Detail</button>
                    </p>

                </div>
        </li>
        <li>
        <div class="uk-card uk-card-default uk-card-body uk-card-info uk-card-hover cardSliderLowker">
                    <img class="imgSliderLowker" src="image/mcd.png">
                    <h4 style="margin-top: 15px;" class="headSliderLowker"><strong>McDonalds</strong></h4>
                    <hr style="margin-top:5px;">
                    <p class="uk-text-danger postSliderLowkerr"style="margin-top:-10px;" >Marketing</p>
                    <p class="uk-text-small txtSilderLowker">Jgn lupa teks deskripsi ini tidak bisa lebih dari 155 character karena merusak tampilan berikan fungsi limit character lorem30</p>
                    <hr style="margin-top:5px;">
                    <p class="marginTop">
                        <button class="uk-button uk-button-danger uk-button-small btnSliderLowker">Apply</button>
                        <button class="uk-button uk-button-primary uk-button-small btnSliderLowker">Detail</button>
                    </p>

                </div>
        </li>
        <li>
        <div class="uk-card uk-card-default uk-card-body uk-card-info uk-card-hover cardSliderLowker">
                    <img class="imgSliderLowker" src="image/mcd.png">
                    <h4 style="margin-top: 15px;" class="headSliderLowker"><strong>McDonalds</strong></h4>
                    <hr style="margin-top:5px;">
                    <p class="uk-text-danger postSliderLowkerr"style="margin-top:-10px;" >Marketing</p>
                    <p class="uk-text-small txtSilderLowker">Jgn lupa teks deskripsi ini tidak bisa lebih dari 155 character karena merusak tampilan berikan fungsi limit character lorem30</p>
                    <hr style="margin-top:5px;">
                    <p class="marginTop">
                        <button class="uk-button uk-button-danger uk-button-small btnSliderLowker">Apply</button>
                        <button class="uk-button uk-button-primary uk-button-small btnSliderLowker">Detail</button>
                    </p>

                </div>
        </li>
        <li>
        <div class="uk-card uk-card-default uk-card-body uk-card-info uk-card-hover cardSliderLowker">
                    <img class="imgSliderLowker" src="image/mcd.png">
                    <h4 style="margin-top: 15px;" class="headSliderLowker"><strong>McDonalds</strong></h4>
                    <hr style="margin-top:5px;">
                    <p class="uk-text-danger postSliderLowkerr"style="margin-top:-10px;" >Marketing</p>
                    <p class="uk-text-small txtSilderLowker">Jgn lupa teks deskripsi ini tidak bisa lebih dari 155 character karena merusak tampilan berikan fungsi limit character lorem30</p>
                    <hr style="margin-top:5px;">
                    <p class="marginTop">
                        <button class="uk-button uk-button-danger uk-button-small btnSliderLowker">Apply</button>
                        <button class="uk-button uk-button-primary uk-button-small btnSliderLowker">Detail</button>
                    </p>

                </div>
        </li>
        <li>
            <img src="image/slider2.jpg" alt="">
            <div class="uk-position-center uk-panel"><h1>7</h1></div>
        </li>
        <li>
            <img src="image/slider3.jpg" alt="">
            <div class="uk-position-center uk-panel"><h1>8</h1></div>
        </li>
        <li>
            <img src="image/slider4.jpg" alt="">
            <div class="uk-position-center uk-panel"><h1>9</h1></div>
        </li>
        <li>
            <img src="image/slider5.jpg" alt="">
            <div class="uk-position-center uk-panel"><h1>10</h1></div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
    </div>
</div>



<!-- START KONTEN TESTIMONIAL -->
<div class="bg3">
<h2 class="uk-text-center uk-text-bold uk-margin-large-bottom">Testimonial</h2>
    <div  class="testimoni uk-position-relative uk-visible-toggle uk-light uk-margin-medium-top" tabindex="-1" uk-slideshow="animation: shake" style="color: black;">
        

            <ul class="testimoniul uk-slideshow-items uk-text-center">
                <li>
                    <img src="ICON/testimonial.png" alt="">
                    <h4 style="margin-top:0.5rem; color: black;">Lutfi Surachman</h4>
                    <p class="pSecA">" Terima Kasih dengan adanya website ini saya lebih mudah untuk mendapatkan <br> perkerja dengan sesuai di bidang sayas "</p>
                </li>
                <li>
                   
                    <img src="ICON/testimonial.png" alt="">
                    <h4 style="margin-top:0.5rem; color: black;">Lutfi Surachman</h4>
                    <p class="pSecA">" Terima Kasih dengan adanya website ini saya lebih mudah untuk mendapatkan <br> perkerja dengan sesuai di bidang sayas "</p>
                </li>
                <li>
                    <img src="ICON/testimonial.png" alt="">
                    <h4 style="margin-top:0.5rem; color: black;">Lutfi Surachman</h4>
                    <p clas="pSecA">" Terima Kasih dengan adanya website ini saya lebih mudah untuk mendapatkan <br> perkerja dengan sesuai di bidang sayas "</p>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"  uk-slideshow-item="previous"style="color: #888"><i class="fas fa-arrow-left fa-2x"></i></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"  uk-slideshow-item="next"style="color: #888"><i class="fas fa-arrow-right fa-2x"></i></a>
            

        </div>
        </div>
        
<!-- END KONTEN TESTIMONIAL -->



                                       <!-- START MODAL GROUP -->
                                    
                                       <div id="luarnegeri" class="uk-modal-container1" uk-modal>

<div class="uk-modal-dialog uk-modal-body modalNegara " style="background-image: url(ICON/luarnegeri.png);">
    <button class="uk-modal-close-default" type="uk-button-primary" uk-close></button>
    <h3 class="uk-text-center marginTop"><strong>Luar Negeri</strong></h3>

    <div class="uk-position-relative uk-visible-toggle " tabindex="-1" uk-slider>
        <ul class="slider-luarnegeri uk-slider-items uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-3@l uk-child-width-1-4@xl">
        
        <a href="#europa" uk-toggle> 
            <li class="uk-button-text  slider-li">
                <img src="ICON/europa.png">
            <h4 class="slider-head"><strong>Europa</strong></h4>
            <p class="slider-p">Dapatkan lebih banyak lowongan pekerjaan dari berbagai negara di europa</p>
                
            </li>
            </a>
            <a href="#asia" uk-toggle>
            <li class="uk-button-text  slider-li">
                <img src="ICON/asia.png">
            <h4 class="slider-head"><strong>Asia</strong></h4>
            <p class="slider-p">Dapatkan lebih banyak lowongan pekerjaan dari berbagai negara di Asia</p>
            </li>
        </a>
            <a href="">
            <li class="uk-button-text  slider-li">
                <img src="ICON/australia.png">
            <h4 class="slider-head"><strong>Australia</strong></h4>
            <p class="slider-p">Dapatkan lebih banyak lowongan pekerjaan dari berbagai negara di Australia</p>

            </li>
        </a>
        <a href="" style="margin-top:1em">
            <li class="uk-button-text  slider-li">
                
                <img src="ICON/amerika.png">
            <h4 class="slider-head"><strong>Amerika</strong></h4>
            <p class="slider-p">Dapatkan lebih banyak lowongan pekerjaan dari berbagai negara di Amerika</p>
            </li>
        </a>
        </ul>

        <a class=" uk-position-center-left uk-position-small " href="#" uk-slidenav-previous uk-slider-item="previous" style="color:black"></a>
        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next" style="color:black"></a>
    </div>

    <!-- <div class="uk-column-1-2@s uk-column-1-3@m uk-column-1-4@l uk-align-center uk-text-center uk-padding-large">  -->
        <!-- <ul style="list-style-type: none;text-decoration-style: none;">
            
        </ul>
    -->

    <!-- </div> -->
   
  

</div>
</div>
            
                <!-- END MODAL GROUP -->

                <!-- START MODAL GROUP 2-->
                                    
                <div id="europa" class="uk-modal-container2" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body" >
                            <button class="uk-modal-close-default" type="uk-button-primary" uk-close></button>
                            <h4 class="uk-text-center"><strong>Europa</strong></h4>
                          
                          
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                    <div class="uk-slider-container container-bendera">

                                        <ul class="slider-bendera uk-slider-items uk-grid">
                                            <li>
                                                
                                                  <img src="ICON/flag/europa/germany.png" alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Germany</h3></a>
                                                </div><!-- <div class="uk-position-center uk-panel">
                                                  

                                                </div> -->
                                            </li>
                                            <li>
                                               <img src="ICON/flag/europa/italy.png" alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Italy</h3>
 </a>                                               </div>
                                            </li>
                                            <li>
                                                <img src="ICON/flag/europa/spain.png" alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Spanyol</h3></a>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="ICON/flag/europa/france.png" calt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">France</h3>
</a>                                                </div>
                                            </li>
                                            <li>
                                              <img src="ICON/flag/europa/austria.png"  alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Austria</h3></a>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="ICON/flag/europa/belgium.png" alt="">
                                                <div>
                                                  <h3 class="uk-text-bold negaraTxt" >Belgium</h3>
                                                </div>
                                            </li>
                                             <li>
                                                <img src="ICON/flag/europa/belgium.png" alt="">
                                                <div>
                                                  <h3 class="uk-text-bold negaraTxt" >Belgium</h3>
                                                </div>
                                            </li>
                                             <li>
                                                <img src="ICON/flag/europa/belgium.png" alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Belgium</h3></a>
                                                </div>
                                            </li>
                                             <li>
                                                <img src="ICON/flag/europa/belgium.png" alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Belgium</h3></a>
                                                </div>
                                            </li>

                                            
                                        </ul>

                                        <a class="geser-kiri uk-position-center-left uk-position-small " href="#"  uk-slider-item="previous"><i class="fas fa-arrow-circle-left fa-2x" style="color: black;"></i></a>
                                        <a class="geser-kanan uk-position-center-right uk-position-small " href="#" uk-slider-item="next"><i class="fas fa-arrow-circle-right fa-2x" style="color: black;"></i></a>

                                    </div>

                                    </div>
                                      
                    
                      
                    </div> 
                </div>
                <!-- END MODAL GROUP  2-->

                   <!-- START MODAL GROUP 2-->
                   <div id="asia" class="uk-modal-container2" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body" >
                            <button class="uk-modal-close-default" type="uk-button-primary" uk-close></button>
                            <h4 class="uk-text-center"><strong>Asia</strong></h4>
                          
                          
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                    <div class="uk-slider-container  container-bendera">

                                        <ul class="slider-bendera uk-slider-items uk-grid">
                                           
                                            <li>
                                           <a href="#japan" uk-toggle>     
                                                  <img src="ICON/flag/asia/japan.png" alt="">
                                                <div>
                                                  <h3 class="uk-text-bold negaraTxt" >Japan</h3>
                                                </div><!-- <div class="uk-position-center uk-panel">
                                                  
                                            
                                                </div> -->
                                                </a>
                                            </li>
                                            <li>
                                               <img src="ICON/flag/asia/korea.png" alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt" >Korea</h3></a>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="ICON/flag/asia/malaysia.png" alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Malaysia</h3</a>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="ICON/flag/asia/singapore.png" calt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Singapore</h3></a>
                                                </div>
                                            </li>
                                            <li>
                                              <img src="ICON/flag/asia/thailand.png"  alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Thailand</h3</a>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="ICON/flag/asia/vietnam.png" alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Vietnam</h3></a>
                                                </div>
                                            </li>
                                             <li>
                                                <img src="ICON/flag/asia/vietnam.png" alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Vietnam</h3></a>
                                                </div>
                                            </li>
                                             <li>
                                                <img src="ICON/flag/asia/vietnam.png" alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Vietnam</h3></a>
                                                </div>
                                            </li>
                                             <li>
                                                <img src="ICON/flag/asia/vietnam.png" alt="">
                                                <div>
                                                  <a href="#"><h3 class="uk-text-bold negaraTxt">Vietnam</h3></a>
                                                </div>
                                            </li>

                                            
                                        </ul>

                                        <a class="geser-kiri uk-position-center-left uk-position-small " href="#"  uk-slider-item="previous"><i class="fas fa-arrow-circle-left fa-2x" style="color: black;"></i></a>
                                        <a class="geser-kiri uk-position-center-right uk-position-small " href="#" uk-slider-item="next"><i class="fas fa-arrow-circle-right fa-2x" style="color: black;"></i></a>

                                    </div>

                                    </div>
                                      
                    
                      
                    </div> 
                </div>
            
                <!-- END MODAL GROUP  2-->


                <!-- START MODAL GROUP -->
                                    
                                    <div id="japan" class="uk-modal-container8" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body">
                            <button class="uk-modal-close-default" type="uk-button-primary" uk-close></button>
                            <h2 class="uk-text-center "><strong>JAPAN</strong></h2>

                            <div class="uk-column-1-2@s uk-column-1-3@m uk-column-1-4@l uk-align-center uk-text-center uk-padding-large"> 
                                <ul class="japan-modal">
                                    <a href="#" uk-toggle> 
                                    <li class="uk-button-text">
                                        <img src="ICON/social-care.png">
                                    <h4><strong>Tokutei Ginou</strong></h4>
                                    
                                        
                                    </li>
                                    </a>
                                    <a href="">
                                    <li class="uk-button-text">
                                        <img src="ICON/team.png">
                                    <h4><strong>Work</strong></h4>
                                    
                                    </li>
                                </a>
                                    <a href="">
                                    <li class="uk-button-text">
                                        <img src="ICON/enterprise.png">
                                    <h4><strong>Magang</strong></h4>
                                    <p>

                                    </li>
                                </a>
                                <a href="">
                                    <li class="uk-button-text">
                                        
                                        <img src="ICON/technical-support.png">
                                    <h4><strong>Engginering</strong></h4>
                                    <p>
                                    </li>
                                </a>
                                </ul>
                           

                            </div>
                           
                          

                    </div>
                </div>
            
                <!-- END MODAL GROUP -->

            
                    <!-- START MODAL Login Perusahaan -->
                                    
                                    <div id="login" class="uk-modal-container3" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-float-center" style="background-image: url(ICON/login.png);">
                            <button class="uk-modal-close-default" type="uk-button-primary" uk-close></button>
                            <h2 class="uk-text-center "><strong>Your Company</strong></h2>
                           
                            <div class="uk-child-width-expand@s uk-text-center uk-flex-column" uk-grid>

                                <div class="uk-container uk-text-center uk-margin uk-padding-large " >
                                    <h4 class="uk-text-left"><strong>Sign In</strong></h4><br>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                                
                                        <input id="email"class="uk-input uk-form-width-xlarge uk-margin-small-bottom @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input id="password" class="uk-input uk-form-width-xlarge uk-margin-small-bottom @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>

                                        <button type="submit" class="uk-button uk-button-primary uk-border-rounded uk-width-1-1 uk-margin-small-bottom"><strong>Login</strong></button>    
                                
                                    </form>

                                        
                                        <a href="#signup" uk-toggle><p class="uk-align-left">Buat Akun</p></a>
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"><p class="uk-align-right">Forget Password</p></a>
                                        @endif

                                          
                                        <h5 class="uk-text-center  uk-text-bold uk-margin-large-top ">Login With</h5>
                                        <p class="uk-align-center"><a href=""><img class="uk-margin-small-right" src="ICON/twitter.png"></a><a href=""><img src="ICON/facebook.png"></a><a href=""><img class="uk-margin-small-left" src="ICON/google.png"></a></p>
                                </div>


                               
                                


                        </div>
                    </div>
                </div>
            
                <!-- END MODAL LOGIN Perusahaan -->

                    <!-- START MODAL SIGN UP Perusahaan-->
                    
                    <div id="signup" class="uk-modal-container4" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body bgSignUp">
                            <button class="uk-modal-close-default" type="uk-button-primary" uk-close></button>
                            <h2 class="uk-text-center uk-margin-large-bottom"><strong>Your Company</strong></h2>
                
                            <div class="uk-child-width-expand@s uk-text-center uk-flex-column" uk-grid>

                                <div class="uk-container uk-text-center uk-margin uk-padding-large ">
                                    <h4 class="uk-float-left"><strong>Sign Up</strong></h4><br>
                                    <form action="{{ route('register') }}" method="POST">
                                    @csrf

                                    <input id="name" class="uk-input uk-form-width-xlarge uk-margin-medium-bottom @error('name') is-invalid @enderror" type="text" name="name" placeholder="Nama" value="{{ old('name') }}" required> 
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input id="email" class="uk-input uk-form-width-xlarge uk-margin-medium-bottom @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input id="password" class="uk-input uk-form-width-xlarge uk-margin-medium-bottom @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input id="password-confirm" class="uk-input uk-form-width-xlarge uk-margin-small-bottom" type="password" name="password_confirmation" placeholder="Confirm Password">

                                    <input id="status" class="uk-input uk-form-width-xlarge uk-margin-small-bottom" type="hidden" name="status" value="perusahaan"> 

                                    <button type="submit" class="uk-button uk-button-primary uk-border-rounded   uk-width-1-1 uk-margin-small-bottom"><strong>Sign Up</strong></button>    
                                    </form>
                                        <h5 class="uk-text-center uk-text-bold ">Login With</h5>
                                        <p><a href=""><img  class="uk-margin-small-right" src="ICON/twitter.png"></a>
                                        <a href=""><img src="ICON/facebook.png"></a>
                                        <a href=""><img class="uk-margin-small-left" src="ICON/google.png"></a></p>
                                </div>

                        </div>
                    </div>
                </div>
            
                <!-- END MODAL SIGNUP Perusahaan -->


                <!-- START MODAL Login Siswa -->
                                    
                                    <div id="loginsiswa" class="uk-modal-container3" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-float-center" style="background-image: url(ICON/login.png);">
                            <button class="uk-modal-close-default" type="uk-button-primary" uk-close></button>
                            <h2 class="uk-text-center "><strong>As Student</strong></h2>
                           
                            <div class="uk-child-width-expand@s uk-text-center uk-flex-column" uk-grid>

                                <div class="uk-container uk-text-center uk-margin uk-padding-large " >
                                    <h4 class="uk-text-left"><strong>Sign In</strong></h4><br>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                                
                                        <input id="email"class="uk-input uk-form-width-xlarge uk-margin-small-bottom @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input id="password" class="uk-input uk-form-width-xlarge uk-margin-small-bottom @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>

                                        <button type="submit" class="uk-button uk-button-primary uk-border-rounded uk-width-1-1 uk-margin-small-bottom"><strong>Login</strong></button>    
                                
                                    </form> </form>  

                                        
                                        <a href="#signupsiswa" uk-toggle><p class="uk-align-left">Buat Akun</p></a>

                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"><p class="uk-align-right">Forget Password</p></a>
                                        @endif
                                          
                                        <h5 class="uk-text-center  uk-text-bold uk-margin-large-top ">Login With</h5>
                                        <p class="uk-align-center"><a href=""><img class="uk-margin-small-right" src="ICON/twitter.png"></a><a href=""><img src="ICON/facebook.png"></a><a href=""><img class="uk-margin-small-left" src="ICON/google.png"></a></p>
                                </div>


                               
                                


                        </div>
                    </div>
                </div>
            
                <!-- END MODAL LOGIN Siswa -->

                
                    <!-- START MODAL SIGN UP Siswa -->
                    
                    <div id="signupsiswa" class="uk-modal-container4" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body" style="background-image: url(ICON/signup.png);">
                            <button class="uk-modal-close-default" type="uk-button-primary" uk-close></button>
                            <h2 class="uk-text-center uk-margin-large-bottom"><strong>As Student</strong></h2>
                
                            <div class="uk-child-width-expand@s uk-text-center uk-flex-column" uk-grid>

                                <div class="uk-container uk-text-center uk-margin uk-padding-large ">
                                    <h4 class="uk-float-left"><strong>Sign Up</strong></h4><br>
                                    <form action="{{ route('register') }}" method="POST">
                                    @csrf

                                    <input id="name" class="uk-input uk-form-width-xlarge uk-margin-medium-bottom @error('name') is-invalid @enderror" type="text" name="name" placeholder="Nama" value="{{ old('name') }}" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input id="email" class="uk-input uk-form-width-xlarge uk-margin-medium-bottom @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input id="password" class="uk-input uk-form-width-xlarge uk-margin-medium-bottom @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input id="password-confirm" class="uk-input uk-form-width-xlarge uk-margin-small-bottom" type="password" name="password_confirmation" placeholder="Confirm Password">

                                    <input id="status" class="uk-input uk-form-width-xlarge uk-margin-small-bottom" type="hidden" name="status" value="siswa"> 

                                    <button type="submit" class="uk-button uk-button-primary uk-border-rounded   uk-width-1-1 uk-margin-small-bottom"><strong>Sign Up</strong></button>    
                                    </form>
                                        <h5 class="uk-text-center uk-text-bold ">Login With</h5>
                                        <p><a href=""><img class="uk-margin-small-right" src="ICON/twitter.png"></a>
                                        <a href=""><img src="ICON/facebook.png"></a>
                                        <a href=""><img class="uk-margin-small-left" src="ICON/google.png"></a></p>
                                </div>

                        </div>
                    </div>
                </div>
            
                <!-- END MODAL SIGNUP Siswa -->


                <!-- MODAL Dalam Negri -->
                                    
                                    <div id="dalam" class="uk-modal-container7" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body" style="background-image: url(ICON/signup.png);">
                            <button class="uk-modal-close-default" type="uk-button-primary" uk-close></button>
                            
                           
                            <div class="uk-child-width-expand@s uk-text-center uk-flex-column" uk-grid>

                                <div class="uk-container uk-text-center uk-margin uk-padding-large ">
                                    <h2 class="txtModal">Dalam Negeri</h2>
                                    <div class="uk-inline-clip">
                                            <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: search" style="width: 20%;"></a>
                                            <input class="inputModal uk-input" placeholder="Cari Kota..." type="text">
                                        </div>

                                        <div class="listPanelModal uk-panel uk-panel-scrollable uk-align-center uk-text-left">
                                                <ul class="uk-list">
                                                    <li>Ambon</li>
                                                    <li>Bali</li>
                                                    <li>Balikpapan</li>
                                                    <li>Bandung</li>
                                                    <li>Bangil</li>
                                                    <li>Banjarmasin</li>
                                                    <li>Banyuwangi</li>
                                                    <li>Batang</li>
                                                    <li>Bengkulu</li>
                                                    <li>Biak Mokmer</li>
                                                    <li>Bima</li>
                                                    <li>Binjai</li>

                                                </ul>

                                            </div>
                                </div>


                               
                                


                        </div>
                    </div>
                </div>
            
                <!-- END MODAL SIGNUP -->
</div>
@endsection

@section('footer')
    <div class="uk-container-expand">

        <footer>
                <div class="footer uk-container uk-container-expand">
                   <div class="footer-isi uk-child-width-expand@1-1s uk-child-width-expand@m uk-child-width-auto footer__grid" uk-grid>
                    <div>
                        <ul>
                            <li class="uk-text-bold">Perusahaan</li>
                            <a href=""><li>Beranda</li></a>
                            <a href=""><li>Harga&Paket</li></a>
                        
                        
                        
                    </ul>
                </div>
                    <div>
                        <ul>
                            <li class="uk-text-bold">Produk dan Layanan</li>
                            <a href=""><li>Lowongan Kerja</li></a>
                            <a href=""><li>Pembelajaran</li></a>
                            <a href=""><li>Magang</li></a>
                    </ul>
                    </div>
                    <div>
                         <ul>
                            <li class="uk-text-bold">Bantuan</li>
                            <a href=""><li>Hubungi Kami</li></a>
                            <a href=""> <li>FAQ</li></a>
                    </ul>
                    </div>
                     <div>
                         <ul>
                            <li class="uk-text-bold">Informasi Lainnya</li>
                            <a href=""><li>Testimoni</li></a>
                        
                        
                    </ul>
                    </div>
                    <div>
                         <ul class="uk-align-center">
                            <li class="uk-text-bold">Temukan Kami di</li>
                        
                        
                    </ul>
                    <ul>
                    <li>
                    <a href=""> <img class="iconSosmed" src="ICON/facebook.png" alt=""></a>
                    <a href=""><img class="iconSosmed" src="ICON/google.png" alt=""></a>
                    <a href=""><img class="iconSosmed" src="ICON/twitter.png" alt=""></a>
                    </li>
                    </ul>

                    
                        </div>
                        <div>
                         <ul>

                            <li>
                            <button class="uk-button uk-button-default btnLang" type="button">Language</button>
                            <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 1000">
                                <ul class="uk-nav uk-dropdown-nav">
                                   <li><a class="lang  uk-button uk-button-default" href="#">English</a></li>
                                   <li><a class="lang  uk-button uk-button-default" href="#">Indonesia</a></li>
                                   <li><a class="lang  uk-button uk-button-default" href="#">Japan</a></li>
                                </ul>
                            </div>
                            </li>
                        
                        
                    </ul>
                    </div>
                     
            </div>
                </div>

        </footer>
</div>

<script type="text/javascript">
    $('#pencarian').on('keyup', function(){
        $value=$(this).val();
        $.ajax({
            method    : 'get',
            url     : '{{ route('pencarian.cari') }}',
            data    : {'pencarian' :$value},
            success:function(data){
                $('#myTable').html(data);
                
            }
        })
    })
</script>
<script type="text/javascript">
    $('#pencarian').on('click', function(){
        $value=$(this).val();
        $.ajax({
            method    : 'get',
            url     : '{{ route('pencarian.cari') }}',
            data    : {'pencarian' :$value},
            success:function(data){
                $('#myTable').html(data);
                
            }
        })
    })
</script>

@endsection