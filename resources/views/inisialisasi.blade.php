@extends('layouts/master')

@section('title', 'Inisialisasi')

@section('css')
<style>
    .main {
        height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .button-small {
        font-size: 0.8rem;
        padding: 0.25rem 0.5rem;
        border-radius: 0.25rem;
        border: 0;
        background-color: #113CFC;
        color: white;
        margin: 0.25rem 0;
    }
</style>
@endsection

@section('content')
<div class="container main">
    <div class="wrap">
        <h3>Langkah Langkah Inisialisasi :</h3>
        <div class="langkah">
            <ul>
                <li>
                    Membuat projek baru
                    <!-- Button trigger modal -->
                    <button type="button" class="button-small" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        Lihat Gambar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" style="width: fit-content!important; max-width: 100vw!important;">
                            <div class="modal-content" style="width: fit-content!important;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Membuat projek baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="/img/1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    Folder projek
                    <!-- Button trigger modal -->
                    <button type="button" class="button-small" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        Lihat Gambar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" style="width: fit-content!important; max-width: 100vw!important;">
                            <div class="modal-content" style="width: fit-content!important;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Folder Projek</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="/img/2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    Buka file .env untuk konfigurasi ke database
                    <!-- Button trigger modal -->
                    <button type="button" class="button-small" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        Lihat Gambar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" style="width: fit-content!important; max-width: 100vw!important;">
                            <div class="modal-content" style="width: fit-content!important;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfigurasi .env</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="/img/3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    Buat database idolaqu di phpmyadmin (manual)
                    <!-- Button trigger modal -->
                    <button type="button" class="button-small" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        Lihat Gambar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" style="width: fit-content!important; max-width: 100vw!important;">
                            <div class="modal-content" style="width: fit-content!important;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Buat DB Baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="/img/4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    Database masih kosong, tapi projek laravel telah terhubung dengan database idolaqu.
                    <!-- Button trigger modal -->
                    <button type="button" class="button-small" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        Lihat Gambar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" style="width: fit-content!important; max-width: 100vw!important;">
                            <div class="modal-content" style="width: fit-content!important;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Database Masih Kosong</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="/img/5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection