@extends('layout/app')

@section('title','Buat Magang')

@section('content')
@foreach( $users as $user)
@if($user->id == auth()->user()->id)

@if (session()->has('success_message'))
    <div class="alert alert-success text-center">
        {{ session()->get('success_message') }}
    </div>
@endif

<div class="container-expand uk-text-center">
    <img src="/uploads/avatars/{{ $user->avatar }}" class="bg-banner" style="width:250px; height:250px; float:center; border-radius:50px;" alt="">
    <form enctype="multipart/form-data" action="{{ route('perusahaan.avatar') }}" method="POST">
        @csrf
        <input type="file" name="avatar">
        <input type="submit" class="pull-right btn btn-sm btn-primary" onClick="window.location.reload()" value="submit">
    </form>

    <h2 class="uk-"><strong>KFC Indonesia</strong></h2>
    <p><img src="/ICON/point.png" alt="">Sleman City Mall Lantai 3, Jln. Magelang No 45</p>
    <hr>


</div>

    
    <div class="container-expand" uk-grid>
        
        <div class="menu-parent uk-width-1-4@s uk-background-primary ">

                        <h2 class="uk-text-bold uk-text-left uk-margin-small-left" style="color: white;">Dashboard</h2>
                    
                        <div class="menu-dashboard">
                        <a href="{{ route('perusahaan.index') }}">
                        <button class="uk-button uk-button-text ">
                        <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/icon1.png" alt="">Company Profile</h4></button></a>
                        <a href="{{ route('informasiperusahaan.index') }}">
                        <button class="uk-button uk-button-text ">
                        <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/icon2.png" alt="">Informasi</h4></button></a>
                        <a href="{{ route('buatmagangperusahaan.index') }}">
                        <button class="uk-button uk-button-text">
                        <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/icon3.png" alt="">Buat Magang</h4></button></a>
                        <a href="{{ route('terhubungperusahaan.index') }}">
                        <button class="uk-button uk-button-text">
                        <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/icon4.png" alt="">Terhubung</h4></button></a>
                        <a href="{{ route('keamananperusahaan.index') }}">
                        <button class="uk-button uk-button-text">
                        <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/icon5.png" alt="">Keamanan</h4></button></a>
                        <a href="{{ route('bantuanperusahaan.index') }}">
                        <button class="uk-button uk-button-text">
                        <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/icon6.png" alt="">Bantuan</h4></button></a>
                        <a onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <button class="uk-button uk-button-text">
                        <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/exit.png" alt="">Keluar</h4></button></a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        </div>    
                </div>


                <div class="menu-kanan uk-width-1-2">
                @foreach( $perusahaan as $peru)
                @if($peru->user_id == auth()->user()->id)
                        <h2 class="uk-text-bold">Buat Kerjaan</h2>
                        <form action="{{ route('buatmagangperusahaan.update') }}" method="POST">
                        {{ csrf_field() }}
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ auth()->user()->id }}" readonly>
                            <h4 class="uk-text-bold">Status Kerjaan</h4>
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                <label><input id="statkerja" name="statkerja" type="radio" value="tetap"> Tetap</label>
                                <label><input id="statkerja" name="statkerja"  type="radio" value="magang"> Magang</label>
                            </div>
                            <h4 class="uk-text-bold">Bagian yang dibutuhkan</h4>
                            <input id="jobmagang" name="jobmagang"  class="uk-input uk-width-1-3" type="text" placeholder="ex;Dosen" value="{{ $peru->nama_magang }}">
                            <h4 class="uk-text-bold">Tentang kerjaan</h4>
                            <textarea id="tentangmagang" name="tentangmagang" class="uk-textarea" rows="5" placeholder="Tentang Kerjaan">{{ $peru->tentang_magang }}</textarea>
                            <h4 class="uk-text-bold">Masukkan Waktu Kerja</h4>
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                <label><input id="harian" name="harian" class="uk-checkbox" type="checkbox" value="harian"> Harian</label>
                                <label><input id="mingguan" name="mingguan" class="uk-checkbox" type="checkbox" value="mingguan"> Mingguan</label>
                                <label><input id="bulanan" name="bulanan" class="uk-checkbox" type="checkbox" value="bulanan"> Bulanan</label>
                                <label><input id="tahunan" name="tahunan" class="uk-checkbox" type="checkbox" value="tahunan"> Tahunan</label>
                            </div>
                            <h4 class="uk-text-bold">Masukkan Gaji</h4>
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <select class="uk-select uk-width-1-4" placeholder="Minimal">
                                    <option disable>Minimal</option>
                                    <option>Option 02</option>
                                </select>
                                <select class="uk-select uk-width-1-4" placeholder="maximal">
                                    <option disable>Maximal</option>
                                    <option>Option 02</option>
                                </select>
                            </div>
                            
                            <div class="uk-grid">
                            <h4 class="uk-text-bold">Ditempatkan</h4>
                            <h4 class="uk-text-bold">Lokasi</h4>
                            </div>
                          <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <select class="uk-select uk-width-1-4 crs-country" data-region-id="negara" name="negara" placeholder="Negara" ></select>
                            <select class="uk-select uk-width-1-4" id="negara" name= "kota" placeholder="Region"></select>
                            <!-- <input class="uk-input" type="text" placeholder="Isi alamat spefisik"> -->
                          </div>

                            <h4 class="uk-text-bold">Tingkat Pendidikan</h4>
                                <select class="uk-select uk-width-1-4" placeholder="Tingkat Pendidikan">
                                    <option disable>Tingkat Pendidikan</option>
                                    <option>Option 02</option>
                                </select>

                            <h4 class="uk-text-bold">Jumlah yang dibutuhkan</h4>

                            <input id="jmlpelamar" name="jmlpelamar" class="uk-input uk-width-1-3" type="text" placeholder="" value="{{ $peru->jumlah }}">
                            <h4 class="uk-text-bold">Masukkan Foto Perusahaan</h4>
                            <p><img id="output" src="/ICON/uploadimage.png" width="140" /></p>
                                <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
                                <label for="file" style="cursor: pointer;">Choose File</label>
                                
                                
                                <script>
                                var loadFile = function(event) {
                                var image = document.getElementById('output');
                                image.src = URL.createObjectURL(event.target.files[0]);
                                };
                                </script>
                                
                                <h4 class="uk-text-bold">Masukkan Password</h4>

                            <input id="password" name="password" class="uk-input uk-width-1-3" type="password" placeholder="Masukkan Password" >

                            <button type="submit" class="uk-button uk-button-primary uk-align-center uk-margin-large-bottom">Simpan</button>

                        </form>

                @endif
                @endforeach
                </div>

    </div>

    @endif
    @endforeach
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
<script src="{!! asset('js/crs.min.js') !!}"></script>
@endsection