<form action="{{ url('cars') }}" method="POST">
    @csrf
    <input type="text" name="model" placeholder="Model" required>
    <input type="text" name="mark" placeholder="Mark" required>
    <input type="number" name="year" placeholder="Year" required>
    <button type="submit">Create Car</button>
</form>