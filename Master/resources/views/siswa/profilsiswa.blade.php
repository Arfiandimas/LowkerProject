@extends('layout/app')

@section('title','Informasi Siswa')

@section('content')

@foreach( $users as $user)
@if($user->id == auth()->user()->id)


<div class="container-expand uk-text-center">
    <img src="/uploads/avatars/{{ $user->avatar }}" class="bg-banner" style="width:250px; height:250px; float:center; border-radius:50px;" alt="">
    <form enctype="multipart/form-data" action="{{ route('siswa.avatar') }}" method="POST">
        @csrf
        <input type="file" name="avatar">
        <input type="submit" class="pull-right btn btn-sm btn-primary" onClick="window.location.reload()" value="submit">
    </form>
    
    

    <h2 class="uk-"><strong>KFC Indonesia</strong></h2>
    <p><img src="/ICON/point.png" alt="">Sleman City Mall Lantai 3, Jln. Magelang No 45</p>
    <hr>


</div>

        <div class="container" uk-grid>
                    <div class="uk-width-1-4@s uk-background-primary ">

                        <h2 class="uk-text-bold uk-text-left uk-margin-medium-left" style="color: white;">Dashboard</h2>
                        <img class="uk-align-center" src="/ICON/information.png" alt="">
                        @foreach( $siswa as $sis)
                        @if($sis->user_id == auth()->user()->id)
                        <h3 class="uk-text-bold uk-text-center" style="color: white;">{{ $sis->nama_depan }}  {{ $sis->nama_belakang }}</h3>
                        <p class="uk-text-center uk-margin-large-bottom" style="color: white;">{{ $sis->telepon }}</p>
                        @endif
                        @endforeach

                        <div class="uk-margin-medium-left">
                        
                        <a href="{{ route('siswa.index') }}"><h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/infologo1.png" alt="">Information</h4></a>
                        <a href="{{ route('siswafavorite.index') }}"><h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/infologo2.png" alt="">Favorite</h4></a>
                        <a href="{{ route('siswatawaran.index') }}"><h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/infologo3.png" alt="">Pasang Tawaran</h4></a>
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



            <div class="uk-width-expand@m uk-padding-large ">
            @foreach( $siswa as $sis)
            @if($sis->user_id == auth()->user()->id)
                <h1 class="uk-margin-medium-left uk-margin-medium-bottom uk-text-bold">Edit Profile</h1>
                <form action="{{ route('siswa.update') }}" method="POST" uk-grid>
                {{ csrf_field() }}
                    <input class="uk-input uk-width-1-3 uk-margin-large-left" type="text" placeholder="Nama Depan" name="namadep" value="{{ $sis->nama_depan }}">
                    <input class="uk-input uk-width-1-2 uk-margin-large-left" type="text" placeholder="Nama Belakang" name="namabel" value="{{ $sis->nama_belakang }}">
                    <input class="uk-input uk-width-1-1 uk-margin-large-left" type="text" placeholder="Alamat Email" name="email" value="{{ $sis->email }}">
                    <input class="uk-input uk-width-1-1 uk-margin-large-left" type="text" placeholder="Password" name="password" value="{{ $sis->password }}">
                    <input class="uk-input uk-width-1-1 uk-margin-large-left" type="text" placeholder="Konfirmasi Password" name="konpas">
                    <input class="uk-input uk-width-1-4 uk-margin-large-left" type="text" placeholder="No Telepon" name="notelp" value="{{ $sis->telepon }}">
                    <textarea class="uk-textarea uk-width-1-1 uk-margin-large-left" rows="5" name="alamat" placeholder="Alamat Rumah"> {{ $sis->alamat }} </textarea>


                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <select class="uk-select uk-width-1-4 crs-country" data-region-id="negara" name="negara" placeholder="Negara" ></select>
                    </div>

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