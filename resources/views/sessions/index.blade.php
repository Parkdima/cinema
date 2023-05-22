@extends('layouts.app')
@section('content')
<div class="container" >
    @foreach($sessions as $session)
        <div class="seat-text" data-id="{{ $session->hall_id }}" id="session-{{ $session->hall_id }}">{{ $session->hall_id }}</div>
    @endforeach
</div>
<script>
    $('.seat-text').change(function() {
        $('.seat-text').css('background-color', 'red');
        $('.seat-text').css('width', '20px')
    })
    $('.seat-text').click(function () {
        let seat =$('.seat-text').data('seat')
        let row =$('.seat-text').data('row')

        alert(seat + row);
    })
    $('.seat-text').click(function () {
        $(this).css('background-color', 'blue');
        $('.seat-text').css('width', '20px')
    })


</script>

@endsection
