<!DOCTYPE html>

<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>

    <?php
    $lyrics = [
        "I want more love",
        "I want to be loved as a living soul",
        "I want you to care",
        "I want you to understand",
        "I want more love",
        "It's not enough to be seen",
        "SawaDawa",
        "Emotional inflation?",
        "Love interest indefinite!",
        "You (random people) love me",
        "Don't throw away your love",
        "Love me even more",
        "I love you (random people)",
        "Please look at me",
        "Please stay with me",
        "It may look overloaded,",
        "but it's all fake",
        "Is there no such thing as true love?",
        "Haven't you ever found love in your life?",
        "Even when you say, \"I love you,\"",
        "you treat everyone the same",
        "The endless need for recognition,",
        "the monetization of \"I'm lovin' you\"",
        "Stop moving your finger and look at me",
        "Only look at me is all I ask",
        "Please don't swipe, don't forsake me",
        "Don't look at the others favorably",
        "Don't be angry if you're disappointed",
        "Even I feel pain when I'm hurt",
        "Please don't forget me many years from now",
        "I won't let you skip until the end",
        "I want more love",
        "I want to be loved as a living soul",
        "I want you to understand",
        "I want you to notice",
        "I want more love",
        "Fake love will never be enough",
        "Emotional inflation?",
        "Love interest indefinite!"
    ];
    ?>
    
    <!-- Open Graph settings -->
    <meta property="og:title" content="Личная страница Легендарной Мышки!" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://unimice.ru/" />
    <meta property="og:image" content="https://unimice.ru/images/favicon.webp" />
    <meta property="og:description" content="Да, раз у меня есть сайт значит мне полагается личная страница, справедливо же?" />
    <meta property="og:site_name" content="Unimice" />

    <!-- SEO settings -->
    <meta name="keywords" content="Да, раз у меня есть сайт значит мне полагается личная страница, справедливо же?" />
    <title>Личная страница Легендарной Мышки!</title>
    <meta name="description" content="Да, раз у меня есть сайт значит мне полагается личная страница, справедливо же?" />

    <!-- Canonical -->
      <link rel=“canonical” href=“https://unimice.ru/personal/legendarymouse” />
    
    <!-- Encoding and Viewport settings -->
  <!-- Cache settings -->
  <!-- favicon settings -->
  <!-- Stylesheets linking -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/uniheader.php'; ?>

</head>
<body>
<div class="page-holder">
    <!-- Header -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
    <!-- /Header -->

    <div class="container">
        <div class="third">
            <h2>@legendarymouse🐭's profile!</h2>
        </div>

        <div class="third">
            <center><img src="https://unimice.ru/images/lmouse.webp" class="image" alt="Персонал проекта Юнимайс, он же Унимайс, он же просто UM"></center>
        </div>

        <div class="third">
            <p>Хай, я - Мышка! Основатель великолепных нн серверов по майнкруфту такие как : MouseEarth, MouseMoon.

                До сих пор лень что-то делать, но я что-то с этим сделаю! Люблю фонк, поиграть в шахматишки и выпить кипяточку с лимоном.

                Цель по жизни - не стать чсв.</p>
        </div>

        <div class="third">
            <div class="button rotator glow"><a href="https://www.twitch.tv/legendary_mouse1">Чтооо? Мой Twitch?</a></div>
        </div>
        <div class="third glow">
            <div class="lyrics" id="lyrics-container"></div>
        </div>

        <div class="third">
            <audio controls volume="0.1">
                <source src="https://unimice.ru/images/song.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
        <div class="third">
            <p>Вообще я с рандомами не общаюсь, но мой дискорд - legendarymouse</p>
        </div>
        
        <div class="third rotator">
            <a href="https://mousearth.ru"><img src="https://unimice.ru/images/me.webp" alt="Mouse Earth" width="150"/></a>
        </div>
        <div class="third rotator">
            <a href="https://mousemoon.ru"><img src="https://unimice.ru/images/mm.webp" alt="Mouse Moon" width="150"/></a>
        </div>
        <div class="third rotator">
            <pre>
  q-p    hey!
 /   \   work is still 
(     )   in progress!
 `-(-'  i will fix it later!!
   ) 
            </pre>
        </div>
        <?php
        // Get the user's IP address
        $user_ip = $_SERVER['REMOTE_ADDR'];

        // Define the IP address to match
        $allowed_ip = '178.218.117.102';

        // Check if the user's IP matches the allowed IP
        if ($user_ip === $allowed_ip) {
            echo '<div class="third">Hi, legendarymouse!</div>';
        }
        else
        {
            $sql_select = "SELECT views FROM stats WHERE name = 'lmouse'";
            $result = $conn->query($sql_select);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $views = $row['views'];
            }

            echo '<div class="third">' . $user_ip . ' UwU <p /> Ты уже ' . $views . ' кто посмотрел эту страницу :)</div>';
            $sql = "UPDATE stats SET views = views + 1 WHERE name = 'lmouse'";
            $conn->query($sql);
        }
        ?>

    <script>
        // JavaScript code to display lyrics line by line
        const lyrics = <?php echo json_encode($lyrics); ?>;
        let index = 0;

        function displayNextLine() {
            const container = document.getElementById('lyrics-container');

            // Remove previous line if exists
            container.innerHTML = '';

            // Create new paragraph element for the current line
            const p = document.createElement('p');
            p.textContent = lyrics[index];
            container.appendChild(p);

            // Increment index and cycle back if it exceeds lyrics length
            index = (index + 1) % lyrics.length;
        }

        // Display the next line with 144 bpm * 2
        setInterval(displayNextLine, 832);
    </script>

    </div></div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
</div>
</body>
</html>