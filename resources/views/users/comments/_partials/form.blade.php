<div class="w-full bg-white shadow-md rounded px-8 py-12">
    @csrf
    <textarea name="body" cols="30" rows="10" placeholder="Comentário" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-block" value>{{ $comment->body ?? old('body') }}</textarea>
    <label for="visible">
        <input type="checkbox" name="visible" class="m-1"
        @if (@isset($comment) && $comment->visible)
            checked="checked"
        @endif>Visivel?
    </label>
    <button type="submit" class="w-full shadow bg-blue-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Salvar</button>
</div>
