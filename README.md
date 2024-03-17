# Simple self chat implementation in Laravel using Reverb

This application sends a message to the server via HTTP POST, the same message is returned by the server using websocket. The message is appended to the view.
The websocket is powered by Laravel Reverb.

The websocket channel is set to public and no user authentication is required.

## Installation steps 
- Clone this repo
- Follow Laravel Installation Steps
- Configure Reverb [Read the Documentation](https://laravel.com/docs/reverb)
- Npm run dev
- php artisan reverb:start
- php artisan serve
