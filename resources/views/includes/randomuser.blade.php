<style type="text/css">
    .error {
        color:red;
    }
    table {
        font-family:Arial;
        color:#666;
        font-size:12px;
        background:#eaebec;
        margin:20px;
        border:#ccc 1px solid;
        border-radius:3px;
        box-shadow: 0 1px 2px #d1d1d1;
    }
    table tr td:first-of-type{
        width: 100px;
    }
    table tr {
        text-align: left;
    }
    table td {
        text-align: left;
    }
</style>
<p>Please fill out the below form to generate random user data:</p>
<form role="form" ng-submit="generateUsers()">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    <div class='form-group'>
        <label>Number of Users:</label>
        <input type='number' name='num' ng-model='num'>  <div class='error'>@{{ errors.num[0] }}</div>
    </div>
    <div class='form-group'>
        <label>Birthday:
            <input type='checkbox' name='birthday' ng-model='birthday'>
        </label>
    </div>
    <div class='form-group'>
        <label>Profile:
            <input type='checkbox' name='profile' ng-model='profile'>
        </label>
    </div>
    <div class='form-group'>
        <label>Email:
            <input type='checkbox' name='email' ng-model='email'>
        </label>
    </div>
    <button type='submit'>Generate</button>
</form>

<div class='error' ng-show="errors">
    Please correct the form errors above and try again
</div>

<div ng-show="false"> <!-- users != null -->
    <form role="form" ng-submit="downloadRandomUsers()">
        <input type="hidden" value="@{{ $scope.users }}">
        <button type='submit'>Download XLS</button>
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