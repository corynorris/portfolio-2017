let express = require('express');
let bodyParser = require('body-parser');
let Mailgun = require('mailgun-js');

let app = express();
app.set('port', (process.env.PORT || 8080));
app.set('api_key', (process.env.API_KEY));
app.set('domain', (process.env.DOMAIN));
app.set('from', (process.env.FROM));
app.set('view engine', 'ejs');

// css, js, etc
app.use(express.static('public', { maxAge: '1m' }));
app.use(bodyParser.json()); // to support JSON-encoded bodies
app.use(bodyParser.urlencoded({ // to support URL-encoded bodies
  extended: true,
}));
// welcome page
app.get('/', (req, res) => {
  res.render('pages/index', {
    page: 'homepage',
  });
});

// portfolio page
app.get('/portfolio', (req, res) => {
  res.render('pages/portfolio', {
    page: 'portfolio',
  });
});

// resume page
app.get('/resume', (req, res) => {
  res.render('pages/resume', {
    page: 'resume',
  });
});

// contact page
app.get('/contact', (req, res) => {
  res.render('pages/contact', {
    page: 'contact',
  });
});

function emailBody(name, email, message) {
  return `
    From: ${name} (${email})
    ${message}
  `;
}

// email
app.post('/contact', (req, res) => {
  let mailgun = new Mailgun({ apiKey: app.get('api_key'), domain: app.get('domain') });

  let data = {
    from: app.get('from'),
    to: 'corynorris@gmail.com',
    subject: 'Contact Form Email',
    text: emailBody(req.body.name, req.body.email, req.body.message),
  };

  mailgun.messages().send(data, (err, body) => {
    if (err) {
      res.render('pages/contact', {
        page: 'contact',
        message: 'There was an error sending your email. Please try again.',
      });
    } else {
      res.render('pages/contact', {
        page: 'contact',
        message: 'Your email has been sucessfully sent.',
      });
    }
  });
});


app.listen(app.get('port'), () => {
  console.log('Node app is running at localhost:' + app.get('port'));
});
