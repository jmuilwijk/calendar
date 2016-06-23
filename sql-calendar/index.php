
<!doctype html>

<html>
	<head>
        <?php require_once("index.logic.php");?>
		<title>Verjaardagskalender</title>
        <link href="common/main.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
        <table>
            <?php foreach ($birthdays as $birthday) {
                if($birthday['month'] != $curMonth){
                    echo"<h1>".$month[$birthday['month'] -1]."</h1>";
                    $curMonth = $birthday['month'];
                    } 
                        if($birthday['day'] != $curDay){
                        echo"<h2>".$birthday['day']."</h2>";
                        $curDay = $birthday['day'];                       
                }?>                 
                <p class="center">
                <a href="edit.php?id=<?=$birthday['id']?>"><?php echo $birthday['person']."(".$birthday['year'].")";?></a>
                <a href="delete.php?id=<?=$birthday['id']?>">X</a></p><br><?php   
                                      
            }?>         
        </table>

<p><a href="create.php">+ Toevoegen</a></p>

	</body>
</html>