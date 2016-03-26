<div class="panel-group panel-primary">
    <div class="panel-heading">Lipsum Form</div>
    <div class="panel-body">
        <div class='alert alert-danger' ng-show="errorsLipsum">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            Please correct the form errors below and try again.
        </div>
        <form ng-submit="generateParagraphs()">
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <div class='form-group has-error' ng-class="$errorsLipsum.numParagraphs[0] != '' ? 'has-error' : 'has-error'">
                <label>Number of Paragraphs:</label>
                <input type='number' name='numParagraphs' ng-model="numParagraphs"/>
                <div class='error' ng-show="numParagraphs < 1 || numParagraphs > 100">Number of paragraphs must be between 1 and 100.</div>
                <div class='error'>@{{ errorsLipsum.numParagraphs[0] }}</div>
            </div>
            <button type='submit' class="btn btn-primary" ng-disabled="numParagraphs < 1 || numParagraphs > 100">Generate</button>
        </form>
    </div>
</div>

<div ng-show="paragraphs" class="panel-group panel-info">
    <div class="panel-heading">Paragraphs</div>
    <div class="panel-body">
        <form ng-submit="downloadLipsumParagraphs()">
            <button type='submit' class="btn">
                <span class="glyphicon glyphicon-save-file"></span> CSV
            </button>
        </form>
        <div ng-repeat="paragraph in paragraphs">
            <p>@{{ paragraph.paragraph }}</p>
        </div>
    </div>
</div>