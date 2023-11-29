# Laravel Blog

Welcome to my first blog created using the Laravel framework. This blog is a platform where I share my thoughts, insights, and experiences. It's built using Laravel, a powerful and elegant PHP framework.

## Table of Contents

- [Description](#description)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Folder Structure](#folder-structure)
- [Contributing](#contributing)
- [License](#license)

## Description

This blog is designed to provide a user-friendly interface for creating, editing, and viewing blog posts. It's built with Laravel, a web application framework with expressive, elegant syntax.

## Features

- **Create New Post:** Write and publish new blog posts.
- **Edit Existing Post:** Modify and update published posts.
- **View Post:** Read and explore blog posts in a clean and responsive layout.
- **Delete Post:** Remove unwanted posts.

## Installation

1. Clone the repository:

    ```bash
    git clone <repository-url>
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Copy `.env.example` to `.env` and configure your database settings:

    ```bash
    cp .env.example .env
    ```

4. Generate application key:

    ```bash
    php artisan key:generate
    ```

5. Migrate the database:

    ```bash
    php artisan migrate
    ```

6. Serve the application:

    ```bash
    php artisan serve
    ```

7. Visit `http://localhost:8000` in your browser.

## Usage

1. **Create a New Post:**
    - Navigate to the "Create New Post" page.
    - Fill in the title, body, and optionally upload a featured image.
    - Click "Create Post" to publish.

2. **Edit Existing Post:**
    - Go to the "All Posts" page.
    - Click "Edit" next to the post you want to modify.
    - Make changes and click "Save Changes."

3. **View Post:**
    - Visit the homepage or navigate to the "All Posts" page.
    - Click "Read More" to read the full content of a post.

4. **Delete Post:**
    - Go to the "All Posts" page.
    - Click "Delete" next to the post you want to remove.

## Folder Structure

- **app:** Contains the core application code.
- **resources:** Includes views, assets, and language files.
- **public:** Houses the publicly accessible files.
- **routes:** Defines the routes for the application.
- **database:** Contains database migrations and seeders.

## Contributing

Contributions are welcome! If you find any issues or have suggestions, please open an issue or create a pull request.

## License

This Laravel Blog is open-sourced software licensed under the [MIT license](LICENSE).
