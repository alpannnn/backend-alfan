<!-- @extends('layout')
@section('content') -->
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <html lang="en" dir="ltr">

        <head>
            <meta charset="utf-8">
            <title>Transparent Login Form HTML CSS</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
            <style>
                @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap');

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    user-select: none;
                }

                .bg-img {
                    background: url('bg.jpg');
                    height: 100vh;
                    background-size: cover;
                    background-position: center;
                }

                .bg-img:after {
                    position: absolute;
                    content: '';
                    top: 0;
                    left: 0;
                    height: 100%;
                    width: 100%;
                    background: url('{{asset('dist/img/photo4.jpg')}}');
                }

                .content {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    z-index: 999;
                    text-align: center;
                    padding: 60px 32px;
                    width: 370px;
                    transform: translate(-50%, -50%);
                    background: none ;
                    box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
                }

                .content header {
                    color: white;
                    font-size: 33px;
                    font-weight: 600;
                    margin: 0 0 35px 0;
                    font-family: 'Montserrat', sans-serif;
                }

                .register {
                    font-size: 33px; 
                    font-weight: 600;
                    margin: 35px 0 35px 0;
                    font-family: 'Montserrat', sans-serif;
                }

                .field {
                    position: relative;
                    height: 55px;
                    width: 100%;
                    display: flex;
                    background: rgba(255, 255, 255, 0.94);
                    opacity: 80%;
                }

                .field span {
                    color: #222;
                    width: 40px;
                    line-height: 45px;
                }

                .field input {
                    height: 100%;
                    width: 100%;
                    background: transparent;
                    border: none;
                    outline: none;
                    color: #222;
                    font-size: 16px;
                    font-family: 'Poppins', sans-serif;
                }

                .space {
                    margin-top: 16px;
                }

                .show {
                    position: absolute;
                    right: 13px;
                    font-size: 13px;
                    font-weight: 700;
                    color: #222;
                    display: none;
                    cursor: pointer;
                    font-family: 'Montserrat', sans-serif;
                }

                .pass-key:valid~.show {
                    display: block;
                }

                .pass {
                    text-align: left;
                    margin: 10px 0;
                }

                .pass a {
                    color: white;
                    text-decoration: none;
                    font-family: 'Poppins', sans-serif;
                }

                .pass:hover a {
                    text-decoration: underline;
                }
                
                i span {
                    margin-left: 8px;
                    font-weight: 500;
                    letter-spacing: 1px;
                    padding-top: 10px;
                    padding-bottom: 10px;
                    padding-right: 20px;
                    font-size: 16px;
                    font-family: 'Poppins', sans-serif;
                    margin: 20px 0;
                }

                .back {
                    font-size: 15px;
                    color: white;
                    font-family: 'Poppins', sans-serif;
                }

                .back a {
                    color: #3498db;
                    text-decoration: none;
                }

                .back a:hover {
                    text-decoration: underline;
                }
                
            </style>
        </head>

        <body>
            <div class="bg-img">
                <div class="content">
                <form action="{{ route('register.action') }}" method="POST">
            @csrf

            <div>
                <label class="register">Register</label>
            </div>
            <div class="field">
            <span class=" fa fa-user text-danger"><label>Name</label></span>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
            </div>
            <div class="field space">
            <span class=" fa fa-user text-danger"><label>email</label></span>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="field pass">
            <span class="fa fa-lock text-danger"><label>Password</label></span>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="field pass con">
                <span class="fa fa-lock text-danger"><label>Password Confirmation</label></span>
                <input class="form-control" type="password" name="password_confirm" />
            </div>
            <div class="back">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
                </form>
                </div>
            </div>
            </div>
</div>
        
        </body>
        

@endsection