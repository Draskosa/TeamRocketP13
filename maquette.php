<html>
<head>
        <meta charset="UTF-8">
        <title>Résolution inverse</title>        <script src="site/js/jquery-1.11.3.min.js"></script>
        <script src="site/js/bootstrap.js"></script>
        <!-- <script src="/CalculIP/js/npm.js"></script>-->
        <link href="site/css/bootstrap.css" rel="stylesheet">
        <link href="site/css/style_principal.css" rel="stylesheet">
        <link rel="icon" type="site/image/ico" href="site/images/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="keywords" content="TCP/IP, Excercices, corrigés">
        <meta name="description" content="Site d'exercices corrigés autour de TCP/IP: masques, CIDR, tables de routage etc.">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-static-top ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="/CalculIP/index.php">Accueil</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cours<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/CalculIP/Cours.php">Cours</a></li>
                        <li><a href="/CalculIP/Memos/">Memos</a></li> 
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exercices<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                            <li><a href="/CalculIP/Exercices/AnalyseTrame.php">Analyse de trame</a></li>
                            <li><a href="/CalculIP/Exercices/Conversion.php">Conversions <i><sub><small>Binaire,Hexadécimal,Decimal</small></sub></i></a></li>
                            <li><a href="/CalculIP/Exercices/TrouverClasse.php">Classe IP <i><sub><small>Trouver la classe correspondante</small></sub></i></a></li>
                            <li><a href="/CalculIP/Exercices/TrouverClasseInverse.php">Classe IP <i><sub><small>Trouver l'IP correspondante</small></sub></i></a></li>
                            <li><a href="/CalculIP/Exercices/Masque.php">Masque (niveau S3)</a></li>
                            <li><a href="/CalculIP/Exercices/NotationCIDRS2.php">Notation CIDR (niveau S2)</a></li>
                            <li><a href="/CalculIP/Exercices/NotationCIDR.php">Notation CIDR (niveau S3)</a></li>
                            <li><a href="/CalculIP/Exercices/PrefixeMaxFacile.php">Préfixe max (S3)<i>
<sub><small>Presque Facile</small></sub></i></a></li>
                            <li><a href="/CalculIP/Exercices/PrefixeMaxDifficile.php">Préfixe max (S3) <i><sub><small>plus Difficile</small></sub></i></a></li>
                            <li><a href="/CalculIP/Exercices/SousReseaux.php">Calcul de sous-réseaux (S3)</a></li>
                            <li><a href="/CalculIP/Exercices/StructureTrame.php">Structure d'une trame</a></li>
                           <li><a href="/CalculIP/Exercices/TableRoutage.php">Table de Routage (S2,S3)</a></li>
                           <li><a href="/CalculIP/Exercices/maquette.php">Résoltion inverse <i><sub><small>Binaire,Hexadécimal,Decimal</small></sub></i></a></li>
                    </ul>
                </li>
                <li><a href="/CalculIP/news.php">Nouveautés</a></li>
                <li><a href="/CalculIP/quiSommesNous.php">Qui sommes-nous ?</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <li><a href="?login=">Se connecter</a></li>         </ul>
            
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<ol class="breadcrumb">
        <li><a href="/CalculIP/index.php">Accueil</a></li><li><a href="/CalculIP/">CalculIP</a></li><li class="active">Résolution inverse</li></ol>
        </header>
<div class="container">
    <h1>Résolution inverse </h1>
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="panel-title">Exercice</h3>
        </div>
        <div class="panel-body">

        <div>
                    <p>
        Les noms donnés par le DNS seront de la forme : machx.g1.p13.fr et les adresses IP en 10.10.1.x/24.<br>
1. Modifiez le fichier de configuration pour BIND (programme named) : /etc/bind/named.conf pour ajouter la zone<br>
g1.p13.fr. et la zone de résolution inverse sur laquelle ce serveur sera maître (et donc fera autorité).<br>
2. Il faut ensuite créer les fichiers de zone : /etc/bind/g1.p13.fr.zone et
/etc/bind/10.10.1.zone, en vous inspirant du cours, en respectant les contraintes suivantes :<br>
• TTL par défaut de 180 s.<br>
• Nom du serveur DNS : mach1<br>
• adresse mail du responsable : root@mach1.g1.p13.fr<br>
• numéro de série au format usuel (YYYYMMDDnn)<br>
• temps de rafraichissement (refresh) de 120 s<br>
• délai entre essais infructueux (retry) de 60 s<br>
• délai d’expiration définitif (Expire) de 200 s<br>
• serveur de mail (priorité 10) du domaine g1.p13.fr. : mach1.g1.p13.fr.<br>
• enregistrement TXT : "domaine 1"<br>
• il faut déclarer deux machines : mach1 (10.10.1.1) et mach2 (10.10.1.2)<br>
• ns est un alias de mach1<br>
</p></div>
<div class="lead bg-info well"><div class="row">
                <form action=''>
                    <p>Fichier 10.10.1.zone<br>
$ORIGIN 1.10.10.in-addr.arpa.<br>
$TTL 180<br>
@ IN SOA (mach1.g1.p13.fr. root.mach1.g1.p13.fr.<br>
    <blockquote><span><input type=text />; Serial</span><br>
    <span>120 ; Refresh</span><br>
    <span>60 ; Retry</span><br>
    <span>200 ; Expire</span><br>
    <span>180) ; Minimum TTL</span><br>
    <span>NS mach1.g1.p13.fr.</span><br></blockquote>
1 <BLINK><span>PTR mach1.g1.p13.fr.</span><br></blockquote>
2 <blockquote><span>PTR mach2.g1.p13.fr.</span><br></blockquote>
</p>
<input type=submit />
</form>
</div>





            </div></div></div>
        <!-- FOOTER -->
        <footer class="footer text-center">
            <div>
                <img class="img_footer" style="float: left;left: 0;" src="images/IUT_Villetaneuse_Logo.png" alt="logo iut villetaneuse">
                <img class="img_footer" style="float: right;right: 0;" src="images/Logo-UP13-noirS.png" alt="logo université paris 13">
            </div>
            <div class="container">
                <p class="text-muted">GPL v3</p>
            </div>
        </footer>
    

</body>
</html>