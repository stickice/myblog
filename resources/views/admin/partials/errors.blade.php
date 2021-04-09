@if ($errors->any())
    <div class="alert alert-danger">
        <strong>抱歉!</strong>
        出现了一些问题.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
