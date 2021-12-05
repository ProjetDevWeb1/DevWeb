<div class="row">
    <div class="col-12">
        <form action="index.php?route=post&action=update&id=<?= $_REQUEST['id']?>" method="post">
            <div class="mb-3">
                <label for="newName" class="form-label">Nouveau nom</label>
                <input type="text" name="newName" class="form-control" id="newName">
            </div>

            <div class="mb-3">
                <label for="newType" class="form-label">Nouveau type</label>
                <select name="newType" id="newType">
                    <option value="">--Choisissez un type--</option>
                    <option value="reine">Reine</option>
                    <option value="charpentiere">Charpentière</option>
                    <option value="gardienne">Gardienne</option>
                    <option value="butineuse">Butineuse</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="newDesc" class="form-label">Nouvelle description</label>
                <input type="text" id="newDesc" name="newDesc" rows="50"></textarea>
            </div>
            <div class="col-auto">
                <button type="submit" value="submit">Valider les changements</button>
            </div>
        </form>
    </div>
</div>