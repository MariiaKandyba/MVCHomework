
<div class="container" style="margin-top: 100px;" >
    <div class="row">
    </div>

    <form action="store" method="post" id="createForm">
        <h3 style="text-align: center;">Add new task</h3>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Input your task">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description">
        </div>
        <div class="form-group">
            <label for="due_date">Due Date:</label>
            <input type="date" id="due_date" name="due_date" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
<script src="/js/validate.js"></script>