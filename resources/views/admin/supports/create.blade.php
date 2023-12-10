<h1>Nova duvida</h1>

<form action="{{ route('supports.store') }}" method="POST">
    @csrf()
    <input type="text" name="subject" placeholder="Assunto">
    <textarea name="body" id="" cols="30" rows="5" placeholder="Decrição"></textarea>
    <button type="submit">Enviar</button>
</form>