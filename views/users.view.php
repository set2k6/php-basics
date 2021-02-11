<h1>All Users</h1>

<?php foreach ($users as $user) : ?>

    <li><?= $user->name; ?></li>

<?php endforeach; ?>

<h1>Submit Your Name</h1>

<form method="POST" action="/users">

    <label>Name</label>
    <input name="name"></input>

    <button type="submit">Submit</button>

</form>
