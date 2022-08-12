import {
  initializeApp
} from "https://www.gstatic.com/firebasejs/9.8.3/firebase-app.js";

import {
  signOut,
} from 'https://www.gstatic.com/firebasejs/9.8.3/firebase-auth.js';

const firebaseConfig = {
  apiKey: "AIzaSyC_dqvw25UbyU9jJwgO5B8ggBh1GrduTUQ",
  authDomain: "tanihara-89c0b.firebaseapp.com",
  projectId: "tanihara-89c0b",
  storageBucket: "tanihara-89c0b.appspot.com",
  messagingSenderId: "1065862819020",
  appId: "1:1065862819020:web:3df9b439b1cb8c288a6669",
  measurementId: "G-5907YN4WXX"
};
//initialize firebase config
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

// SignOut
window.signOut = function() {
  //import signOut
  const auth = getAuth();
  signOut(auth).then(() => {
      // Sign-out successful.
      alert('Sign-out successful')
  }).catch((error) => {
      // An error happened.
      alert(error.message)
  });
}

