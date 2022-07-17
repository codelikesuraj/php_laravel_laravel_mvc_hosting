<h1>Task Title: PHP Laravel Laravel MVC Hosting</h1>
<h2>User Management System</h2>
<p>Create a simple user management system using Laravel MVC framework having the following:</p>
<ul>
    <li>
        <strong>User Controller</strong> with the following methods:
        <ul>
            <li><strong>Create user:</strong> creates a new user and inserts into the database</li>
            <li><strong>Edit users:</strong> takes in user id from the front-end and edits the user</li>
            <li><strong>Delete user:</strong> takes in the user id from the front-end  and deletes the user based on the ID</li>
            <li><strong>Get users:</strong> gets all users and passes them to the laravel blade template</li>
        </ul>
    </li>
    <li>
        <strong>User Model:</strong> with the following fields:
        <ul>
            <li>Id</li>
            <li>Name</li>
            <li>Email</li>
            <li>phone</li>
        </ul>
    </li>
    <li>
        <strong>Views</strong>
        <ul>
            <li><strong>users.blade.php:</strong> this is the view to display all users from the getUsers() method of the user controller</li>
            <li><strong>edituser.blade.php:</strong> this view displays a form with current user info and possibility to edit, then a submit button</li>
        </ul>
    </li>
</ul>
<p>Your work should follow the latest laravel 9 principles for routing.</p>
<p>Host your application on Heroku  and add the link to your project readme on github</p>
<p><strong>NB:</strong> a model with name User is suppose to be represented by a database table called users</p>
<p>Create a database of your own name with at least one table called users.</p>

<h2>Resources</h2>
<ul>
    <li><a href="https://laravel.com" target="_blank">laravel.com</a></li>
    <li><a href="https://youtu.be/QVNQq-LfHBk" target="_blank">Simple CRUD with Laravel</a></li>
</ul>

<h3>Check out the live project at <a href="http://stormy-sands-85785.herokuapp.com/users" target="_blank">http://stormy-sands-85785.herokuapp.com</a> hosted on Heroku</h3>
