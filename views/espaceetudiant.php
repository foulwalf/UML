<?php  
session_start();
setlocale (LC_TIME, 'fr_FR.utf8','fra');
if (!isset($_SESSION['user'])) {
    header('location: authentification.php?erreur=!auth');
} else{
    $user = $_SESSION['user'];
    $scolarite = $_SESSION['scolarite'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="assets/alertifyjs/css/alertify.min.css">
    <link rel="stylesheet" type="text/css" href="assets/alertifyjs/css/semantic.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@300&family=Ubuntu:wght@300&display=swap');
        body{
            margin: 0;
            padding: 0;
            font-family: 'Heebo', sans-serif;
            font-family: 'Ubuntu', sans-serif;
            background: url(assets/img/22.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container, .container-v{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 100px;
        }
        .card{
            background: white;
            max-width: 600px;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            box-shadow: -1px 1px 7px 4px grey;
            border-radius: 5px;
            
        }
        .card-left{
            width: 50%;
            height: 100%;
            padding-left: 20px;
        }
        .card-photo{
            height: 50%;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-photo img{
            width: 70%;
            height: 100%;
            border: 2px solid #2e856c;

        }
        .card-details{
            height: 50%;
            border: none;
        }
        .card-right{
            width: 50%;
            height: 100%;
        }
        .card-buttons{
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card-buttons button{
            width: 250px;
            font-size: 1rem;
            padding: 5%;
            margin: 20px;
            background-color: #2e856c;
            color: white;
            border: none;
            border-radius: 5px;
            outline: none;
        }
        .card-buttons button:hover{
            cursor: pointer;
            filter: brightness(70%);
        }
        h3{
            text-decoration: underline;
            text-align: center;
            color: #2e856c;
        }
        b{
            color: #2e856c;
        }
        ul{
            list-style: none;
        }
        .menu{
            right: 40px;
            position: absolute;
            padding-left: 0px;
            cursor: pointer;
            background: #eb2f06;
            font-size: 1rem;
            padding: 10px;
            border-radius: 5px;
        }
        .menu ul{
            display: none;
        }
        .menu:hover{
            filter: brightness(80%);
        }
        .menu li a{
            text-decoration: none;
            padding: 10px;
            color: white;
            font-weight: bold;
        }
        header{
            padding-left: 100px;
            padding-right: 100px;
            background-color: #292929;
        }
        .breaking-news{
            display:block;background-color:#292929;color:#c6c6c6;overflow:hidden;width: 100%;
        }
        .breaking-news .wrapper{position:relative}
        .breaking-news .br-title{
            display:block;overflow:hidden;position:relative;font-size:20px;font-weight:900;letter-spacing:-.8px;text-transform:uppercase;color:#efc220;line-height:46px;cursor:default
        }
        .breaking-news .br-navi{display:block;position:absolute;right:0;top:0;height:46px;line-height:43px;cursor:default}
        .breaking-news .br-navi a{
            display:inline-block;position:relative;margin-left:0;line-height:26px;width:26px;text-align:center;border-radius:50%;vertical-align:middle;background-color:transparent;color:#fff;font-size:10px
        }.breaking-news .br-navi a:before{
            display:block;content:'';z-index:0;position:absolute;width:100%;height:100%;left:0;top:0;background:#efc220;border-radius:50%;opacity:.1;filter:alpha(opacity=10);transition:all .2s;-moz-transition:all .2s;-webkit-transition:all .2s;-o-transition:all .2s
        }
        .breaking-news .br-navi a:hover:before{opacity:1;filter:alpha(opacity=100)}
        .breaking-news .br-navi a i{display:block;position:relative;z-index:2}
        .breaking-news .br-navi a:hover{
            color:#232323;
        }
        .breaking-news .br-article-list{
            display:block;position:absolute;left:130px;top:0;right:0;line-height:46px;font-size:12px;overflow:hidden
        }
        .breaking-news .br-article-list:after,.breaking-news .br-article-list:before{
            display:block;position:absolute;z-index:2;top:0;left:100%;width:100px;height:100%;box-shadow:5px 0 60px 40px #292929;content:''
        }
        .breaking-news .br-article-list:before{left:auto;right:100%}
        .breaking-news .br-article-list a{
            color:#c6c6c6;display:inline-block;line-height:inherit
        }
        .breaking-news .br-article-list a:not(.post-title-comment) strong{display:inline-block;border-bottom:1px solid transparent;padding-bottom:1px;line-height:14px;vertical-align:middle;transition:all .2s;-moz-transition:all .2s;-webkit-transition:all .2s;-o-transition:all .2s}
        .breaking-news .br-article-list a:not(.post-title-comment):hover strong{
            border-color:#ccc
        }
        .breaking-news .br-article-list a strong{
            display:inline-block;margin-left:8px;color:#fff;font-weight:900
        }
        .breaking-news .br-article-list a.post-title-comment{
            color:#efc220;margin-left:5px;display:inline-block;font-weight:700
        }
        .breaking-news .br-article-list a.post-title-comment i{
            padding-right:3px;width:19px
        }
        .breaking-news .br-article-list a.post-title-comment:hover{
            color:#fff;
        }
        .breaking-news .br-article{display:inline-block;white-space:nowrap;margin-right:24px;position:relative;animation: sideAnime 60s infinite ;}
        .breaking-news .br-article:before{display:block;position:absolute;content:'\f111';font-family:FontAwesome;font-size:4px;padding-top:1px;right:-15px;color:rgba(255,255,255,.2)}
        .breaking-news .br-article:last-child:before{display:none}
        .breaking-news .br-article-list-inner{display:block;white-space:nowrap;position:relative}
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

.card-v{
    background: white;
    min-width: 100px;
    width: 350px;
    height: 200px;
    padding: 20px;
    border-radius: 5px;
    position: absolute;
    animation-duration: 10s;
    z-index: 4;
    display: none;
}
.card-v .body{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80%;
    width: 100%;
    margin: 5% 0 5% 0;
}
.form-div{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
}
.form-div form{
    width: 100%;
}
.form-div form .input-div{
    width: 100%;
    
}
.form-div form .input-div input{
    width: 100%;
    height: 70%;
}
.form-div form .input-div-text{
    height: fit-content;
    border-bottom: 2px solid #2e856c;
    
}
.form-div form .input-div-text input{
    width: 98%;
    height: 2.5rem;
    font-size: 1.5rem;
    padding: 1.5% 0 1.5% 0%;
    outline: none;
    border: none;
    box-sizing: border-box;
    border-radius: 5px;
}
.form-div form .input-div-submit {
    margin:5% 0 5% 0;
    height: fit-content;
}
.form-div form .input-div-submit input{
    height: 50px;
    font-size: 1.5rem;
    background: #2e856c;
    outline: none;
    border: none;
    box-sizing: border-box;
    border-radius: 5px;
    color: white;
}
.form-div form .input-div-submit input:hover{
    cursor: pointer;
    filter: brightness(70%);
}
.card-v .head{
    display: flex; 
    justify-content: flex-end;
    align-items: center;
    
}
.card-v .head button{
    font-size: 1rem;
    padding: 2% 3% 2% 3%;
    color: white;
    background: #eb2f06;
    border:  none;
    border-radius: 5px;
    outline: none;
    cursor: pointer;
}
.card-v .head button:hover{
    filter: brightness(80%);
}
.film{

    position: absolute;
    background: black;
    opacity: .8;
    height: 100%;
    width: 100%;
    animation-duration: 10s;
    z-index: 3;
    display: none;
    
}
.planning div{
    font-size: 1rem;
    margin-top: 10%;
}

.planning div button{
    height: 50px;
    font-size: 1.5rem;
    width: 100%;
    color: white;
    background: #2e856c;
    border: none;
    outline: none;
    cursor: pointer;
    position: relative;
}
.planning div button:hover{
    filter: brightness(80%);
}
</style>
    
</head>
<body>
    <div class="film" id="film"></div>
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
        <nav>
            <ul class="menu">
                <li>
                    <a href="../controllers/cconnexion.php?action=logout"><span>Se deconnecter</span>&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="card">
            <div class="card-left">
                <div class="card-photo">
                    <img src="../fichiers/<?=$user['matricule']?>/photo/<?=$user['photo']?>" alt="">
                </div>
                <div class="card-details">
                    <div style="font-weight: bold;">
                        <h3>Informations personnelles</h3>
                        <p><b>Matricule:</b>&nbsp;&nbsp;<?= strtoupper($user['matricule']); ?></p>
                        <p><b>Nom:</b>&nbsp;&nbsp;<?= strtoupper($user['nombenef']); ?></p>
                        <p><b>Prénoms:</b>&nbsp;&nbsp;<?= strtoupper($user['prenombenef']); ?></p>
                        <p><b>Filière:</b>&nbsp;&nbsp;<?= strtoupper($user['filiere']); ?></p>
                        <p><b>Niveau:</b>&nbsp;&nbsp;<?= strtoupper($user['niveau']); ?></p>
                    </div>
                </div>
            </div>
            <div class="card-right">
                <div class="card-buttons">
                    <div>
                        <?php if($user['valide'] !== "1" ) { ?><button onclick="valider();">Valider mon inscription</button> <?php } ?>
                        <button onclick="consulter();">Consulter le relicat de ma scolarité</button>
                        <button onclick="plan();">Consulter mon emploi du temps</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-v" id="valider">
            <div class="head">
                <button onclick="fermer();">X</button>
            </div>
            <div class="body">
                <div class="form-div">
                    <form action="../controllers/cespaceetudiant.php" method="POST">
                        <div class="input-div input-div-text">
                            <label for="num_v">Code de versement</label>
                            <input type="text" name="code_v" id="code_v">
                        </div>
                        <div class="input-div input-div-submit">
                            <input type="submit" name="valider" value="Valider">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-v" id="solde">
            <div class="head">
                <button onclick="fermer();">X</button>
            </div>
            <div class="body" style="margin: 0;font-weight: bold;">
                <div class="solde">
                    <p><b>Scolarité totale:</b>&nbsp;&nbsp;<?= $scolarite['scolarite'] ?> FCFA</p>
                    <p><b>Scolarité Payée:</b>&nbsp;&nbsp;<?= $scolarite['scolaritePayee'] ?> FCFA</p>
                    <p><b>Relicat:</b>&nbsp;&nbsp;<?= $scolarite['solde'] ?> FCFA</p>
                </div>
            </div>
        </div>
        <div class="card-v" id="planning">
            <div class="head">
                <button onclick="fermer();">X</button>
            </div>
            <div class="body" style="margin: 0;font-weight: bold;">
                <div class="planning">
                    <div><b>Date d'ajout:</b>&nbsp;<?= $_SESSION['emploiDuTemps'][0] ?></div>
                    <div><a href="<?= $_SESSION['emploiDuTemps'][1] ?>" target="_blank"><button><span>Télécharger&nbsp;&nbsp;<i class="fas fa-download"></i></span></button></a></div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="assets/alertifyjs/alertify.min.js"></script>

    <script>
        <?php if(isset($_SESSION['validation'])){ ?>
        var validation = '<?= $_SESSION['validation'] ?>';
        alert(validation);
        switch (validation) {
            case 'succes':
                alertify.success('<i class="fas fa-check-circle"></i>&nbsp;Inscription validée.');
                break;
            case 'error1':
                alertify.error('<i class="fas fa-fa-exclamation-circle"></i>&nbps;Une erreur s\'est produite lors de la validation veuillez reessayer.');
                break;
            case 'error2':
                alertify.error('<i class="fas fa-fa-exclamation-circle"></i>&nbsp;Code de versement incorrect, veuillez valider votre inscription avec un code de versement valide');
                break;
            default:
                break;
        }
        
        <?php unset($_SESSION['validation']);}?>
    </script>
    <script>
        var cardv = document.getElementById("valider");
        var cardc = document.getElementById("solde");
        var film = document.getElementById("film");
        var planning = document.getElementById("planning");
        function valider(){
            cardv.style.display = "block";
            film.style.display = "block";
        }
        function consulter(){
            cardc.style.display = "block";
            film.style.display = "block";
        }
        function plan(){
            planning.style.display = "block";
            film.style.display = "block";
        }
        function fermer(){
            cardc.style.display = "none";
            cardv.style.display = "none";
            film.style.display = "none";
            planning.style.display = "none";
        }
    </script>
</body>
</html> 