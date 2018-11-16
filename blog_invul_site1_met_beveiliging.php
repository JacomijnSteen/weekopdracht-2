<?php

  //fouten melden!!
    error_reporting(1);
    ini_set('display_errors',1);


      $naam=$_POST['naam'];
      $datum=$_POST['datum'];
      $bericht=$_POST['blogbericht'];
  //  $bericht = wordwrap($bericht, 70, "\r\n",TRUE);
      $v_email = $_POST['email'];

//de velden naam email en bericht bewapenen tegen hackers inputs

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $naam = schoonmaken($_POST['naam']);
        $bericht = opschonen($_POST['blogbericht']);
        $v_email = opschonen($_POST['email']);
        }

    function schoonmaken($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

      $bedankt="bedankt voor het invullen \r\n";
      echo $bedankt;
  //formulier moet gepost zijn: moet hier exit bij??
  //     dit lukt even niet, laten zittten
       // if(isset($_POST["submit"]==NULL)){
       //   echo "Vergeet niet het formulier te versturen";
       // }else{
       // echo $bedankt;
       // }


    //valideren dat velden ingevuld zijn

  //  if(!empty($name) && !empty($v_email) && !empty($datum)){

    //nu de posts in file zetten
    $blogberichten=fopen("blogberichten","a");

    fwrite($blogberichten,$naam." met ".$v_email." schreef op ".$datum."\n".$bericht."\n\n");

    fclose($blogberichten);

//  }else{
  //  echo "naam of datum of email niet ingevuld";
//        }
   /*
    andere manier is file_put_content functie te gebruiken
    en file_get_content functie om alles eruit te halen in
    het andere php bestand

    */
?>
