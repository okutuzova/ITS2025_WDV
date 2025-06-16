# Geography Quiz App


This is a Laravel-based quiz application that tests users on world countries, their capitals, and flags. It offers multiple modes and difficulty levels to enhance the learning experience.

## Overview
### Start
The first page is start.blade.php. It serves as the starting point for the application.
Purpose: User inputs their name to start the quiz
Features:

- A form with an input field for the user's name.

- Two buttons:

Continue: Submits the name and proceeds to the next page.

Reset: Clears the input field.

The routes in web.php for this page are 
```php
Route::get('/', [HomeController::class, 'start'])->name('home');
Route::post('/start', [HomeController::class, 'storeName'])->name('storeName');
```
The second route stores the name of the user in the session.

### 
Home Page (home.blade.php)
URI: /start

Purpose: Displays the user's name, allows quiz mode selection.

Features:

- Difficulty selection (Easy / Hard) for both Capitals Quiz and Flags Quiz.

- Training Mode button for learning and memorization.

### Training Mode (training.blade.php)
URI: /training

Purpose: Allows the user to study and memorize countries, capitals, flags, and other basic info.

Features:

- Displays a card with detailed country information (name, capital, population, region, and flag).

Buttons:

- Next Country: Loads the next country card.

- Back to Start: Returns to the start page for mode selection.

- View Leaderboard: Opens the leaderboard page.



### Quiz Mode (quiz.blade.php)
Modes:

- Capitals Quiz

- Flags Quiz

Difficulty Levels:

- Easy

- Hard (includes a 10-second timer)

Features:

- Each question has 4 answer options.

- Each correct answer awards 1 point.

- Hard mode includes a countdown timer for added challenge.

- Timer JavaScript is located in the public/js directory.

Leaderboard.
URI is http://127.0.0.1:8000/leaderboard. The view is leaderboard.blade.php. The players displayed are limited by 10. 


Additional Notes
- The app uses session storage for user data (name and score).
- Bootstrap is used for styling and layout consistency.