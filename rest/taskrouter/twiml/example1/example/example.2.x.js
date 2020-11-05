// Download the Node helper library from twilio.com/docs/node/install
// These vars are your accountSid and authToken from twilio.com/user/account
const twilio = require('twilio');
const express = require('express');
const app = express();

app.post('/enqueue_call', (request, response) => {
  const resp = new twilio.TwimlResponse();
  resp.enqueue({ workflowSid: 'WW0123456789abcdef0123456789abcdef' });

  response.setHeader('Content-Type', 'application/xml');
  response.write(resp.toString());
  response.end();
});

app.listen(8080);