var express = require('express')
var mailer = require('express-mailer');

var app = express()
app.set('port', (process.env.PORT || 8080))
app.set('view engine', 'ejs');

// css, js, etc
app.use(express.static('public'))

// welcome page
app.get('/', function(req, res) {
    res.render('pages/index', {
      page: 'homepage'
    });
});

// portfolio page 
app.get('/portfolio', function(req, res) {
    res.render('pages/portfolio', {
      page: 'portfolio'
    });
});

// resume page 
app.get('/resume', function(req, res) {
    res.render('pages/resume', {
      page: 'resume'
    });
});

// contact page 
app.get('/contact', function(req, res) {
    res.render('pages/contact', {
      page: 'contact'
    });
});


app.listen(app.get('port'), function() {
  console.log("Node app is running at localhost:" + app.get('port'))
})
