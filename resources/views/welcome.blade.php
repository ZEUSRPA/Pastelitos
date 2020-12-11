@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
    <div class="mainflip">
        <div class="frontside">
            <div class="card" style="width:20rem;">
                <img class="card-img-top img- fluid" src="https://img.webnots.com/2017/04/Bootstrap-Card-Image.png"
                    alt="card image">
                <div class="card-body">
                    <h4 class="card-title">Card Title</h4>
                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                </div>
            </div>
        </div>
        <div class="backside">
            <div class="card" style="width:20rem;">
                <div class="card-header">
                    This is a Header
                </div>
                <div class="card-body">
                    <h4 class="card-title">Card Title</h4>
                    <p class="card-text">This is a card component with header and footer.</p>
                    <a href="#" class="btn btn-info btn-md">Info Button</a>
                </div>
                <div class="card-footer">
                    This is a Footer
                </div>
            </div>
        </div>
    </div>
</div>
<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
    <div class="mainflip">
        <div class="frontside">
            <div class="card" style="width:20rem;">
                <img class="card-img-top img- fluid" src="https://img.webnots.com/2017/04/Bootstrap-Card-Image.png"
                    alt="card image">
                <div class="card-body">
                    <h4 class="card-title">Card Title</h4>
                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                </div>
            </div>
        </div>
        <div class="backside">
            <div class="card" style="width:20rem;">
                <div class="card-header">
                    This is a Header
                </div>
                <div class="card-body">
                    <h4 class="card-title">Card Title</h4>
                    <p class="card-text">This is a card component with header and footer.</p>
                    <a href="#" class="btn btn-info btn-md">Info Button</a>
                </div>
                <div class="card-footer">
                    Hola dos
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <h1>Para acceder al CRUD se requiere el login, posteriormente en el apartado de administrar se selecciona la gestion
        de los pasteles</h1>
    <img src="/images/cakeWelcome.jpg" alt="" width="500px">
</div>
@endsection