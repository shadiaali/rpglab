<p align="center"><img src="https://github.com/shadiaali/rpglab/blob/master/public/images/rpglab_logo_png.png?raw=true" width="400"></p>

## This is my working repo for my thesis project.

<p align="center"><img src="https://media.giphy.com/media/Fv8uxK7iNIEhi/source.gif" width="400"></p>


## Instructions 
1. Create a new database called ```rpglab```
2. Remove the ```.example``` from the ``.env``` file
3. Install composer: ```composer install```
4. Install the node modules: ```npm install```
5. Migrate the database: ```php artisan migrate```
6. Seed the database: ```php artisan db:seed```
7. Link the file storage: ```php artisan storage:link```
8. Run the server: ```php artisan serve```
9. You can log in with the following:
**Admin Account**
Username: Admin@admin.com
Password: password

**User Account**
Username: User@user.com
Password: password 


# Current Features

-   [x] **Author Account**

Users are able to sign up for a Primary Account, also referred to as an Author account or Main Account.


-   [x] **Character Creation/Aliases**

Primary users are able to create characters. These act as character aliases. Primary users are able to switch between these sub-accounts to facilitate roleplaying under different character names.


-   [x] **Customized Structure**

The platform is based on discussion forum software, the structure is customized and geared toward the world scaffold of a typical roleplaying setting. This includes areas, sub-areas, threads and posts.

-   [x] **Custom Profiles**

Profiles (also known as Character Sheets) are tied to each account. This makes keeping track of character attributes much easier.

-   [x] **Awards**

Users are able to upload and give characters awards/badges that appear on their profile page. 



# Planned Features
-   [ ] **Inbox System**

Users would be able to send, view, delete messages.

-   [ ] **Random Events**

Random Events act like writing prompts for users. These would randomly appear within parameters set by the Admin and show Globally (forum-wide), Locally (area-wide), Sub-locally (sub-area-wide) or at Thread level (thread-wide)

-   [ ] **Current Events**
  
As various events are always being run in-game by players, a calendar/event system would be beneficial. Events could be inserted, and shown Globally (forum-wide), Locally (area-wide), Sub- locally (sub-area-wide) or at Thread level (thread-wide) in the areas they applied to with specified start/end times.

-   [ ] **Notifications**

Users would receive notifications based on activity like new messages or new replies to threads.



## Built with the help of
-   [Chatter](https://github.com/webdevmatics/chatter/)
-   [laravel-roles](https://github.com/jeremykenedy/laravel-roles)
-   [laravel-users](https://github.com/jeremykenedy/laravel-users)
