 <div class="container">
        <br>
    <div>
        <form method="post" action="../admin/categories.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
        <label>
            Заголовок
            <input type="text" name="title" value="<?=$categories['title']?>" class="form-item" autofocus required>
            </label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
    </div>
 </div>

