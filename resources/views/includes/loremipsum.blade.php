<div class="panel-group panel-primary">
    <div class="panel-heading">Lipsum Form</div>
    <div class="panel-body">
        <div class='alert alert-danger' role="alert" ng-show="errorsLipsum">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            Please correct the form errors below and try again.
        </div>
        <form role="form" ng-submit="generateParagraphs()">
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <div class='form-group has-error' ng-class="$errorsLipsum.numParagraphs[0] != '' ? 'has-error' : 'has-error'">
                <label>Number of Paragraphs:</label>
                <input type='text' name='numParagraphs' ng-model="numParagraphs"/>
                <div class='error'>@{{ errorsLipsum.numParagraphs[0] }}</div>
            </div>
            <button type='submit' class="btn btn-primary">Generate</button>
        </form>
    </div>
</div>

<div ng-show="paragraphs" class="panel-group panel-info">
    <div class="panel-heading">Paragraphs</div>
    <div class="panel-body">
        <form role="form" ng-submit="downloadLipsumParagraphs()">
            <button type='submit' class="btn">
                <span class="glyphicon glyphicon-save-file"></span> CSV
            </button>
        </form>
        <div ng-repeat="paragraph in paragraphs">
            <p>@{{ paragraph.paragraph }}</p>
        </div>
    </div>
</div>