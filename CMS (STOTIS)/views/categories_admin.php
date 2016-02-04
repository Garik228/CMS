 <div class="container">
        <div>
            <br>
            <a href="categories.php?action=add" class="knopka">Добавить</a>
            <a href="../admin/categories.php?action=edit&id=<?=$cat['id']?>" class="knopka">Изменить</a>
            <a href="../admin/categories.php?action=delete&id=<?=$cat['id']?>" class="knopka">Удалить</a>
        </div>
        <div class="clearfix">
        </div>
        <br>
        <br>
            <table class="table table-striped" id="menuList">
                <thead>
                <tr>
                    <th width="1%" class="nowrap center">
                    <input type="checkbox" name="checkall-toggle" value class="hasTooltip">
                    </th>
                    <th width="10%" class="nowrap center">
                        <span class="hidden-phone">
                            <span>Заголовок</span>
                    </th>
                    <th width="10%" class="nowrap center">
                            <span class="hidden-phone">
                                Статьи</span>
                    </th>
                    <th width="10%" class="nowrap center">
                        <span class="hidden-phone">
                        Автор</span>
                    </th>
                    <th width="1%" class="nowrap center">
                        <span class="hidden-phone">
                        ID</span>
                    </th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="15">
                        <div class="pagination pagination-toolbar">
                            <input type="hidden" name="limitstart" value="0">
                        </div>
                    </td>
                </tr>
                </tfoot>
                <?php foreach($categories as $cat): ?>
                    <tbody>
    <tr class="row0">
        <td class="center">
            <input type="checkbox" id="raz"/><label for="raz"></label>
        </td>
        <td>
            <a href="../admin/categories.php?action=edit&id=<?=$cat['id']?>"><?=$cat['title']?></a>
        </td>
        <td class="center btns">
        <a href="../admin/articles.php?id_category=<?=$cat['id']?>">Статьи</a>
        </td>
        <td class="center btns">

        </td>
        <td class="center btns">
        <?=$cat['id']?>
        </td>
    </tr>
                <?php endforeach ?>
                    </tbody>
    </table>
 </div>
