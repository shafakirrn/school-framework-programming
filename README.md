# Framework Programming IUP - Laravel Project

Created by: Shafa Kirana Mulia - 5025221078

## Section 2
- **Video 2 (Instalation and Configuration)**
  
  Running Laravel 11 requires PHP 8.2+, Nginx, and a database. These can be obtained through software like Laragon, XAMPP, or Laravel Herd. Additionally, Composer and Node.js 20+ are essential components for the setup. Here, I use Laravel Herd.
  
- **Video 3 (Folder Structure)**
  
  In Laravel 11, the folder structure is organized as follows:
  - `app`: Contains the core logic of your application, including models, controllers, and services.
  - `bootstrap`: Holds the files for bootstrapping the framework, including cache and environment settings.
  - `config`: Stores all of your application’s configuration files.
  - `database`: Contains database migrations, factories, and seeders for managing 
database schema and data.
  - `public`: The public-facing directory, where assets like images, JavaScript, and CSS files are stored, as well as the entry point for the app: `index.php`.
  - `resources`: Includes views (Blade templates), raw assets and language files.
  - `routes`: Defines all the application’s routes.
  - `storage`: Stores log files, cached data, file uploads, and other runtime data.
  - `tests`: Contains automated tests for your application’s functionality.
  - `vendor`: Houses third-party packages and dependencies managed by Composer.

    Each folder is designed to keep the application organized and easy to maintain, ensuring that related files are grouped together.
  
- **Video 4 (Blade Templating Engine)**
  
  Here we learn how to organize the structure of our page layouts and utilize Tailwind for styling.
  
- **Video 5 (Blade Component)**
  
  Here we improving file organization by using Blade Components, which allows frequently reused code to be turned into components within a layout system. 

## Section 3
- **Video 6 (View Data)**
  
  Learning how to send data from the router to a more detailed view. In this case, we changed the blog into a news section and personalized the design and layout of each card.
  
- **Video 7 (Model)**
  
  In this section, we converted the routing data for Posts (News) into Models, which can now be accessed repeatedly from the models in App/Models, so no need to declare the data each time it's used.

## Section 4 
- **Video 8 (Database and Migration)**

  Learning about how to manage our database, including create tables, rollback and manage changes in the database.


- **Video 9 (Eloquent ORM and Post Model)**

  Here we learn about _Eloquent_, an object-relational mapper (ORM) that makes it enjoyable to interact with your database (Laravel Documentation). We can change the Model News in a proper way, by using _Route Model Binding_ that help us to send all model's data which will be match with the `id`. Before using the `create` method, we need to choose either `fillable` or `guarded` property on our model class. `fillable` is used to specify fields which are to be mass assignable, while `guarded` is the reverse of `fillable`, that specify fields which are not mass assignable. Then, we canuse `tinker` to help us in database modification

    - `php artisan tinker` that shows all data in our `Post` Model
      <img width="530" alt="{F380D303-86FB-4832-BE17-B9B4CB35D0F6}" src="https://github.com/user-attachments/assets/c779c579-756d-4fee-aba1-b089f3e90333">
    - The result of the `blog` page.
      <img width="942" alt="{3A88E4CD-1905-4FC0-97B2-52C10C125282}" src="https://github.com/user-attachments/assets/8485262d-5f9d-4b7a-b854-3887f02eea2f">

## Section 5
- **Video 10 (Model Factories)**
  
  Using the Factory feature to generate dummy data simplifies the process, do no need to manually create data one by one through TablePlus or Tinker.
  
- **Video 11 (Eloquent Relationship)**
  
  Creating relationships for each model we have. Eloquent makes it easier to manage and use these relationships.

- **Video 12 (Post Category)**
  
  Here we created a Category model for posts using Eloquent relationships and defined the categories with Enums.

- **Video 13 (Database Seeder)**
  
  Here we created a seeder to make it easier to generate dummy data without needing to use Tinker. For example for `CategorySeeder.php`
  
  ```php
  class CategorySeeder extends Seeder
    {
        public function run(): void
        {
            // Category::factory(3)->create();
            Category::create([
                'name' => 'Web Design',
                'slug' => 'web-design',
                'color' => 'green',
            ]);
    
            Category::create([
                'name' => 'UI/UX Design',
                'slug' => 'ui-ux-design',
                'color' => 'red',
            ]);
    
            Category::create([
                'name' => 'Machine Learning',
                'slug' => 'machine-learning',
                'color' => 'purple',
            ]);
    
            Category::create([
                'name' => 'Data Structures',
                'slug' => 'data-structures',
                'color' => 'pink',
            ]);
            
        }
    }
    ```

## Section 6
- **Video 14 (N+1 Problems)**
  
  After the data is inserted, the query is executed repeatedly, leading to many queries, totaling 2n + 1. To improve query efficiency, eager loading can be utilized in Laravel for effectiveness.

- **Video 15 (Redesign UI)**
  
  Here we use Flowbite as the UI template, we will use the blog sections provided in Flowbite template. We just copy the code and implement it at `posts.blade.php`. Data is shown by calling `$post->category->name, $post -> author->name` and etc. Every category is group by different colors which has been configured safelist at `tailwind.config.js`.

- **Video 16 (Searching)**
  
  The search function will be implemented using the query builder. It filters titles in the blog search section, as well as by category and author. If the array is not empty, the query will apply the necessary filters.

- **Video 17 (Pagination)**
  
  Using Laravel's pagination, the blogs will be divided into pages according to the number of posts specified by the developer. It also groups the posts by category and author.
  
  
  
  
  


