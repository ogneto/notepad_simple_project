# 📝 Notepad Project

A modern and secure notepad application built with Laravel and Bootstrap 5. Create, edit, and manage your notes with a beautiful user interface.

## 📋 About the Project

This is a learning project designed to practice Laravel fundamentals including:
- Authentication with sessions
- CRUD operations
- Middleware implementation
- Form validation
- Database relationships
- Soft deletes
- Modern UI with Bootstrap 5

## 🚀 Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Bootstrap 5 + Custom CSS
- **Database**: You can use any database you want. Remember to change the database configuration in the .env file.
- **Icons**: Bootstrap Icons

## ✨ Features

- ✅ User authentication (login/logout)
- ✅ Create, read, update, and delete notes
- ✅ Secure note access (encrypted IDs)
- ✅ Responsive design
- ✅ Form validation with custom error messages
- ✅ Flash messages for user feedback
- ✅ Soft deletes (notes can be recovered)
- ✅ Modern glassmorphism UI
- ✅ Protected routes with middleware

## 📦 Installation

### Prerequisites

- PHP 8.2 or higher
- Composer
### Step-by-Step Setup

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd notepad_project
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   ```

4. **Generate application key**
   ```bash
   php artisan key:generate
   ```

5. **Create database**
   
   The project uses SQLite by default. The database file will be created automatically. But you can use any database you want. Remember to change the database configuration in the .env file.
   ```bash
   touch database/database.sqlite
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed the database**
   ```bash
   php artisan db:seed
   ```

   This will create 2 test users:
   - **Email**: `usertest1@email.com` | **Password**: `abc123456`
   - **Email**: `usertest2@email.com` | **Password**: `abc123456`

8. **Start the development server**
   ```bash
   php artisan serve
   ```

9. **Access the application**
   
   Open your browser and navigate to: `http://localhost:8000`

## 🗄️ Database Structure

### Users Table
- `id` - Primary key
- `username` - Unique email (max 100 chars)
- `password` - Hashed password
- `created_at`, `updated_at` - Timestamps
- `deleted_at` - Soft delete timestamp

### Notes Table
- `id` - Primary key
- `user_id` - Foreign key to users table
- `title` - Note title (5-50 chars)
- `note` - Note content (min 10 chars)
- `created_at`, `updated_at` - Timestamps
- `deleted_at` - Soft delete timestamp

## 🔐 Authentication

The application uses **session-based authentication**:
- Login credentials are validated against the database
- User data is stored in the session
- Middleware protects authenticated routes
- Logout clears the session

## 🛣️ Routes

### Public Routes
- `GET /` - Home/About page
- `GET /login` - Login form
- `POST /login` - Login submit

### Protected Routes (Require Authentication)
- `GET /app` - User dashboard (list notes)
- `GET /logout` - Logout
- `GET /create-note` - Create note form
- `POST /create-note` - Store new note
- `GET /edit-note/{id}` - Edit note form
- `POST /edit-note/{id}` - Update note
- `GET /delete-note/{id}` - Delete note (soft delete)

## 🎨 UI Features

- **Glassmorphism navbar** with backdrop blur
- **Gradient text effects** for branding
- **Card-based note display** with hover animations
- **Responsive grid layout** using Bootstrap
- **Custom CSS variables** for theming
- **Bootstrap Icons** for actions
- **Inline alerts** for validation errors

## 🔒 Security Features

- **Password hashing** with bcrypt
- **CSRF protection** on all forms
- **Encrypted note IDs** in URLs
- **Middleware authentication** checks
- **Input validation** on all forms
- **Soft deletes** for data recovery

## 📝 Validation Rules

### Note Creation/Update
- **Title**: 
  - Required (creation only)
  - Minimum 5 characters
  - Maximum 50 characters
- **Content**: 
  - Required (creation only)
  - Minimum 10 characters

### Login
- **Email**: Required, valid email format
- **Password**: Required

## 🧪 Testing the Application

1. **Login** with one of the test users
2. **Create your first note** using the navbar button
3. **Edit a note** by clicking the pencil icon
4. **Delete a note** by clicking the trash icon
5. **Logout** and try logging in with another user

## 📚 Learning Resources

This project demonstrates:
- Laravel routing and controllers
- Blade templating
- Eloquent ORM relationships
- Middleware creation and usage
- Form validation
- Session management
- Database migrations and seeders
- Bootstrap grid system
- Modern CSS techniques

## 👨‍💻 Author

Created as a learning project to practice Laravel development and modern web design.

## 📄 License

This project is for educational purposes. Feel free to use and modify as needed.