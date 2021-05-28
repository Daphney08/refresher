<form action="{{ URL::route('save') }}" method="post">
    @csrf
    <input type="text" name="name" required>
    <select name="status">
        <option>active</option>
        <option>in-active</option>
    </select>
    <button>Save</button>
</form>
<hr>

<ol>

    @foreach($data as $X)
        <li>
            {{ $X->name }}
            <small>
            (
                {{ $X->status }}
            )
            </small>

            <a href="{{ URL::route('delete') }}?id={{ $X->id }}</a>
        </li>
    @endforeach
</ol>