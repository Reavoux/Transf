<!-- Modal -->
<div class="modal fade" id="modalArchiverSupprimerLigue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Archiver ou supprimer cette ligue ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row mb-3">
            <div class="col-md-6">
              <h6>Archivage</h6>
              <div class="input-group mb-3">
                <input type="text" disabled="disabled" class="form-control" id="Archiver" placeholder="Archiver : Nom de ligue">
                <button class="btn btn-outline-primary" type="button"><i class="fas fa-check"></i></button>
              </div>
            </div>
          </div>  
          <hr class="dropdown-divider"/>
          <div class="row mb-3">
            <div class="col-md-6">
              <h6>Suppression de ligue</h6>
              <div class="input-group mb-3">
                <input type="text" disabled="disabled" class="form-control" id="Supprimer" placeholder="Supprimer : Nom de ligue">
                <button class="btn btn-outline-danger" type="button"><i class="fas fa-times"></i></button>
              </div>
            </div>
          </div>     
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quitter</button>
      </div>
    </div>
  </div>
</div>