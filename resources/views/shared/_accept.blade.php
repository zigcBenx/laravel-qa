 @can('accept', $model)
    <a href="" onclick="event.preventDefault();document.getElementById('accept-answer-{{ $model->id }}').submit();" title="Mark this answer as best answer" class="{{ $model->status }} mt-2"><i class="fa fa-check fa-3x"></i>
    </a>
     <form action="{{ route('answers.accept',$model->id) }}" method="post" id="accept-answer-{{ $model->id }}" style="display:none;">
    @csrf
</form>
@else
    @if($model->is_best)
        <a title="The question owner accepted this answer as best answer" class="{{ $model->status }} mt-2"><i class="fa fa-check fa-3x"></i>
        </a>
    @endif
@endcan