<?php
function categories_all($link) 
    {
        $query = "SELECT * FROM categories ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if (!result)
            die (mysgli_error($link));
        
        $n = mysqli_num_rows($result);
        $categories = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $categories[] = $row;
        }
        
        return $categories;
} 

function articles_of_category($link, $id_category)
{
    $query = sprintf("SELECT * FROM articles WHERE categories_id=%d",(int)$id_category);
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
// Создание категорий
function categories_new($link, $title){
    $title = trim($title);
    
    if ($title == '')
        return false;
    
    $t = "INSERT INTO categories (title) VALUES ('%s')";
    
    $query = sprintf($t, mysqli_real_escape_string($link, $title));
    
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    
    return true;
    
}
                     
  function categories_edit($link, $id, $title){
    $title = trim($title);
    $id = (int)$id;
    
    if ($title == '')
        return false;
    
    $sql = "UPDATE categories SET title='%s' WHERE id='%d'";
    
    $query = sprintf($sql, mysqli_real_escape_string($link, $title),
                           $id);
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);
} 
// Удаление категорий
function categories_delete($link, $id_category){
    $id = (int)$id_category;
    if ($id == 0)
        return false;
    
    $query = sprintf("DELETE FROM categories WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);
    
    if (!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);
} 

?>