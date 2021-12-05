<div class="row">
    <div class="col-12">
        <form action="index.php?route=post&action=create" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">nom</label>
                <input type="text" name="nom" class="form-control" id="nom">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select name="type" id="type">
                    <option value="">--Choisissez un type--</option>
                    <option value="reine">Reine</option>
                    <option value="charpentiere">Charpentière</option>
                    <option value="gardienne">Gardienne</option>
                    <option value="butineuse">Butineuse</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" name="description" rows="50"></textarea>
            </div>
            <div class="col-auto">
                <button type="submit" value="submit">Send</button>
            </div>
        </form>
    </div>
</div>
