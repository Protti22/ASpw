@foreach($cars as $entity) 
    <div>
        <h3>{{ $entity->year }}</h3>
        <p>{{ $entity->model }}</p>
        <p>{{ $entity->mark }}</p>
        <a href="{{ url('cars/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('cars/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach