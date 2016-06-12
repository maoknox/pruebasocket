var pg = require('pg');
var conString = "postgres://postgres:root@localhost:5432/pruebaheroku";

var client = new pg.Client(conString);
client.connect();

//queries are queued and executed one after another once the connection becomes available
var x = 5;

while(x>0)
{
client.query("INSERT INTO prueba(texto) values($1)", [x]);
x = x - 1;
}

var query = client.query("SELECT * FROM prueba");
//fired after last row is emitted

query.on('row', function(row) {
  console.log(row);
});

query.on('end', function() { 
  client.end();
});