<form action="{{ url('owners/'.$owners->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name"  value="{{$owners->name}}" required>
    <button type="submit">Edit Owners</button>
</form>
