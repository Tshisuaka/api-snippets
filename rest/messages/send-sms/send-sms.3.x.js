// Twilio Credentials
const accountSid = 'ACf4b3e183d4a765541c213a0aff06aca1';
const authToken = 'f2cbdc903a9f8f83a5b9f042675bfd1d';

// require the Twilio module and create a REST client
const client = require('twilio')(accountSid, authToken);

client.messages
  .create({
    to: '+243 815 507 882',
    from: '+15017122661',
    body: 'ceci est un message d'essai envoyer par Daniel Tshisuaka',
  })
  .then(message => console.log(message.sid));
