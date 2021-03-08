<?php 
    $erreur = [
        'idError' => 'Identifiants incorrects!',
        '!auth' => 'Veuillez vous connecter!',
        'idInvalid' => 'Patientez jusqu\'à l\'activation de votre espace etudiant!',
    ]
?>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@300&family=Ubuntu:wght@300&display=swap');

    body{
    background: #f1f1f1;
    margin: 0;
    background: url(assets/img/22.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    padding: 0;
    font-family: 'Heebo', sans-serif;
    font-family: 'Ubuntu', sans-serif;
    
    }
#container{
    width:400px;
    margin:0 auto;
    margin-top:10%;
}
/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 20px;
}
#container h1 {
    width: fit-content;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    outline: none;
    border-radius: 5px;
    border: 1px solid #2e856c;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #2e856c;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
    border: none;
    font-size: 1rem;
}
input[type=submit]:hover {
    filter: brightness(85%);
    color: white;
}
header{
    padding-left: 100px;
    padding-right: 100px;
    background-color: #292929;
}
.breaking-news{display:block;background-color:#292929;color:#c6c6c6;overflow:hidden;width: 100%;}.breaking-news .wrapper{position:relative}
        .breaking-news .br-title{display:block;overflow:hidden;position:relative;font-size:20px;font-weight:900;letter-spacing:-.8px;text-transform:uppercase;color:#efc220;line-height:46px;cursor:default}.breaking-news .br-navi{display:block;position:absolute;right:0;top:0;height:46px;line-height:43px;cursor:default}.breaking-news .br-navi a{display:inline-block;position:relative;margin-left:0;line-height:26px;width:26px;text-align:center;border-radius:50%;vertical-align:middle;background-color:transparent;color:#fff;font-size:10px}.breaking-news .br-navi a:before{display:block;content:'';z-index:0;position:absolute;width:100%;height:100%;left:0;top:0;background:#efc220;border-radius:50%;opacity:.1;filter:alpha(opacity=10);transition:all .2s;-moz-transition:all .2s;-webkit-transition:all .2s;-o-transition:all .2s}.breaking-news .br-navi a:hover:before{opacity:1;filter:alpha(opacity=100)}.breaking-news .br-navi a i{display:block;position:relative;z-index:2}.breaking-news .br-navi a:hover{color:#232323}.breaking-news .br-article-list{display:block;position:absolute;left:130px;top:0;right:0;line-height:46px;font-size:12px;overflow:hidden}.breaking-news .br-article-list:after,.breaking-news .br-article-list:before{display:block;position:absolute;z-index:2;top:0;left:100%;width:100px;height:100%;box-shadow:5px 0 60px 40px #292929;content:''}.breaking-news .br-article-list:before{left:auto;right:100%}.breaking-news .br-article-list a{color:#c6c6c6;display:inline-block;line-height:inherit}.breaking-news .br-article-list a:not(.post-title-comment) strong{display:inline-block;border-bottom:1px solid transparent;padding-bottom:1px;line-height:14px;vertical-align:middle;transition:all .2s;-moz-transition:all .2s;-webkit-transition:all .2s;-o-transition:all .2s}.breaking-news .br-article-list a:not(.post-title-comment):hover strong{border-color:#ccc}.breaking-news .br-article-list a strong{display:inline-block;margin-left:8px;color:#fff;font-weight:900}.breaking-news .br-article-list a.post-title-comment{color:#efc220;margin-left:5px;display:inline-block;font-weight:700}.breaking-news .br-article-list a.post-title-comment i{padding-right:3px;width:19px}.breaking-news .br-article-list a.post-title-comment:hover{color:#fff}.breaking-news .br-article{display:inline-block;white-space:nowrap;margin-right:24px;position:relative;animation: sideAnime 60s infinite ;}.breaking-news .br-article:before{display:block;position:absolute;content:'\f111';font-family:FontAwesome;font-size:4px;padding-top:1px;right:-15px;color:rgba(255,255,255,.2)}.breaking-news .br-article:last-child:before{display:none}.breaking-news .br-article-list-inner{display:block;white-space:nowrap;position:relative}
    @keyframes sideAnime {
    0%{
        left: 100%;
    }
    50%{
        left: 0%;
    }
    100%{
        left: 100%;
    }
    
}

.back{
    width: 40px;
    height: 40px;
    color: black;
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: flex-start;

}
.back .fas{
    position: relative;
    font-size: 2rem ;
    
}
.back:hover .fas{
    color: #eb2f06;
}
</style>
    </head>
    <body>
    <header>
        <div class="breaking-news">
            <div class="wrapper">
                <strong class="br-title">L'AGITELIEN</strong>
                <div class="br-article-list">
                    <div class="br-article-list-inner">
                        <div class="br-article">
                            <a href="/site/">Administration <strong>Tous engagés contre la COVID-19 ! Respectons les mesures d’hygiène et de sécurité, maintenons la distanciation sociale</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="../controllers/cconnexion.php" method="POST">
                <a href="accueil.php"><div class="back"><i class="fas fa-arrow-left"></i></div></a>
               <h1>Mot de passe oublié</h1>
                <label><b>Matricule</b></label>
                <input type="password" placeholder="Entrer votre matricule" name="matricule" required style="outline: none;">
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    echo "<p style='color:rgb(255, 0, 0)'>".$erreur[$err]."</p>";
                }
                ?>
                <input type="submit" id='submit' name="mdp_oublie" value='Envoyer' style="outline: none;">
            </form>
        </div>
    </body>
</html>
