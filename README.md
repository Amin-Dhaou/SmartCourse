# SmartCourse

**SmartCourse** est une plateforme e-learning créée avec Symfony qui permet aux formateurs de vendre des cours en ligne sur des technologies modernes (Angular, Symfony, Python, Java, AWS, etc.) et aux apprenants de suivre des formations de qualité à leur propre rythme.

---

## 🚀 Fonctionnalités principales

- 🎓 Catalogue de cours avec recherche avancée (par catégorie, niveau, prix, format)  
- 👨‍🏫 Espace formateurs : création et gestion des cours  
- 🔐 Authentification et gestion des rôles (apprenant, formateur, admin)  
- 💳 Paiement en ligne sécurisé  
- 📈 Suivi des progrès des apprenants  
- 📄 Gestion des profils utilisateurs  

---
![image](https://github.com/user-attachments/assets/390b54c0-bfb0-4e73-a748-3b9116ab786e)

## 🛠️ Technologies utilisées

| Côté           | Technologie       |  
|----------------|-------------------|  
| Backend        | Symfony 6.x       |  
| Frontend       | Twig, JavaScript  |  
| Base de données| MySQL             |  

---

## 📂 Installation et configuration

### Prérequis

- PHP 8.1 ou supérieur  
- Composer  
- MySQL  
- Symfony CLI (optionnel mais recommandé)  
- Node.js et npm (si Webpack Encore est utilisé)  

### Installation

# Cloner le dépôt
git clone https://github.com/votre-utilisateur/smartcourse.git
cd smartcourse

# Installer les dépendances PHP
composer install

# Configurer la base de données dans .env (à faire manuellement)

# Créer la base de données et lancer les migrations
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# Installer les dépendances JS et compiler les assets (optionnel)
npm install
npm run dev

# Lancer le serveur de développement Symfony
symfony server:start -d   
---
![Screenshot 2025-06-04 232811](https://github.com/user-attachments/assets/5b4c6e6d-dd5b-401a-9724-5d378fa42716)
---

### Commandes Docker

# Démarrer les conteneurs en arrière-plan
docker-compose up -d
---
![Screenshot 2025-06-04 232934](https://github.com/user-attachments/assets/4b5d1841-f41f-4e37-b083-591c1627f04b)
---
# Voir les logs des conteneurs
docker-compose logs -f

# Accéder au conteneur PHP (app) pour exécuter des commandes
docker exec -it smartcourse_app bash

# Installer les dépendances PHP (dans le conteneur)
composer install

# Créer la base de données et lancer les migrations (dans le conteneur)
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# Arrêter les conteneurs
docker-compose down

# Supprimer les conteneurs, réseaux et volumes
docker-compose down -v

