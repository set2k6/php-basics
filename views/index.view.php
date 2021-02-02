<?php require ('partials/head.php'); ?>

<h1>Submit Your Name</h1>

<form method="GET" action="/names">

    <input name="name"></input>

    <button type="submit">Submit</button>

</form>



<!--<h1>Tasks For The Day</h1>-->
<!---->
<!--    --><?php //foreach ($tasks as $task) : ?>
<!--        <li>-->
<!--            --><?php //if ($task->completed)  :?>
<!--                <strike> --><?//= $task->description; ?><!--</strike>-->
<!--            --><?php //else : ?>
<!--                --><?//= $task->description; ?>
<!--            --><?php //endif; ?>
<!--        </li>-->
<!--    --><?php //endforeach; ?>

<?php require ('partials/footer.php'); ?>




