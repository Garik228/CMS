<div class="container" xmlns="http://www.w3.org/1999/html">
        <div>
            <br>
        <a href="articles.php?action=add-form&id_category=<?=$id_category?>" class="knopka">Добавить</a>
            <a href="../admin/articles.php?action=edit-form&id=<?=$a['id']?>" class="knopka">Изменить</a>
            <a href="../admin/articles.php?action=delete&id=<?=$a['id']?>" class="knopka">Удалить</a>
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
                 <span>Заголовок</span>
             </th>
             <th width="10%" class="nowrap center">
                 <span>Дата</span>
             </th>
             <th width="10%" class="nowrap center">
                        <span class="hidden-phone">
                        Автор</span>
             </th>
             <th width="10%" class="nowrap center">
                        <span class="hidden-phone">
                        Кол-во просмостров</span>
             </th>
             <th width="1%" class="nowrap center">
                        <span class="hidden-phone">
                        ID</span>
             </th>
                <?php foreach($articles as $a): ?>
             <tbody>
         <tr class="row0">
             <td class="center">
                 <input type="checkbox" id="raz"/><label for="raz"></label>
                 </td>
             <td class="center btns">
                 <a href="../admin/articles.php?action=edit-form&id=<?=$a['id']?>"><?=$a['title']?></a>
             </td>
             <td class="center btns">
                    <?=$a['date']?>
             </td>
             <td class="center btns">

             </td>
             <td class="center btns">

             </td>
             <td class="center btns">
             <?=$a['id']?>
             </td>
    </tr>
                <?php endforeach ?> 
</table>
     </tbody>
        </div>
