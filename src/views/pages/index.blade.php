@extends('layouts.boilerplate')

@section('body')
    @include('sections.letter')
    <div class="row technology">
            <div class="col s1">
                </div>
                <div class="col s3">
                    <p>{{ L::index_description }}</p>
                    <p>{{ L::index_technologies }}</p>
                    <ul>
                        <li>Materialize CSS</li>
                        <li>Blade Templates</li>
                        <li>PHP-i18n</li>
                        <li>DotEnv</li>
                        <li>SASS</li>
                        <li>Gulp</li>
                    </ul>
                    
                </div>
    </div>
    <div class="row big-section">
            <div data-aos="fade-in"><h1>BIG STUFF</h1></div>
        
    </div>
    <div class="row big-section">
            <div data-aos="fade-in"><h1>BIG STUFF</h1></div>
        </div>
        <div class="row big-section">
                <div data-aos="fade-in"><h1>BIG STUFF</h1></div>
            </div>


@endsection


