
# Blog Using Laravel Framework

This is a simple blog post app built with Laravel, featuring CRUD operations, categories, slugs, commenting, tags, and user authentication.

## Features
- Create, Read, Update, and Delete (CRUD) operations for blog posts and blog Categories
- Categories for organizing posts
- Slugs for human-readable URLs
- User authentication
- Commenting functionality
- Tags for categorizing posts
- Clean and responsive design
## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/AnkiGilbertOkosso/Blog.git
   ```

2. Install dependencies:

   ```bash
   cd Blog
   composer install
   ```

3. Set up the environment file:

   ```bash
   cp .env.example .env
   ```

   Configure your database in the `.env` file.

4. Generate application key:

   ```bash
   php artisan key:generate
   ```

5. Run migrations:

   ```bash
   php artisan migrate
   ```

6. (Optional) Seed the database with sample data:

   ```bash
   php artisan db:seed
   ```

7. Start the development server:

   ```bash
   php artisan serve
   ```

   Visit `http://localhost:8000` in your browser.

## folder structure


- `app`: Contains the application's models, controllers, and other PHP classes.
- `database`: Includes migrations and seeders.
- `public`: Houses the publicly accessible assets like images and stylesheets.
- `resources`: Holds the views, language files, and other frontend assets.
- `routes`: Defines the web and API routes.
- `tests`: Contains PHPUnit tests.
- `config`, `storage`, `vendor`: Standard Laravel directories.

## Usage/Examples

- Register and log in to create and manage your blog posts.
- Explore the categories and tags for organized content.
- Comment on posts to engage with other users.


## Contributing

Contributions are always welcome!

See `contributing.md` for ways to get started.

Please adhere to this project's `code of conduct`.

