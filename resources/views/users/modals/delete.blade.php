<div class="modal fade" id="delete_modal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content" style="text-align: center">
            <form method="POST" action="{{ action('UsersController@destroy', $user->id) }}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Delete User?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Are you sure you want to delete {{ $user->name }}?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
