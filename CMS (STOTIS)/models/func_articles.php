<?php
function articles_all($link) 
    {
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if (!result)
            die (mysgli_error($link));
        
        $n = mysqli_num_rows($result);
        $articles = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        
        return $articles;
}

function get_last_insert_id($link){

    $t = "SELECT LAST_INSERT_ID() AS LID";

    $result = mysqli_query($link, $t);

    if (!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);

    $row = mysqli_fetch_assoc($result);
    return $row["LID"];
}
// создание новой статьи
function articles_new($link, $title, $date, $content, $id_category){
    $title = trim($title);
    
    if ($title == '')
        return false;
    $t = "INSERT INTO articles (title, date, content, categories_id)  VALUES ('%s', '%s', '%s', '%d')";
    
    $query = sprintf($t, mysqli_real_escape_string($link, $title), $date, $content, (int) $id_category);
    
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    
    return get_last_insert_id($link);
    
}
   // редактирование статей
  function articles_edit($link, $id, $title){
    $title = trim($title);
    $id = (int)$id;
    
    if ($title == '')
        return false;
    
    $sql = "UPDATE articles SET title='%s' WHERE id='%d'";
    
    $query = sprintf($sql, mysqli_real_escape_string($link, $title),
                           $id);
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);
} 
// Удаление статей
function articles_delete($link, $id){
    $id = (int)$id;
    if ($id == 0)
        return false;
    
    $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);
} 

function articles_get($link, $id_article)
{
    $query = sprintf("SELECT * FROM articles WHERE id=%d",(int)$id_article);
    $result = mysqli_query($link, $query);
                     
    
        if (!$result)
            die (mysqli_error($link));
        
        $n = mysqli_num_rows($result);
        $articles = mysqli_fetch_assoc($result);

        return $articles;

}

?>