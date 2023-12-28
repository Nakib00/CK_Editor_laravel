CKEditor Laravel App
Overview
Welcome to CKEditor Laravel App! This application provides a rich text editing experience powered by CKEditor, allowing users to seamlessly upload images and format text similar to Microsoft Word.

Features
Rich Text Editing: Use CKEditor to create and edit text with a variety of formatting options.
Image Upload: Easily upload images and embed them in your content.
Database Storage: Content, including text and images, is stored in the Laravel database (database name: ckeditor-app).
Getting Started
Prerequisites
Make sure you have the following installed on your local machine:

PHP (>= 7.4)
Composer
Node.js (for CKEditor assets)

Installation
Clone the repository:
git clone https://github.com/Nakib00/CK_Editor_laravel.git

Install dependencies:
composer install
npm install

Configure the environment:

Create a copy of .env.example and name it .env.

Update the database configuration in the .env file:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ckeditor-app
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

Generate application key:
php artisan key:generate

Run migrations:
php artisan migrate

Compile assets:
npm run dev

Start the development server:
php artisan serve



