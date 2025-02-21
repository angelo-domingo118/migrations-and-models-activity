@if ($errors->any())
    <div class="alert alert-error">
        <ul style="list-style-position: inside;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif