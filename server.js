var express = require('express')
var app = express()

app.set('port', (process.env.PORT || 5000))
app.set('view engine', 'ejs');

// welcome page
app.get('/', function(req, res) {
    res.render('resources/index');
});

// about page 
app.get('/about', function(req, res) {
    res.render('pages/about');
});

// contact page 
app.get('/contact', function(req, res) {
    res.render('pages/contact');
});

// portfolio page 
app.get('/portfolio', function(req, res) {
    res.render('pages/portfolio');
});

app.listen(app.get('port'), function() {
  console.log("Node app is running at localhost:" + app.get('port'))
})
