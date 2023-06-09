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

            @include('edit-profile.partials-photo-profile.photo-profile')


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
                <h1 class="pengaturan" style="font-family:'ChunkFive';">Ubah Email</h1>
                <br>
                @if (session()->has('editSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('editSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('noChange'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{ session('noChange') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/editEmail" method="post">
                    @csrf
                    <input type="hidden" id="oldEmail" name="oldEmail" value="{{ auth()->user()->email }}">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="Email" autofocus required value="{{ auth()->user()->email }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="nama" style="font-family: 'Poppins', sans-serif;"></label>
                    <button class="button1 w-20 mb-5 mt-5 px-5 btn btn-lg btn-primary border border-dark border-2"
                        type="submit"
                        style="
                        font-family: 'Poppins', sans-serif; 
                        ">Simpan</button>
                </form>



            </div>

        </div>

    </div>
@endsection
