@csrf
  <textarea name="body" id="" cols="30" rows="10" placeholder="Comentário">{{ $comment->body ?? old('body') }}</textarea>
  <label for="visible">Visível</label>
  <input type="checkbox" name="visible"
    @if (isset($comment) && $comment->visible)
        checked = 'checked'
    @endif
  >
  <input type="submit" value="Enviar">
