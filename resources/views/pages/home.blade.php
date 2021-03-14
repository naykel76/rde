@extends('gotime::layouts.app')

@section('top-a')
<div class="gradient fp-hero">
    <div class="container flex va-c ha-c h400">
        <div class="tac">
            <div class="title txt-white">Electrician for your <br> Home or Business</div>
            <a href="/contact" class="btn-primary md mt">CALL US TODAY</a>
        </div>
    </div>
</div>
@endsection

@section('top-b')

<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-50">
                <h2 class="nm">Welcome to Red Dog Energy</h2>

                <p>Red Dog Energy is a family owned and operated electrical company servicing Brisbane, Esk, Ipswich and surrounding areas. We understand the importance and reliability of a local tradesman and we pride ourselves on our exceptional service, professionalism, and workmanship when dealing with customers. Safety is of a high priority at Red Dog Energy for our family and yours, leaving your home clean and tidy during and after work is completed.</p>
                <p> If you need any electrical work for your home or business please <a href="/contact"> contact us</a> or check out our <a href="/#services">services</a> for more information.</p>

                <hr class="nmb">

                <div class="row tac nmt">
                    <div class="col-md-33">
                        <svg class="icon wh100">
                            <use xlink:href="/svg/nk_icon-defs.svg#icon-buildings"></use>
                        </svg>
                        <div class="bx-title">Home or Business</div>
                    </div>
                    <div class="col-md-33">
                        <svg class="icon wh100">
                            <use xlink:href="/svg/nk_icon-defs.svg#icon-certificate"></use>
                        </svg>
                        <div class="bx-title">Fully Licensed & Insured</div>
                    </div>
                    <div class="col-md-33">
                        <svg class="icon wh100">
                            <use xlink:href="/svg/nk_icon-defs.svg#icon-id-badge"></use>
                        </svg>
                        <div class="bx-title">10% Seniors Discount</div>
                    </div>
                </div>
            </div>
            <div class="col-md-50 tac npy">
                <div class="posa pos-br">
                    <img src="images/daz.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="services" class="secondary pxy-5 tac">
    <h2 class="subtitle txt-white  nm">WHAT WE DO</h2>
    <svg class="icon lg">
        <use xlink:href="/svg/nk_icon-defs.svg#icon-lightning"></use>
    </svg>
    <ul class="lst max" style="list-style: none;">
        <li>Split System Air Conditioner Supply and Install</li>
        <li>General Installations</li>
        <li>General Repairs</li>
        <li>Ceiling Fan Installation</li>
        <li>Dimmer Switch Installation</li>
        <li>LED & Halogen Downlights</li>
        <li>Safety Switch Installation</li>
        <li>Smoke Alarm Installations</li>
        <li>TV Wall Mounting Installation</li>
        <li>Outdoor Lighting</li>
    </ul>
</section>
<section class="dark py-4 tac">
    <h1>OUR RANGE OF SERVICES</h1>
    <div class="bdr-t"><br></div>
    <div class=""><svg class="wh100 danger" xmlns="http://www.w3.org/2000/svg" width="16" height="3.812" viewBox="0 0 16 3.812">
            <path id="Path_72" data-name="Path 72" d="M17.819,12.48l-2.678-1.517c-.277-.156-.508-.282-.514-.279a.685.685,0,0,0,.029.174c.072.321.272,1.255.267,1.259s-1.251-.446-2.774-1l-2.769-1,.147.8.147.8-.387-.111L6.457,10.8c-1.343-.386-2.447-.7-2.452-.7s-.02-.025.233.931c.124.465.251.944.283,1.065l.057.22.353.09,1.768.446,2.47.621c.581.145,1.213.305,1.405.354s.352.087.354.085-.013-.179-.068-.64c-.02-.177-.045-.389-.053-.471s-.024-.2-.03-.254-.011-.1-.01-.1,2.114.549,3.618.942a13.934,13.934,0,0,0,1.673.42c0-.011-.025-.174-.055-.364s-.06-.4-.07-.474l-.018-.131,1.464.322c.805.178,1.719.377,2.031.447a3.378,3.378,0,0,0,.588.116S19.016,13.157,17.819,12.48Z" transform="translate(-4 -10.094)" />
        </svg></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="/images/pb-residential.jpg" alt="residential electrical work">
            </div>
            <div class="col">
                <img src="/images/pb-commercial.jpg" alt="commercial electrical work">
            </div>
            <div class="col">
                <img src="/images/pb-industrial.jpg" alt="industrial electrical work">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="/images/pb-lights.jpg" alt="lights electrical work">
            </div>
            <div class="col">
                <img src="/images/pb-smoke-alarm.jpg" alt="smoke-alarm electrical work">
            </div>
            <div class="col">
                <img src="/images/pb-power-plug.jpg" alt="general electrical work">
            </div>
            <div class="col">
                <img src="/images/pb-air-conditioner.jpg" alt="air conditioner instalation">
            </div>
        </div>
        <div class="orange dilb txt-white">Add titles over images, these will later act as shortcuts to service pages!</div>
    </div>
</section>


<section class="py-4">
    <div class="container">
        <div class="row tac ">
            <div class="col-md-33">
                <div class="bx">
                    <svg class="icon wh150">
                        <use xlink:href="/svg/nk_icon-defs.svg#icon-buildings"></use>
                    </svg>
                    <div class="bx-title">Home or Business</div>
                    <p>Call <a href="tel:0400 011 387">0400 011 387</a> now for prompt and affordable service for your home or business.</p>
                </div>
            </div>
            <div class="col-md-33">
                <div class="bx">
                    <svg class="icon wh150">
                        <use xlink:href="/svg/nk_icon-defs.svg#icon-certificate"></use>
                    </svg>
                    <div class="bx-title">Fully Licensed & Insured</div>
                    <p>Our customers can rest assured knowing we are fully licensed and insured for your peace of mind.</p>
                </div>
            </div>
            <div class="col-md-33">
                <div class="bx">
                    <svg class="icon wh150">
                        <use xlink:href="/svg/nk_icon-defs.svg#icon-id-badge"></use>
                    </svg>
                    <div class="bx-title">10% Seniors Discount</div>
                    <p>Are you a senior citizen? We offer 10% discount off all electrical services for seniors.</p>
                    {{-- <p>Are you a senior citizen? Book now for with 10% off all electrical services.</p> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dark py-5">
    <div id="contact" class="container">
        <div class="row">
            <div class="col-md-40">
                <h2>Contact us via the details below or through the form on the right.</h2>
                <p><strong>Phone:</strong></p>
                <p><strong>Email:</strong></p>
                <p><strong>Service Area:</strong></p>
            </div>
            <div class="col-md-60">
                <x-contactit-contact></x-contactit-contact>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container py-4">
        <h1>Site Styles Overview</h1>
        <p class="lead">Site style examples for common page elements including text styles, buttons, form inputs and more.</p>

        <section>
            <h2>Theme Colours</h2>
            <div class="row">
                <div class="col">
                    <div class="bx-primary">
                        <div class="bx-title">Primary</div>
                    </div>
                    <p>Navbar, buttons, headings</p>
                </div>
                <div class="col">
                    <div class="bx-secondary">
                        <div class="bx-title">Secondary</div>
                    </div>
                </div>
                <div class="col">
                    <div class="bx light">
                        <div class="bx-title">Light</div>
                    </div>
                </div>
                <div class="col">
                    <div class="bx dark">
                        <div class="bx-title">Dark</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bx">
                        <h1 class="my-sm">H1 Heading</h1>
                        <h2 class="my-sm">H2 Heading</h2>
                        <h3 class="my-sm">H3 Heading</h3>
                        <h4 class="my-sm">H4 Heading</h4>
                        <h5 class="my-sm">H5 Heading</h5>
                        <h6 class="my-sm">H6 Heading</h6>
                        <hr>
                        <p class="title">Title</p>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, est! Facere voluptatibus temporibus voluptatum numquam?</p>
                        <p class="subtitle">Subtitle</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, magnam neque saepe ut eos ratione eligendi voluptas esse consequuntur dolorem dolores error velit id nisi veritatis earum, provident, maiores exercitationem!</p>
                    </div>
                </div>
                <div class="col">
                    <div class="bx">
                        <p>This is the default paragraph text</p>
                        <hr>
                        <p class="lead">Add the <code>.lead</code> class to a paragraph to make the text stand out a little more.</p>
                        <hr>
                        <a href="">This is a link</a>
                        <hr>

                        <h2>Text Utility Classes</h2>
                        <p class="my-sm txt-primary">txt-primary</p>
                        <p class="my-sm txt-green">txt-green</p>
                        <p class="my-sm txt-red">txt-red</p>
                        <p class="my-sm txt-orange">txt-orange</p>
                        <p class="my-sm txt-blue">txt-blue</p>
                        <p class="my-sm txt-white dark">txt-white</p>
                        <p class="my-sm txt-muted">txt-muted</p>
                        <p class="my-sm txt-sm">small text <code>.txt-sm</code></p>
                        <p class="my-sm txt-lg">large text <code>.txt-lg</code></p>
                        <div class="dark pxy mr">
                            <div class="headline">This is a headline!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>



        <div id="style-buttons" class="bx">
            <div class="bx-title">Buttons</div>
            <div class="bx-content">
                <button class="mx-sm nlm btn" type="button">Default</button>
                <button class="mx-sm btn-primary" type="button">Primary</button>
                <button class="mx-sm btn-secondary" type="button">Secondary</button>
                <button class="mx-sm btn-danger" type="button">Danger</button>
                <button class="mx-sm btn-success" type="button">Success</button>
            </div>
        </div>
    </div>

</section>
@endsection
