<p>Please fill out the below form to generate lorem ipsum text:</p>
<form role="form" ng-submit="generateParagraphs()">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    Number of Paragraphs: <input type='text' name='numParagraphs' ng-model="numParagraphs">
    <button type='submit'>Generate</button>
</form>

<p>@{{ paragraphs }}</p>