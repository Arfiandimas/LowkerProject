@extends('layout/app')

@section('title',' Materi')

@section('content')

    <div class="container">
         <div class="uk-text-center uk-align-center uk-margin-large-top" uk-grid>
        <div class="uk-width-expand@s uk-align-center" style="max-width: 1083px">
            <div class="uk-card uk-card-default uk-card-body uk-text-center">
                <img src="/ICON/study.png" alt="">
                <h3>Kelas Bahasa Jepang</h3>
                <p class="uk-text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has <br> been the industry's standard dummy text ever since the 1500s, when an unknown printer took<br> a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>

                <h3 class="uk-text-left">Download Materi</h3>
                <a  class="uk-text-left" href="#"><p>https://docs.google.com/uc?export=download&id=0B2tk84YMfKiDSmtyQVNtZE5qSWM</p></a>
            </div>
        </div>
   </div>
</div>
@endsection