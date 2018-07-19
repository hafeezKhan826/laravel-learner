@extends('layout.app')

@section('content')
<div>
    <h1>
        Welcome to laravel application
    </h1>
    {{$someOtherText}}
    {{$title}}
    @if(count($services>0))
    <div class="row">   
        <div class="col-md-4">
            <ul class='list-group'>
                @foreach($services as $service)
                    <li class='list-group-item list-group-item-action'>
                        {{$service}}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <ul class='list-group'>
                @foreach($services as $service)
                    <li class='list-group-item list-group-item-action'>
                        {{$service}}
                    </li>
                @endforeach
            </ul>
            
        </div>
        <div class="col-md-4">
            
            <ul class='list-group'>
                @foreach($services as $service)
                    <li class='list-group-item list-group-item-action'>
                        {{$service}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    @endif
</div>
@endsection