<!-- Modal -->
<form method="post" action="{{route('users.update', ['user' => $user])}}" enctype="multipart/form-data">
  <div class="modal fade" id="editPassword" tabindex="-1" aria-labelledby="editPasswordLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title text-danger" id="editPasswordLabel">Змінити пароль</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        @csrf
        @method('patch')
        <input type="hidden" name="onlypassword" value="1">

        <div class="modal-body">
          <div class="mb-3 row">
            <label for="password" class="col-sm-4 col-form-label">Новий пароль</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" name="password" id="password" require>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Скасувати</button>
          <button type="submit" class="btn btn-success">Оновити</button>
        </div>

      </div>
    </div>
  </div>
</form>