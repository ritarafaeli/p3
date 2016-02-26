<style type="text/css">
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

<form role="form" ng-submit="generateUsers()">
    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
    Number of Users: <input type='number' name='num' ng-model='num'><br/>
    <label>Birthday: <input type='checkbox' name='birthday' ng-model='birthday'></label><br/>
    <label>Profile: <input type='checkbox' name='profile' ng-model='profile'></label><br/>
    <button type='submit'>Generate</button>
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
        </table>
    <!--</div>-->
</div>