# Discography Project Task

This project is a Laravel application designed to manage a discography database, including artists, LPs (albums), songs, and authors. The application allows you to view and manage artists, their albums, songs, and the authors of those songs.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Database Schema](#database-schema)
- [Usage](#usage)
- [Testing](#testing)
- [License](#license)

## Requirements

- PHP 8.0 or higher
- Composer
- SQLite or any other supported database
- Node.js and npm (for frontend assets)

## Installation

1. **Clone the repository**:
    ```sh
    git clone https://github.com/your-username/discography-project-task.git
    cd discography-project-task
    ```

2. **Install dependencies**:
    ```sh
    composer install
    ```

3. **Set up environment variables**:
    - Copy `.env.example` to `.env`:
        ```sh
        cp .env.example .env
        ```
    - Update the `.env` file with your database credentials and other settings.

4. **Generate application key**:
    ```sh
    php artisan key:generate
    ```

5. **Run migrations**:
    ```sh
    php artisan migrate
    ```

6. **Seed the database**:
    ```sh
    php artisan db:seed
    ```

7. **Compile frontend assets**:
    If you plan to make changes to the JavaScript or CSS files, install Node.js dependencies and compile the assets:
    ```sh
    npm install
    npm run dev
    ```

8. **Start the development server**:
    ```sh
    php artisan serve
    ```

The application will be available at `http://localhost:8000`.

## Database Schema

The project includes the following main tables:

- **artists**: Stores information about artists.
- **lps**: Stores information about LPs (albums) and has a foreign key to the artists table.
- **songs**: Stores information about songs and has a foreign key to the lps table.
- **authors**: Stores information about authors.
- **author_song**: A pivot table to manage many-to-many relationships between songs and authors.

### Foreign Key Constraints

- `lps.artist_id` references `artists.id` (on delete cascade)
- `songs.lp_id` references `lps.id` (on delete cascade)
- `author_song.song_id` references `songs.id` (on delete cascade)
- `author_song.author_id` references `authors.id` (on delete cascade)

## Usage

### Login

- Use the following credentials to log in:
  - **Email**: admin@gmail.com
  - **Password**: 1234

### Home Page

    - **Dashboard**: View a report with LP name, artist name, number of songs, and authors.

### Navigation

    - **Menu**: Manage artists or LPs from the home page menu.

### Managing Artists

    - **Artists Page**:
      - Perform CRUD operations (name, description).
      - View total LPs for each artist.
      - Link to the LPs associated with the artist.

### Managing LPs

    - **LPs Page**:
      - Perform CRUD operations (name, description).
      - Filter LPs by artist name.

### Adding Data

- Use Laravel factories and seeders to add data to the database.
- Example seeder code can be found in `database/seeders/DatabaseSeeder.php`.

## Testing

### Running Tests

Use the following command to run your tests:

```sh
php artisan test
