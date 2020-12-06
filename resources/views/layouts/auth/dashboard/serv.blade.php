<h1>Signaler un problème</h1>
<form action="/task/insert" method="post">
@csrf
<div class="row form-group">
    <input type="hidden" name="user" ></br>
    <label for="">Message:</label></br>
    <textarea name="msg"></textarea></br>
    <input type="hidden" name="time"></br>
    <label for="">Type de problème:</label></br>
    <input type="checkbox" name="pb_reboot"> 
    <label for="">Redémarrage</label></br>
    <input type="checkbox" name="pb_mt"> 
    <label for="">Maintenance</label></br>
    <input type="checkbox" name="pb_crash"> 
    <label for="">Crash</label></br>
    <input type="checkbox" name="pb_serv_res"> 
    <label for="">Serveur ne réponds pas</label></br>
</div>
<button type="submit">Envoyer</button>
</form>

</body>