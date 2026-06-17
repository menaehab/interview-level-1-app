# Expense Tracker API - Interview Task

This project is an Expense Tracker API built with Laravel. It provides endpoints for user authentication and expense management. The API allows users to register, log in, log out, and perform CRUD (Create, Read, Update, Delete) operations on their personal expenses. Expenses are securely scoped so that users can only access and manage their own records.

## Features
- **User Authentication:** Registration, Login, and Logout using Laravel Sanctum.
- **Expense Management:** Create, Read, Update, and Delete (CRUD) operations for expenses.
- **Data Retrieval:** Pagination and search functionality for listing expenses.
- **Security:** API endpoints are restricted to authenticated users, ensuring users only access their own data.

## API Documentation
You can find the detailed API documentation and endpoints in the following Postman link:
[Postman API Documentation](https://documenter.getpostman.com/view/40617796/2sBXwtrA95)

---

## Requirements
To run this project, you will need:
- **PHP** = 8.3
- **Composer** (Dependency Manager for PHP)
- **MySQL** or any other supported database
- **Postman** (Recommended for API testing)

---

## Installation Guide

Follow these steps to set up the project locally:

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd interview-level-1-app
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Set up the environment variables:**
   Duplicate the `.env.example` file and rename it to `.env`:
   ```bash
   cp .env.example .env
   ```
   Open the `.env` file and update your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

4. **Generate the application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run database migrations:**
   This will create the necessary tables (`users`, `expenses`, etc.) in your database:
   ```bash
   php artisan migrate
   ```

6. **Start the local development server:**
   ```bash
   php artisan serve
   ```
   The application will be accessible at `http://127.0.0.1:8000`. You can now use Postman to interact with the API.

---

## Interview Task

You are required to build a simple **Expense Tracker mobile application** using Flutter that consumes this API.

### App Requirements

The application should include the following features:

### 1. Authentication
- User can register a new account
- User can log in with email and password
- Store authentication token securely
- User can log out

---

### 2. Expenses Management
- Display a list of all expenses
- Add a new expense (reason, amount)
- Update an existing expense
- Delete an expense

---

### 3. UI Requirements
- Simple clean UI
- Loading indicators for API calls
- Error handling (show proper error messages)
- Empty state when no expenses exist

---

### 4. Technical Requirements
- Use REST API (this backend)
- Use Bearer Token authentication
- Use state management (Provider / Bloc / Riverpod - candidate choice)
- Handle API errors properly (401, validation errors, etc.)

---

### 5. Bonus (Optional)
- Search expenses
- Pagination support
- Local caching
- Clean architecture
- Proper folder structure

---

### API Base URL

```bash
http://127.0.0.1:8000/api 
```

---

### Authentication
All protected routes require:

```bash
Authorization: Bearer {token}
```
---

### Notes
- Focus on functionality more than UI design
- Clean code and structure will be evaluated
- Proper API integration is required
