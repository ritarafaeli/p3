<div class="panel-group panel-primary">
    <div class="panel-heading">XKCD Password Form</div>
    <div class="panel-body">
        <div class='alert alert-danger' role="alert" ng-show="errorsXKCD">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            Please correct the form errors below and try again.
        </div>
        <form role="form" ng-submit="generatePassword()">
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <div class='form-group'>
                <label>Number of Words:</label>
                <input type="number" name="num" ng-model="xkcd.num" class="form-control" ng-pattern="/^\d*$/"/>
                <div class='error'>@{{ errorsXKCD.num[0] }}</div>
                <div class='error' ng-show="xkcd.num < 3 || xkcd.num > 20">Number of words must be between 3 and 20.</div>
            </div>
            <div class="form-group">
                <label>Breakage:</label>
                <label class="radio-inline"><input type="radio" ng-model="xkcd.breakage" value="spaces" />S p a c e s</label>
                <label class="radio-inline"><input type="radio" ng-model="xkcd.breakage" value="camelcase" />camelCase</label>
                <label class="radio-inline"><input type="radio" ng-model="xkcd.breakage" value="hyphens" />H-y-p-h-e-n-s</label>
            </div>
            <div class="form-group">                            
                <label>Case:</label>
                <label class="radio-inline"><input type="radio" ng-model="xkcd.case" value="default" ng-disabled="xkcd.breakage == 'camelcase' "/>Default</label>
                <label class="radio-inline"><input type="radio" ng-model="xkcd.case" value="upper" ng-disabled="xkcd.breakage == 'camelcase' " />UPPERCASE</label>
                <label class="radio-inline"><input type="radio" ng-model="xkcd.case" value="lower" ng-disabled="xkcd.breakage == 'camelcase' "/>lowercase</label>
            </div>                        
            <div class="form-group">                            
                <label>Include:</label>
                <label class="checkbox-inline"><input type="checkbox" ng-model="xkcd.number" value="">Number</label>
                <label class="checkbox-inline"><input type="checkbox" ng-model="xkcd.specialsymbol" value="">Special Symbol</label>
            </div>
            <button type='submit' class="btn btn-primary" ng-disabled="xkcd.num < 3 || xkcd.num > 20">Generate</button>
        </form>
    </div>
</div>

<div ng-show="xkcd.password" class="panel-group panel-info">
    <div class="panel-heading">Password</div>
    <div class="panel-body">
        @{{ xkcd.password }}
    </div>
</div>
