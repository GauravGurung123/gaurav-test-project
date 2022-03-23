@extends('front.layouts.app')

@section('content')
<div class="tm-blog-img-container">
            
</div>

<section class="tm-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <div class="tm-blog-post">
                    <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                    <p>Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                    <img src="{{ asset('images/tm-img-1010x336-1.jpg')}}" alt="Image" class="img-fluid tm-img-post">
                    
                    <p>You can help templatemo by telling your friends about our HTML CSS templates. Praesent velit ante, congue ac dignissim in, vehicula sit amet urna. Fusce in dapibus quam, eget finibus velit. Nullam erat odio, vulputate id est ut, consequat rutrum justo. Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                    <p>Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis. Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis.</p>

                    <p>Quisque vel sem eu turpis ullamcorper euismod. Praesent quis nisi ac augue luctus viverra. Sed et dui nisi. Fusce vitae dapibus justo. Pellentesque accumsan est ac posuere imperdiet. Curabitur eros mi, lacinia at euismod quis, dapibus vel ligula. Ut sodales erat vitae nunc tempor mollis. Donec tempor lobortis tortor, in feugiat massa facilisis sed. Ut dignissim viverra pretium. In eu justo maximus turpis feugiat finibus scelerisque nec eros. Cras nec lectus tempor nibh vestibulum eleifend et ac elit.</p>

                    <p>Sed vitae luctus libero. Nam sem neque, finibus id sem pharetra, cursus porttitor ligula. Praesent aliquam fermentum dui, vitae venenatis libero vulputate ac. Fusce bibendum scelerisque magna eget iaculis. Phasellus non arcu eu sem convallis semper. Duis vulputate dignissim rhoncus.</p>
                </div>
                
                <div class="row tm-margin-t-big">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                        <div class="tm-content-box">
                            <img src="{{ asset('images/tm-img-310x180-1.jpg')}}" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a href="#" class="tm-btn text-uppercase">Detail</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                        <div class="tm-content-box">
                            <img src="{{ asset('images/tm-img-310x180-2.jpg')}}" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a href="#" class="tm-btn text-uppercase">Read More</a>    
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                        <div class="tm-content-box">
                            <img src="{{ asset('images/tm-img-310x180-3.jpg')}}" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                            <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                            consequat mauris dapibus id. Donec
                            scelerisque porttitor pharetra</p>
                            <a href="#" class="tm-btn text-uppercase">Detail</a>    
                        </div>  

                    </div>    
                </div>
                
            </div>

            <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">

                <div class="tm-aside-container">
                    <h3 class="tm-gold-text tm-title">
                        Categories
                    </h3>
                    <nav>
                        <ul class="nav">
                            <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                            <li><a href="#" class="tm-text-link">Tincidunt non faucibus placerat</a></li>
                            <li><a href="#" class="tm-text-link">Vestibulum tempor ac lectus</a></li>
                            <li><a href="#" class="tm-text-link">Elementum egestas dui</a></li>
                            <li><a href="#" class="tm-text-link">Nam in augue consectetur</a></li>
                            <li><a href="#" class="tm-text-link">Fusce non turpis euismod</a></li>
                            <li><a href="#" class="tm-text-link">Text Link Color #006699</a></li>
                        </ul>
                    </nav>
                    <hr class="tm-margin-t-small">   
                    <h3 class="tm-gold-text tm-title tm-margin-t-small">
                        Useful Links
                    </h3>
                    <nav>   
                        <ul class="nav">
                            <li><a href="#" class="tm-text-link">Suspendisse sed dui nulla</a></li>
                            <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                            <li><a href="#" class="tm-text-link">Duiss nec purus et eros</a></li>
                            <li><a href="#" class="tm-text-link">Etiam pulvinar et ligula sed</a></li>
                            <li><a href="#" class="tm-text-link">Proin egestas eu felis et iaculis</a></li>
                        </ul>
                    </nav>   
                    <hr class="tm-margin-t-small"> 

                    <div class="tm-content-box tm-margin-t-small">
                        <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #1</h4></a>
                        <p class="tm-margin-b-30">Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                    </div>
                    <hr class="tm-margin-t-small">
                    <div class="tm-content-box tm-margin-t-small">
                        <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #2</h4></a>
                        <p>Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                    </div>  
                    <hr class="tm-margin-t-small">
                    <div class="tm-content-box tm-margin-t-small">
                        <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #3</h4></a>
                        <p>Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                    </div>      
                </div>
                
                
            </aside>

        </div>
        
    </div>
</section>
@endsection