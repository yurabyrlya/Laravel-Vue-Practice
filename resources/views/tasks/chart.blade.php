
@extends('layout')
@section('content')
    <div id="app">
        <div class="container text-center">
            <h1> Tasks Statistics </h1>
            <chart-component></chart-component>
        </div>
    </div>
    <script>
        import { Line } from 'vue-chartjs'

    </script>
@endsection

