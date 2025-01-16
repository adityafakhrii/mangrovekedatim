# Laravel Blade Project

## Overview
This project is a Laravel application that utilizes Blade templating to create a structured and maintainable web application. The application is designed to showcase the beauty of Mangrove Kedatim, providing information about the location, activities, and visitor experiences.

## Project Structure
The project is organized as follows:

```
laravel-blade-project
├── resources
│   ├── views
│   │   ├── layouts
│   │   │   └── master.blade.php
│   │   ├── partials
│   │   │   ├── header.blade.php
│   │   │   ├── nav.blade.php
│   │   │   └── footer.blade.php
│   │   └── welcome.blade.php
├── routes
│   └── web.php
└── README.md
```

## Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone <repository-url>
   cd laravel-blade-project
   ```

2. **Install Dependencies**
   Make sure you have Composer installed, then run:
   ```bash
   composer install
   ```

3. **Environment Configuration**
   Copy the `.env.example` file to `.env` and configure your database and other settings:
   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations (if any)**
   ```bash
   php artisan migrate
   ```

6. **Serve the Application**
   You can serve the application using the built-in PHP server:
   ```bash
   php artisan serve
   ```

7. **Access the Application**
   Open your browser and navigate to `http://localhost:8000` to view the application.

## Features
- Master layout with Blade templating.
- Separate partials for header, navigation, and footer.
- Responsive design with a focus on user experience.

## Contributing
Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

## License
This project is licensed under the MIT License. See the LICENSE file for details.
