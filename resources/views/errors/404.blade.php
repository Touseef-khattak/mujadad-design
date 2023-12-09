@extends('template')
<link href="{{asset('/public/assets/css/error.css')}}" rel="stylesheet" />
@section('content')


    <div id="error_container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 text-center">
                    <div class="error_img"></div>
                    <h2 class="heading_3 text-dark">Something Went Wrong ! 🤷‍</h2>
                    <a href="{{('home')}}">Back To Home</a>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('footer_scripts')
@endsection

