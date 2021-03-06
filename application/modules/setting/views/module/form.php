<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="myModalLabel">Module</h4>
</div>

<form id="form-area" action="{actionUrl}" class="form">
  <div class="modal-body">
    <div class="form-group">
      <label for="">Code</label>
      <input type="text" class="form-control" id="txt_code" name="txt_code" placeholder="" value="{txtCode}">
      <p class="help-block">2-30 Characters</p>
    </div>
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" id="txt_name" name="txt_name" placeholder="" value="{txtName}">
      <p class="help-block">2-250 Characters</p>
    </div>
    <div class="form-group">
      <label for="">Link</label>
      <input type="text" class="form-control" id="txt_link" name="txt_link" placeholder="" value="{txtLink}">
      <p class="help-block">3-150 Characters</p>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save </button>
  </div>
</form>
