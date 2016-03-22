<p>Please fill out the below form to generate lorem ipsum text:</p>
<form role="form" ng-submit="generateParagraphs()">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    Number of Paragraphs: <input type='text' name='numParagraphs' ng-model="numParagraphs"> @{{ errorsLipsum.numParagraphs[0] }}<br>
    <button type='submit'>Generate</button>
</form>
<div ng-show="errorsLipsum">
    Please correct the form errors above and try again
</div>

<div ng-repeat="paragraph in paragraphs">
    <p>@{{ paragraph }}</p>
</div>