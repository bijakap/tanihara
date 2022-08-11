    //import the initializeApp
    import {
      initializeApp
  } from "https://www.gstatic.com/firebasejs/9.8.3/firebase-app.js";
  //import the getAuth, RecaptchaVerifier & signInWithPhoneNumber
  import {
      getAuth,
      RecaptchaVerifier,
      signInWithPhoneNumber,
      signOut
  } from 'https://www.gstatic.com/firebasejs/9.8.3/firebase-auth.js';
  //replace this section with the firebase config object from your firebase console
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
  //authenticate app communication to firebase
  const auth = getAuth(app);
  auth.languageCode = 'en';
  window.onload = function() {
      render();
  };