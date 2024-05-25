<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations du serveur Temporaire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .container {
            text-align: center;
        }

        .logo {
            margin-right: 20px;
            max-width: 300px;
            height: auto;
        }

        .text {
            font-size: 20px;
            line-height: 1.5;
        }

        .discord-link {
            text-decoration: none;
            color: #7289DA;
        }

        /* Styles pour le pop-up */
        #popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 80%;
            background: white;
            border: 1px solid #ccc;
            padding: 20px;
            overflow: auto;
            z-index: 1000;
        }
        #popup-overlay {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    
    <div class="container">
        <img src="https://i.imgur.com/rQuxdg6.jpg" alt="Logo" class="logo">
        <div class="text">
            Bienvenue sur le serveur Temporaire hébergé par "Darkhosts Hébergement".<br>
            <br>
            - Voir les instructions d'installation de la boutique en ligne et du forum :
            <br>
            <a href="#" class="instruction">Instruction d'installation de la boutique et du forum</a>
            <br>
            Pour plus de renseignements, vous pouvez rejoindre notre serveur Discord :
            <br>
            <a href="https://discord.gg/D4cqeyBHWg" class="discord-link">https://discord.gg/D4cqeyBHWg</a>
        </div>
    </div>

    <div id="popup-overlay"></div>
    <div id="popup">
        <button id="close-popup">Fermer</button>
        <pre id="readme-content"></pre>
    </div>

    <script>
        // JavaScript/jQuery pour gérer le pop-up
        $(document).ready(function() {
            $('.instruction').click(function(event) {
                event.preventDefault();

                $.get('README.md', function(data) {
                    $('#readme-content').text(data);
                    $('#popup-overlay, #popup').show();
                });
            });

            $('#close-popup, #popup-overlay').click(function() {
                $('#popup-overlay, #popup').hide();
            });
        });
    </script>
</body>
</html>
