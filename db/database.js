/*const mysql = require('mysql');

var exports = {};
var connection = null;

exports.createConnection = function() {
    connection = mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: '',
        database: 'aiwuser'
    });
    connection.connect((err) => {
        if (err) throw err;
        console.log('Connected to DB');
    });
};

module.exports = exports;

//checks the user and password from the database 
exports.checkLoginEntry = function(name, email) {
    connection.query('SELECT * FROM `login` WHERE `name`=? AND `email`=?', [name.toUpperCase(), email], (err, results, fields) => {
        if (err) throw err;
        if (results.length == 0) return completeWithStatus(404);
        else return completeWithStatus(200);
    });
};*/
var Connection = require('tedious').Connection;
var Request = require('tedious').Request;

// Create connection to database
var config = 
   {
     userName: 'Mansukhp96', // update me
     password: 'Tempest96', // update me
     server: 'okomiko.database.windows.net', // update me
     options: 
        {
           database: 'paperEval' //update me
           , encrypt: true
        }
   }
var connection = new Connection(config);

// Attempt to connect and execute queries if connection goes through
connection.on('connect', function(err) 
   {
     if (err) 
       {
          console.log(err)
       }
    else
       {
           queryDatabase()
       }
   }
 );
