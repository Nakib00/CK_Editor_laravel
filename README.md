# CKEditor Laravel App

## Overview

Welcome to CKEditor Laravel App! This application provides a rich text editing experience powered by CKEditor, allowing users to seamlessly upload images and format text similar to Microsoft Word.

## Features

- **Rich Text Editing:** Use CKEditor to create and edit text with a variety of formatting options.
- **Image Upload:** Easily upload images and embed them in your content.
- **Database Storage:** Content, including text and images, is stored in the Laravel database (database name: `ckeditor-app`).

## Getting Started

### Prerequisites

Make sure you have the following installed on your local machine:

- [PHP](https://www.php.net/) (>= 7.4)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (for CKEditor assets)

### Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Nakib00/CK_Editor_laravel.git
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Configure the environment:**

    - Create a copy of `.env.example` and name it `.env`.
    - Update the database configuration in the `.env` file:

        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=ckeditor-app
        DB_USERNAME=your_database_username
        DB_PASSWORD=your_database_password
        ```

4. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run migrations:**

    ```bash
    php artisan migrate
    ```

6. **Compile assets:**

    ```bash
    npm run dev
    ```

7. **Start the development server:**

    ```bash
    php artisan serve
    ```

Visit [http://localhost:8000](http://localhost:8000) in your browser to access the application.

## Usage

1. Navigate to the application in your browser.
2. Create a new document by providing a title and description.
3. Use the CKEditor to format text and upload images.
4. Submit the form to save the document in the database.

## Contributing

Contributions are welcome! If you find any issues or have suggestions, feel free to open an issue or create a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
