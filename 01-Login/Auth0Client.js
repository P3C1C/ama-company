import createAuth0Client from 'node_modules/@auth0/auth0-spa-js';

//with async/await
const auth0 = await createAuth0Client({
  domain: 'dev-tqgpjb8h.us.auth0.com',
  client_id: 'mRllEDNnJFH1VKLYvFG2FDMLN28Nymzq',
  redirect_uri: 'https://127.0.0.1:3000/authorize'
});

//with promises
createAuth0Client({
  domain: 'dev-tqgpjb8h.us.auth0.com',
  client_id: 'mRllEDNnJFH1VKLYvFG2FDMLN28Nymzq',
  redirect_uri: 'https://127.0.0.1:3000/authorize'
}).then(auth0 => {
  //...
});

//or, you can just instantiate the client on it's own
// import { Auth0Client } from '@auth0/auth0-spa-js';

// const auth0 = new Auth0Client({
//   domain: '<AUTH0_DOMAIN>',
//   client_id: '<AUTH0_CLIENT_ID>',
//   redirect_uri: '<MY_CALLBACK_URL>'
// });

//if you do this, you'll need to check the session yourself
// try {
//   await auth0.getTokenSilently();
// } catch (error) {
//   if (error.error !== 'login_required') {
//     throw error;
//   }
// }