<header class="header">
  <div class="header-content">
    <div class="header-logo">
      <a href="https://unimice.ru/#main">
        <img src="https://unimice.ru/images/favicon.webp"
          alt="Лучшие приватные пиратские сервера Майнкрафт с модами без доната, без лицензии - Unimice - Унимайс - Логотип"
          width="50px" height="50px" style="border-radius: 0;">
      </a>
    </div>
    <div class="header-menu">
      <span onclick="toggleMenu()">
        <img src="/images/menu.webp" alt="Меню" style="border-radius: 0;" width="35px" height="35px">
      </span>
    </div>

    <nav id="header-elements" class="header-elements h-hide-on-mobile">
      <div class="header-element"><a href="https://unimice.ru/#easter">Секрет</a></div>
      <div class="header-element"><a href="https://unimice.ru/staff">Персонал</a></div>
      <div class="header-element"><a href="https://unimice.ru/faq">FAQ</a></div>
      <div class="header-element"><a href="https://unimice.ru/rules">Правила</a></div>
      <div class="header-element" id="toggleStylesheet" style="cursor: pointer"></div>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightStylesheet = document.getElementById('light');
            const styleStylesheet = document.getElementById('style');
            const toggleButton = document.getElementById('toggleStylesheet');
        
            // Function to toggle between stylesheets
            function toggleStylesheet() {
                if (lightStylesheet.disabled) {
                    lightStylesheet.disabled = false;
                    styleStylesheet.disabled = true;
                    toggleButton.textContent = 'Свет';
                } else {
                    lightStylesheet.disabled = true;
                    styleStylesheet.disabled = false;
                    toggleButton.textContent = 'Тьма';
                }
            }
        
            // Initialize the button based on the current state
            if (lightStylesheet.disabled) {
                toggleButton.textContent = 'Свет';
            } else {
                toggleButton.textContent = 'Тьма';
            }
        
            // Add click event listener to the button
            toggleButton.addEventListener('click', toggleStylesheet);
        });
        </script>

      <?php
        if (isset($_SESSION["name"])) {
           echo '<a href="https://unimice.ru/profile.php" class="header-element">' . $_SESSION["name"] .'</a>';
        }
        else {
        echo '<div class="header-element"><a href="https://unimice.ru/auth">Авторизация</a></div>';
        }
      ?>
    </nav>

    <div class="theme-changer">
      <?php
        if (isset($_SESSION["name"])) {
            $session_name = $_SESSION["name"];
            $sql = "SELECT ds_name, ds_avatar FROM users WHERE name = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $session_name);
            $stmt->execute();
            $stmt->bind_result($ds_name, $ds_avatar);
            $stmt->fetch();
            $stmt->close();
            echo '<a href="https://unimice.ru/profile"><img src="' . $ds_avatar . '" alt="' . htmlspecialchars($ds_name, ENT_QUOTES) . '" style="border-radius: 50%;"></a>';
        } else {
            echo '<a href="https://unimice.ru"><img src="https://unimice.ru/images/favicon.webp" alt="Аватар" style="border-radius: 0;"></a>';
        }
      ?>
    </div>
  </div>
</header>
<div class="separator4"></div>

<script>
  function toggleMenu() {
    const elements = document.getElementById("header-elements");
    elements.classList.toggle("open");
  }
</script>

<style>
  /* Header styles */
  .header {
    width: 100%;
    padding: 5px 0;
    position: fixed;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    z-index: 1000;
    display: grid;
  }

  .header-content {
    width: 100%;
    max-width: 1400px;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    justify-self: center;
  }

  .header-element {
    display: block;
    padding: 20px;
    font-size: 18px;
    text-align: center;
  }

  .header-element:hover {
    color: violet;
  }

  .header-logo {
    width: 50px;
    height: 50px;
  }

  .header-container {
    display: -webkit-box;
  }

  .theme-changer {
    width: 50px;
    height: 50px;
  }

  .header-menu {
    width: 35px;
    height: 35px;
    display: none;
    margin-top: auto;
    margin-bottom: auto;
    cursor: pointer;
  }

  .h-hide-on-mobile {
    display: flex;
  }

  @media only screen and (max-width: 1100px) {
    .header-menu {
      display: block;
    }

    .header-elements {
      display: flex;
      flex-direction: column;
      background-color: var(--background);
      width: 100%;
      position: absolute;
      top: 60px;
      left: 0;
      z-index: 1001;
      border-bottom: 2px solid var(--element);
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s ease-in-out;
    }

    .header-elements.open {
      max-height: 500px; /* Достаточно большое значение для отображения всех элементов */
    }

    .header-element {
      padding: 15px;
      text-align: center;
      border-bottom: 1px solid var(--element);
    }

    .header-element:hover {
      background-color: var(--element);
      color: violet;
    }

    .h-hide-on-mobile {
      display: block;
    }

    .theme-changer {
      display: none;
    }
  }
  /* Header styles */

</style>
