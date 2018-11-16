<?php

  //fouten melden!!
    error_reporting(1);
    ini_set('display_errors',1);

  /*formulier moet gepost zijn: moet hier exit bij??
   dit lukt even niet, laten zittten
     if()!isset($_POST["submit"]){
     echo:"Vergeet niet het formulier te versturen";
        exit;
      }
*/
      $naam=$_POST['naam'];
      $datum=$_POST['datum'];
      $bericht=$_POST['blogbericht'];
    //  $bericht = wordwrap($bericht, 70, "\r\n",TRUE);
      $v_email = $_POST['email'];

      $bedankt="bedankt voor het invullen";
      echo $bedankt;

    //valideren dat velden ingevuld zijn

    /*if(empty($name) || empty($v_email) || empty($datum)){
          echo ("naam of datum of email niet ingevuld");
              }
    */
   /*
    Nu alles in een file stoppen file_put
    en in een nieuw html-document met erin php script: file_get
    de boel erin zetten
    */

    $blogberichten=fopen("blogberichten","a");
    // fwrite($blogberichten,$naam);
    fwrite($blogberichten,$naam." met ".$v_email." schreef op ".$datum."</br>".$bericht."</br>");

    fclose($blogberichten);
    ?>
