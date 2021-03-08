<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>ACCUEIL</title>
    <!--<link rel="stylesheet" type="text/css" href="assets/css/accueil.css">-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@300&family=Ubuntu:wght@300&display=swap');

body{
background: #f1f1f1;
margin: 0;
padding: 0;
font-family: 'Heebo', sans-serif;
font-family: 'Ubuntu', sans-serif;

}header{
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
        .breaking-news .br-article-list a.post-title-comment i{padding-right:3px;width:19px}
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
      .inscription {
        background-color: #2e856c; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        display: block;
        /*transform: translate(50vw,50vh); pour ajuster au milieu de la page*/
        flex-direction: column;
        justify-content: center;
        position: absolute;
        top: 50vh;    
    }
    
    .authentification{
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
    .bouton button{
      width: 15%;
      height: 10%;
      font-size: 2em;
      display: flex;
      align-items: center;
      justify-content: center;  
      border-radius: 5px;
      animation: .5s;
      outline: none;
    }
    .bouton button:hover{
      filter: brightness(70%);
      cursor: pointer;
    
    }
    .menu{
            right: 40px;
            position: absolute;
            padding-left: 0px;
            cursor: pointer;
            background: #2e856c;
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
                    <a href="../controllers/cconnexion.php?action=logout"><span>Se connecter</span>&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i></a>
                </li>
            </ul>
        </nav>
    </header>

  <div class="bouton"> 
    <!-- Bouton d'inscription -->
    <button class="inscription" onclick="window.location.href = 'inscription.php'" >S'inscrire</button>
  
  </div> 

  </body>
</html>