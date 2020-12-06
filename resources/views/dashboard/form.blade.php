<h2>Créer un nouvel article</h2>
<form action="/dashboard/store/posts" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="">Le titre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $post->name) }}">
    </div>
    <div class="form-group">
        <label for="">Le contenu</label>
        <textarea type="text" name="content" class="form-control">
            {{ old('content', $post->name) }}
        </textarea>
    </div>
    <div class="form-group">
        <label for="">Le tags</label>
        <input type="text" name="tags" class="form-control" value="{{ old('tags')}}">
        <input type="hidden" name="user_id" value="{{ $users->id }}">
    </div>
    <button class="btn btn-success" >Envoyer</button>
</form>