<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>ESPACE ETUDIANT</title>
    <!--<link rel="stylesheet" type="text/css" href="assets/css/accueil.css">-->
    <style>
        .deconnexion{
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            display: block;
            justify-content: top;
            position: relative;
        }

        body{ 
            background-image:url(assets/img/agitel2.png);
            background-size: cover;
            background-repeat: no-repeat;
            backdrop-filter: blur(5px);
            height: 97vh;
            width: 99vw;
        }

        .bouton{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .entete{
            background-color: #4CAF50;
        }

    </style>
  </head>
  <body>
  
  <div class="entete"> 
    <table>
      <tr>
        <td><img src="assets/img/logo_AGITEL.png"></td>
        <td><button class="deconnexion" onclick="window.location.href = 'accueil.php'" >Deconnexion</button></td>
      </tr>
      
    </table>
  </div> 

  </body>
</html>