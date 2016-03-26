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
                <div class='error' ng-show="num < 1 || num > 500">Number of users must be between 1 and 500.</div>
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
            <button type='submit' class="btn btn-primary" ng-disabled="num < 1 || num > 500">Generate</button>
        </form>
    </div>
</div>


<div ng-show="users" class="panel-group panel-info">
    <div class="panel-heading">Users</div>
    <div class="panel-body">
        <form role="form" ng-submit="downloadRandomUsers()">
            <button type='submit' class="btn">
                <span class="glyphicon glyphicon-save-file"></span> CSV
            </button>
        </form>
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
    </div>
</div>