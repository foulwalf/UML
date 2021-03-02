<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@300&family=Ubuntu:wght@300&display=swap');
        body{
            margin: 0;
            padding: 0;
            font-family: 'Heebo', sans-serif;
            font-family: 'Ubuntu', sans-serif;
            background: url(22.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container{
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
        /* nav{
            width: 100%;
            border:1px solid black;
            
        }*/
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
        .anime{
            margin-left:
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
        <nav>
            <ul class="menu">
                <li>
                    <a href="#"><span>Se deconnecter</span>&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="card">
            <div class="card-left">
                <div class="card-photo">
                    <img src="../../Téléchargements/YAO ALEXIS.JPG" alt="">
                </div>
                <div class="card-details">
                    <div>
                        <h3>Informations personnelles</h3>
                        <p><b>Nom:</b> YAO</p>
                        <p><b>Prénoms:</b> AMAN ALEXIS</p>
                        <p><b>Filière:</b> Informatique</p>
                        <p><b>Niveau:</b> Licence 1</p>
                    </div>
                </div>
            </div>
            <div class="card-right">
                <div class="card-buttons">
                    <div>
                        <button>Valider mon inscription</button>
                        <button>Consulter le relicat de ma scolarité</button>
                        <button>Consulter mon emploi du temps</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 