<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Request 1</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark m-0">
       <?php require_once 'request3.php' ;

        $rqt3 = new Request3();
        
        #i dunno if was a name(string) or img... so i made with string
       
        echo '<div class="container mb-2">';
        echo '<a class="navbar-brand"  href="#">';
        foreach ($rqt3->getCompanyName() as  $value) {
            # link goes in '#'
            echo '<p  style="font-family: auto; margin-bottom: 0;">'.$value.'</p>';
        }
        echo '</a>';
       
        echo '<div class="d-flex justify-content-end" style="flex-wrap: wrap;">';
            foreach ($rqt3->getValues() as  $value) {
                # link goes in '#'
                echo '<a class="navbar-brand" style="font-family: inherit; font-size: 90%; " href="#">'.$value.'</a>';
            }
            echo '</div>';

            echo '</div>';
        ?>
    </nav>
  
  
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>