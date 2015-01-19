@extends ('layouts.landingpage')

    @section('body-class')body--landingpage @stop

    @section('content')

        <div class="container layer landingpage">

            <section role="main" class="hero app--content">

                <h1>screeenly</h1>
                <p>Create website screenshots through a simple API.</p>

                {{ link_to_route('oauth.github', 'Sign up with Github', null, ['class' => 'button']) }}

                <p><a href="#show-examples">Show</a> examples or {{ link_to_route('try', 'try it', null) }} right now.</p>

            </section>


            {{-- include footer  --}}
            @include('layouts.footer')

        </div>

        <div id="particles-js"></div>

        <div class="container layer">

            <section class="hero">

                <h2 id="show-examples">Example screenshots</h2>
                <p>All of the following screenshots were generated by Screeenly</p>

                <figure>
                    <img src="{{ URL::asset('assets/images/examples/bbc-com.jpg') }}" alt="Screenshot of BCC.com">
                    <figcaption>http://bbc.com</figcaption>
                </figure>

                <figure>
                    <img src="{{ URL::asset('assets/images/examples/medium.jpg') }}" alt="Screenshot of Medium.com">
                    <figcaption>http://medium.com</figcaption>
                </figure>

                <figure>
                    <img src="{{ URL::asset('assets/images/examples/facebook.jpg') }}" alt="Screenshot of Facebook.com">
                    <figcaption>http://facebook.com</figcaption>
                </figure>

            </section>

            {{-- include footer  --}}
            @include('layouts.footer')

        </div>


    @stop
