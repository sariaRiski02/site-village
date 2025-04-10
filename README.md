# Setup Instructions for Site Village Project

Follow these steps to set up and run the Site Village project on your local machine:

1. **Ensure Prerequisites**:
    - Install the latest version of PHP and SQLite on your device.
    - Make sure [Composer](https://getcomposer.org/) is installed for dependency management.

2. **Clone the Repository**:
    - Run the following command to clone the project from GitHub:
      ```bash
      git clone https://github.com/sariaRiski02/site-village.git
      ```
    - Navigate to the project directory:
      ```bash
      cd site-village
      ```

3. **Install Dependencies**:
    - Execute the following command to install all required dependencies:
      ```bash
      composer install
      ```

4. **Set Up Environment Configuration**:
    - Copy the example environment file:
      ```bash
      cp .env.example .env
      ```
    - Generate the application key:
      ```bash
      php artisan key:generate
      ```

5. **Database Setup**:
    - Run migrations to create the necessary database tables:
      ```bash
      php artisan migrate
      ```
    - Seed the database with dummy data:
      ```bash
      php artisan db:seed
      ```

6. **Start the Development Server**:
    - Launch the local development server:
      ```bash
      php artisan serve
      ```

Your application should now be running locally. Open the provided URL in your browser to access the project.