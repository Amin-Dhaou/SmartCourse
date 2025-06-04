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
---
![Screenshot 2025-06-04 232811](https://github.com/user-attachments/assets/8c4321f1-a2ff-4bc6-9332-1d07db53c524)
---


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

- Cloner le dépôt : `git clone https://github.com/votre-utilisateur/smartcourse.git`  
- Se déplacer dans le dossier : `cd smartcourse`  
- Installer les dépendances PHP : `composer install`  
- Configurer la base de données dans `.env` (à faire manuellement)  
- Créer la base de données : `php bin/console doctrine:database:create`  
- Lancer les migrations : `php bin/console doctrine:migrations:migrate`  
- Installer les dépendances JS et compiler les assets (optionnel) : `npm install` puis `npm run dev`  
- Lancer le serveur de développement Symfony : `symfony server:start -d`  

---

### Commandes Docker

- Démarrer les conteneurs en arrière-plan : `docker-compose up -d`  
- Voir les logs des conteneurs : `docker-compose logs -f`  
- Accéder au conteneur PHP (app) pour exécuter des commandes : `docker exec -it smartcourse_app bash`  
- Installer les dépendances PHP (dans le conteneur) : `composer install`  
- Créer la base de données (dans le conteneur) : `php bin/console doctrine:database:create`  
- Lancer les migrations (dans le conteneur) : `php bin/console doctrine:migrations:migrate`  
- Arrêter les conteneurs : `docker-compose down`  
- Supprimer conteneurs, réseaux et volumes : `docker-compose down -v`  
