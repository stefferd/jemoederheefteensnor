@extends('front.layout.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h1 style="display: none;">Jemoederheefteensnor.nl</h1>
            <div class="slides">
                <ul>
                    @foreach ($entries as $entry)
                        <img src="{{ URL::asset('assets/live/uploads/') }}/{{ $entry->url }}" alt="Jemoederheefteensnor.nl" />
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
