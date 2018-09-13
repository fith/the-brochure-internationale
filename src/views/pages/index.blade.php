@extends('layouts.boilerplate')

@section('body')

<div class="container">    
    <div class="row">
        <div class="col s6">
          <p>{{ L::index_description }}</p>
        </div>
        <div class="col s6">
            <p>{{ L::index_technologies }}</p>
            <ul>
                <li>Materialize CSS</li>
                <li>Blade Templates</li>
                <li>PHP-i18n</li>
                <li>DotEnv</li>
            </ul>
        </div>
    </div>
</div>

@endsection


