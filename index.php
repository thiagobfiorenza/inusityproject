<!DOCTYPE html>
<html>
<head>
    <title>Inusity Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- favicons -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom-responsive-style.css">
    <link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" src="script/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="script/all-plugins.js"></script>
    <script type="text/javascript" src="script/plugin-active.js"></script>
    <script type="text/javascript" src="script/script.js"></script>
</head>
<body data-spy="scroll" data-target=".main-navigation" data-offset="150">
    <section id="MainContainer">
        <!-- Header starts here -->
        <header id="Header">
            <nav class="main-navigation">
                <div class="container clearfix">
                    <div class="site-logo-wrap">
                        <a class="logo" href="#"><img src="images/ds-logo.svg" alt="Inusity Project"></a>
                    </div>
                    <a href="javascript:void(0)" class="menu-trigger hidden-lg-up"><span>&nbsp;</span></a>
                    <div class="main-menu hidden-md-down">
                        <ul class="menu-list">
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#HeroBanner">Home</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#About">O que é?</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#Portfolio">Próximo Show: Votação</a></li>
                            <li><a class="nav-link" href="javascript:void(0)" data-target="#Testimonial">Depoimentos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg-up">
                    <ul class="mobile-menu-list">
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#HeroBanner">Home</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#About">O que é?</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#Portfolio">Próxima votação</a></li>
                        <li><a class="nav-link" href="javascript:void(0)" data-target="#Testimonial">Depoimentos</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Header ends here -->
        <!-- Banner starts here -->
        <section id="HeroBanner">
            <div class="hero-content">
                <h1>Este é o Inusity Project</h1>
                <p>Prepare-se para uma experiência completamente nova em sua noite de festa!</p>
                <a href="#About" class="hero-cta">Vamos começar</a>
            </div>
        </section>
        <!-- Banner ends here -->
        <!-- About Us section starts here -->
        <section id="About">
            <div class="container">
                <div class="about-wrapper" style="text-align: left; padding-bottom: 15px">
                    <h2> O que é o Inusity Project?</h2>
                    <p>O Inusity Project é um projeto inovador que faz com que o público participe ativamente do show que está assistindo através da escolha das músicas do repertório do artista. O artista que utiliza o Inusity Project se propõe a tocar todas as músicas mais votadas, deixando de lado seu gosto pessoal e focando no gosto do público. Não é o máximo?</p>
                    <p>Confira as redes sociais do idealizador Thiago Inusity e utilize-as para pedir que outras músicas sejam disponíveis para votação:</p>
                </div>
                <div class="social-share">
                    <ul>
                        <li><a href="https://www.youtube.com/ThiagoInusity" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/ThiagoInusity" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com/ThiagoInusity" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- About Us section ends here -->
<?php
include 'conn.php';
$rs = mysqli_query($conn, "
    SELECT s.id, s.date, s.is_countdown, s.start_countdown, p.name place, p.address, p.maps FROM shows s
    INNER JOIN places p ON p.id = s.place_id
    WHERE is_next = 'Y' AND s.is_deleted = 'N' ORDER BY date ASC LIMIT 1
");

$row = mysqli_fetch_object($rs);
$showId = $row->id;

$userIp = !empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'local';

$arrVotes = array();
$rs = mysqli_query($conn,"
    SELECT show_songs.song_id
    FROM show_songs
    WHERE show_songs.show_id = " . $showId .  " AND user_ip = '" . $userIp . "'
");

while($rowVotes = mysqli_fetch_object($rs)){
    $arrVotes[] = $rowVotes->song_id;
}
if (empty($arrVotes)) {
    if (!empty($_POST)) {
        $arrVotes = array_keys(get_object_vars(json_decode($_POST['objVotes'])));
        mysqli_query($conn, 'INSERT INTO show_songs (show_id, user_ip, song_id) VALUES (' . $showId . ", '" . $userIp . "', " . implode('), (' . $showId . ", '" . $userIp . "', ", $arrVotes) . ')');
    }
}
?>
        <!-- Portfolio section starts here -->
        <section id="Portfolio">
            <div class="container">
                <div class="block-heading<?php echo empty($_POST) && empty($arrVotes) ? ' before-post' : ''; ?>">
                    <div class="block-heading-info">
                        <h2>Próximo show:</h2>
                        <h4><?php echo date('d/m/Y à\s H:i:s', strtotime($row->date)); ?></h4>
                    </div>
                    <div class="block-heading-info">
                        <h3><?php echo $row->place; ?></h3>
<?php if (!empty($row->maps)) { ?>
                        <iframe src="https://www.google.com/maps/embed?pb=<?php echo $row->maps; ?>"  frameborder="0" style="border:0" allowfullscreen></iframe>
<?php } 
if (!empty($row->address)) { ?>
                        <address><?php echo $row->address; ?></address>
<?php } ?>
                    </div>
                    <div class="block-heading-info">
<?php if (empty($_POST) && empty($arrVotes)) { ?>                    
                        <p class="contador info">Vote agora nas suas músicas preferidas.</p>
                        <?php if ($row->is_countdown == 'N') { ?>
                        <p class="contador number-votes">Você já escolheu <strong class="count-votes">0</strong> música<span class="info-s">s</span>.</p>
                        <?php } else { ?>
                        <p class="contador number-countdown">Restam <strong class="count-votes"><?php echo $row->start_countdown; ?></strong> músicas.</p>
                        <?php } ?>
                            <button type="submit" form="formVotes" value="submit" class="btn btn-primary btn-vote"<?php echo $row->is_countdown == 'S' ? ' style="margin-top:12px' : ''; ?>>Votar</button>
<?php } else {
    $rs = mysqli_query($conn, "SELECT COUNT(*) votes FROM show_songs WHERE show_id = " . $showId);
    $total = mysqli_fetch_object($rs);
?>
                        <p style="margin: 0; padding-top: 39px">Total de votos até o momento: <strong class="count-votes"><?php echo $total->votes; ?></strong>.</p>
<?php 
} ?>
                    </div>
                </div>
                <div class="portfolio-wrapper clearfix" style="clear: both">
<?php
if (empty($_POST) && empty($arrVotes)) {
    $rs = mysqli_query($conn,"
        SELECT songs.id, songs.name song, authors.name author FROM songs
        INNER JOIN authors ON songs.author_id = authors.id
        WHERE songs.is_deleted = 'N'
        ORDER BY authors.name ASC, songs.name ASC
    ");

    while($row = mysqli_fetch_object($rs)){ ?>
                    <div class="each-portfolio">
                        <div class="hover-cont-wrap">
                            <div class="song">
                                <h5 class="p-title"><?php echo $row->author; ?></h5>
                                <h5 class="p-desc"><?php echo $row->song; ?></h5>
                            </div>
                            <div class="vote">
                                <img src="images/vote.png" class="voting" />
                                <a href="javascript:void(0)" class="nao selected" data-id="<?php echo $row->id; ?>"></a>
                                <a href="javascript:void(0)" class="sim" data-id="<?php echo $row->id; ?>"></a>
                            </div>
                        </div>
                    </div>
<?php } ?>
                </div>
                <form name="formVotes" id="formVotes" method="post" action="./#Portfolio">
                    <input type="hidden" id="objVotes" name="objVotes" />
                </form>
<?php } else {
    $rs = mysqli_query($conn,"
        SELECT show_songs.song_id, songs.name song, authors.name author, COUNT(*) votes FROM show_songs
        INNER JOIN songs ON show_songs.song_id = songs.id
        LEFT JOIN authors ON songs.author_id = authors.id
        WHERE songs.is_deleted = 'N' AND show_songs.show_id = " . $showId . "
        GROUP BY show_id, song_id
        ORDER BY votes DESC, authors.name ASC, songs.name ASC;
    ");

    $i = 0;
    while ($row = mysqli_fetch_object($rs)) { ?>
                    <div class="each-portfolio">
                        <div class="hover-cont-wrap ranking<?php echo in_array($row->song_id, $arrVotes) ? ' selected' : ''; ?>">
                            <div class="song">
                                <h5 class="p-title"><?php echo $row->author; ?></h5>
                                <h5 class="p-desc"><?php echo $row->song; ?></h5>
                            </div>
                            <div class="vote">
                                <h5><?php echo ++$i . 'ª'; ?></h5>
                                <h3><?php echo number_format(($row->votes * 100 / $total->votes), '2', ',', '.'); ?>%</h3>
                                <h6><?php echo $row->votes; ?> voto(s)</h6>
                            </div>
                        </div>
                    </div>
<?php } 
}
?>
            </div>
        </section>
        <!-- Portfolio section ends here -->
        <!-- Testimonial section starts here -->
        <section id="Testimonial">
            <div class="testimonial-wrap">
                <div class="container">
                    <div class="block-heading">
                        <h2>Depoimentos</h2>
                    </div>
                    <ul class="testimonial-slider">
                        <li>"I would like to thank Click and the team for the fantastic work<br> on content writing for my site." 
                            <a href="//instagram.com/cristianenunes_acupunturista">@cristianenunes_acupunturista</a>
                        </li>
                        <li>"I'd say that the team is excellent and it is some of the best service<br> I have received both online and offline in a long time." 
                            <a href="//instagram.com/cristianenunes_acupunturista">@cristianenunes_acupunturista</a>
                        </li>
                        <li>"It's been great working with you. The content is also great. I can certainly recommend your<br> services to others as cost effective services." 
                            <a href="//instagram.com/cristianenunes_acupunturista">@cristianenunes_acupunturista</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Testimonial section ends here -->
        <!-- Footer section starts here -->
        <footer id="Footer">
            <div class="container">
                <div class="social-share">
                    <ul>
                        <li><a href="https://www.youtube.com/ThiagoInusity" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/ThiagoInusity" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com/ThiagoInusity" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="footer-logo-wrap">
                    Design Studio &copy; 2018. Designed by <a href="https://www.position2.com/">Position2</a>
                </div>
            </div>
        </footer>
        <!-- Footer section ends here -->
    </section>
</body>

</html>