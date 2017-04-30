
<form method="post" action="edit.php?id=<?php echo $id ?>">
    <input type="text" placeholder="name" name="name" value="<?php echo $row['name'] ?>">
    <input type="text" placeholder="description" name="description" value="<?php echo $row['description'] ?>">
    <input type="date" placeholder="created_at" name="created_at" value="<?php echo $row['created_at'] ?>">
    <input type="hidden"  name="id" value="<?php echo $id ?>">
    <input type="submit">
</form>