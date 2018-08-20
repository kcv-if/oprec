@extends('layouts.app')

@include('layouts.nav')
@section('content')
    <div class="skrollr-body">
        <header>
            <section id="photo-slideshow" class="homeSlide">
                <div class="bcg" data-center="background-position: 50% 0px" data-top-bottom="background-position: 50% -200px" data-anchor-target="#photo-slideshow">
                    <div class="hsContainer">
                        <div class="hsContent">
                        </div>
                    </div>
                </div>
            </section>
        </header>

        <section id="intro">
            <div class="container center">
                <h2>KCV adalah suatu lab di Informatika ITS yang terletak di antara lab NCC dan LP.</h2>
                <p>Apakah kalian adalah mahasiswa teknik Informatika? Kalian bosan kuliah pulang kuliah pulang terus? Mending gabung sama kita, jadi admin KCV! Jadi admin KCV tuh banyak manfaatnya, salah satunya kalau kalian jadi admin KCV nanti kalian lebih sering ketemu aqu!</p>
            </div>
        </section>

        <section id="admin15" class="center">
            <div class="photo-container">
                <div class="admin">
                    <img src="images/admin.png" />
                </div>
                <div class="admin">
                    <img src="images/admin.png" />
                </div>
                <div class="admin">
                    <img src="images/admin.png" />
                </div>
                <div class="admin">
                    <img src="images/admin.png" />
                </div>
                <div class="admin">
                    <img src="images/admin.png" />
                </div>
            </div>

            <div class="icons">
                <img src="images/shape1.png" class="icon" 
                    data-top-bottom="margin-top: 85px" data-center-top="margin-top: 500px"
                />
                <img src="images/shape2.png" class="icon" 
                    data-top="margin-top: 85px" data-center-top="margin-top: -200px"
                />
                <img src="images/shape3.png" class="icon" 
                    
                />
                <img src="images/shape4.png" class="icon" 
                    
                />
            </div>

        </section>

        <section id="admin16" class="center">
            <div class="photo-container">
                <div class="admin">
                    <img src="images/admin.png" />
                </div>
                <div class="admin">
                    <img src="images/admin.png" />
                </div>
                <div class="admin">
                    <img src="images/admin.png" />
                </div>
                <div class="admin">
                    <img src="images/admin.png" />
                </div>
                <div class="admin">
                    <img src="images/admin.png" />
                </div>
            </div>

            <div class="icons">
                <img src="images/shape5.png" class="icon" 
                    data-top="margin-right: 0px" data-bottom-top="margin-right: 200px"
                />
                <img src="images/shape2.png" class="icon" 
                   data-top="margin-top: 25px" data-bottom-top="margin-top: -300px"
                />
            </div>

        </section>

        <div class="contact cta">
            <div class="container layer" data-depth=".2">
                <p class="white">What are you waiting for?</p>
                <button type="button" class="btn btn-outline-light" onclick="location.href='{{route('daftar')}}';">Daftar</button>
            </div>
        </div>

        <footer class="quiet">
            <p>KCV. Copyright 2018. All rights reserved.</p>
        </footer>
    
    </div>
    
@endsection