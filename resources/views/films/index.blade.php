<div class="container">
{{--    --}}
    @foreach($sessions as $session)
        <div class="row" id="seat-id">
            <div class="col-2">
                <button class="btn btn-success films" data-id="{{ $session->id }}" id="session-{{ $session->id }}">{{ $session->name }}</button>
            </div>
        </div>
    @endforeach
</div>
</div>
<script>

    $('#seat-id').click(function () {
        let seat =$('#seat-id').data('seat')
        let row =$('#seat-id').data('row')

        alert(seat + row);
    })
    $('#seat-id').change(function() {
        $('button').css('color', 'grey');
    })

</script>

