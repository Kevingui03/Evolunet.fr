<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolunet - Plateforme d'Innovation Technologique</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --background-color: #ecf0f1;
            --text-color: #333;
            --success-color: #2ecc71;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            color: var(--text-color);
        }
        
        header {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 1rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        header h1 {
            margin: 0;
            font-size: 2.5rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        
        nav {
            background-color: var(--secondary-color);
            padding: 0.5rem;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        
        nav ul li {
            margin: 0 15px;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
            padding: 5px 10px;
            border-radius: 5px;
        }
        
        nav ul li a:hover {
            color: var(--accent-color);
            background-color: rgba(255,255,255,0.1);
        }
        
        main {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .project-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .project-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
        
        .project-card h3 {
            color: var(--primary-color);
            margin-top: 0;
        }
        
        .project-card button {
            background-color: var(--accent-color);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.1s ease;
        }
        
        .project-card button:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }
        
        footer {
            background-color: var(--secondary-color);
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
        
        .modal {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }
        
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        
        .close:hover {
            color: #000;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .btn:hover {
            background-color: #2980b9;
        }
        
        .development-banner {
            background-color: var(--accent-color);
            color: white;
            text-align: center;
            padding: 10px;
            font-weight: bold;
        }
        
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }
            
            nav ul {
                flex-direction: column;
                align-items: center;
            }
            
            nav ul li {
                margin: 10px 0;
            }
            
            .project-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="development-banner">
        Ce site est actuellement en développement. Certaines fonctionnalités peuvent être limitées ou indisponibles.
    </div>
    <header>
        <h1>Evolunet</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#projets">Projets</a></li>
            <li><a href="#forum">Forum</a></li>
            <li><a href="#ressources">Ressources</a></li>
            <li><a href="#evenements">Événements</a></li>
            <li><a href="#" id="loginButton">Connexion</a></li>
            <li><a href="#" id="registerButton">Inscription</a></li>
        </ul>
    </nav>
    <main>
        <section id="projets">
            <h2>Projets Collaboratifs</h2>
            <div class="project-list" id="projectList">
                <!-- Les projets seront ajoutés ici dynamiquement -->
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Evolunet - Plateforme d'Innovation Technologique</p>
    </footer>

    <!-- Modal de connexion -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Connexion</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="loginEmail">Email :</label>
                    <input type="email" id="loginEmail" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Mot de passe :</label>
                    <input type="password" id="loginPassword" required>
                </div>
                <button type="submit" class="btn">Se connecter</button>
            </form>
        </div>
    </div>

    <!-- Modal d'inscription -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Inscription</h2>
            <form id="registerForm">
                <div class="form-group">
                    <label for="registerName">Nom :</label>
                    <input type="text" id="registerName" required>
                </div>
                <div class="form-group">
                    <label for="registerEmail">Email :</label>
                    <input type="email" id="registerEmail" required>
                </div>
                <div class="form-group">
                    <label for="registerPassword">Mot de passe :</label>
                    <input type="password" id="registerPassword" required>
                </div>
                <button type="submit" class="btn">S'inscrire</button>
            </form>
        </div>
    </div>

    <script>
        // Simule le chargement de projets depuis une API
        const projects = [
            { title: "IA pour la prédiction climatique", description: "Utilisation de l'apprentissage profond pour améliorer les modèles climatiques." },
            { title: "Robotique assistive avancée", description: "Développement de prothèses intelligentes contrôlées par la pensée." },
            { title: "Quantum Computing Simulator", description: "Plateforme éducative pour comprendre et expérimenter avec l'informatique quantique." },
            { title: "Blockchain pour l'énergie verte", description: "Système décentralisé de gestion et d'échange d'énergie renouvelable." }
        ];

        const projectList = document.getElementById('projectList');

        projects.forEach(project => {
            const projectCard = document.createElement('div');
            projectCard.className = 'project-card';
            projectCard.innerHTML = `
                <h3>${project.title}</h3>
                <p>${project.description}</p>
                <button onclick="joinProject('${project.title}')">Rejoindre le projet</button>
            `;
            projectList.appendChild(projectCard);
        });

        function joinProject(projectTitle) {
            alert(`Vous avez rejoint le projet : ${projectTitle}`);
            // Ici, vous pouvez ajouter la logique pour rejoindre réellement un projet
        }

        function showModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }

        function hideModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Gestion des boutons de connexion et d'inscription
        document.getElementById('loginButton').addEventListener('click', function(e) {
            e.preventDefault();
            showModal('loginModal');
        });

        document.getElementById('registerButton').addEventListener('click', function(e) {
            e.preventDefault();
            showModal('registerModal');
        });

        // Gestion de la fermeture des modales
        document.querySelectorAll('.close').forEach(function(closeBtn) {
            closeBtn.addEventListener('click', function() {
                hideModal(this.closest('.modal').id);
            });
        });

        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            console.log('Tentative de connexion avec:', email, password);
            alert('Fonctionnalité de connexion en cours de développement');
            hideModal('loginModal');
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('registerName').value;
            const email = document.getElementById('registerEmail').value;
            const password = document.getElementById('registerPassword').value;
            console.log('Tentative d'inscription avec:', name, email, password);
            alert('Fonctionnalité d'inscription en cours de développement');
            hideModal('registerModal');
        });
    </script>
</body>
</html>
