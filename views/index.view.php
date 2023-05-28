    <?php require "views/partials/heading.php"; ?>
    <h2> My todo List </h2>
    <?php foreach($tasks as $task): ?>
        <li class="<?php echo $task->complete? 'complete' :'uncomplete'; ?>">
        <?= $task->description; ?>
        </li>
        
    <?php endforeach; ?>

    <h3>Add New List</h3>
    <form action="/store" method="POST">
        <div class="form-group">
            <label for="task">Description</label>
            <input type="text" id="name" name="task">
        </div>
            
        <div class="form-group">
            <label for="complete">Complete</label>
            <select name="complete">
                <option value="1">Yes</option>
                <option selected value="0">No</option>
            </select>
        </div>
            
        <input type="submit" value="submit">
    </form>

    <?php require "views/partials/footer.php";
