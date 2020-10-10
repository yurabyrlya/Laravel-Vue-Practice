
@extends('layout')

@section('content')
    <div id="app">
        <tasks-component v-bind:data-tasks="{{json_encode($tasks)}}"> </tasks-component>

        <div class="container">
            {{ $tasks->links() }}
        </div>
    </div>

    <script>
        import { Line } from 'vue-chartjs'
    </script>
@endsection

