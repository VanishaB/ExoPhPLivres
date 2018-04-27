<html>
    
    
  <head>
    <link href="index.css" rel=stylesheet>
  </head>
    
  <body>
      
    <?php
      
    
    $TitreA = array(
        'nom' => "TitreA",
        'prix'=>  20,
        'note' => 3,
        'p' => "prime");
      

            
       $TitreB = array(
        'nom' => "TitreB",
        'prix'=>  30,
        'note' => 3,
         'p' => "pas prime"); 
      
           $TitreC = array(
        'nom' => "TitreC",
        'prix'=>  25,
        'note' => 5,
      'p' => "prime");
      
       $TitreD = array(
        'nom' => "TitreD",
        'prix'=>  20,
        'note' => 2,
        'p' => "prime");
        
       $TitreE = array(
        'nom' => "TitreE",
        'prix'=>  35,
        'note' => 3,
         'p' => "pas prime"); 
      
           $TitreF = array(
        'nom' => "TitreF",
        'prix'=>  15,
        'note' => 3,
      'p' => "prime");
      
      $TitreG = array(
        'nom' => "TitreG",
        'prix'=>  20,
        'note' => 5,
      'p' => "prime");
      
      $Livre = array($TitreA, $TitreB, $TitreC, $TitreD , $TitreE , $TitreF, $TitreG);
         
      
      
  foreach ($Livre as $titre)  {
      
      echo'<div class="border">';
echo $titre ['nom' ].'<br />';
echo $titre ['prix'].'<br />';
echo $titre ['note'].'<br />';
echo $titre ['p']. '<br />';
  
      
    echo '</div>';
      echo '<br />';
     }

    ?>
         
  </body>
</html>