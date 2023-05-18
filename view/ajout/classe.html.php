<div>
    <h1 class="text-center text-primary">Enregistrer une nouvelle élève</h1>
</div>
<div class="row m-5">
    <!-- <div class="col-4 bg-danger"></div> -->
    <form class="m-5">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Nom</label>
                <input type="text" id="form6Example1" class="form-control" />
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Niveau</label>
                <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>------ Selectionnez ------</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingSelect">Cliquez pour selectionner</label>
                </div>
            </div>
            </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example3">Annee Scolaire</label>
            <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>------ Selectionnez ------</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingSelect">Cliquez pour selectionner</label>
                </div>
        </div>

        
        <button type="submit" class="btn btn-primary btn-block mb-4 p-2">Enregistrer</button>
        </form>
</div>
