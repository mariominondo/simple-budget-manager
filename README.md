# Simple Personal Budget Manager

A straightforward personal budget management application built with Laravel and MySQL.

## About the Project

Simple Personal Budget Manager is a lightweight application designed to help individuals track their income and expenses. It provides a basic interface for managing personal finances.

### Built With

- [Laravel](https://laravel.com) - The PHP framework for web artisans
- [MySQL](https://www.mysql.com) - Open-source relational database
- [Bootstrap](https://getbootstrap.com) - Front-end open source toolkit

## Features

- User registration and login
- Dashboard with financial summary
- Income and expense tracking
- Basic reporting

## Components

1. **User Management**
   - Registration
   - Login/Logout

2. **Dashboard**
   - Overview of current month's income and expenses
   - Total balance

3. **Transactions**
   - Add new income or expense
   - List of recent transactions
   - Simple categorization (e.g., Food, Transport, Salary)

4. **Basic Reporting**
   - Monthly summary of income vs expenses

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

- PHP >= 8.2
- Composer
- MySQL

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/yourusername/simple-budget-manager.git
   ```
2. Install PHP dependencies
   ```sh
   composer install
   ```
3. Create a copy of the .env file
   ```sh
   cp .env.example .env
   ```
4. Generate an app encryption key
   ```sh
   php artisan key:generate
   ```
5. Create a database for the application
6. In the .env file, add database information to allow Laravel to connect to the database
7. Migrate the database
   ```sh
   php artisan migrate
   ```

## Contributing

Contributions are welcome. Please open an issue first to discuss what you would like to change.

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Contact

Your Name - email@example.com

Project Link: [https://github.com/yourusername/simple-budget-manager](https://github.com/yourusername/simple-budget-manager)