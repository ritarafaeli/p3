<div class="panel-group panel-primary">
    <div class="panel-heading">User Form</div>
    <div class="panel-body">
        <div class='alert alert-danger' role="alert" ng-show="errors">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            Please correct the form errors below and try again.
        </div>
        <form role="form" ng-submit="generateUsers()">
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <div class='form-group'>
                <label>Number of Users:</label>
                <input type='number' ng-model='num'>
                <div class='error'>@{{ errors.num[0] }}</div>
            </div>
            <div class='form-group'>
                <label>Birthday:
                    <input type='checkbox' ng-model='birthday'>
                </label>
            </div>
            <div class='form-group'>
                <label>Profile:
                    <input type='checkbox' ng-model='profile'>
                </label>
            </div>
            <div class='form-group'>
                <label>Email:
                    <input type='checkbox' ng-model='email'>
                </label>
            </div>
            <button type='submit' class="btn btn-primary">Generate</button>
        </form>
    </div>
</div>



<div ng-show="false"> <!--users != null-->
    <form role="form" ng-submit="downloadRandomUsers()">
        <input type="hidden" value="@{{ $scope.users }}">
        <button type='submit' class="btn">Download XLS</button>
    </form>
</div>

<div ng-repeat="user in users">
    <!--<div class="table-responsive">-->
        <table class="table table-hover" width="300">
            <tr>
                <td>Name</td>
                <td>@{{ user.name }}</td>
            </tr>
            <tr ng-show="user.birthday">
                <td>Birthday</td>
                <td>@{{ user.birthday }}</td>
            </tr>
            <tr ng-show="user.profile">
                <td>Profile</td>
                <td>@{{ user.profile }}</td>
            </tr>
            <tr ng-show="user.email">
                <td>Email</td>
                <td>@{{ user.email }}</td>
            </tr>
        </table>
    <!--</div>-->
</div>