<div class="modal fade" id="approval" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLongTitle"><i class="bi bi-check mr-2 "></i>Approval Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body P-4">
      <h2>
        @isset($profile["_regStatus"])
        {{$profile["_regStatus"]}}
        @endisset
        </h2>
      </div>
      
    </div>
  </div>
</div>