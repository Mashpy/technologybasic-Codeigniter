<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php foreach($term_item as $tech_term):?>
 <h2><?php echo $tech_term['title'] ?></h2>
    <div id="main">
        
    </div>
    <p><a href="details/<?php echo $tech_term['alias'] ?>">View article</a></p>
<?php endforeach ?>
</html>