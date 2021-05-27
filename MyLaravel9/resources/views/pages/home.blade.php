@extends('layouts.main-layout')
@section('content')
    <div class="my_home">
      <h1>Hello world</h1>
      <ul>
        @foreach ($employees as $employee)
          <li>
           <a href="{{ route('employee', $employee -> id) }}">
             {{ $employee -> firstname }}
             {{ $employee -> lastname }}
           </a>
           <a href="{{ route('edit', $employee -> id) }}">
             &#9998;
           </a>
           <a href="{{ route('destroy', $employee -> id) }}">
             &#10060;
           </a>
          </li>
        @endforeach
    </ul>
    </div>
@endsection
