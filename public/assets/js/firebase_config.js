// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.2/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.2/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries


// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyC_dqvw25UbyU9jJwgO5B8ggBh1GrduTUQ",
  authDomain: "tanihara-89c0b.firebaseapp.com",
  projectId: "tanihara-89c0b",
  storageBucket: "tanihara-89c0b.appspot.com",
  messagingSenderId: "1065862819020",
  appId: "1:1065862819020:web:3df9b439b1cb8c288a6669",
  measurementId: "G-5907YN4WXX"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);