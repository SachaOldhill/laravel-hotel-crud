@extends('layouts.main-layout')
@section('content')
    <div class="my_home">
      <h1>Hello world</h1>
      <ul>
        <li>
          <h1>Name: {{ $employee -> firstname }}</h1>
        </li>
        <li>
          Lastname: [{{ $employee -> lastname }}]
        </li>
        <li>
          Role: {{ $employee -> role }}
        </li>
        <li>
          Ral: {{ $employee -> ral }}
        </li>
     </ul>
    </div>
@endsection
