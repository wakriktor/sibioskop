@extends('layouts.main')

@section('container')
    <div class="container" style="display: flex;
    column-gap: 1rem;">

        <div class="d-flex mb-4"
            style="border-box-shadow: 1px solid black;
        box-shadow: -8px 10px #EEC921;
        width:50%;
        background-color: white;
        font-family: 'Poppins', sans-serif;
        border: 2px solid black;
        border-radius: 5px;
        justify-content: center;
        padding:2rem;
        display:flex;
        flex-direction:column;
        ">

            {{-- <img src="/img/maps.png" alt="Avatar" class="avatar"
                style="
            vertical-align: middle;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            border-style: solid;
            border-width: 2px;
            border-color:black;
        "> --}}

        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <svg class="text-center" width="300" height="300" viewBox="-10 -10 76 76"  fill="none" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" style="border-color:black;">
                        <circle cx="28" cy="28" r="28" fill="url(#pattern0)" stroke="black" stroke-width="0.5" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_59_96" transform="scale(0.00195312)" />
                            </pattern>
                        <image id="image0_59_96" width="512" height="512"
                            style="filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));"
                            xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>
                </div>
            </div>
        </div>



        </div>

        <div class="d-flex mb-4"
            style="border-box-shadow: 1px solid black;
        box-shadow: -8px 10px #EEC921;
        width:90%;
        background-color: white;
        font-family: 'Poppins', sans-serif;
        border: 2px solid black;
        border-radius: 5px;
        justify-content: center;
        padding-top: 1rem;
        display:flex;
        flex-direction:column;
        margin-right:3rem;
        height:40rem">

            <div class="container-editprofil" style="
        padding:3rem;
        ">

                @auth
                    <h1 class="pengaturan" style="font-family:'ChunkFive';">PENGATURAN AKUN</h1>
                    <br>
                    <form action="">
                        <div class="container justify-content-start" style="padding-left: 0;">

                            <div class="row justify-content-between" style=" padding-inline: 0;">
                                <div class="col-10">
                                    <input type="text" name="text" class="form-control" readonly id="text"
                                        placeholder="Nama" required value="{{ auth()->user()->name }}">
                                    <label for="nama"
                                        style="font-family: 'Poppins', sans-serif; background-color: #EEC921; 
                            color:black;"></label>
                                </div>
                                <div class="col-2">

                                    <a class="d-flex justify-content-center" href="/editName"
                                        style="text-decoration: none; height: 100%">
                                        <div class="button1 text-center"
                                            style="width: 90%; height: 60%; padding-top: 5%; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                                            Edit
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="row justify-content-between" style=" padding-inline: 0;">
                                <div class="col-10">
                                    <input type="text" name="text" class="form-control" id="text"
                                        placeholder="Nomor Handphone" required value="{{ auth()->user()->phoneNumber }}">
                                    <label for="nama" style="font-family: 'Poppins', sans-serif;"></label>
                                </div>
                                <div class="col-2">

                                    <a class="d-flex justify-content-center" href="/editNoHP"
                                        style="text-decoration: none; height: 100%">
                                        <div class="button1 text-center"
                                            style="width: 90%; height: 60%; padding-top: 5%; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                                            Edit
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="row justify-content-between" style=" padding-inline: 0;">
                                <div class="col-10">
                                    <input type="text" name="text" class="form-control" id="text" placeholder="Email"
                                        required value="{{ auth()->user()->email }}">
                                    <label for="nama" style="font-family: 'Poppins', sans-serif;"></label>
                                </div>
                                <div class="col-2">

                                    <a class="d-flex justify-content-center" href="/editEmail"
                                        style="text-decoration: none; height: 100%">
                                        <div class="button1 text-center"
                                            style="width: 90%; height: 60%; padding-top: 5%; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                                            Edit
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="row justify-content-between" style=" padding-inline: 0;">
                                <div class="col-10">
                                    <input type="password" maxlength="10" name="text" class="form-control" id="password"
                                        placeholder="Password" required value="password">
                                    <label for="nama" style="font-family: 'Poppins', sans-serif;"></label>
                                </div>
                                <div class="col-2">

                                    <a class="d-flex justify-content-center" href="/editpass"
                                        style="text-decoration: none; height: 100%">
                                        <div class="button1 text-center"
                                            style="width: 90%; height: 60%; padding-top: 5%; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                                            Edit
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>





                    </form>
                    <div class="profil-button">
                        <a href="/panduan" style="text-decoration: none;" class="d-inline me-2">
                            <button class="button1 w-20 mb-5 px-5 btn btn-lg btn-primary border border-dark border-2"
                                type="submit" style="font-family: 'Poppins', sans-serif;">Panduan</button>
                        </a>

                        <form action="/logout" method="post" style="" class="d-inline">
                            @csrf
                            <button class="button2 w-20 mb-5 px-5 btn btn-lg btn-primary border border-dark border-2"
                                type="submit" style="font-family: 'Poppins', sans-serif; ">Keluar</button>
                        </form>

                        <style>
                            .button2 {
                                background-color: #EE6B21;
                                color: white;
                            }

                            .button2:hover {
                                background-color: #FDC09E;
                                color: black;
                            }
                        </style>

                    </div>
                @else
                    <a class="d-flex justify-content-center text-center" href="/login" style="text-decoration: none;">
                        <div class="py-2 fs-5 button1"
                            style="width: 80%; box-shadow: -8px 10px black; font-family: 'Poppins', sans-serif; border: 2px solid black;  border-radius: 4px;">
                            Masuk atau Daftar Akun
                        </div>
                    </a>

                @endauth

            </div>
        </div>
    </div>
@endsection
