<h1>Lorem Ipsum</h1>

<form method='POST' action='loremipsum/post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <input type='text' name='numParagraphs'>
    <input type='submit' value='Generate'>
</form>
