@extends('layouts.main-layout')

@section('content')
    <h1>
        Employees:
    </h1>

    <ul>
        @foreach ($employees as $employee)
            <li>
                <b>
                    <u>
                        {{ $employee -> firstname }} {{ $employee -> lastname }}
                    </u>
                </b>
                <ul>
                    @foreach ($employee -> tasks as $task)
                        <li>
                            {{ $task -> title}}
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection