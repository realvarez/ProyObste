@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

    <div class="card-body">

        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
        <h2>{{ ucfirst($type) }}</h2>

        @foreach($modelSearchResults as $searchResult)
        <ul>
            <li>
                <a target="_blank" href="{{ $searchResult->url }}">{{ $searchResult->title }}</a>
            </li>
        </ul>
        @endforeach
        @endforeach

    </div>
</div>
@endsection
