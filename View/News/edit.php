<h1>Введите исправление в комментарий к новости</h1>
<form method="post">
    <div class="form-group">
        <label for="inputMessage">Комментарий</label>
        <textarea name="message" class="form-control" id="inputMessage" cols="30" rows="10"><?php echo $data['message'][0]['message']?></textarea>
    </div>

    <button type="submit" class="btn btn-default">Send</button>
</form>