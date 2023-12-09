@extends('layouts.admin')

@section('content')
    <h2><strong>About Us</strong></h2>
    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quam eum sint! Iure eligendi, aliquid odit mollitia
        quisquam laboriosam minus sint doloribus sit, nemo rerum nulla amet incidunt aspernatur qui.</h5>
    <br>
    <h2><strong>FAQ</strong></h2>
    <div class="dropdown">
        <a data-bs-toggle="dropdown" aria-expanded="false">
            <h5>Apakah Aplikasi ini akan selalu Update? </h5>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item"><strong>Ya! Kami tim Developer selalu mengupdate patch Aplikasi sesuai keinginan
                        Klien kami.</strong></a></li>
        </ul>
        <br>
    </div>
    <h2><strong>Help and Questions</strong></h2>
    <p>
        <a link href="https://wa.me/6285797009915" target="_blank" class="btn btn-info"> <i class="ti ti-brand-whatsapp"></i> Call Center </a>
    @endsection
