<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css" >
    <title>alibobo</title>
    <style>

*{margin:0;padding: 0;box-sizing: border-box;font-family: monospace;}
body{
    color: rgb(191, 191, 191);
    background-color: rgb(0, 0, 0);
    font-family: Arial, Helvetica, sans-serif;
    min-height: 100vh;
}

header{
    min-height: 90px;
    background-color: #999;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

nav{
    width: 50%;
   
}
ul{
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
}

main{
    min-height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.text{
    transform-style: preserve-3d;
    animation: turntext  40s linear infinite;
}



span{
    position: absolute;
    top:-220px;
    left:0;
    background: rgb(238,174,202);
background: linear-gradient(0deg, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    color: #fff;
    font-size: 3em;
    transform-origin:center;
    transform-style: preserve-3d;
    padding: 14px;
    transform:  rotateY(calc(var(--i) * calc(360deg / 27))) translateZ(200px) ;
    border-top: 4px solid #fff;
    border-bottom: 4px solid #fff;
    
   
}

span::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgb(237,210,222);
background: linear-gradient(0deg, rgba(237,210,222,1) 0%, rgba(206,219,233,1) 100%);
    transform: translateZ(-5px);
    
}

@keyframes turntext {
    0%{
        transform: perspective(1000px) rotateY(360deg) rotateX(1deg) translateY(0) translateX(0);
    }
    100%{
        transform: perspective(1000px) rotateY(0) rotateX(1deg) translateY(0) translateX(0);
    }
}

#contener{
   transform-style: preserve-3d;
   perspective-origin: 50% 1000px;
   animation: turn 10s infinite linear;
   
}

.carte{
    height: 420px;
    width: 300px;
    /* background: url('https://2.bp.blogspot.com/-5T14ZYjuu7o/UXp67CHAwiI/AAAAAAAAAI4/sD-RzgJhuCo/s1600/Magicarpe.png') center/cover no-repeat;  */
    background-color: #fff;
    transform-style: preserve-3d;
    border: 1px solid rgb(247 220 76);
}
.arriere{
    position: absolute;
    top: 0;
    height: 420px;
    width: 300px;
    /* background: url('https://th.bing.com/th/id/OIP.BCWmyb5WSxmzhJxVKkp_DQHaKW?pid=ImgDet&rs=1') center/cover no-repeat;  */
    background-color: #999;
    transform-style: preserve-3d;
    transform: translateZ(-6px);
    border: 1px solid rgb(247 220 76);
    
    
}

.droite{
    position: absolute;
    height: 420px;
    width: 6px;
    background-color: rgb(247 220 76);
    transform-style: preserve-3d;
    transform: rotateY(270deg) translateX(0);
    transform-origin: right top;
    right: 0;
    top: 0;
    border: 1px solid rgb(247 220 76);
    transform-style: preserve-3d;
}

.gauche{
    position: absolute;
    height: 420px;
    width: 6px;
    background-color: rgb(247 220 76);
    transform-style: preserve-3d;
    transform: rotateY(-270deg) translateX(0);
    transform-origin: left top;
    left: 0;
    top: 0; 
    border: 1px solid rgb(247 220 76);
    transform-style: preserve-3d;
}

.bas{
    position: absolute;
    height: 6px;
    width: 300px;
    bottom: 2px;
    transform: rotateX(90deg) translateY(0) ;
	transform-origin: bottom center  ;
    background-color: rgb(247 220 76);
    border: 1px solid rgb(247 220 76);
    transform-style: preserve-3d;
   
}

.haut{
    position: absolute;
    height: 6px;
    width: 300px;
   
    transform: rotateX(90deg) translateY(0);
	
    background-color: rgb(247 220 76);
   
}

/* @keyframes turn{
    from{
        transform: rotateY(360deg) rotate(-7deg);
    }
    to{
        transform: rotateY(0) rotate(-7deg);
    }
} */





footer{
    min-height: 110px;
    background-color: #999;
}


    </style>

</head>
<body>
    <header>
        <h1>header</h1>

        <nav>
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="index.php?page=articles">Articles</a></li>
                <li><a href="index.php?page=inscription">Inscription</a></li>
                <li><a href="index.php?page=connexion">Connexion</a></li>
            </ul>
        </nav>
    </header>
