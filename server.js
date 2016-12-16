var express = require('express')
var bodyParser = require('body-parser')
var Mailgun = require('mailgun-js')

var app = express()
app.set('port', (process.env.PORT || 8080))
app.set('api_key', (process.env.API_KEY ))
app.set('domain', (process.env.DOMAIN))
app.set('from', (process.env.FROM))
app.set('view engine', 'ejs');

// css, js, etc
app.use(express.static('public', { maxAge: '1m' }))
app.use(bodyParser.json()); // to support JSON-encoded bodies
app.use(bodyParser.urlencoded({ // to support URL-encoded bodies
  extended: true
}));
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

function emailBody(name, email, message) {
  return `
    From: ${name} (${email})
    ${message}
  `;
}

// email
app.post('/contact', function(req, res) {
  var mailgun = new Mailgun({apiKey: app.get('api_key'), domain: app.get('domain')});

  var data = {
    from: app.get('from'),
    to: 'corynorris@gmail.com',
    subject: 'Contact Form Email',
    text: emailBody(req.body.name, req.body.email, req.body.message)
  };

  mailgun.messages().send(data, function(err, body) {
    if (err) {
      res.render('pages/contact', {
        page: 'contact',
        message: 'There was an error sending your email. Please try again.'
      });
    } else {
      res.render('pages/contact', {
        page: 'contact',
        message: 'Your email has been sucessfully sent.'
      });
    }
  })

});



app.listen(app.get('port'), function() {
  console.log("Node app is running at localhost:" + app.get('port'))
})
