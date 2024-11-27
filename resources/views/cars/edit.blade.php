<form action="{{ url('cars/'.$cars->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="model" placeholder="Model"  value="{{$cars->model}}" required>
    <input type="text" name="mark" placeholder="Mark" value="{{$cars->mark}}" required>
    <input type="number" name="year" placeholder="Year" value="{{$cars->year}}" required>
    <button type="submit">Edit Cars</button>
</form>
