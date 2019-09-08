
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Submitted File</title>
        <link rel="stylesheet" href="submit.css">
</head>
<body>
      
        <div class="card"> 
                <h1>Thank you for reaching out to me... <?php echo $_POST['name'] ?></h1>
                <div class="form">
                <?php  echo "Name : ". $_POST['name'].'<br>'; ?>
                </div>

                <div class="form">
                <?php echo "E-mail : ". $_POST['email'].'<br>'; ?>
                </div>

                <div class="form">
                <?php echo "Title : ". $_POST['title'].'<br>'; ?>
                </div>

                <div class="form">
                <?php echo "Message : ". $_POST['message'].'<br>'; ?>
                </div>
        </div>
</body>
</html>

