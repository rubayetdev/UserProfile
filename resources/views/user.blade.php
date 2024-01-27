{{$id->name}}
{{$id->email}}


<form action="{{route('insert')}}" method="post">
    @csrf

    <input type="hidden" name="id" value="{{$id->id}}">
    <input type="text" name="title">
    <textarea name="description"></textarea>

    <button type="submit">Insert</button>
</form>
