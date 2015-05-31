<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FiveOne</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
</head>
<body>
<div id="demo" class="container">
    <div class="row">
        <input type="text" placeholder="Search" v-model="search" class="form-control">
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th v-repeat="column: columns">
                    <a  href="#"
                        v-on="click: sortBy(column)"
                        v-class="active: sortKey == column">
                        @{{ column | capitalize }}
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-repeat="
                    people
                    | filterBy search
                    | orderBy sortKey reverse">
                <td>@{{ name }}</td>
                <td>@{{ email }}</td>
                <td>@{{ age }}</td>


            </tr></tbody>
        </table>
    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.10/vue.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>