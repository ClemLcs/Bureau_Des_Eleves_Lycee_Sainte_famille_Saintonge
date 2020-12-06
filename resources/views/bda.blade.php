<h1>Création d'un article pour le BDA:</h1>
<form action="/create/bda" method="post">
{{ csrf_field() }}
    <label >Votre titre</label>
    <input type="text" name="title"><br>
    <label>Votre Contenu</label>
    <input type="text" name="body"><br>
    <label >Votre Email</label>
    <input type="text" name="email" value="{{$users->email}}"><br>
    <label>Votre Nom</label>
    <input type="text" name="author" value="{{$users->prenom}}"><br>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
