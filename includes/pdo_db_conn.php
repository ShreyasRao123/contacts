        <?php
            
        
        try{
            $pdo= new PDO ('mysql:host=localhost;dbname=test','test','test123');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $output="Database connection established";
            }
            
        catch(PDOException $e){
            $output="Database connection error: ".$e->getMessage()." in ".$e->getFile()." : ".$e->getLine();
            }
        
        
        
        ?>
