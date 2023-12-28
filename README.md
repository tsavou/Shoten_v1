## Installation

1. **Cloner le Projet:**
    ```bash
    git clone https://github.com/tsavou/Shoten_v1.git
    
    ```

2. **Backend - Installer les Dépendances et Configurer l'Environnement:**
    ```bash
    cd backend
    composer install
    cp .env.example .env
    php artisan key:generate
    ```

    Assurez-vous de configurer votre fichier `.env` avec les détails appropriés de la base de données et d'autres configurations.

3. **Frontend - Installer les Dépendances:**
    ```bash
    cd frontend
    npm install
    ```

## Configuration

- **Backend:**
    - Exécutez les migrations et les seeders si nécessaire :
        ```bash
        php artisan migrate --seed
        ```

- **Frontend:**
    - Configurez l'URL du backend dans le fichier `frontend/nuxt.config.js` si nécessaire.

## Lancement du Projet

1. **Backend:**
    ```bash
    cd backend
    php artisan serve
    ```

    Le backend sera accessible à l'adresse [http://localhost:8000](http://localhost:8000).

2. **Frontend:**
    ```bash
    cd frontend
    npm run dev
    ```

    Le frontend sera accessible à l'adresse [http://localhost:3000](http://localhost:3000).
