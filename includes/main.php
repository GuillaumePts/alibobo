<main>
    
    <div class="text">
       <span style="--i:1">H</span>
       <span style="--i:2">E</span>
       <span style="--i:3">L</span>
       <span style="--i:4">L</span>
       <span style="--i:5">O</span>
       <span style="--i:6">-</span>
       <span style="--i:7">W</span>
       <span style="--i:8">O</span>
       <span style="--i:9">R</span>
       <span style="--i:10">L</span>
       <span style="--i:11">D</span>
       <span style="--i:12">-</span>
       <span style="--i:13">-</span>
       <span style="--i:14">-</span>
       <span style="--i:15">-</span>
       <span style="--i:16">-</span>
       <span style="--i:17">-</span>
       <span style="--i:18">-</span>
       <span style="--i:19">-</span>
       <span style="--i:20">-</span>
       <span style="--i:21">-</span>
       <span style="--i:22">-</span>
       <span style="--i:23">-</span>
       <span style="--i:24">-</span>
       <span style="--i:25">-</span>
       <span style="--i:26">-</span>
       <span style="--i:27">-</span>
       <!-- <span style="--i:28">-</span>
       <span style="--i:29">-</span>
       <span style="--i:30">-</span>
       <span style="--i:31">-</span>
       <span style="--i:32">-</span>
       <span style="--i:33">-</span> -->
    </div>
    <?php 


$page = isset($_GET['page']) ? $_GET['page'] : "accueil";

// if (isset($_GET['page'])){
//     $page= $_GET['page'];
//     dump($page);
// }else{
//         $page ="accueil";
//     }

    $page = isset($_GET['page']) ? $_GET['page'] : "accueil";

    $pageAccueil = $_GET['page'] ?? "accueil";
    $pageArticles = $_GET['page'] ?? "articles";
    $pageInscription = $_GET['page'] ?? "inscription";
    $pageConnexion = $_GET['page'] ?? "connexion";

    require './includes/'.$pageAccueil.'.inc.php';
    require './includes/'.$pageArticles.'.inc.php';
    require './includes/'.$pageInscription.'.inc.php';
    require './includes/'.$pageConnexion.'.inc.php';



    ?>
</main>