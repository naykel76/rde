<div class="navbar">
    <div class="container">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ env('NK_LOGO', url('images/nk/logo-alt.svg')) }}" alt="{{ config('app.name')}}"></a>
        </div>
        <div class="flex">
            {{-- <a href="tel:0400 011 387" class="pxy-sm txt-white lead mr">0400 011 387</a> --}}
            <a href="#contact" class="btn-primary mr-1">GET IN TOUCH</a>

            {{-- https://www.instagram.com/reddog_energy/ --}}

            <a href="https://www.facebook.com/reddogenergy" target="_blank">
                <svg class="icon wh40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="#475993" d="M20.766.003H3.235A3.237 3.237 0 0 0 0 3.237v17.527a3.237 3.237 0 0 0 3.235 3.233h8.647l.018-8.576H9.669a.532.532 0 0 1-.528-.522l-.012-2.763c0-.294.234-.528.528-.528h2.225V8.936c0-3.1 1.892-4.784 4.655-4.784h2.272a.53.53 0 0 1 .527.529v2.33a.527.527 0 0 1-.521.528h-1.391c-1.504 0-1.797.717-1.797 1.761v2.313h3.305c.316 0 .558.276.522.587l-.329 2.763a.528.528 0 0 1-.521.466H15.64l-.018 8.574h5.144A3.236 3.236 0 0 0 24 20.77V3.237A3.237 3.237 0 0 0 20.766.003z" /></svg>
            </a>

        </div>
    </div>
</div>
