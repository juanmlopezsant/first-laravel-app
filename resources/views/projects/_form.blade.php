<!-- Para proteger de ataques XSS -->
@csrf
<label for="title">Título: 
    <input type="text" name="title" value="{{ old('title',$project->title) }}">
</label> <br>

<label for="description">Descripción: 
    <textarea name="description">{{ old('description',$project->description) }}</textarea>
</label> <br>

<button>{{ $btnText }}</button>