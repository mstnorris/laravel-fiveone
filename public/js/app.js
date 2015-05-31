new Vue({
    el: '#demo',

    data: {
        sortKey: '',
        search: '',
        reverse: false,
        columns: [
            'name',
            'email',
            'age'
        ],
        people: [
            { name: 'Abigail', email: 'abi@gmail.com', age: 17 },
            { name: 'Freddie', email: 'fred2001@gmail.com', age: 48 },
            { name: 'Hannah', email: 'hanman20@hotmail.com', age: 42 },
            { name: 'Susan', email: 'test@gmail.com', age: 40 },
            { name: 'Charlie', email: 'test@gmail.com', age: 31 },
            { name: 'Carol', email: 'test@gmail.com', age: 30 },
            { name: 'Harry', email: 'test@gmail.com', age: 29 },
            { name: 'John', email: 'test@gmail.com', age: 18 },
            { name: 'Amanda', email: 'test@gmail.com', age: 17 },
            { name: 'Freddie', email: 'test@gmail.com', age: 28 },
            { name: 'Jane', email: 'test@gmail.com', age: 27 },
            { name: 'Aaron', email: 'test@gmail.com', age: 24 },
            { name: 'Neil', email: 'test@gmail.com', age: 22 },
            { name: 'David', email: 'test@gmail.com', age: 25 },
            { name: 'Nick', email: 'test@gmail.com', age: 37 },
            { name: 'Holly', email: 'test@gmail.com', age: 39 },
            { name: 'Michael', email: 'test@gmail.com', age: 19 },
            { name: 'James', email: 'test@gmail.com', age: 18 },
            { name: 'Stephen', email: 'test@gmail.com', age: 26 },
            { name: 'Teresa', email: 'test@gmail.com', age: 28 },
            { name: 'Steve', email: 'test@gmail.com', age: 54 },
            { name: 'Tony', email: 'test@gmail.com', age: 36 },
            { name: 'Peter', email: 'test@gmail.com', age: 24 },
            { name: 'Patrick', email: 'test@gmail.com', age: 34 }
        ]
    },

    methods: {
        sortBy: function(sortKey) {
            this.reverse = (this.sortKey == sortKey) ? ! this.reverse : false;
            this.sortKey = sortKey;
        }
    }
});