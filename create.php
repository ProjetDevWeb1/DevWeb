<div class="row">
    <div class="col-12">
        <form action="index.php?route=post&action=create" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">nom</label>
                <input type="text" name="nom" class="form-control" id="nom">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Type</label>
                <input type="text" id="type" name="type" rows="50"></textarea>
            </div>
            <div class="col-auto">
                <button type="submit" value="submit">Send</button>
            </div>
        </form>
    </div>
</div>
