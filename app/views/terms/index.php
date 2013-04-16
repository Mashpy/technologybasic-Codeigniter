<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> TechnologyBasic with Codeigniter</title>
<?php foreach($category as $tech_category):?>
 <h2><?php echo $tech_category['cattitle'] ?></h2>
    <div id="main">
        
    </div>
    <p><a href="terms/<?php echo $tech_category['catid'] ?>">View article</a></p>
<?php endforeach ?>
</html>