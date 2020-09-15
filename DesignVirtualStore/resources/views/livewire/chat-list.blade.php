
<!-- Autor: Valeria Suárez -->

<div>

    <h5 class="mt-3"><strong>Messages List</strong></h5>

    @foreach($messages as $message)
        <li>{{$message["user"]}} - {{$message["message"]}}</li>
    @endforeach
</div>
