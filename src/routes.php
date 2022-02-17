<?php

return [
  '~^games/(\d+)$~' => [\Gamer\Controllers\GamesController::class, 'view'],
  '~^games/rating$~' => [\Gamer\Controllers\GamesController::class, 'rating'],
  '~^games/(.+)/genres$~' => [\Gamer\Controllers\GamesController::class, 'viewByGenre'],
  '~^games/(.+)/platforms$~' => [\Gamer\Controllers\GamesController::class, 'viewByPlatforms'],
  '~^games/(.+)/year$~' => [\Gamer\Controllers\GamesController::class, 'viewByYear'],
  '~^games/(\d+)/delete$~' => [\Gamer\Controllers\GamesController::class, 'delete'],
  '~^games/add$~' => [\Gamer\Controllers\GamesController::class, 'add'],
  '~^games/search$~' => [\Gamer\Controllers\GamesController::class, 'search'],
  '~^news$~' => [\Gamer\Controllers\NewsController::class, 'viewAll'],
  '~^news/(\d+)$~' => [\Gamer\Controllers\NewsController::class, 'view'],
  '~^news/(\d+)/edit$~' => [\Gamer\Controllers\NewsController::class, 'edit'],
  '~^news/add$~' => [\Gamer\Controllers\NewsController::class, 'add'],
  '~^news/(\d+)/delete$~' => [\Gamer\Controllers\NewsController::class, 'delete'],
  '~^shortNews/add$~' => [\Gamer\Controllers\ShortNewsController::class, 'add'],
  '~^shortNews/(\d+)/delete$~' => [\Gamer\Controllers\ShortNewsController::class, 'delete'],
  '~^comments/(\d+)/add$~' => [\Gamer\Controllers\CommentsController::class, 'add'],
  '~^comments/(\d+)/edit$~' => [\Gamer\Controllers\CommentsController::class, 'edit'],
  '~^comments/(\d+)/delete$~' => [\Gamer\Controllers\CommentsController::class, 'delete'],
  '~^reviews/(\d+)/add$~' => [\Gamer\Controllers\ReviewsController::class, 'add'],
  '~^reviews/(\d+)/edit$~' => [\Gamer\Controllers\ReviewsController::class, 'edit'],
  '~^reviews/(\d+)/delete$~' => [\Gamer\Controllers\ReviewsController::class, 'delete'],
  '~^users/register$~' => [\Gamer\Controllers\UsersController::class, 'signUp'],
  '~^users/profile$~' => [\Gamer\Controllers\UsersController::class, 'profile'],
  '~^users/login$~' => [\Gamer\Controllers\UsersController::class, 'login'],
  '~^users/logout$~' => [\Gamer\Controllers\UsersController::class, 'logout'],
  '~^admin$~' => [\Gamer\Controllers\AdminController::class, 'admin'],
  '~^admin/games$~' => [\Gamer\Controllers\AdminController::class, 'games'],
  '~^admin/news$~' => [\Gamer\Controllers\AdminController::class, 'news'],
  '~^admin/shortNews$~' => [\Gamer\Controllers\AdminController::class, 'shortNews'],
  '~^contacts$~' => [\Gamer\Controllers\UsersController::class, 'contact'],
  '~^users/(\d+)/activate/(.+)$~' => [\Gamer\Controllers\UsersController::class, 'activate'],
  '~^$~' => [\Gamer\Controllers\MainController::class, 'main'],
];