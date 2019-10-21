<div class="media post">
                            
    @include('shared._vote', [
        'model' => $answer
    ])

    <div class="media-body">
        {!! $answer->body_html !!}
        <div class="row">
            <div class="col-4">
                <div class="ml-auto">
                    @can('update',$answer)
                    <a href="{{ route('questions.answers.edit',[$question->id, $answer->id]) }}" class="btn btn-sm btn-outline-info">Edit</a>
                    @endcan

                    @can('delete',$answer)
                    <form method="post" action="{{ route('questions.answers.destroy',[$question->id, $answer->id]) }}" class="form-delete">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this answer?')">Delete</button>
                    </form>
                    @endcan
                </div>
            </div>
            <div class="col-4">
                
            </div>
            <div class="col-4">
                <user-info :model="{{ $answer }}" label="answered"></user-info>
            </div>
        </div>
        
    </div>
</div>