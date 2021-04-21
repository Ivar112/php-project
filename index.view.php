
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

        <h1>

            Tasks

        </h1>

    </header>
    
    <ul>
    
        <li>
        
            <strong>Task: </strong><?= ucwords($task['title']); ?>
        
        </li>

        <li>
        
            <strong>Due date: </strong><?= ucwords($task['due']); ?>
        
        </li>

        <li>
        
            <strong>Person responsible: </strong><?= ucwords($task['assigned_to']); ?>
    
        </li>

        <li>
        
            <strong>Status: </strong><?= ucwords($task['completed'] ? 'complete' : 'incomplete'); ?>
    
        </li>
            
           

    </ul>


</body>
</html>

